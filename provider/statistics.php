<?php
/**
 * Created by PhpStorm.
 * User: Karim K. Kanji
 * Date: 04/03/2019
 * Time: 15:43
 */
session_start();
switch($_SESSION['ptype']){
    case 'fire': $sqlcounton = "SELECT isonline FROM fire_engine_information WHERE isonline='true'";$sqlcountoff = "SELECT isonline FROM fire_engine_information WHERE isonline='false'";break;
    case 'paramedics': $sqlcounton = "SELECT isonline FROM paramedics_information WHERE isonline='true'"; $sqlcountoff = "SELECT isonline FROM paramedics_information WHERE isonline='false'";break;
    case 'rescue': $sqlcounton = "SELECT isonline FROM rescue_team_information WHERE isonline='true'"; $sqlcountoff = "SELECT isonline FROM rescue_team_information WHERE isonline='false'";break;
    default :die('The user is unknown');break;
}
$conn=new mysqli("localhost","root","","emergency_response");
$unattended= "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp,assigned FROM user_request_rescue WHERE assigned is NULL AND complete is NULL\n"

                . "UNION ALL\n"

                . "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned FROM user_request_paramedics WHERE assigned is NULL AND complete is NULL\n"

                . "UNION ALL\n"

                . "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned FROM user_request_fire\n"

                . "WHERE assigned is NULL AND complete is NULL\n"

                . "ORDER BY user_request_time_stamp ASC";
$attending = "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp,assigned FROM user_request_rescue WHERE assigned is NOT NULL AND complete is NULL 
UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned FROM user_request_paramedics WHERE assigned is NOT NULL AND complete is NULL UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned FROM user_request_fire WHERE assigned is NOT NULL AND complete is NULL ORDER BY user_request_time_stamp ASC";
$success = "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp,assigned FROM user_request_rescue WHERE assigned is NOT NULL AND complete='success' UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned FROM user_request_paramedics WHERE assigned is NOT NULL AND complete='success' UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned FROM user_request_fire WHERE assigned is NOT NULL AND complete ='success' ORDER BY user_request_time_stamp ASC";
$failed = "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp,assigned FROM user_request_rescue WHERE assigned is NOT NULL AND complete='fail' UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned FROM user_request_paramedics WHERE assigned is NOT NULL AND complete='fail' UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned FROM user_request_fire WHERE assigned is NOT NULL AND complete ='fail' ORDER BY user_request_time_stamp ASC";
$success  = ($conn->query($success))->num_rows;
$failed  = ($conn->query($failed))->num_rows;
$unattendedres = ($conn->query($unattended))->num_rows;
$attendingres= ($conn->query($attending))->num_rows;
$online = ($conn->query($sqlcounton))->num_rows;
$offline = ($conn->query($sqlcountoff))->num_rows;
echo '<div class="row" style="margin-top:100px">
        <div class="col-sm-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <div>
                        <h4 class="m-0">'.$unattendedres.' <small>cases</small></h4>
                        <small class="text-muted">Currently unassigned</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <div>
                        <h4 class="m-0">'.$attendingres.' <small>cases</small></h4>
                        <small class="text-muted">Currently assigned</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <div>
                        <h4 class="m-0">'.$success.' <small>Attended</small></h4>
                        <small class="text-muted">Successfully</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <div>
                        <h4 class="m-0">'.$failed.' <small>Attended</small></h4>
                        <small class="text-muted">With Failure</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <div>
                        <h4 class="m-0">'.$online.' <small>Online</small></h4>
                        <small class="text-muted">Providers</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <div>
                        <h4 class="m-0">'.$offline.' <small>Offline</small></h4>
                        <small class="text-muted">Providers</small>
                    </div>
                </div>
            </div>
        </div>

    </div>';