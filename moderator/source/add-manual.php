<?php
$conn=new mysqli("localhost","root","","emergency_response");
$onlinefe= "SELECT id,identifier_number,longitude,latitude,uname,available_assignment,isonline,vehicle_number,provider_type FROM fire_engine_information WHERE isonline='true' && status_approval='approved'";
$onlinepi= "SELECT id,identifier_number,longitude,latitude,uname,available_assignment,isonline,vehicle_number,provider_type  FROM paramedics_information WHERE isonline='true' && status_approval='approved'";
$onlinert= "SELECT id,identifier_number,longitude,latitude,uname,available_assignment,isonline,vehicle_number,provider_type FROM rescue_team_information WHERE isonline='true' && status_approval='approved'";

$result=$conn->query($onlinefe);
if($result->num_rows>0) {
                echo '<h5>Fire Fighters</h5>
                    <div class="card">
                            <table class="table table-responsive table-hover table-outline table-vcenter text-nowrap card-table">
                                    <thead>
                                    <tr>
                                        <th>Provider Id</th>
                                        <th>Identifier Number</th>
                                        <th>Longitude</th>
                                        <th>Latitude</th>
                                        <th>Username</th>
                                        <th>Available </th>
                                        <th>online</th>
                                        <th>Vehicle Number</th></tr>
                                    </thead>
                                    <tbody>';
                                    while ($row=$result->fetch_assoc()){
                                        $idtocheck=$row['id'];
                                        $sqlcheckifassigned = "SELECT * FROM `user_request_fire` WHERE `assigned`='yes' && `complete` is NULL && id_fire_engine_information='$idtocheck'";
                                        $resultcheck = $conn->query($sqlcheckifassigned);
                                        if($resultcheck->num_rows>0){
                                        }
                                        else{
                                            $type = $row['provider_type'];
                                            if($type!=''){
                                                switch ($type[0]) {
                                                    case 'M':
                                                        $type = "fire";
                                                        break;
                                                    case 'F':
                                                        $type = "paramedic";
                                                        break;
                                                    case 'N':
                                                        $type = "rescue team";
                                                        break;
                                                    default:
                                                        $type = "Unknown";
                                                        break;
                                                }
                                            }
                                            else{
                                                $type = "Unknown";
                                            }
                                            echo "<tr onclick='highlightprov(this.id,\"". $row['uname']."\")' id='tr-". $row['uname']."'><td>". $row['id']."</td><td>". $row['identifier_number']."</td><td>".$row['longitude']."</td><td>".$row['latitude']."</td><td>".$row['uname']."</td><td>".$row['available_assignment']."</td><td>".$row['isonline']."</td><td>".$row['vehicle_number']."</td></tr>";
                                        }
                                    }
                                echo '</tbody></table></div></div>';
                            }
else {
    echo '<h5>Fire Fighters</h5><div class="alert alert-warning">No Online Fire fighters available</div>';
}
$result=$conn->query($onlinepi);
if($result->num_rows>0) {
    echo '<h5>Paramedics</h5><div class="card">
                            <table class="table table-responsive table-hover table-outline table-vcenter text-nowrap card-table">
                                    <thead>
                                    <tr>
                                        <th>Provider Id</th>
                                        <th>Identifier Number</th>
                                        <th>Longitude</th>
                                        <th>Latitude</th>
                                        <th>Username</th>
                                        <th>Available </th>
                                        <th>online</th>
                                        <th>Vehicle Number</th>
                                    </tr>
                                    </thead>
                                    <tbody>';
    while ($row=$result->fetch_assoc()) {
        $idtocheck = $row['id'];
        $sqlcheckifassigned = "SELECT * FROM `user_request_paramedics` WHERE `assigned`='yes' && `complete` is NULL && id_paramedics_information='$idtocheck'";
        $resultcheck = $conn->query($sqlcheckifassigned);
        if ($resultcheck->num_rows > 0) {
        } else {
            $type = $row['provider_type'];
            if ($type != '') {
                switch ($type[0]) {
                    case 'M':
                        $type = "fire";
                        break;
                    case 'F':
                        $type = "paramedic";
                        break;
                    case 'N':
                        $type = "rescue team";
                        break;
                    default:
                        $type = "Unknown";
                        break;
                }
            } else {
                $type = "Unknown";
            }

            echo "<tr onclick='highlightprov(this.id,\"" . $row['uname'] . "\")' id='tr-" . $row['uname'] . "'><td>" . $row['id'] . "</td><td>" . $row['identifier_number'] . "</td><td>" . $row['longitude'] . "</td><td>" . $row['latitude'] . "</td><td>" . $row['uname'] . "</td><td>" . $row['available_assignment'] . "</td><td>" . $row['isonline'] . "</td><td>" . $row['vehicle_number'] . "</td></tr>";
        }
    }
    echo '</tbody></table></div></div>';
}
else {
    echo '<h5>Paramedics</h5><div class="alert alert-warning">No Online Paramedics available</div>';
}
$result=$conn->query($onlinert);
if($result->num_rows>0) {
    echo '<h5>Natural Disaster Rescue Team</h5><div class="card">
                            <table class="table table-responsive table-hover table-outline table-vcenter text-nowrap card-table">
                                    <thead>
                                    <tr>
                                        <th>Provider Id</th>
                                        <th>Identifier Number</th>
                                        <th>Longitude</th>
                                        <th>Latitude</th>
                                        <th>Username</th>
                                        <th>Available </th>
                                        <th>online</th>
                                        <th>Vehicle Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
    while ($row=$result->fetch_assoc()) {
        $idtocheck = $row['id'];
        $sqlcheckifassigned = "SELECT * FROM `user_request_rescue` WHERE `assigned`='yes' && `complete` is NULL && id_rescue_information='$idtocheck'";
        $resultcheck = $conn->query($sqlcheckifassigned);
        if ($resultcheck->num_rows > 0) {
        } else {
            $type = $row['provider_type'];
            if ($type != '') {
                switch ($type[0]) {
                    case 'M':
                        $type = "fire";
                        break;
                    case 'F':
                        $type = "paramedic";
                        break;
                    case 'N':
                        $type = "rescue team";
                        break;
                    default:
                        $type = "Unknown";
                        break;
                }
            } else {
                $type = "Unknown";
            }

            echo "<tr onclick='highlightprov(this.id,\"" . $row['uname'] . "\")' id='tr-" . $row['uname'] . "'><td>" . $row['id'] . "</td><td>" . $row['identifier_number'] . "</td><td>" . $row['longitude'] . "</td><td>" . $row['latitude'] . "</td><td>" . $row['uname'] . "</td><td>" . $row['available_assignment'] . "</td><td>" . $row['isonline'] . "</td><td>" . $row['vehicle_number'] . "</td></tr>";
        }
    }
    echo '</tbody></table></div></div>';
}
else {
    echo '<h5>Natural Disaster Rescue Team</h5><div class="alert alert-warning">No Online Natural Disaster Rescue Team available</div>';
}
        