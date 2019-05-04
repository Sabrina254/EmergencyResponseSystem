<?php
/**
 * Created by PhpStorm.
 * User: Karim K. Kanji
 * Date: 04/03/2019
 * Time: 16:55
 */
$conn=new mysqli("localhost","root","","emergency_response");
if(isset($_GET['action'])){
    $action = $_GET['action'];
    switch ($action){
        case 'queue':
            $sql = "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp,assigned,request_manual, request_details_manual FROM user_request_rescue WHERE assigned is NULL AND `complete` is NULL\n"

                . "UNION ALL\n"

                . "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned ,request_manual, request_details_manual FROM user_request_paramedics WHERE assigned is NULL AND `complete` is NULL\n"

                . "UNION ALL\n"

                . "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned ,request_manual, request_details_manual FROM user_request_fire\n"

                . "WHERE assigned is NULL AND `complete` is NULL\n"

                . "ORDER BY `user_request_time_stamp` ASC";
            $result=$conn->query($sql);
            if($result->num_rows>0) {
                echo '<div class="card"><div class="table-responsive">
                                    <table class="table card-table table-hover table-vcenter text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>TimeStamp</th>
                                        <th>UserID</th>
                                        <th>Longitude</th>
                                        <th>Latitude</th>
                                        <th>Type of Emergency</th>
                                        <th>Help code</th>
                                        <th>Manual Directions</th>
                                    </tr>
                                    </thead>
                                    <tbody>';
                while ($row=$result->fetch_assoc()){
                    $long=$row['user_request_longitude']!=''?$row['user_request_longitude']:'n/a';
                    $lat =$row['user_request_latitude']!=''?$row['user_request_latitude']:'n/a';
                    $man =$row['request_manual']=='yes'?$row['request_details_manual']:'n/a';
                    $hp = $row['help_code'];
                    if($hp!=''){
                    switch ($hp[0]) {
                        case 'M':
                            $type = "Medical";
                            break;
                        case 'F':
                            $type = "Fire";
                            break;
                        case 'N':
                            $type = "Natural Disaster";
                            break;
                        default:
                            $type = "Unknown";
                            break;
                    }
                    }
                    else{
                        $type = "Unknown";
                    }

                    echo "<tr onclick='highlight(this.id,\"". $row['help_code']."\")' id='tr-". $row['help_code']."' ><td>". $row['user_request_time_stamp']."</td><td>". $row['user_information_id_user_information']."</td><td>".$long."</td><td>".$lat."</td><td>".$type."</td><td>". $row['help_code']."</td><td>".$man."</td></tr>";
                }
                echo '</tbody></table></div></div>';
            }
            else{
                echo '<div class="alert alert-warning">No data available</div>';
            }
            ;break;
        case 'attend':
            $sql = "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp,assigned,request_manual, request_details_manual,complete FROM user_request_rescue WHERE assigned is NOT NULL AND `complete` is NULL UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned,request_manual, request_details_manual,complete FROM user_request_paramedics WHERE assigned is NOT NULL AND `complete` is NULL UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned, request_manual, request_details_manual,complete FROM user_request_fire WHERE assigned is NOT NULL AND `complete` is NULL ORDER BY `user_request_time_stamp` ASC";

            $result=$conn->query($sql);
            if($result->num_rows>0) {
                echo ' <div class="card"><div class="table-responsive">
                                    <table class="table card-table table-hover table-vcenter text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>TimeStamp</th>
                                        <th>UserID</th>
                                        <th>Longitude</th>
                                        <th>Latitude</th>
                                        <th>Type of Emergency</th>
                                        <th>Help code</th>
                                        <th>Manual Directions</th>
                                    </tr>
                                    </thead>
                                    <tbody>';
                while ($row=$result->fetch_assoc()){
                    $long=$row['user_request_longitude']!=''?$row['user_request_longitude']:'n/a';
                    $lat =$row['user_request_latitude']!=''?$row['user_request_latitude']:'n/a';
                    $man =$row['request_manual']=='yes'?$row['request_details_manual']:'n/a';
                    $hp = $row['help_code'];
                    if($hp!=''){
                        switch ($hp[0]) {
                            case 'M':
                                $type = "Medical";
                                break;
                            case 'F':
                                $type = "Fire";
                                break;
                            case 'N':
                                $type = "Natural Disaster";
                                break;
                            default:
                                $type = "Unknown";
                                break;
                        }
                    }
                    else{
                        $type = "Unknown";
                    }
                    echo "<tr><td>". $row['user_request_time_stamp']."</td><td>". $row['user_information_id_user_information']."</td><td>".$long."</td><td>".$lat."</td><td>".$type."</td><td>". $row['help_code']."</td><td>".$man."</td></tr>";
                }
                echo '</tbody></table></div></div>';
            }
            else{
                echo '<div class="alert alert-warning">No data available</div>';
            }
            ;break;
        case 'success':
            $sql = "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp,assigned,complete,request_manual, request_details_manual FROM user_request_rescue WHERE assigned is NOT NULL AND complete='success' UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned ,complete,request_manual, request_details_manual FROM user_request_paramedics WHERE assigned is NOT NULL AND complete='success' UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned ,complete,request_manual, request_details_manual FROM user_request_fire WHERE assigned is NOT NULL AND complete='success' ORDER BY user_request_time_stamp ASC";

            $result=$conn->query($sql);
            if($result->num_rows>0) {
                echo '<div class="card"><div class="table-responsive">
                                    <table class="table card-table table-hover table-vcenter text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>TimeStamp</th>
                                        <th>UserID</th>
                                        <th>Longitude</th>
                                        <th>Latitude</th>
                                        <th>Type of Emergency</th>
                                        <th>Help code</th>
                                        <th>Manual Directions</th>
                                    </tr>
                                    </thead>
                                    <tbody>';
                while ($row=$result->fetch_assoc()){
                    $long=$row['user_request_longitude']!=''?$row['user_request_longitude']:'n/a';
                    $lat =$row['user_request_latitude']!=''?$row['user_request_latitude']:'n/a';
                    $man =$row['request_manual']=='yes'?$row['request_details_manual']:'n/a';
                    $hp = $row['help_code'];
                    if($hp!=''){
                        switch ($hp[0]) {
                            case 'M':
                                $type = "Medical";
                                break;
                            case 'F':
                                $type = "Fire";
                                break;
                            case 'N':
                                $type = "Natural Disaster";
                                break;
                            default:
                                $type = "Unknown";
                                break;
                        }
                    }
                    else{
                        $type = "Unknown";
                    }
                    echo "<tr><td>". $row['user_request_time_stamp']."</td><td>". $row['user_information_id_user_information']."</td><td>".$long."</td><td>".$lat."</td><td>".$type."</td><td>". $row['help_code']."</td><td>".$man."</td></tr>";
                }
                echo '</tbody></table></div></div>';
            }
            else{
                echo '<div class="alert alert-warning">No data available</div>';
            }
            ;break;
        case 'fail':
            $sql = "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp,assigned,complete,request_manual, request_details_manual FROM user_request_rescue WHERE assigned is NOT NULL AND complete='fail' UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned ,complete,request_manual, request_details_manual FROM user_request_paramedics WHERE assigned is NOT NULL AND complete='fail' UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned ,complete ,request_manual, request_details_manual FROM user_request_fire WHERE assigned is NOT NULL AND complete='fail' ORDER BY user_request_time_stamp ASC";

            $result=$conn->query($sql);
            if($result->num_rows>0) {
                echo '<div class="card"><div class="table-responsive">
                                    <table class="table card-table table-hover table-vcenter text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>TimeStamp</th>
                                        <th>UserID</th>
                                        <th>Longitude</th>
                                        <th>Latitude</th>
                                        <th>Type of Emergency</th>
                                        <th>Help code</th>
                                        <th>Manual Directions</th>
                                    </tr>
                                    </thead>
                                    <tbody>';
                while ($row=$result->fetch_assoc()){
                    $long=$row['user_request_longitude']!=''?$row['user_request_longitude']:'n/a';
                    $lat =$row['user_request_latitude']!=''?$row['user_request_latitude']:'n/a';
                    $man =$row['request_manual']=='yes'?$row['request_details_manual']:'n/a';
                    $hp = $row['help_code'];
                    if($hp!=''){
                        switch ($hp[0]) {
                            case 'M':
                                $type = "Medical";
                                break;
                            case 'F':
                                $type = "Fire";
                                break;
                            case 'N':
                                $type = "Natural Disaster";
                                break;
                            default:
                                $type = "Unknown";
                                break;
                        }
                    }
                    else{
                        $type = "Unknown";
                    }
                    echo "<tr><td>". $row['user_request_time_stamp']."</td><td>". $row['user_information_id_user_information']."</td><td>".$long."</td><td>".$lat."</td><td>".$type."</td><td>". $row['help_code']."</td><td>".$man."</td></tr>";
                }
                echo '</tbody></table></div></div>';
            }
            else{
                echo '<div class="alert alert-warning">No data available</div>';
            }
            ;break;
            default:;break;
    }
}