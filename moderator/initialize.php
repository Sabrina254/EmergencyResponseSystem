<?php
$conn=new mysqli("localhost","root","","emergency_response");
session_start();
if(isset($_SESSION['uname'])){
    header("location:./home.php");
}
$sql = "SELECT COUNT(id_Moderator_information) AS infocount FROM moderator_information";
$result= $conn->query($sql);
if($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        if($row['infocount']!=0){
            header("location: ./");
        }
    }
}
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
    <link rel="icon" href="../ers_logo.jpg" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Login | Emergency Response System</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">-->
    <script src="./assets/js/require.min.js"></script>
    <script>
        requirejs.config({
            baseUrl: '.'
        });
    </script>
    <!-- Dashboard Core -->
    <link href="./assets/css/dashboard.css" rel="stylesheet" />
    <script src="./assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="./assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="./assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="./assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="./assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="./assets/plugins/input-mask/plugin.js"></script>
</head>
<body class="">
<div class="page">
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col col-login mx-auto">
                    <form class="card" action="post-initialise.php" method="post">
                        <div class="card-body p-6">
                            <div class="card-title">Hello there! <br/>Let's set up the system</div>
                            <p>Since this is the first time you are running the system, we need to create a super admin account.</p>
                            <div class="form-group">
                                <label class="form-label">Full name</label>
                                <input type="text" class="form-control" name = 'fullname' required id="username" aria-describedby="emailHelp" placeholder="Enter Full Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control" name = 'phone' required id="username" aria-describedby="emailHelp" placeholder="Enter phone number">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email address</label>
                                <input type="text" class="form-control" name = 'email' required id="username" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" name = 'username' required id="username" aria-describedby="emailHelp" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Pin</label>
                                <input type="password" class="form-control" maxlength="4" minlength="4" name = 'pin1' required id="username" aria-describedby="emailHelp" placeholder="Enter 4 digit pin">
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    Repeat Pin
                                </label>
                                <input type="password" class="form-control" maxlength="4" minlength="4" name="pin2" required id="exampleInputPassword1" placeholder="Repeat 4 digit pin">
                            </div>
                            <div class="form-footer">
                                <button type="submit" name="signup" class="btn btn-primary btn-block">Initialize</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>