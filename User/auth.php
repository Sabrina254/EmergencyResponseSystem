<?php
/**
 * Created by PhpStorm.
 * User: Karim K. Kanji
 * Date: 06/02/2019
 * Time: 11:54
 */
$phone = $_GET['phone'];
$pin = $_GET['pin'];
$conn=new mysqli("localhost","root","","emergency_response");

function unableToConnect($errno, $errstr) {
    echo 2;

}
//set error handler
set_error_handler("unableToConnect");
$message ='';
$sql = "SELECT user_information_phone_number,user_information_pin,user_state FROM user_information WHERE user_information_phone_number = '$phone' && user_state IS NULL";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row=$result->fetch_assoc()){
         $pinenc =$row['user_information_pin'];
        if(password_verify($pin,$pinenc)){
            $message=1;
        }
        else{
            $message=2;
        }
    }
    } else {
    $message=2;
}
if($message==2){
    $sql = "SELECT user_information_phone_number,user_information_pin,user_state FROM user_information WHERE user_information_phone_number = '$phone' && user_information_pin='$pin'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row=$result->fetch_assoc()){
            $pinenc =$row['user_information_pin'];
            if(password_verify($pin,$pinenc)){
                if($row['user_state']==='blocked'){
                    $message=4;
                }
                else if($row['user_state']==='deleted'){
                    $message=3;
                }
            }
            else{
                $message=2;
            }

        }
    }
    else{
        $message =2;
    }
}
switch ($message){
    case 1: echo 1;break;
    case 2: echo 2;break;
    case 3: echo 3;break;
    case 4: echo 4;break;
    default:echo 2;break;
}
$conn->close();