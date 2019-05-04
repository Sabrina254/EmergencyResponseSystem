<?php
if(isset($_GET['type'])&& isset($_GET['id'])){
    $id = $_GET['id'];
    switch($_GET['type']){
        case 'FireFighter':$sql = "UPDATE fire_engine_information SET status_approval='rejected' WHERE status_approval='approved' AND id = '$id'";break;
        case 'Paramedic':$sql = "UPDATE paramedics_information SET status_approval='rejected' WHERE status_approval='approved' AND id = '$id'";break;
        case 'RescueTeam':$sql = "UPDATE rescue_team_information SET status_approval='rejected' WHERE status_approval='approved' AND id = '$id'";break;
    }
}
$conn=new mysqli("localhost","root","","emergency_response");
if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success'><button class='close' data-dismiss='alert'></button>Record updated successfully</div>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 

