<?php
session_start();
if($_SESSION['fullname']==null){
    header('location: ./');
    die();
}
else{
    $username = $_SESSION['fullname'];
    $acronym=$_SESSION['initials'];
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
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Admin - Cases | Emergency Response System</title>
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
<body class="" onload="fillData()">
<div class="page">
    <div class="page-main">
        <div class="header py-4">
            <div class="container">
                <div class="d-flex">
                    <!--Brand That appears on the navbar-->
                    <a class="header-brand" href="home.php">
                        Emergency Response
                    </a>
                    <div class="d-flex order-lg-2 ml-auto">
                        <!--<div class="nav-item d-none d-md-flex">
                          <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">Source code</a>
                        </div>-->
                        <!-- Notifications-->
                        <div class="dropdown d-none d-md-flex">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <i class="fe fe-bell"></i>
                                <span class="nav-unread"></span>
                            </a>
                            <!--Notifications from the system-->
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a href="#" class="dropdown-item d-flex">
                                    <div>
                                        <strong>Team001</strong> was unable to respond to an emergency.
                                        <div class="small text-muted">10 minutes ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex">
                                    <div>
                                        <strong>Team389</strong> was unable to respond to an emergency
                                        <div class="small text-muted">1 hour ago</div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                <span class="avatar avatar-pink"><?php echo $acronym; ?></span>
                                <span class="ml-2 d-none d-lg-block">
                      <span class="text-default"><?php echo $username; ?></span>
                      <small class="text-muted d-block mt-1">Administrator</small>
                    </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-settings"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <span class="float-right"><span class="badge badge-primary">6</span></span>
                                    <i class="dropdown-icon fe fe-mail"></i> Inbox
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-send"></i> Message
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-help-circle"></i> Need help?
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-log-out"></i> Sign out
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 ml-auto">
                        <form class="input-icon my-3 my-lg-0">
                            <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                            <div class="input-icon-addon">
                                <i class="fe fe-search"></i>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg order-lg-first">
                        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                            <li class="nav-item">
                                <a href="home.php" class="nav-link"><i class="fe fe-home"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="cases.php" class="nav-link"><i class="fe fe-box"></i> Cases</a>
                            </li>
                            <li class="nav-item">
                                    <a href="./manual.php" class="nav-link active">Manual Intervention</a>
                            </li>
                            <li class="nav-item">
                                <a href="./users.php" class="nav-link"><i class="fe fe-file"></i>Users </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-3 my-md-5">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-title" id="queue">
                        Queue
                    </h1>
                </div>
                <div class="row row-cards row-deck">
                <div class="col-12">
                        <div id="queueloader"></div>
                        <div class="table-responsive" id="queueHere"></div>
                    </div>
                </div>
                <div class="col-12">
                <div class="page-header">
                    <h1 class="page-title" id="current">
                    Online service providers 
                    </h1>
                </div>
                <div class="row row-cards row-deck">
                        <div id="onlineloader"></div>
                            <div class="table-responsive" id="onlineHere"></div>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-6">
                <div class="page-header">
                    <h1 class="page-title" id="successful">
                        Assign Service providers manually
                    </h1>
                </div>

                <div class="row row-cards row-deck">
                        <div id="assignloader"></div>
                            <div class="table-responsive" id="assignHere"></div>
                </div>
                    <form>
                      <div class="form-group">
                        <label class="form-label">User Help Code</label>
                        <input type="text" class="form-control" name=text-password-input" placeholder="Help Code..">
                      </div>
                      <div class="form-group">
                        <label class="form-label">User Longitude</label>
                        <input type="number" class="form-control" name=num-id-input" placeholder="Longitude..">
                      </div>
                      <div class="form-group">
                        <label class="form-label">User Latitude</label>
                        <input type="text" class="form-control" name=text-help-input" placeholder="Latitude..">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Provider Identifier Number</label>
                        <input type="text" class="form-control" name=text-password-input" placeholder="IN..">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Provider Username</label>
                        <input type="text" class="form-control" name=text-password-input" placeholder="Username..">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Provider Vehicle Number</label>
                        <input type="text" class="form-control" name=text-password-input" placeholder="Vehicle Number..">
                        <br>
                        <br>
                        <div class="form-group">
                        <button type="submit" class="btn-btn primary" onclick="window.location.href='map.php'">Assign Provider</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-auto ml-lg-auto">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <ul class="list-inline list-inline-dots mb-0">
                                    <li class="list-inline-item"><a href="./docs/index.php">Documentation</a></li>
                                    <li class="list-inline-item"><a href="./faq.php">FAQ</a></li>
                                </ul>
                            </div>
                            <!--<div class="col-auto">
                              <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source code</a>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-10 col-lg-auto mt-3 mt-lg-0 text-center">
                        Copyright © 2019 <a href=".">Emergency Response</a>.
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>
        function fillData() {
            showQueue();
            showOnline();
        }
        function showQueue(){
            document.getElementById("queueloader").innerHTML="<center><div class='loader'></div></center>";
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("queueloader").innerHTML="";
                    document.getElementById("queueHere").innerHTML= this.response;
                }
            };
            xmlhttp.open("POST", "./source/lists.php?action=queue", true);
            xmlhttp.send();
        }
        function showOnline(){
            document.getElementById("onlineloader").innerHTML="<center><div class='loader'></div></center>";
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("onlineloader").innerHTML="";
                    document.getElementById("onlineHere").innerHTML= this.response;
                }
            };
            xmlhttp.open("POST", "./source/add-manual.php?action=online", true);
            xmlhttp.send();
        }

        
    </script>
</body>
</html>