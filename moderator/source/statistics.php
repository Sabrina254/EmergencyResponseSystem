<?php
/**
 * Created by PhpStorm.
 * User: Karim K. Kanji
 * Date: 04/03/2019
 * Time: 15:43
 */
$conn=new mysqli("localhost","root","","emergency_response");
$unattended=$sql = "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp,assigned FROM user_request_rescue WHERE assigned is NULL AND `complete` is NULL\n"

                . "UNION ALL\n"

                . "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned FROM user_request_paramedics WHERE assigned is NULL AND `complete` is NULL\n"

                . "UNION ALL\n"

                . "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned FROM user_request_fire\n"

                . "WHERE assigned is NULL AND `complete` is NULL\n"

                . "ORDER BY `user_request_time_stamp` ASC";
$attending = "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp,assigned FROM user_request_rescue WHERE assigned is NOT NULL AND complete is NULL 
UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned FROM user_request_paramedics WHERE assigned is NOT NULL AND complete is NULL UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned FROM user_request_fire WHERE assigned is NOT NULL AND complete is NULL ORDER BY user_request_time_stamp ASC";
$success = "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp,assigned FROM user_request_rescue WHERE assigned is NOT NULL AND complete='success' UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned FROM user_request_paramedics WHERE assigned is NOT NULL AND complete='success' UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned FROM user_request_fire WHERE assigned is NOT NULL AND complete ='success' ORDER BY user_request_time_stamp ASC";
$failed = "SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp,assigned FROM user_request_rescue WHERE assigned is NOT NULL AND complete='fail' UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned FROM user_request_paramedics WHERE assigned is NOT NULL AND complete='fail' UNION ALL SELECT user_information_id_user_information,user_request_longitude,user_request_latitude,help_code,user_request_time_stamp, assigned FROM user_request_fire WHERE assigned is NOT NULL AND complete ='fail' ORDER BY user_request_time_stamp ASC";
$moderators= "SELECT * FROM moderator_information";
$users = "SELECT * FROM user_information";
$hospitals = "SELECT * FROM hospital_information";
$resteam = "SELECT * FROM `rescue_team_information`";
//$onlineMod
//$onlineUnit
//$blocked
$fireengines="SELECT * FROM fire_engine_information";
$paramedics= "SELECT * FROM paramedics_information";
$unattendedres = ($conn->query($unattended))->num_rows;
$attendingres= ($conn->query($attending))->num_rows;
$successfulres = ($conn->query($success))->num_rows;
$failedres = ($conn->query($failed))->num_rows;
$moderatorsres = ($conn->query($moderators))->num_rows;
$usersres = ($conn->query($users))->num_rows;
$hospitalsres = ($conn->query($hospitals))->num_rows;
$fireenginesres = ($conn->query($fireengines))->num_rows;
$paramedicsres = ($conn->query($paramedics))->num_rows;
$resteamres = ($conn->query($resteam))->num_rows;
echo '<div class="row row-cards">
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="h1 m-0">'.$unattendedres.'</div>
                    <div class="text-muted mb-4">In the queue</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="h1 m-0">'.$attendingres.'</div>
                    <div class="text-muted mb-4">Being attended</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="h1 m-0">'.$successfulres.'</div>
                    <div class="text-muted mb-4">Successful</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="h1 m-0">'.$failedres.'</div>
                    <div class="text-muted mb-4">Failed</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="h1 m-0">'.$paramedicsres.'</div>
                    <div class="text-muted mb-4">Paramedics</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="h1 m-0">'.$fireenginesres.'</div>
                    <div class="text-muted mb-4">Fire Engines</div>
                  </div>
                </div>
              </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="card">
                        <div class="card-body p-3 text-center">
                            <div class="h1 m-0">'.$resteamres.'</div>
                            <div class="text-muted mb-4">Rescue Teams</div>
                        </div>
                    </div>
                </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="h1 m-0">'.$hospitalsres.'</div>
                    <div class="text-muted mb-4">Hospitals</div>
                  </div>
                </div>
              </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="card">
                        <div class="card-body p-3 text-center">
                            <div class="h1 m-0">'.$usersres.'</div>
                            <div class="text-muted mb-4">Users</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="card">
                        <div class="card-body p-3 text-center">
                            <div class="h1 m-0">'.$moderatorsres.'</div>
                            <div class="text-muted mb-4">Moderators</div>
                        </div>
                    </div>
                </div>
          </div>';