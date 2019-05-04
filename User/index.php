<!DOCTYPE html>
<html lang="en">
<head>
    <title>Emergency Response</title>
    <meta charset="utf-8">
    <link rel="icon" href="../ers_logo.jpg" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
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
        padding: 2px 16px;
    }
</style>
</head>
<body>
<!--This is what will be used to change the whole document-->
<div class="card-custom">
<div id="paintDocument">
    <div class="container" style="margin-top:20px">
        <div style="text-align: center;"><h1 style="position: -webkit-sticky; position: sticky; top:0">Emergency
                Response</h1><img src="image.png" height="250px" alt="Location pin"></div>
        <div class="row">
            <div class="mx-auto" style="margin-top:10px" id="content">
                <div style="text-align: center;">
                    <h4>We'd love to help</h4>
                    <p style="margin-bottom: 100px;">This application uses your device's location to get your position.
                        We'd
                        love to help you, however you have to allow our application to use your location,
                        if you wish to proceed, click or tap I AGREE and then turn device location on and
                        allow the application to use your location.</p>
                </div>
            </div>
        </div>
        <nav class="fixed-bottom navbar" id="button_manual">
            <button class="btn btn-success btn-block" onclick="startLocation()">I AGREE</button>
        </nav>
    </div>
</div>
<div id="createProceed"></div>
</div>
<script>
    let lat, long, manual, emergType, user, method, x = document.getElementById("demo");

    function startLocation() {
        /*Created by DevKing
        * This function basically calls the GeoLocation APIs to get the location from the device.
        * */

        /* Get the documentElement (<html>) to display the page in fullscreen */
        // var elem = document.documentElement;
        //
        // /* View in fullscreen */
        //
        //     if (elem.requestFullscreen) {
        //         elem.requestFullscreen();
        //     } else if (elem.mozRequestFullScreen) { /* Firefox */
        //         elem.mozRequestFullScreen();
        //     } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
        //         elem.webkitRequestFullscreen();
        //     } else if (elem.msRequestFullscreen) { /* IE/Edge */
        //         elem.msRequestFullscreen();
        //     }
        

        // call the actual APIs here using the getLoction Function.
        getLocation();

        // Change the content to a loader to show that it is getting the location
        document.getElementById('content').innerHTML = "<div style=\"text-align: center;\">\n" +
            "                <div id=\"show_loader\"><img src=\"loader.gif\" alt=\"loader\"></div>\n" +
            "                <h3 id=\"message_here\" style='margin-bottom: 100px'>Getting your location...</h3>\n" +
            "            </div>";

        // Also change the button at the bottom to reflect need help button disabled
        document.getElementById('button_manual').innerHTML = "<button class=\"btn btn-danger btn-block\" disabled>I NEED HELP</button>";
    }

    function getLocation() {
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
        document.getElementById("message_here").innerHTML = "Your location: <br/> Latitude: " + position.coords.latitude +
            "<br/>Longitude: " + position.coords.longitude;
        document.getElementById("show_loader").innerHTML = "";
        //Enable the button here and allow when clicked to call checkType of so that users can choose the type of emergency.
        document.getElementById("button_manual").innerHTML = '<button class="btn btn-danger btn-block" onclick="checkTypeof()"> I NEED HELP</button>';

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
        document.getElementById("message_here").innerHTML = output;
        document.getElementById("show_loader").innerHTML = "";
        //Changes the button to allow users ot give manual directions. When clicked, trigger goManual Function.
        document.getElementById("button_manual").innerHTML = ' <button onclick=\'goManual()\' class="btn btn-outline-danger btn-block" >Give manual directions</button>';
    }

    function checkTypeof() {
        // Change the UI to allow users to choose what type of emergency it is.
        document.getElementById("button_manual").innerHTML = '<h4 class="mx-auto">What Type of emergency?</h4>\n' +
            '        <button onclick="typeofEmergency(\'medical\')"  class="btn btn-primary btn-block">Medical</button >\n' +
            '        <button  onclick="typeofEmergency(\'fire\')" class="btn btn-primary btn-block">Fire</button >\n' +
            '        <button onclick="typeofEmergency(\'natural\')"  class="btn btn-primary btn-block">Natural Disaster</button >';
    }

    function typeofEmergency(type) {
        emergType = type;
        //document.location.assign("index4.html");
        //Paint the UI with new content
        document.getElementById("paintDocument").innerHTML = "<div class=\"container-fluid\" style=\"margin-top:20px\" id=\"main\">\n" +
            "    <div class=\"row\">\n" +
            "        <div class=\"mx-auto col-12\" style=\"margin-top:10px\">\n" +
            "            <center>\n" +
            "            <h1>😊</h1>\n" +
            "            <h4>We'll need your account for that!</h4>\n" +
            "            </center>\n" +
            "                <div>\n" +
            "            <form onsubmit='return authenticate()' method='post' class=\"collapse show\" data-parent=\"#main\">\n" +
            "                <label>Phone Number:</label>\n" +
            "                <input class=\"form-control\" required type=\"tel\" placeholder=\"Phone Number\" id=\"p_number\" autocomplete=\"phone number\" maxlength=\"13\">\n" +
            "                <label>Pin:</label>\n" +
            "                <input class=\"form-control\" required type=\"password\" autocomplete='current-password' id=\"pass_word\" placeholder=\"Pin\" maxlength=\"4\">\n" +
            "                 <br/><button class='btn btn-success btn-block' id=\"waitButton\">Authenticate</button>" +
            "            </form>\n" +
            "        </div>\n" +
            "        </div>\n" +
            "    </div>\n" +
            "    <div class=\"row\">\n" +
            "        <div class=\"col-12\">\n" +
            "            <br>\n" +
            "        <div class=\"alert alert-warning alert-dismissible\">\n" +
            "            <button type=\"button\" class=\"close collapse show\" data-parent=\"#main\" data-dismiss=\"alert\">&times;</button>\n" +
            "            <div class=\"collapse show\" data-parent=\"#main\"><strong>Don't have an account?</strong> Click <a href=\"#\" data-toggle=\"collapse\" data-target=\"#demo\">here to create one.</a></div>\n" +
            "            <div id=\"demo\" class=\"collapse\" data-parent=\"#main\">\n" +
            "                <strong>Let's create your account, real quick!</strong><br>\n" +
            "                <form onsubmit='return createNew()'>\n" +
            "                    <label>Full Name:</label>\n" +
            "                    <input class=\"form-control\" type=\"text\" id=\"fname\" placeholder=\"Full Name\" autocomplete=\"Full Name\"  required>\n" +
            "                    <label>Phone Number:</label>\n" +
            "                    <input class=\"form-control\" type=\"tel\" id=\"phoneNum\" placeholder=\"Phone Number\" autocomplete=\"phone number\" required>\n" +
            "                    <label>Pin:</label>\n" +
            "                    <input class=\"form-control\" type=\"password\" id=\"pin\" autocomplete='new-password' placeholder=\"Pin\" maxlength=\"4\" required>\n" +
            "                    <label>Confirm Pin:</label>\n" +
            "                    <input class=\"form-control\" type=\"password\" id=\"retPin\" autocomplete='new-password' placeholder=\"Confirm Pin\" maxlength=\"4\" required><br>\n" +
            "                    <input type=\"submit\" value=\"Create account!\" class=\"btn btn-success btn-block\" id=\"createBtn\">\n" +
            "                </form>\n" +
            "            </div>\n" +
            "        </div>\n" +
            "        </div>\n" +
            "    </div>\n" +
            "    <nav class=\"fixed-bottom navbar collapse show\" data-parent=\"#main\" id=\"buttonState\">\n" +
            "        <button class=\"btn btn-success btn-block disabled\">Let's continue</button>\n" +
            "    </nav>\n" +
            "</div>";

    }

    function authenticate() {
        let phne = document.getElementById('p_number').value;
        let pass = document.getElementById('pass_word').value;
        document.getElementById('waitButton').innerHTML = "Please wait  <div class=\"lds-ring\"><div></div><div></div><div></div><div></div></div>";
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                if (this.response === "1") {
                    document.getElementById('waitButton').innerHTML = "Authenticated";
                    document.getElementById('waitButton').className = "btn btn-success btn-block disabled";
                    document.getElementById('waitButton').disabled = true;
                    document.getElementById("buttonState").innerHTML = "<button onclick='finish()' class=\"btn btn-success btn-block\">Let's continue</button>";
                    user = phne;
                }
                else if (this.response === "3") {
                    document.getElementById('waitButton').innerHTML = "Your account was deleted!";
                    document.getElementById('waitButton').className = "btn btn-danger btn-block"
                }
                else if (this.response === "4") {
                    document.getElementById('waitButton').innerHTML = "Your account has been blocked!";
                    document.getElementById('waitButton').className = "btn btn-danger btn-block"
                }
                else {
                    document.getElementById('waitButton').innerHTML = "Failed authentication";
                    document.getElementById('waitButton').className = "btn btn-danger btn-block";
                }
            }
        };
        xmlhttp.open("POST", "auth.php?phone=" + phne + "&&pin=" + pass, true);
        xmlhttp.send();
        return false;
    }

    function createNew() {
        //Create variables that will be used to store local data
        let fname, phoneNum, pin, retPin, xmlhttp;
        // caoture the inputs from users
        fname = document.getElementById('fname').value;
        phoneNum = document.getElementById('phoneNum').value;
        pin = document.getElementById('pin').value;
        retPin = document.getElementById('retPin').value;
        document.getElementById('createBtn').innerHTML = "Please wait  <div class=\"lds-ring\"><div></div><div></div><div></div><div></div></div>";
        if (retPin !== pin) {
            document.getElementById('createBtn').value = "Passwords Don't match!";
            document.getElementById('createBtn').className = "btn btn-danger btn-block";
        } else {
            // Create an XMLHTTPRequest
            xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    if (this.response === "1") {
                        // if the response is 1 then successful
                        user = phoneNum;
                        document.getElementById('createBtn').value = "Successfully Created user";
                        document.getElementById("createBtn").disabled = true;
                        document.getElementById('createBtn').className = "btn btn-success btn-block disabled";
                        document.getElementById('createProceed').innerHTML = "<nav class=\"fixed-bottom navbar\" id=\"button_manual\">\n" +
                            "        <button onclick=\"finish()\" class=\"btn btn-success btn-block\">Let's continue</button>\n" +
                            "    </nav>";
                    } else if (this.response === "3") {
                        // if the response is 3 then unsuccessful because the user already exists
                        document.getElementById('createBtn').value = "Failed to create user: user exists.";
                        document.getElementById('createBtn').className = "btn btn-danger btn-block";
                    } else {
                        // if the response is 3 then unsuccessful because of any reason that it would have am error
                        document.getElementById('createBtn').value = "Failed to create user";
                        document.getElementById('createBtn').className = "btn btn-danger btn-block";
                    }
                }
            };
            xmlhttp.open("POST", "create.php?fname=" + fname + "&phoneNum=" + phoneNum + "&pass=" + retPin, true);
            xmlhttp.send();
        }
        return false;
    }

    function goManual() {
        // Paint the document with the instructions on going manual. Warn users
        document.getElementById("paintDocument").innerHTML = "<div class=\"container\" style=\"margin-top:20px\">\n" +
            "    <div style=\"text-align: center;\"><h1 style=\"position: -webkit-sticky; position: sticky; top:0\">Emergency Response</h1><img src=\"image.png\" height=\"250px\" alt=\"Location pin\"></div>\n" +
            "    <div class=\"row\">\n" +
            "        <div class=\"mx-auto\" style=\"margin-top:10px\">\n" +
            "            <div style=\"text-align: center;\">\n" +
            "                <h4>You need to know this:</h4>\n" +
            "                <p style=\"margin-bottom: 100px;\">Using manual directions, gives <b style=\"color:red\">the lowest priority</b> for any emergency, we recommend that you use geolocation for quick\n" +
            "                response. Just turn your device location on and allow the browser to use your location. Continue with caution.</p>\n" +
            "            </div>\n" +
            "        </div>\n" +
            "    </div>\n" +
            "    <nav class=\"fixed-bottom navbar\">\n" +
            "        <div class=\"input-group\">\n" +
            "            <textarea id=\"directionsman\" class=\"form-control\" style=\"border: 2px solid red; resize: none;\" placeholder=\"Type your directions here as clearly as possible.\"></textarea>\n" +
            "            <div class=\"input-group-append\">\n" +
            "                <button class=\"btn btn-danger\" onclick=\"goNext()\"><img src=\"send.svg\" alt=\"send\"></button>\n" +
            "            </div>\n" +
            "        </div>\n" +
            "    </nav>\n" +
            "</div>";
    }

    function goNext() {
        let directMan = document.getElementById('directionsman').value;
        if (directMan === "") {
            alert("Kindly fill in before submitting!")
        } else {
            manual = directMan;
            method = 2;
            document.getElementById('paintDocument').innerHTML = "<div class=\"container\" style=\"margin-top:20px\">\n" +
                "    <center><img src=\"image.png\" height=\"250px\"></center>\n" +
                "    <div class=\"row\">\n" +
                "        <div class=\"mx-auto\" style=\"margin-top:10px\">\n" +
                "            <h4>Manual Location:</h4>\n" +
                "            <h5 class='text-center align-content-center'>" + directMan + "</h5>\n" +
                "        </div>\n" +
                "    </div>\n" +
                "    <nav class=\"fixed-bottom navbar\">\n" +
                "        <h4 class=\"mx-auto\">What Type of emergency?</h4>\n" +
                "        <button onclick='typeofEmergency(\"medical\")'  class=\"btn btn-primary btn-block\">Medical</button >\n" +
                "        <button  onclick='typeofEmergency(\"fire\")' class=\"btn btn-primary btn-block\">Fire</button >\n" +
                "        <button onclick='typeofEmergency(\"natural\")'  class=\"btn btn-primary btn-block\">Natural Disaster</button >" +
                "    </nav>\n" +
                "</div>";
        }
    }

    function finish() {
        document.getElementById('createProceed').innerHTML ="";
        console.log(lat, long, manual, emergType, user, method);
        /*console.log(method);*/
        if (method === 1) {
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("paintDocument").innerHTML = this.response;
                }
            };
            xmlhttp.open("POST", "submit.php?long=" + long + "&lat=" + lat + "&phone=" + user + "&type=" + emergType, true);
            xmlhttp.send();
        } else if (method === 2) {
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("paintDocument").innerHTML = this.response;
                }
            };
            xmlhttp.open("POST", "submitManual.php?manual=" + manual + "&phone=" + user + "&type=" + emergType, true);
            xmlhttp.send();
        }
    }
    function tracker(helpcode){
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("paintDocument").innerHTML = this.response;
            }
        };
        xmlhttp.open("POST", "tracker.php?trackid="+helpcode, true);
        xmlhttp.send();
    }
</script>
</body>
</html>