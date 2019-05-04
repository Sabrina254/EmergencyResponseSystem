<?php
/**
 * Created by PhpStorm.
 * User: Karim K. Kanji
 * Date: 25/02/2019
 * Time: 12:06
 */
require '../db_connection.php';
$user = $_GET['phone'];
$manual = $_GET['manual'];
$type = $_GET['type'];
$userid = '';
$globalRand = '';
$getuserid = "SELECT id_user_information from user_information where user_information_phone_number='$user'";
$result = $conn->query($getuserid);
if ($result->num_rows > 0) {
    $random = rand(00000, 99999);
    while ($row = $result->fetch_assoc()) {
        $userid = $row['id_user_information'];
    }
    switch ($type) {
        case 'medical':
            $random = 'M' . $random;
            $globalRand = $random;
            $randCheck = "SELECT help_code FROM user_request_paramedics WHERE help_code = '$random'";
            $resultrandcheck = $conn->query($randCheck);
            if ($resultrandcheck->num_rows == 0) {
                $sql = "INSERT INTO user_request_paramedics (request_manual, user_request_longitude, user_request_latitude, user_information_id_user_information, user_request_time_stamp,request_details_manual,help_code) VALUES ('yes', NULL, NULL, '$userid', NOW(),'$manual','$random')";
                if ($conn->query($sql) === true) {
                    echo "
<div class=\"container\" style=\"margin-top:20px\">
<div style=\"text-align: center;\"><h1 style=\"position: -webkit-sticky; position: sticky; top:0\">Emergency Response</h1><img src=\"image.png\" height=\"250px\" alt=\"Location pin\"></div>
    <h1 style=\"text-align: center;\"><span class=\"badge badge-success\">Help is on the way!</span></h1>
    <div class=\"row\">
        <div class=\"mx-auto\" style=\"margin-top:10px\">
            <h1>Your Help Code:</h1>
            <h1 style=\"text-align: center;\" class=\"text-success\" id=\"number_identifier\">$globalRand</h1>
            <center><button class='btn btn-warning' onclick='tracker(\"".$globalRand."\")'>Track your request</button></center>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"mx-auto col-lg-6 text-danger\" style=\"margin-top:100px\">
            Don't move too far from your location. Show the code to the emergency service provider for quick assistance.
        </div>
    </div>
    <nav class=\"fixed-bottom navbar\">
        <a href=\"index7.html\" class=\"btn btn-primary btn-block\">FIRST AID</a>
    </nav>
</div>
";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            };
            break;
        case 'fire':
            $random = 'F' . $random;
            $globalRand = $random;
            $randCheck = "SELECT help_code FROM user_request_fire WHERE help_code = '$random'";
            $resultrandcheck = $conn->query($randCheck);
            if ($resultrandcheck->num_rows == 0) {
                $sql = "INSERT INTO user_request_fire(request_manual, user_request_longitude, user_request_latitude, user_information_id_user_information, user_request_time_stamp, user_request_fire_status,  request_details_manual,help_code) VALUES ('yes', NULL, NULL, '$userid',NOW(), NULL,'$manual','$random')";
                if ($conn->query($sql) === true) {
                    echo "
<div class=\"container\" style=\"margin-top:20px\">
<div style=\"text-align: center;\"><h1 style=\"position: -webkit-sticky; position: sticky; top:0\">Emergency Response</h1><img src=\"image.png\" height=\"250px\" alt=\"Location pin\"></div>
    <h1 style=\"text-align: center;\"><span class=\"badge badge-success\">Help is on the way!</span></h1>
    <div class=\"row\">
        <div class=\"mx-auto\" style=\"margin-top:10px\">
            <h1>Your Help Code:</h1>
            <h1 style=\"text-align: center;\" class=\"text-success\" id=\"number_identifier\">$globalRand</h1>
            <center><button class='btn btn-warning' onclick='tracker(\"".$globalRand."\")'>Track your request</button></center>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"mx-auto col-lg-6 text-danger\" style=\"margin-top:100px\">
            Don't move too far from your location. Show the code to the emergency service provider for quick assistance.
        </div>
    </div>
    <nav class=\"fixed-bottom navbar\">
        <a href=\"index7.html\" class=\"btn btn-primary btn-block\">FIRST AID</a>
    </nav>
</div>
";
                }
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            };
            break;
        case 'natural':
            $random = 'N' . $random;
            $globalRand = $random;
            $randCheck = "SELECT help_code FROM user_request_rescue WHERE help_code = '$random'";
            $resultrandcheck = $conn->query($randCheck);
            if ($resultrandcheck->num_rows == 0) {
                $sql = "INSERT INTO user_request_rescue(request_manual, user_request_longitude, user_request_latitude, user_information_id_user_information, user_request_time_stamp, user_request_rescue_status, request_details_manual,help_code) VALUES ('yes', NULL, NULL, '$userid', NOW(), NULL, '$manual','$random')";
                if ($conn->query($sql) === true) {
                    echo "
<div class=\"container\" style=\"margin-top:20px\">
<div style=\"text-align: center;\"><h1 style=\"position: -webkit-sticky; position: sticky; top:0\">Emergency Response</h1><img src=\"image.png\" height=\"250px\" alt=\"Location pin\"></div>
    <h1 style=\"text-align: center;\"><span class=\"badge badge-success\">Help is on the way!</span></h1>
    <div class=\"row\">
        <div class=\"mx-auto\" style=\"margin-top:10px\">
            <h1>Your Help Code:</h1>
            <h1 style=\"text-align: center;\" class=\"text-success\" id=\"number_identifier\">$globalRand</h1>
            <center><button class='btn btn-warning' onclick='tracker(\"".$globalRand."\")'>Track your request</button></center>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"mx-auto col-lg-6 text-danger\" style=\"margin-top:100px\">
            Don't move too far from your location. Show the code to the emergency service provider for quick assistance.
        </div>
    </div>
    <nav class=\"fixed-bottom navbar\">
        <a href=\"index7.html\" class=\"btn btn-primary btn-block\">FIRST AID</a>
    </nav>
</div>
";
                }
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            };
            break;
        default:
            ;
            break;
    }
} else {
    echo "The user is unknown!";
}

