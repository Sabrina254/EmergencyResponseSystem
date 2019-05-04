<?php
$conn=new mysqli("localhost","root","","emergency_response");
session_start();
?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Sign | Emergency Response System</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">-->
    <script src="../moderator/assets/js/vendors/jquery-3.2.1.min.js"></script>
    <script src="../moderator/assets/js/require.min.js"></script>
    <script>
        requirejs.config({
            baseUrl: '.'
        });
    </script>
    <!-- Dashboard Core -->
    <link href="../moderator/assets/css/dashboard.css" rel="stylesheet" />
    <script src="../moderator/assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="../moderator/assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="../moderator/assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="../moderator/assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="../moderator/assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="../moderator/assets/plugins/input-mask/plugin.js"></script>
</head>
<body class="">
<div class="page">
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col col-login mx-auto">
                    <?php
                    if(isset($_POST['signup'])){
                        if(isset($_POST['username']) && isset($_POST['secret'])){
                            $username = $_POST['username'];
                            $password = $_POST['secret'];
                            $typeofprov = $_POST['typeofprov'];
                            $emailaddress = $_POST['emailadd'];

                            switch ($typeofprov){
                                case 1:$sql = "INSERT INTO fire_engine_information(uname, email, pin,status_approval,provider_type) VALUES ('$username','$emailaddress','$password','pending','FireFighter')";break;
                                case 2:$sql="INSERT INTO paramedics_information(uname, email, pin,status_approval,provider_type) VALUES ('$username','$emailaddress','$password','pending','Paramedic')";break;
                                case 3:$sql="INSERT INTO rescue_team_information(uname, email, pin,status_approval,provider_type) VALUES ('$username','$emailaddress','$password','pending','RescueTeam')";break;
                                default: echo "<div class='alert alert-warning'>Invalid type of provider was chosen</div>"; die();break;
                            }

                            if($conn->connect_error){
                                //on failure
                                echo '<div class="alert alert-danger"><button data-dismiss="alert" class="close"></button><b>Failed!</b> There was a problem creating our account</div>';
                            }
                            else {
                                $result = $conn->query($sql);
                                if ($result===true) {
                                    echo '<div class="alert alert-success"><button data-dismiss="alert" class="close"></button><b>Success!</b> Your account has been created successfully! <a href="./">Click here to log in.</a></div>';
                                } else {
                                    //on wrong credentials
                                    echo '<div class="alert alert-danger"><button data-dismiss="alert" class="close"></button><b>Failed!</b> We are not able to create your account!.'.$conn->error.' </div>';
                                }
                            }

                        }
                    }
                    ?>
                    <form class="card" action="" method="post" onsubmit="return validate()">
                        <div class="card-body p-6">
                            <div class="card-title">Create your account</div>
                            <div class="form-group">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" name = 'username' required id="username" aria-describedby="emailHelp" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email address</label>
                                <input type="text" class="form-control" name = 'emailadd' required id="username" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Type of Provider:</label>
                                <select class="form-control" name = 'typeofprov' required id="typeofprov">
                                    <option value="0">Choose one</option>
                                    <option value="1">Fire Fighter</option>
                                    <option value="2">Paramedics</option>
                                    <option value="3">Rescue Team</option>
                                </select>
                                <div id="messageforsel"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Pin</label>
                                <input type="password" class="form-control" maxlength="4" name = 'pin' required id="pin" aria-describedby="emailHelp" placeholder="Pin">
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    Retype Pin
                                </label>
                                <input type="password" class="form-control"  maxlength="4" name="secret" required id="pin-retype" placeholder="Retype pin">
                                <div id="messageforpass"></div>
                            </div>
                            <div class="form-footer">
                                <button type="submit" name="signup" class="btn btn-primary btn-block">Sign up</button>
                                <div class="text-center">or<br><a class="small" href="./">Login me in.  I already have an account.</a></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function validate() {
        let pin = document.getElementById('pin').value;
        let retype = document.getElementById('pin-retype').value;
        let optionSel = document.getElementById('typeofprov').value;
        let retvalue = true;
        if(pin!==retype){
            document.getElementById('pin').className = "form-control is-invalid";
            document.getElementById('pin-retype').className = "form-control is-invalid";
            document.getElementById('messageforpass').className='invalid-feedback';
            document.getElementById('messageforpass').innerHTML="These passwords don't match";
            retvalue = false;
        }
        if(optionSel==='0'){
            document.getElementById('typeofprov').className = "form-control is-invalid";
            document.getElementById('messageforsel').className='invalid-feedback';
            document.getElementById('messageforsel').innerHTML="Please choose one!";
            retvalue=false;
        }
        return retvalue;
    }
</script>
</body>
</html>