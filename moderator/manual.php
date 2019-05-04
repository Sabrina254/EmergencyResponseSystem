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
    <link rel="icon" href="../ers_logo.jpg" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="../ers_logo.jpg" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Admin - Manual Assignment| Emergency Response System</title>
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
                        <div class="dropdown">
                            <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                <span class="avatar avatar-pink"><?php echo $acronym; ?></span>
                                <span class="ml-2 d-none d-lg-block">
                       <span class="text-default"><?php echo $username; ?></span>
                      <small class="text-muted d-block mt-1">Administrator</small>
                    </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="settings.php">
                                    <i class="dropdown-icon fe fe-settings"></i> Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" name="logout">
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
                    <div class="col-lg order-lg-first">
                        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                            <li class="nav-item">
                                <a href="home.php" class="nav-link"><i class="fe fe-home"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="cases.php" class="nav-link"><i class="fe fe-box"></i> Cases</a>
                            </li>
                            <li class="nav-item">
                                <a href="./manual.php" class="nav-link active"><i class="fe fe-edit"></i>Manual Intervention</a>
                            </li>
                            <li class="nav-item">
                                <a href="./provider.php" class="nav-link"><i class="fe fe-edit"></i> Service providers</a>
                            </li>
                            <li class="nav-item">
                                <a href="./users.php" class="nav-link"><i class="fe fe-user"></i>Users </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-3 my-md-5">
            <div class="container-fluid">
                <div class="row" id="responseman">
                    <div id="content" style="margin: 10px">
                    </div>
                    <div id="provcontent" style="margin: 10px">
                    </div>
                    <div id="assignment" style="margin: 10px">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Queue</h3>
                            </div>
                            <div class="card-body">
                                <div id="queueloader"></div>
                                <div class="table-responsive" id="queueHere"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Online service providers</h3>
                            </div>
                            <div class="card-body">
                                <div id="onlineloader"></div>
                                <div class="table-responsive" id="onlineHere"></div>
                            </div>
                        </div>
                    </div>
               <!-- <div class="col-md-6">
                <div class="page-header">
                    <h1 class="page-title" id="queue">
                        Queue
                    </h1>
                </div>
                <div class="row row-cards row-deck">
                        <div id="queueloader"></div>
                        <div class="table-responsive" id="queueHere"></div>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="page-header">
                        <h1 class="page-title" id="current">
                            Online service providers
                        </h1>
                    </div>
                    <div class="row row-cards row-deck">
                        <div id="onlineloader"></div>
                        <div class="table-responsive" id="onlineHere"></div>
                    </div>
                </div>-->
            </div>
            </div>
        </div>
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
                xmlhttp.open("POST", "./source/lists-man.php?action=queue", true);
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
            let highlighted='';
            let provider_sel = '';
            function highlight(id,hp){
                document.getElementById('content').innerHTML="";
                if(highlighted!=='') {
                    document.getElementById(highlighted).className = "table-light";
                    if(highlighted===id){
                        document.getElementById(highlighted).className = "table-light";
                        highlighted='';
                    }
                    else{
                        document.getElementById(id).className = "table-success";
                        highlighted = id;
                        document.getElementById('content').innerHTML="<div class=\"card\">\n" +
                            "                      <div class=\"card-body text-center\">\n" +
                            "                        <div class=\"h5\">Case Selected</div>\n" +
                            "                        <div class=\"display-4 font-weight-bold mb-4\">"+hp+"</div>\n" +
                            "                      </div>\n" +
                            "                    </div>";
                    }
                }
                else{
                    document.getElementById(id).className = "table-success";
                    highlighted = id;
                    document.getElementById('content').innerHTML="<div class=\"card\">\n" +
                        "                      <div class=\"card-body text-center\">\n" +
                        "                        <div class=\"h5\">Case Selected</div>\n" +
                        "                        <div class=\"display-4 font-weight-bold mb-4\">"+hp+"</div>\n" +
                        "                      </div>\n" +
                        "                    </div>";
                }
                createassignbutton();
            }
            function highlightprov(id,hp){
                document.getElementById('provcontent').innerHTML="";
                if(provider_sel!=='') {
                    document.getElementById(provider_sel).className = "table-light";
                    if(provider_sel===id){
                        document.getElementById(provider_sel).className = "table-light";
                        provider_sel='';
                    }
                    else{
                        document.getElementById(id).className = "table-success";
                        provider_sel = id;
                        document.getElementById('provcontent').innerHTML="<div class=\"card\">\n" +
                            "                      <div class=\"card-body text-center\">\n" +
                            "                        <div class=\"h5\">Provider Selected</div>\n" +
                            "                        <div class=\"display-4 font-weight-bold mb-4\">"+hp+"</div>\n" +
                            "                      </div>\n" +
                            "                    </div>";
                    }
                }
                else{
                    document.getElementById(id).className = "table-success";
                    provider_sel = id;
                    document.getElementById('provcontent').innerHTML="<div class=\"card\">\n" +
                        "                      <div class=\"card-body text-center\">\n" +
                        "                        <div class=\"h5\">Provider Selected</div>\n" +
                        "                        <div class=\"display-4 font-weight-bold mb-4\">"+hp+"</div>\n" +
                        "                      </div>\n" +
                        "                    </div>";
                }
                createassignbutton();
            }
            function createassignbutton() {
                if(provider_sel!=='' && highlighted!==''){
                    document.getElementById('assignment').innerHTML="<div class=\"card\">\n" +
                        "                      <div class=\"card-body text-center\">\n" +
                        "                        <div class=\"h5 text-success\">Assignment can be done!</div>\n" +
                        "                        <div class=\"display-4 font-weight-bold mb-4\"><button class='btn btn-success btn-block' onclick='proc_to_assign()'>Assign</button></div>\n" +
                        "                      </div>\n" +
                        "                    </div>";
                }
                else{
                    document.getElementById('assignment').innerHTML="";
                }
            }
            function proc_to_assign() {
                let conf = confirm('Are you sure you want to assign '+highlighted.substring(3)+' to '+provider_sel.substring(3)+'?');
                if(conf === true){
                    let xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            document.getElementById("responseman").innerHTML= this.response;
                        }
                    };
                    xmlhttp.open("GET", "./manassign.php?hp="+highlighted.substring(3)+"&username="+provider_sel.substring(3), true);
                    xmlhttp.send();
                }
                else{
                    document.getElementById("responseman").innerHTML= "<div class='alert alert-warning'><button type='button' class='close' data-dismiss='alert'></button>No change has been made</div>";
                }
            }
        </script>
</body>
</html>