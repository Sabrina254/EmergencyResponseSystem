<?php
/**
 * Created by PhpStorm.
 * User: Karim K. Kanji
 * Date: 14/04/2019
 * Time: 11:24
 */
$conn=new mysqli("localhost","root","","emergency_response");
if(isset($_GET['username'])&&isset($_GET['hp'])) {
    $username = $_GET['username'];
    $hp = $_GET['hp'];
    $sqlfi="SELECT id FROM fire_engine_information WHERE uname='$username'";
    $sqlpi="SELECT id FROM paramedics_information WHERE uname='$username'";
    $sqlrti="SELECT id FROM rescue_team_information WHERE uname='$username'";
    $resultfi=$conn->query($sqlfi);
    $resultpi=$conn->query($sqlpi);
    $resultrti=$conn->query($sqlrti);
    if($resultfi->num_rows>0){
        while($row=$resultfi->fetch_assoc()) {
            $id=$row['id'];
            switch ($hp[0]) {
                case 'M':
                    $code ="UPDATE user_request_paramedics SET id_paramedics_information ='$id', assigned = 'yes' WHERE help_code='$hp'";
                    break;
                case 'F':
                    $code = "UPDATE user_request_fire SET id_fire_engine_information ='$id', assigned = 'yes' WHERE help_code='$hp'";
                    break;
                case 'N':
                    $code = "UPDATE user_request_rescue SET id_rescue_information ='$id', assigned = 'yes' WHERE help_code='$hp'";
                    break;
                default:
                    $type = "Unknown";
                    break;
            }
        }
    }
    else{
        if($resultpi->num_rows>0){
            while($row=$resultpi->fetch_assoc()) {
                $id = $row['id'];
                switch ($hp[0]) {
                    case 'M':
                        $code ="UPDATE user_request_paramedics SET id_paramedics_information ='$id', assigned = 'yes' WHERE help_code='$hp'";
                        break;
                    case 'F':
                        $code = "UPDATE user_request_fire SET id_fire_engine_information ='$id', assigned = 'yes' WHERE help_code='$hp'";
                        break;
                    case 'N':
                        $code = "UPDATE user_request_rescue SET id_rescue_information ='$id', assigned = 'yes' WHERE help_code='$hp'";
                        break;
                    default:
                        $type = "Unknown";
                        break;
                }
            }
        }
        else{
            if($resultrti->num_rows>0){
                while($row=$resultrti->fetch_assoc()) {
                    $id = $row['id'];
                    switch ($hp[0]) {
                        case 'M':
                            $code ="UPDATE user_request_paramedics SET id_paramedics_information ='$id', assigned = 'yes' WHERE help_code='$hp'";
                            break;
                        case 'F':
                            $code = "UPDATE user_request_fire SET id_fire_engine_information ='$id', assigned = 'yes' WHERE help_code='$hp'";
                            break;
                        case 'N':
                            $code = "UPDATE user_request_rescue SET id_rescue_information ='$id', assigned = 'yes' WHERE help_code='$hp'";
                            break;
                        default:
                            $type = "Unknown";
                            break;
                    }
                }
            }
        }
    }

    $resultmatch = $conn->query($code);
    if($resultmatch===true){
        echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'></button><b>".$hp."</b> has been assigned</div>";
    }
    else{
        echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'></button>Unable to assign the case".$conn->error."</div>";
    }
}
else{
    echo "<div class='text-danger'>The required variables have not been set</div>";
}