<?php
/**
 * Created by PhpStorm.
 * User: Karim K. Kanji
 * Date: 12/03/2019
 * Time: 07:07
 */
$conn=new mysqli("localhost","root","","emergency_response");
if(isset($_GET['action'])) {
    $action = $_GET['action'];
    $userid = $_GET['userid'];
    switch ($action) {
        case 'delete':
            $sql = "UPDATE user_information SET user_state='deleted' WHERE id_user_information = '$userid'";
            $result = $conn->query($sql);
            if($result===true){
                echo 'success';
            }
            else{
                echo 'failure';
            }
            break;
        case 'block':
            $sql = "UPDATE user_information SET user_state='blocked' WHERE id_user_information = '$userid'";
            $result = $conn->query($sql);
            if($result===true){
                echo 'success';
            }
            else{
                echo 'failure';
            }
            break;
        ;break;
        default:;break;
    }
}