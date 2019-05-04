<?php
/**
 * Created by PhpStorm.
 * User: Karim K. Kanji
 * Date: 06/02/2019
 * Time: 15:41
 */
$fname = $_GET['fname'];
$phoneNum = $_GET['phoneNum'];
$pin = password_hash($_GET['pass'],PASSWORD_BCRYPT);
$conn=new mysqli("localhost","root","","emergency_response");

function unableToConnect($errno, $errstr) {
    echo 2;

}
//set error handler
set_error_handler("unableToConnect");
$sqlCheck = "SELECT user_information_phone_number FROM user_information WHERE user_information_phone_number='$phoneNum'";
$result = $conn->query($sqlCheck);

if ($result->num_rows > 0) {
    // output data of each row
    echo 3;
} else {
    $sql = "INSERT INTO user_information(user_information_name,user_information_phone_number, user_information_pin) VALUES ('$fname','$phoneNum','$pin')";

    if ($conn->query($sql)===true) {
        // output data of each row
        echo 1;
    } else {
        echo 2;
    }
}

$conn->close();