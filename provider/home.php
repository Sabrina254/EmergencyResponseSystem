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
    <link rel="icon" href="./ers_logo.jpg" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./ers_logo.jpg" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Provider - Home | Emergency Response System</title>
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
<body onload="getStatistics()">
<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="./index.html">
                Emergency Response
            </a>
            <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown">
                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                        <span class="avatar"><?php echo $_SESSION['pinitials'];?></span>
                        <span class="ml-2 d-none d-lg-block">
                      <span class="text-default"><?php echo $_SESSION['puname'];?></span>
                      <small class="text-muted d-block mt-1" id="on_off">Online
                      </small>
                    </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon fe fe-settings"></i> Settings
                        </a>
                        <a class="dropdown-item" href="logout.php">
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
<div class="container">
    <?php
    $idsess = $_SESSION['pid'];
    switch ($_SESSION['ptype']) {
        case 'fire':$sqlassign = "SELECT * FROM user_request_fire WHERE id_fire_engine_information='$idsess' AND assigned='yes' AND complete IS NULL";break;
        case 'paramedics':$sqlassign = "SELECT * FROM user_request_paramedics  WHERE id_paramedics_information='$idsess' AND assigned='yes' AND complete IS NULL";break;
        case 'rescue':$sqlassign = "SELECT * FROM user_request_rescue WHERE id_rescue_information='$idsess' AND assigned='yes' AND complete IS NULL";break;
        default:die("The type defined is not valid");
    }
    $resassign = $conn->query($sqlassign);
    if($resassign->num_rows>0){
        while ($row=$resassign->fetch_assoc()){
            $hp = $row['help_code'];
            if($row['request_manual']=='no') {
                $longhome = $row['user_request_longitude'];
                $lathome = $row['user_request_latitude'];
                echo "<div class='alert alert-warning' style='margin-top: 10px'>You have been assigned to " . $row['help_code'] . " <a href='map.php?helpcode=".$hp."&long=".$longhome."&lat=".$lathome."' target='_BLANK'>Click here</a> to go to map</div>";
            }
            else{
                $dir = $row['request_details_manual'];
                echo "<div class='alert alert-warning' style='margin-top: 10px'>You have been assigned to " . $row['help_code'] . "&nbsp;<a href='map-manual.php?helpcode=".$hp."&dir=".$dir."' target='_BLANK'>Click here</a> to go to map</div>";
            }
        }
    }
    //echo $_SESSION['status_approval'];
    if($_SESSION['status_approval']!='approved'){
        echo "<div class='alert alert-warning' style='margin-top: 10px'>You will not be assigned a case until you are approved!</div>";
    }?>
    <div id="statisticsHere"></div>
    <div class="row" style="margin-top: 100px">
        <div class="col-4">
            <div class="text-center mt-6">
                <?php
                //echo $_SESSION['status_approval'];
                if($_SESSION['status_approval']!='approved'){
                    echo '<btn class="btn btn-success btn-block disabled" id="start" data-toggle="modal" disabled style="cursor: not-allowed;">Start Session</btn>';
                }
                else{
    $idsess = $_SESSION['pid'];
    switch ($_SESSION['ptype']) {
        case 'fire':$sqlassign = "SELECT * FROM user_request_fire WHERE id_fire_engine_information='$idsess' AND assigned='yes' AND complete IS NULL";break;
        case 'paramedics':$sqlassign = "SELECT * FROM user_request_paramedics  WHERE id_paramedics_information='$idsess' AND assigned='yes' AND complete IS NULL";break;
        case 'rescue':$sqlassign = "SELECT * FROM user_request_rescue WHERE id_rescue_information='$idsess' AND assigned='yes' AND complete IS NULL";break;
        default:die("The type defined is not valid");
    }
    $resassign = $conn->query($sqlassign);
    if($resassign->num_rows>0){
        echo '<btn disabled class="btn btn-success btn-block disabled" id="start" data-toggle="modal" style="cursor: not-allowed;">Start Session</btn>';
    }
    else {
        echo '<btn class="btn btn-success btn-block" id="start" data-toggle="modal" data-target="#startSess" data-backdrop="static">Start Session</a>';
    }
                }
                ?>
            </div>
        </div>
        <div class="col-4">
            <div class="text-center mt-6">
                <form action="" method="post">
                    <div id="button_on_off"><button class="btn btn-warning btn-block" type="submit" name="pause">Pause Session</button></div>
                </form>
            </div>
        </div>
        <div class="col-4">
            <div class="text-center mt-6">
                <a href="logout.php" class="btn btn-danger btn-block">End Session</a>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="startSess">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">You are about to be assigned a case:</h4>
                <button type="button" class="close" data-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div id="steps">
                    <h4>Step <i>1</i> of <i>2</i></h4>
                To facilitate this we need to get your location,click this button to get location:
                <br><button class="btn btn-success" onclick="getLocation()">Get location</button>
                </div>
                <br/>
                <div class="card">
                    <div class="card-body" id="messagesteps">
                        <center class="text-warning" id="messageinitial">Click Get location button to start</center>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="location.reload()">Close</button>
            </div>

        </div>
    </div>
