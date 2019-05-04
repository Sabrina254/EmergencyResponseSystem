<?php
session_start();
$conn = new mysqli("localhost", "root", "", "emergency_response");
if ($_SESSION['fullname'] == null) {
    header('location: ./');
    die();
} else {
    $username = $_SESSION['fullname'];
    $acronym = $_SESSION['initials'];
    $phone = $_SESSION['phone'];
    $email = $_SESSION['email'];
    $uname = $_SESSION['uname'];
    $u_id=$_SESSION['u_id'];
}
?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en"/>
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="../ers_logo.jpg" type="image/x-icon"/>
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Admin | Emergency Response System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="./assets/js/require.min.js"></script>
    <script>
        requirejs.config({
            baseUrl: '.'
        });
    </script>
    <!-- Dashboard Core -->
    <link href="./assets/css/dashboard.css" rel="stylesheet"/>
    <script src="./assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="./assets/plugins/charts-c3/plugin.css" rel="stylesheet"/>
    <script src="./assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="./assets/plugins/maps-google/plugin.css" rel="stylesheet"/>
    <script src="./assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="./assets/plugins/input-mask/plugin.js"></script>
</head>
<body class="">
<div class="page">
    <div class="page-main">
        <div class="header py-4 sticky-top">
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
                    <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse"
                       data-target="#headerMenuCollapse">
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
                                <a href="./manual.php" class="nav-link"><i class="fe fe-edit"></i> Manual
                                    Intervention</a>
                            </li>
                            <li class="nav-item">
                                <a href="./provider.php" class="nav-link"><i class="fe fe-edit"></i> Service providers</a>
                            </li>
                            <li class="nav-item">
                                <a href="./users.php" class="nav-link"><i class="fe fe-user"></i> Users</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active"><i class="fe fe-settings"></i>Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-3 my-md-5">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-title">
                        Settings
                    </h1>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-profile">
                            <div class="card-header"
                                 style="background-image: url(demo/photos/eberhard-grossgasteiger-311213-500.jpg);"></div>
                            <div class="card-body text-center">
                                <span class="avatar avatar-xxl mr-5 card-profile-img"><?php echo $acronym; ?></span>
                                <h3 class="mb-3"><?php echo $username; ?></h3>
                                <p class="mb-4">
                                    Administrator - Medical
                                </p>
                                <a class="btn btn-outline-primary btn-sm" href="logout.php">
                                    <span class="fe fe fe-log-out"></span> Logout
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">My Profile</h3>
                            </div>
                            <div class="card-body">
                                <?php
                                if(isset($_POST['updateprofile'])){
                                    $modfullname = $_POST['mod_fname'];
                                    $modusername = $_POST['mod_uname'];
                                    $modemail = $_POST['mod_email'];
                                    $modphone=$_POST['mod_phonenum'];
                                    $modpass= $_POST['currentpass'];
                                    $newpass = $_POST['newpass'];
                                    $newencrypt = password_hash($newpass,PASSWORD_BCRYPT);
                                    $sqlconf="SELECT Moderator_information_pin FROM moderator_information WHERE id_Moderator_information='$u_id'";
                                    $sqlconfres = $conn->query($sqlconf);
                                    if($sqlconfres->num_rows>0){
                                        while($row=$sqlconfres->fetch_assoc()){
                                            if(password_verify($modpass,$row['Moderator_information_pin'])){
                                            if($newpass==''){
                                                 $sql ="UPDATE moderator_information SET Moderator_information_name='$modfullname',Moderator_information_phone='$modphone',moderator_email='$modemail ',moderator_username='$modusername' WHERE id_Moderator_information ='$u_id'";
                                             }
                                            else{
                                                $sql ="UPDATE moderator_information SET Moderator_information_name='$modfullname',Moderator_information_phone='$modphone',moderator_email='$modemail ',moderator_username='$modusername', Moderator_information_pin='$newencrypt' WHERE id_Moderator_information ='$u_id'";
                                            }
                                            $resultmod = $conn->query($sql);
                                            if($resultmod===true){
                                                $_SESSION['phone'] = $modphone;
                                                $_SESSION['email']= $modemail;
                                                $_SESSION['uname']= $modusername;
                                                $_SESSION['fullname']=$modfullname;
                                                $namep = explode(" ",$modusername);
                                                $acronym ="";
                                                foreach($namep as $w){
                                                    $acronym .=$w[0];
                                                }
                                                $_SESSION['initials']= $acronym;
                                                echo "<div class='alert alert-success'><b>Success!</b> Your credentials have been successfully updated. Please logout to update the current session or click <a href='./settings.php'>here</a> to refresh.</div>";
                                            }
                                         }
                                            else{
                                                echo "<div class='alert alert-danger'>The pin you have entered is incorrect!</div>";
                                            }
                                        }
                                    }

                                }
                                ?>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label class="form-label">Full Name</label>
                                        <input class="form-control" placeholder="Full name" required
                                                name='mod_fname' value="<?php echo $username ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Username</label>
                                        <input class="form-control" placeholder="Username" required
                                               name='mod_uname' value="<?php echo $uname ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email-Address</label>
                                        <input class="form-control" placeholder="Email Address" required
                                              name='mod_email' value="<?php echo $email ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Phone Number</label>
                                        <input class="form-control" placeholder="Phone Number" required
                                               name='mod_phonenum' value="<?php echo $phone ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Current Pin</label>
                                        <input type="password" maxlength="4" minlength="4" class="form-control" placeholder="Current Pin"
                                              name='currentpass' required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">New Pin:
                                            <span class="form-label-small">(Leave blank to leave unchanged)</span>
                                        </label>
                                        <input type="password" maxlength="4" minlength="4" class="form-control" placeholder="New Password"
                                               name="newpass"/>
                                    </div>
                                    <div class="form-footer">
                                        <button class="btn btn-primary btn-block" name="updateprofile">Update profile</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Emergency category</h3>
                            </div>
                            <div class="card-body">
                                <?php
                                if(isset($_POST['addcat'])){
                                    $catname=$_POST['catname'];
                                    $catdescription=$_POST['catdescription'];
                                    $sqlcat = "INSERT INTO emergency_categories(emergency_categories_name, emergency_categories_description) VALUES ('$catname','$catdescription')";
                                    $rescat = $conn->query($sqlcat);
                                    if($rescat===true){
                                        echo "<div class='alert alert-success'><strong>Success!</strong> The category ".$catname." has been added!</div>";
                                    }
                                    else{
                                        echo "<div class='alert alert-danger'><strong>Failed!</strong> The category ".$catname." could not been added!</div>";
                                    }
                                }
                                ?>
                                <form method="post">
                                    <div class="form-group">
                                        <label class="form-label">Category name</label>
                                        <input class="form-control" placeholder="Category Name"  name="catname" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Category Description</label>
                                        <textarea placeholder="Add Category Description here"
                                                  class="form-control" name="catdescription" required></textarea>
                                    </div>
                                    <div class="form-footer">
                                        <button class="btn btn-primary btn-block" name="addcat">Add Category</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add new Moderator</h3>
                            </div>
                            <div class="card-body">
                                <?php
                                if (isset($_POST['addmodbtn'])) {
                                    if ($conn->connect_error) {
                                        //on failure
                                        echo '<div class="alert alert-danger"><button data-dismiss="alert" class="close"></button><b>Failed!</b> There was a problem logging you in. </div>';
                                    } else {
                                        $password = $_POST['secret'];
                                        $sql = "SELECT * FROM moderator_information WHERE (moderator_email='$username' OR moderator_username='$username')";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            //on success
                                            while ($row = $result->fetch_assoc()) {
                                                if (password_verify($password, $row['Moderator_information_pin'])) {
                                                    $username = $_SESSION['fullname'];
                                                    $stmt = $conn->prepare("INSERT INTO moderator_information(Moderator_information_name, Moderator_information_phone, moderator_email, moderator_username, Moderator_information_pin, ec_id_emergency_categories, level_assignment_id_level_assignment) VALUES (?,?,?,?,?,?,?)");
                                                    $stmt->bind_param("sssssss", $name, $phone, $email, $usernamenew, $pin, $category, $level);
                                                    $name = "New Moderator";
                                                    $phone = "07----------";
                                                    $email = "----@----.com";
                                                    $pin = password_hash("1234", PASSWORD_BCRYPT);
                                                    $usernamenew = $_POST['username'];
                                                    $category = $_POST['category'];
                                                    $level = $_POST['assignment'];
                                                    if ($stmt->execute()) {
                                                        //on success
                                                        echo '<div class="alert alert-success"><button data-dismiss="alert" class="close"></button><b>Success!</b> ' . $usernamenew . ' has been added as a moderator.</div>';
                                                    } else {
                                                        //on wrong credentials
                                                        echo '<div class="alert alert-danger"><button data-dismiss="alert" class="close"></button><b>An error has occurred!</b> Something wrong has happened and our engineers have been notified about the error!' . $conn->error . '</div>';
                                                    }
                                                    $stmt->close();
                                                }
                                            }
                                        }
                                    }
                                }
                                ?>
                                <div class="alert alert-warning">
                                    New moderators will use their username and the password: <b class="text-success">1234</b> to login
                                    after which they can change their details in settings page.
                                </div>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label class="form-label">Username</label>
                                        <input class="form-control" placeholder="Username" name="username" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Category</label>
                                        <select class="form-control" required name="category">
                                            <option>Select one</option>
                                            <?php
                                            $sql = "SELECT id_emergency_categories,emergency_categories_name FROM emergency_categories";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<option value="' . $row["id_emergency_categories"] . '">' . $row["emergency_categories_name"] . '</option>';
                                                }
                                            } else {
                                                echo "<option>No category defined</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Assignment</label>
                                        <select class="form-control" required name="assignment">
                                            <option>Select one</option>
                                            <?php
                                            //assignment categories
                                            $sql = "SELECT id_level_assignment,level_assignment_name FROM level_assignment";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<option value="' . $row["id_level_assignment"] . '">' . $row["level_assignment_name"] . '</option>';
                                                }
                                            } else {
                                                echo "<option>No category defined</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Your Password
                                            <span class="form-label-small">(The one creating the moderator)</span>
                                        </label>
                                        <input type="password" class="form-control" placeholder="Your Password"
                                               name="secret" required/>
                                    </div>
                                    <div class="form-footer">
                                        <button class="btn btn-primary btn-block" name="addmodbtn">Add moderator
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Assignment Level</h3>
                            </div>
                            <div class="card-body">
                                <?php
                                if(isset($_POST['addlevel'])){
                                    $levelname=$_POST['levelname'];
                                    $leveldescription=$_POST['leveldescription'];
                                    $sqllevel = "INSERT INTO level_assignment(level_assignment_name, level_assignment_description) VALUES ('$levelname','$leveldescription')";
                                    $reslevel = $conn->query($sqllevel);
                                    if($reslevel===true){
                                        echo "<div class='alert alert-success'><strong>Success!</strong> The level ".$levelname." has been added!</div>";
                                    }
                                    else{
                                        echo "<div class='alert alert-danger'><strong>Failed!</strong> The category ".$levelname." could not been added!</div>";
                                    }
                                }
                                ?>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label class="form-label">Level Name</label>
                                        <input class="form-control" placeholder="Level Name"  name="levelname" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Level Description</label>
                                        <textarea placeholder="Add Category Description here"
                                                  class="form-control" name="leveldescription" required></textarea>
                                    </div>
                                    <div class="form-footer">
                                        <button class="btn btn-primary btn-block" name="addlevel">Add level</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
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
                <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                    Copyright © 2019 <a href=".">Emergency Response</a>.
                </div>
            </div>
        </div>
    </footer>
</div>
<script>
    function updateProfile() {
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById('showupdatemessage').innerHTML = this.response;
            }
        };
        xmlhttp.open("POST", "./source/updateprofile.php", true);
        xmlhttp.send();
        return false;
    }

    /*function addmod() {
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById('showaddmodmessage').innerHTML = this.response;
            }
        };
        xmlhttp.open("POST", "./source/addmoderator.php", true);
        xmlhttp.send();
        return false;
    }*/
</script>
</body>
</html>