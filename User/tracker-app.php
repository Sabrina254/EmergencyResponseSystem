<?php
/**
 * Created by PhpStorm.
 * User: Karim K. Kanji
 * Date: 04/03/2019
 * Time: 22:38
 */
$conn=new mysqli("localhost","root","","emergency_response");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Emergency Response</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="icon" href="../ers_logo.jpg" type="image/x-icon"/>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <style>
        .card-custom {
            /* Add shadows to create the "card" effect */
            margin: 10px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 5px;
            padding: 10px 16px 50px;
        }
    </style>
</head>
<body>
<div class="card-custom">
<div class="container">
    <div style="text-align: center;"><h1 style="position: -webkit-sticky; position: sticky; top:0">Emergency
            Response</h1><img src="image.png" height="250px" alt="Location pin"><h3 class="text-success">Track your request:</h3>
    <form style="margin: 20px;">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Enter help code here..." name="trackid" value="<?php
            if(isset($_GET['trackid'])){
                echo $_GET['trackid'];}
                ?>">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit">Go</button>
            </div>
        </div>
    </form>
    <div class="card" style="margin: 20px;">
        <div class="card-body">
            <?php
            if(isset($_GET['trackid'])&& $_GET['trackid']!=''){
                $trackid = $_GET['trackid'];
                switch ($trackid[0]){
                    case 'M':
                        $sql = "SELECT assigned FROM user_request_paramedics where help_code = '$trackid'";
                        $result = $conn->query($sql);
                        if($result->num_rows>0){
                            while ($row = $result->fetch_assoc()){
                                if($row['assigned']=='yes'){
                                    echo "<h4>A paramedic team has been assigned and are on their way!</h4>";
                                }
                                else{
                                    echo "<h4>The request is still in queue</h4>";
                                }
                            }
                        }
                        else{
                            echo '<div class="alert alert-warning">No such help code exists</div>';
                        }
                        ;break;
                    case 'F':
                        $sql = "SELECT assigned FROM user_request_fire where help_code = '$trackid'";
                        $result = $conn->query($sql);
                        if($result->num_rows>0){
                            while ($row = $result->fetch_assoc()){
                                if($row['assigned']=='yes'){
                                    echo "<h4>A firefighter team has been assigned and are on their way!</h4>";
                                }
                                else{
                                    echo "<h4>The request is still in queue</h4>";
                                }
                            }
                        }
                        else{
                            echo '<div class="alert alert-warning">No such help code exists</div>';
                        }
                        ;break;
                    case 'N':
                        $sql = "SELECT assigned FROM user_request_rescue where help_code = '$trackid'";
                        $result = $conn->query($sql);
                        if($result->num_rows>0){
                            while ($row = $result->fetch_assoc()){
                                if($row['assigned']=='yes'){
                                    echo "<h4>A rescue team has been assigned and are on their way!</h4>";
                                }
                                else{
                                    echo "<h4>The request is still in queue</h4>";
                                }
                            }
                        }
                        else{
                            echo '<div class="alert alert-warning">No such help code exists</div>';
                        }
                        ;break;
                    default: echo '<div class="alert alert-warning">No such help code exists</div>';
                }
            }
            else{
                echo 'Please enter your help code.';
            }
            ?>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