</div>
<?php
if(isset($_POST['pause'])) {
    $id = $_SESSION['pid'];
    $type = $_SESSION['ptype'];
    switch ($type) {
        case 'fire':
            $sql = "UPDATE fire_engine_information SET isonline= 'false' WHERE id = '$id'";
            break;
        case 'rescue':
            $sql = "UPDATE rescue_team_information SET isonline= 'false' WHERE id = '$id'";
            break;
        case 'paramedics':
            $sql = "UPDATE paramedics_information SET isonline= 'false' WHERE id = '$id'";
            break;
        default:
            die('The user has invalid details! Check Session credentials first');
    }
    if (($conn->query($sql)) === true) {
        echo "<script>document.getElementById('on_off').innerHTML='Offline';
            document.getElementById('start').className='btn btn-success btn-block disabled';
            document.getElementById('start').disabled = true;
           document.getElementById('button_on_off').innerHTML='<button class=\"btn btn-warning btn-block\" type=\"submit\" name=\"resume\">Resume Session</button>';
</script>";
    }
}
if(isset($_POST['resume'])) {
    $id = $_SESSION['pid'];
    $type = $_SESSION['ptype'];
    switch ($type) {
        case 'fire':
            $sql = "UPDATE fire_engine_information SET isonline= 'true' WHERE id_fire_engine_information = '$id'";
            break;
        case 'rescue':
            $sql = "UPDATE rescue_team_information SET isonline= 'true' WHERE id_rescue_team_information = '$id'";
            break;
        case 'paramedics':
            $sql = "UPDATE paramedics_information SET isonline= 'true' WHERE id_paramedics_information = '$id'";
            break;
        default:
            die('The user has invalid details! Check Session credentials first');
    }
    if (($conn->query($sql)) === true) {
        echo "<script>document.getElementById('on_off').innerHTML='Online';
document.getElementById('start').className='btn btn-success btn-block';
            document.getElementById('start').disabled = false;           
document.getElementById('button_on_off').innerHTML='<button class=\"btn btn-warning btn-block\" type=\"submit\" name=\"pause\">Pause Session</button>';
</script>";
    }
}
?>
<script>
    window.setInterval(getStatistics, 15000);
    function getStatistics(){
        document.getElementById("statisticsHere").innerHTML="<center style='margin-top:20px'><div class='loader'></div></center>";
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("statisticsHere").innerHTML= this.response;
            }
        };
        xmlhttp.open("POST", "./statistics.php", true);
        xmlhttp.send();
    }
    let lat, long, manual, emergType, user, method;
    function getLocation() {
        document.getElementById('messageinitial').innerHTML="<div class='loader'></div>";
        // Check if the browser supports Geolocation. If it does get the location
        if (navigator.geolocation) {
            // On success call the showPosition Function. if not call showError function to handle the error.
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            //This function handles the error messages.
            outputHandler("Geolocation is not supported by this browser.");
        }
    }
    function showPosition(position) {
        //Set the Global variables with the latitude and Longitude
        lat = position.coords.latitude;
        long = position.coords.longitude;
        // Set the method of submitting to 1 indicating to submit details containing the coordinates
        method = 1;
        //output the location to users after receiving the coordinates.
        document.getElementById("messagesteps").innerHTML = "Your location: <br/> Latitude: " + position.coords.latitude +
            "<br/>Longitude: " + position.coords.longitude;
        //document.getElementById("show_loader").innerHTML = "";
        //Enable the button here and allow when clicked to call checkType of so that users can choose the type of emergency.
        //document.getElementById("button_manual").innerHTML = '<button class="btn btn-danger btn-block" onclick="checkTypeof()"> I NEED HELP</button>';
        step2();
    }

    function showError(error) {
        // Using the different errors call output handler to output the various error messages.
        switch (error.code) {
            case error.PERMISSION_DENIED:
                outputHandler("We couldn't get your location because you denied the use of your location.");
                break;
            case error.POSITION_UNAVAILABLE:
                outputHandler("We couldn't get your location because the position is unavailable.");
                break;
            case error.TIMEOUT:
                outputHandler("We couldn't get your location because it took too long to get your location");
                break;
            case error.UNKNOWN_ERROR:
                outputHandler("We couldn't get your location. The reason is still unknown.");
                break;
        }
    }

    function outputHandler(output) {
        //Get the message to output then remove the loader.
        document.getElementById("messagesteps").innerHTML = output;
        document.getElementById("messagesteps").innerHTML+='<br><div id="skipbtn"><button onclick="step2(true)" class="btn btn-warning" style="margin-top:20px">Just skip</button></div>';

    }
    function step2(){
        document.getElementById('steps').innerHTML="<h4>Step <i>2</i> of <i>2</i></h4>Please wait as we are assigning you a case.<br><button class='btn btn-warning' style='margin-top:10px'>Cancel</button>";
        document.getElementById('messagesteps').innerHTML+="<center><div class='loader' style='margin-top:20px'></div></center>";
        //<meta http-equiv='refresh' content='4, ./map.php'>
        assign();
    }
    function step2(skipped){
        document.getElementById('steps').innerHTML="<h4>Step <i>2</i> of <i>2</i></h4>Please wait as we are assigning you a case.<br><button class='btn btn-warning' style='margin-top:10px'>Cancel</button>";
        //document.getElementById("skipbtn").innerHTML="";
        document.getElementById('messagesteps').innerHTML+="<center><div id='loader'><div class='loader' style='margin-top:20px'></div></div></center>";
        //<meta http-equiv='refresh' content='4, ./map.php'>
        assign();
    }
    function assign(){
        let type = "<?php echo $_SESSION['ptype'];?>";
        let id = "<?php echo $_SESSION['pid'];?>";
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("messagesteps").innerHTML+= this.response;
                document.getElementById('loader').innerHTML="";
            }
        };
        xmlhttp.open("POST", "./assignment.php?type="+type+"&lat="+lat+"&long="+long+"&id="+id, true);
        xmlhttp.send();
    }
    function manassign(id,helpcode,mandir) {
        let type = "<?php echo $_SESSION['ptype'];?>";
        let idprov = "<?php echo $_SESSION['pid'];?>";
       document.getElementById(id).innerHTML="Assigning";
       document.getElementById(id).className="btn btn-success";
       document.getElementById(id).disabled=true;
       let elems = document.getElementsByClassName('dis-row');
       for(let i=0;i<elems.length;i++){
           elems[i].disabled=true;
       }
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("messagesteps").innerHTML+= this.response;
                document.getElementById('loader').innerHTML="";
            }
        };
        xmlhttp.open("GET", "./manassign.php?type="+type+"&hp="+helpcode+"&id="+idprov+"&mandir="+mandir, true);
        xmlhttp.send();
    }
</script>
</body>
</html>