<?php
/**
 * Created by PhpStorm.
 * User: Karim K. Kanji
 * Date: 19/03/2019
 * Time: 09:57
 */
$conn=new mysqli("localhost","root","","emergency_response");
if(isset($_GET['type'])&&isset($_GET['lat'])&&isset($_GET['long'])&&isset($_GET['id'])){
    $type =  $_GET['type'];
    $lat = $_GET['lat'];
    $long= $_GET['long'];
    $id = $_GET['id'];
    switch ($type){
        case 'fire':$sql = "SELECT * FROM user_request_fire WHERE assigned IS NULL";
            $sqlmatch="SELECT * FROM user_request_fire WHERE user_request_longitude IS NOT NULL AND user_request_latitude IS NOT NULL  AND complete IS NULL AND assigned IS NULL ORDER BY user_request_time_stamp ASC,(ABS(user_request_longitude - '$long' ) AND ABS(user_request_latitude-'$lat')) LIMIT 1";
            break;
        case 'paramedics':$sql = "SELECT * FROM user_request_paramedics WHERE assigned IS NULL";
            $sqlmatch="SELECT * FROM user_request_paramedics WHERE user_request_longitude IS NOT NULL AND user_request_latitude IS NOT NULL AND complete IS NULL AND assigned IS NULL ORDER BY user_request_time_stamp ASC,(ABS(user_request_longitude - '$long' ) AND ABS(user_request_latitude-'$lat')) LIMIT 1";
        break;
        case 'rescue':$sql = "SELECT * FROM user_request_rescue WHERE assigned IS NULL";
            $sqlmatch="SELECT * FROM user_request_rescue WHERE user_request_longitude IS NOT NULL AND user_request_latitude IS NOT NULL AND complete IS NULL AND assigned IS NULL ORDER BY user_request_time_stamp ASC,(ABS(user_request_longitude - '$long' ) AND ABS(user_request_latitude-'$lat')) LIMIT 1";
        break;
        default: die("The type defined is not valid");
    }
    if(($conn->query($sql))->num_rows>0){
        echo "<br>We are assigning you!<br>";
        $result = $conn -> query($sqlmatch);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $userid = $row['user_information_id_user_information'];
                $reqid = $row['id_user_request'];
                switch ($type) {
                case 'fire':$sqlupdate = "UPDATE user_request_fire SET id_fire_engine_information = '$id', assigned = 'yes' WHERE user_request_fire.id_user_request = '$reqid' AND user_request_fire.user_information_id_user_information = '$userid'";break;
                case 'paramedics':$sqlupdate = "UPDATE user_request_paramedics SET id_paramedics_information = '$id', assigned = 'yes' WHERE user_request_paramedics.id_user_request = '$reqid' AND user_request_paramedics.user_information_id_user_information = '$userid'";break;
                case 'rescue':$sqlupdate = "UPDATE user_request_rescue SET id_rescue_information = '$id', assigned = 'yes' WHERE user_request_rescue.id_user_request = '$reqid' AND user_request_rescue.user_information_id_user_information = '$userid'";break;
                    default:die("The type defined is not valid");
                }
                $resultmatch = $conn->query($sqlupdate);
                if($resultmatch===true){
                    $helpcode = $row['help_code'];
                    $long = $row['user_request_longitude'];
                    $lat = $row['user_request_latitude'];
                    echo "<br><b>".$row['help_code']."</b> has been assigned";
                    echo "<br><br><a class='btn btn-success' href='map.php?helpcode=".$helpcode."&long=".$long."&lat=".$lat."' target='_blank'>Go to map</a>";
                }
                else{
                    echo "Unable to assign you a case";
                }
            }
        }
        else{
            echo "<div class='text-warning'>Please wait as we load manually provides location cases. There may not be any case to select from.</div>";
            switch ($type){
                case 'fire':$sql = "SELECT * FROM user_request_fire WHERE assigned IS NULL";
                    $sqlmatch="SELECT * FROM user_request_fire WHERE user_request_longitude IS NULL AND user_request_latitude IS NULL AND complete IS NULL AND assigned IS NULL ORDER BY user_request_time_stamp ASC";
                    break;
                case 'paramedics':$sql = "SELECT * FROM user_request_paramedics WHERE assigned IS NULL";
                    $sqlmatch="SELECT * FROM user_request_paramedics WHERE user_request_longitude IS NULL AND user_request_latitude IS NULL AND complete IS NULL AND assigned IS NULL ORDER BY user_request_time_stamp ASC";
                    break;
                case 'rescue':$sql = "SELECT * FROM user_request_rescue WHERE assigned IS NULL";
                    $sqlmatch="SELECT * FROM user_request_rescue WHERE user_request_longitude IS NULL AND user_request_latitude IS NULL AND complete IS NULL AND assigned IS NULL ORDER BY user_request_time_stamp ASC";
                    break;
                default: die("The type defined is not valid");
            }
            $result = $conn -> query($sqlmatch);
            if($result->num_rows>0){
                echo "<br><table><tr><th>Help code</th><th>Directions</th><th>Action</th></tr>";
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>".$row['help_code']."</td><td>".$row['request_details_manual']."</td><td><button class='btn btn-primary dis-row'  onclick='manassign(this.id,\"".$row['help_code']."\",\"".$row['request_details_manual']."\")' id='btn-".$row['help_code']."'>Select</button></td></tr>";
                }
            }
            else{
                echo "<div class='text-danger'>No manually provided direction case that can be selected and assigned!</div>";
            }
        }
    }
    else{
        echo "<div class='text-warning'>There is no one in the queue currently! Please check after some time!</div>";
    }
}
