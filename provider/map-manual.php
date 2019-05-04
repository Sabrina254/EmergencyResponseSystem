<?php
$conn=new mysqli("localhost","root","","emergency_response");
session_start();
if(isset($_GET['helpcode'])&& isset($_GET['dir'])){
    $helpcode=$_GET['helpcode'];
    $dir = $_GET['dir'];
    switch ($helpcode[0]) {
        case 'F':
            $updatesucc = "SELECT * FROM user_request_fire WHERE complete IS NULL AND remarks IS NULL AND help_code = '$helpcode'";
            break;
        case 'M':
            $updatesucc = "SELECT * FROM user_request_paramedics WHERE complete IS NULL AND remarks IS NULL AND help_code = '$helpcode'";
            break;
        case 'N':
            $updatesucc = "SELECT * FROM user_request_rescue WHERE complete IS NULL AND remarks IS NULL AND help_code = '$helpcode'";
            break;
        default:
            ;
    }
    $ressucc = $conn->query($updatesucc);
    if($ressucc->num_rows==0){
        header("location:./home.php");
        die("This case was completed or doesn't exists");

    }
}
?>
<!DOCTYPE html>
<html lang="en" class='use-all-space'>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta charset='UTF-8'>
    <title>Emergency Response System  | Map</title>
    <meta name='viewport' content='width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no'/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' href='css/map.css'/>
    <link rel='stylesheet' type='text/css' href='css/elements.css'/>
    <link rel="icon" href="./ers_logo.jpg" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./ers_logo.jpg" />
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/form.js'></script>
    <script type='text/javascript' src='js/tomtom.min.js'></script>
    <style>
        label {
            display: flex;
            align-items: center;
            margin: 2px;
        }
        select {
            flex: auto;
            margin-left: 10px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light fixed-top" style="position:fixed -webkit-transform: translateZ(0); z-index: 900">
    <div class="navbar-brand">Attending to Case: Helpcode: <b><?php echo $helpcode; ?></b></div>
    <div class="d-flex order-lg-2 ml-auto">
        <div class="nav-item d-xs-flex">
            <button class="btn btn-success" data-toggle="modal" data-target="#success">Successfully attended</button>&nbsp;
            <button class="btn btn-danger" data-toggle="modal" data-target="#failed">Failed to attend</button>
        </div>
    </div>
</nav>
<center style="margin-top: 200px"><h1 class="text-danger">A map could not be drawn. However, the manual directions are:</h1><h2 class='text-success'><?php echo $dir;?></h2></center>
<div class="modal" id="success">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Great! You succeeded!</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <?php
                if(isset($_POST['sendsucc'])){
                    $narrativesucc = $_POST['narrativesucc'];
                    switch ($helpcode[0]) {
                        case 'F':
                            $updatesucc = "UPDATE user_request_fire SET complete='success',remarks='$narrativesucc' WHERE help_code='$helpcode'";
                            break;
                        case 'M':
                            $updatesucc = "UPDATE user_request_paramedics SET complete='success',remarks='$narrativesucc' WHERE help_code='$helpcode'";
                            break;
                        case 'N':
                            $updatesucc = "UPDATE user_request_rescue SET complete='success',remarks='$narrativesucc' WHERE help_code='$helpcode'";
                            break;
                        default:
                            ;
                    }
                    $ressucc = $conn->query($updatesucc);
                    if($ressucc==true){
                        echo '<div class="alert alert-success"><b>Success!</b> Successfully ended the session. Well done good fellow!</div>';
                        echo '<script> $("#success").modal("show");</script>';
                        header("location:./home.php");
                    }
                    else{
                        echo '<div class="alert alert-danger">Failed to update!</div>';
                        echo '<script> $("#success").modal("show");</script>';
                    }
                }
                ?>
                <form action="" method="post">
                    <label>Please tell us what happened:</label>
                    <textarea class="form-control" placeholder="Type your narrative here" name="narrativesucc" required></textarea>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-success" name="sendsucc" id="sendsucc">Send and exit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal" id="failed">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Oh-no! You failed!</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <?php
                if(isset($_POST['sendfail'])){
                    $narrativefail = $_POST['narrativefail'];
                    switch ($helpcode[0]) {
                        case 'F':
                            $updatesucc = "UPDATE user_request_fire SET complete='fail',remarks='$narrativefail' WHERE help_code='$helpcode'";
                            break;
                        case 'M':
                            $updatesucc = "UPDATE user_request_paramedics SET complete='fail',remarks='$narrativefail' WHERE help_code='$helpcode'";
                            break;
                        case 'N':
                            $updatesucc = "UPDATE user_request_rescue SET complete='fail',remarks='$narrativefail' WHERE help_code='$helpcode'";
                            break;
                        default:
                            ;
                    }
                    $ressucc = $conn->query($updatesucc);
                    if($ressucc==true){
                        echo '<div class="alert alert-success"><b>Success!</b> Successfully ended the session. It\'s okay, you\'ll get it next time</div>';
                        echo '<script> $("#failed").modal("show");</script>';
                        header("location:./home.php");
                    }
                    else{
                        echo '<div class="alert alert-danger">Failed to update!</div>';
                        echo '<script> $("#failed").modal("show");</script>';
                    }
                }
                ?>
                <form method="post" action="">
                <label>Please tell us what happened:</label>
                <textarea class="form-control" placeholder="Type your narrative here" required name="narrativefail"></textarea>
                <!--
                    <br>
                <div class="form-label">Should the case be assigned again?</div>
                <div>
                    <label class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" name="example-inline-checkbox1" value="option1">
                        <span class="custom-control-label">Yes assign.</span>
                    </label>
                </div>
                <br>
                -->
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-success" name="sendfail" id="sendfail">Send and exit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>