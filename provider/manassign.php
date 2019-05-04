<?php
/**
 * Created by PhpStorm.
 * User: Karim K. Kanji
 * Date: 14/04/2019
 * Time: 11:24
 */
$conn=new mysqli("localhost","root","","emergency_response");
if(isset($_GET['type'])&&isset($_GET['hp'])&&isset($_GET['id'])&&isset($_GET['mandir'])) {
    $type = $_GET['type'];
    $hp = $_GET['hp'];
    $id = $_GET['id'];
    $dir = $_GET['mandir'];
    switch ($type) {
        case 'fire':$sqlupdate = "UPDATE user_request_fire SET id_fire_engine_information = '$id', assigned = 'yes' WHERE help_code='$hp'";break;
        case 'paramedics':$sqlupdate = "UPDATE user_request_paramedics SET id_paramedics_information = '$id', assigned = 'yes' WHERE help_code='$hp'";break;
        case 'rescue':$sqlupdate = "UPDATE user_request_rescue SET id_rescue_information = '$id', assigned = 'yes' WHERE help_code='$hp'";break;
        default:die("The type defined is not valid");
    }
    $resultmatch = $conn->query($sqlupdate);
    if($resultmatch===true){
        echo "<br><div class='text-success'><b>".$hp."</b> has been assigned</div>";
        echo "<br><br><a class='btn btn-success' href='map-manual.php?helpcode=".$hp."&dir=".$dir."' target='_blank'>Go to map</a>";
    }
    else{
        echo "Unable to assign you a case";
    }
}
else{
    echo "<div class='text-danger'>The required variables have not been set</div>";
}