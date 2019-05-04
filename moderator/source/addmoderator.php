<?php
/**
 * Created by PhpStorm.
 * User: Karim K. Kanji
 * Date: 12/03/2019
 * Time: 08:41
 */
                    if(isset($_POST['signup'])){
                        if($conn->connect_error){
                            //on failure
                            echo '<div class="alert alert-danger"><button data-dismiss="alert" class="close"></button><b>Failed!</b> There was a problem logging you in. </div>';
                        }
                        else {
                            $stmt = $conn->prepare("INSERT INTO moderator_information(Moderator_information_name, Moderator_information_phone, moderator_email, moderator_username, Moderator_information_pin, ec_id_emergency_categories, level_assignment_id_level_assignment) VALUES (?,?,?,?,?,?,?)");
                            $stmt->bind_param("sssssss", $name, $phone, $email,$username,$pin,$lev,$levass);
                            $name=$_POST['fullname'];
                            $phone=$_POST['phone'];
                            $email=$_POST['email'];
                            $username=$_POST['username'];
                            $pin=password_hash($_POST['pin2'],PASSWORD_BCRYPT);
                            $lev='3';
                            $levass='3';
                            if ($stmt->execute()) {
                                //on success
                                echo '<div class="alert alert-success"><button data-dismiss="alert" class="close"></button><b>Success!</b> Now all you have to do is log in. <a href="./">Click here to log in.</a></div>';

                            } else {
                                //on wrong credentials
                                echo '<div class="alert alert-danger"><button data-dismiss="alert" class="close"></button><b>An error has occurred!</b> Something wrong has happened and our engineers have been notified about the error!'.$conn->error.'</div>';
                            }
                            $stmt->close();
                        }
                    }
                    //INSERT INTO moderator_information(id_Moderator_information, Moderator_information_name, Moderator_information_phone, moderator_email, moderator_username, Moderator_information_pin, ec_id_emergency_categories, level_assignment_id_level_assignment) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])
                    ?>