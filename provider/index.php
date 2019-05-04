<?php
$conn=new mysqli("localhost","root","","emergency_response");
session_start();
if(isset($_SESSION['puname'])){
    header("location:./home.php");
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
    <link rel="icon" href="./ers_logo.jpg" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./ers_logo.jpg" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Login | Emergency Response System</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">-->
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
                    <center><img src="../ers_logo.jpg" width="100px" height="100px">
                        <h1>Emergency Response System</h1>
                        <h3>Service Providers</h3>
                    </center>
                    <?php
                    if(isset($_POST['signin'])) {
                        if (isset($_POST['username']) && isset($_POST['secret'])) {
                            $username = $_POST['username'];
                            $password = $_POST['secret'];
                            if ($conn->connect_error) {
                                //on failure
                                echo '<div class="alert alert-danger"><button data-dismiss="alert" class="close"></button><b>Failed!</b> There was a problem logging you in. </div>';
                            }
                            else {
                                $sql = "SELECT id, uname,email,pin,status_approval FROM fire_engine_information WHERE (uname='$username' OR email='$username') AND pin='$password'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    //on success
                                    while ($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        $sql = "UPDATE fire_engine_information SET isonline= 'true' WHERE id = '$id'";
                                        if (($conn->query($sql)) === true) {
                                            $username = $row["uname"];
                                            /*Old values
                                             * $_SESSION['email'] = $row['email'];
                                            $_SESSION['uname'] = $row['uname'];
                                            $_SESSION['fullname'] = $username;
                                            $_SESSION['id']=$id ;
                                            $_SESSION['type']="fire";
                                            $namep = explode(" "*/
                                            $_SESSION['status_approval'] = $row['status_approval'];
                                            $_SESSION['pemail'] = $row['email'];
                                            $_SESSION['puname'] = $row['uname'];
                                            $_SESSION['pfullname'] = $username;
                                            $_SESSION['pid']=$id ;
                                            $_SESSION['ptype']="fire";
                                            $namep = explode(" ", $username);
                                            $acronym = "";
                                            foreach ($namep as $w) {
                                                $acronym .= $w[0];
                                            }
                                            $_SESSION['pinitials'] = $acronym;
                                            echo '<div class="alert alert-success"><button data-dismiss="alert" class="close"></button><b>Success!</b> Please wait as you are being logged in. </div>';
                                            echo "<meta http-equiv='refresh' content='1;url=./home.php'/>";
                                        }
                                        else{
                                            echo '<div class="alert alert-danger"><button data-dismiss="alert" class="close"></button><b>An error has occurred:</b> We are not able to log you in: You are not set to online. </div>';
                                        }
                                    }
                                }
                                else {
                                    $sql = "SELECT id,uname,email,pin,status_approval FROM paramedics_information WHERE (uname='$username' OR email='$username') AND pin='$password'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        //on success
                                        while ($row = $result->fetch_assoc()) {
                                            $id = $row['id'];
                                            $sql = "UPDATE paramedics_information SET isonline= 'true' WHERE id = '$id'";
                                            if(($conn->query($sql))===true){
                                                $username = $row["uname"];
                                                $_SESSION['status_approval'] = $row['status_approval'];
                                                $_SESSION['pemail'] = $row['email'];
                                                $_SESSION['puname'] = $row['uname'];
                                                $_SESSION['pfullname'] = $username;
                                                $_SESSION['pid']=$id ;
                                                $_SESSION['ptype']="paramedics";
                                                $namep = explode(" ", $username);
                                                $acronym = "";
                                                foreach ($namep as $w) {
                                                    $acronym .= $w[0];
                                                }
                                                $_SESSION['pinitials'] = $acronym;
                                                echo '<div class="alert alert-success"><button data-dismiss="alert" class="close"></button><b>Success!</b> Please wait as you are being logged in. </div>';
                                                echo "<meta http-equiv='refresh' content='1;url=./home.php'/>";
                                            }
                                            else{
                                                echo '<div class="alert alert-danger"><button data-dismiss="alert" class="close"></button><b>An error has occurred:</b> We are not able to log you in: You are not set to online. </div>';
                                            }
                                        }

                                    }
                                    else {
                                        $sql = "SELECT id, uname,email,pin,status_approval FROM rescue_team_information WHERE (uname='$username' OR email='$username' ) AND pin='$password'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            //on success
                                            while ($row = $result->fetch_assoc()) {
                                                $id = $row['id'];
                                                $sql = "UPDATE rescue_team_information SET isonline= 'true' WHERE id = '$id'";
                                                if (($conn->query($sql)) === true) {
                                                    $username = $row["uname"];
                                                    $_SESSION['status_approval'] = $row['status_approval'];
                                                    $_SESSION['pemail'] = $row['email'];
                                                    $_SESSION['puname'] = $row['uname'];
                                                    $_SESSION['pfullname'] = $username;
                                                    $_SESSION['pid']=$id ;
                                                    $_SESSION['ptype']="rescue";
                                                    $namep = explode(" ", $username);
                                                    $acronym = "";
                                                    foreach ($namep as $w) {
                                                        $acronym .= $w[0];
                                                    }
                                                    $_SESSION['pinitials'] = $acronym;
                                                    echo '<div class="alert alert-success"><button data-dismiss="alert" class="close"></button><b>Success!</b> Please wait as you are being logged in. </div>';
                                                    echo "<meta http-equiv='refresh' content='1;url=./home.php'/>";
                                                }
                                                else {
                                                    echo '<div class="alert alert-danger"><button data-dismiss="alert" class="close"></button><b>An error has occurred:</b> We are not able to log you in: You are not set to online. </div>';
                                                }
                                            }
                                        }
                                        else {
                                            //on wrong credentials
                                            echo '<div class="alert alert-danger"><button data-dismiss="alert" class="close"></button><b>Wrong Credentials!</b> The username or password may not be correct or user doesn\'t exist. </div>';
                                        }
                                    }

                                }
                            }
                        }
                    }
                    ?>
                    <form class="card" action="" method="post">
                        <div class="card-body p-6">
                            <div class="card-title">Login to your account</div>
                            <div class="form-group">
                                <label class="form-label">Email address or username</label>
                                <input type="text" class="form-control" name = 'username' required id="username" aria-describedby="emailHelp" placeholder="Enter email or username">
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    Pin
                                    <a href="./forgot-password.php" class="float-right small">I forgot pin</a>
                                </label>
                                <input type="password" class="form-control" maxlength="4" name="secret" required id="exampleInputPassword1" placeholder="Pin">
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" />
                                    <span class="custom-control-label">Remember me</span>
                                </label>
                            </div>
                            <div class="form-footer">
                                <button type="submit" name="signin" class="btn btn-primary btn-block">Sign in</button>
                                <div class="text-center">or<br><a class="small" href="./signup.php">Create an account.</a></div>
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