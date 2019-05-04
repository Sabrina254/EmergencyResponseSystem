<?php
$conn=new mysqli("localhost","root","","emergency_response");
session_start();
if(isset($_GET['helpcode']) && isset($_GET['lat']) && isset($_GET['long'])){
    $helpcode=$_GET['helpcode'];
    $lat=$_GET['lat'];
    $long = $_GET['long'];
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
<body class='use-all-space' onload="getLocation()">
<nav class="navbar navbar-expand-sm bg-light fixed-top" style="position:fixed -webkit-transform: translateZ(0); z-index: 900">
    <div class="navbar-brand">Attending to Case: Helpcode: <b><?php echo $helpcode; ?></b></div>
    <div class="d-flex order-lg-2 ml-auto">
        <div class="nav-item d-xs-flex">
            <button class="btn btn-success" data-toggle="modal" data-target="#success">Successfully attended</button>&nbsp;
            <button class="btn btn-danger" data-toggle="modal" data-target="#failed">Failed to attend</button>
        </div>
    </div>
</nav>
<div class='map-container use-all-space' style="position:fixed; margin-top:50px">
    <div id='map' class='use-all-space'></div>
</div>
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
<script>
    //window.setInterval(getLocation, 15000);
    let count = 0;
    var providerInitCoordinates;
    function getLocation(){
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
        if(count>=1)
        {
            map.removeLayer(providerMarker);
        }
        providerInitCoordinates = [position.coords.latitude, position.coords.longitude];
        providerMarker = tomtom.L.marker(providerInitCoordinates, {
            icon: providerIcon
        }).addTo(map);
        count++;
        //console.log(count);
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
        alert(output);

    }
    var providerIcon = tomtom.L.icon({
        iconUrl: './help.png',
        iconSize: [60, 60],
        iconAnchor: [15, 30],
        popupAnchor: [0, -30]
    });
    var providerMarker;
    var passengerInitCoordinates = [<?php echo $lat.','.$long;?>];
    var passengerIcon = tomtom.L.icon({
        iconUrl: './location_user.png',
        iconSize: [100, 100],
        iconAnchor: [15, 30],
        popupAnchor: [0, -30]
    });
    var passengerMarker;
    // Define your product name and version
    tomtom.setProductInfo('MapsWebSDKExamples', '4.46.3');
    var instructionMarker, groupMarkersLayer;
    // Setting TomTom keys
    tomtom.routingKey('zRkGs7jbAfpAACpCQaHHupocsDBXxcq2');
    tomtom.searchKey('VoIcxwLaGD4uAeQG7AE7YKs3qr8Zwlpi');

    // Creating map
    /*var map = tomtom.L.map('map', {
        key: '',
        source: 'vector',
        basePath: 'https://'+window.location.hostname+'/maps/sdk'
    });*/
    var map = tomtom.L.map('map', {
        key: 'mjUzsfLRmQosJiYSxdiZyPjL6XiUtK2x',
        center: passengerInitCoordinates,
        zoom: 16
    });
    passengerMarker = tomtom.L.marker(passengerInitCoordinates, {
        icon: passengerIcon
    }).addTo(map);
    map.zoomControl.setPosition('topright');
    var routingLocaleService = new tomtom.localeService();
    var unitSelector = tomtom.unitSelector.getHtmlElement(tomtom.globalUnitService);
    var languageSelector = tomtom.languageSelector.getHtmlElement(tomtom.globalLocaleService, 'search');
    var routingLanguageSelector = tomtom.languageSelector.getHtmlElement(routingLocaleService, 'routing');

    var unitRow = document.createElement('div');
    var unitLabel = document.createElement('label');
    unitLabel.innerHTML = 'Unit of measurement';
    unitLabel.appendChild(unitSelector);
    unitRow.appendChild(unitLabel);
    unitRow.className = 'input-container';

    var langRow = document.createElement('div');
    var langLabel = document.createElement('label');
    langLabel.innerHTML = 'Search language';
    langLabel.appendChild(languageSelector);
    langRow.appendChild(langLabel);
    langRow.className = 'input-container';

    var routingRow = document.createElement('div');
    var routingLabel = document.createElement('label');
    routingLabel.innerHTML = 'Routing language';
    routingLabel.appendChild(routingLanguageSelector);
    routingRow.appendChild(routingLabel);
    routingRow.className = 'input-container';

    tomtom.controlPanel({
        position: 'bottomright',
        title: 'Settings',
        collapsed: true
    })
        .addTo(map)
        .addContent(unitRow)
        .addContent(routingRow)
        .addContent(langRow);

    // Adding route-inputs widget
    var routeInputsInstance = tomtom.routeInputs().addTo(map);

    // Adding route-on-map widget
    var routeOnMapView = tomtom.routeOnMap({
        generalMarker: {
            draggable: true,
            zIndexOffset: 10
        },
        serviceOptions: {
            instructionsType: 'tagged'
        }
    }).addTo(map);

    // Adding route-instructions widget
    var routeInstructionsInstance = tomtom.routeInstructions({
        size: [240, 230],
        position: 'topleft',
        instructionGroupsCollapsed: true
    }).addTo(map);

    var lastEventObject;
    // Connecting route-inputs with route-on-map widget
    routeInputsInstance.on(routeInputsInstance.Events.LocationsFound, function(eventObject) {
        lastEventObject = eventObject;
        routeOnMapView.draw(eventObject.points);
    });
    routeInputsInstance.on(routeInputsInstance.Events.LocationsCleared, function(eventObject) {
        lastEventObject = eventObject;
        routeInstructionsInstance.hide();
        routeOnMapView.draw(eventObject.points);
    });

    // Connecting route-on-map with route-instructions widget
    routeOnMapView.on(routeOnMapView.Events.RouteChanged, function(eventObject) {
        routeInstructionsInstance.updateGuidanceData(eventObject.instructions);
    });

    // Update search inputs when the user change the route dragging the markers over the map
    routeOnMapView.on(routeOnMapView.Events.MarkerDragEnd, function(eventObject) {
        var location = eventObject.markerIndex === 0 ? routeInputsInstance.searchBoxes[0] :
            routeInputsInstance.searchBoxes.slice(-1)[0];
        location.setResultData(eventObject.object);
    });

    // Focus a instruction step in the map when the use select it on the route-instructions widget
    routeInstructionsInstance.on(routeInstructionsInstance.Events.InstructionClickedSelect, function(eventObject) {
        map.setView({lat: eventObject.point.latitude, lon: eventObject.point.longitude}, 14);
    });

    // Focus a instructions group in the map when the use select it on the route-instructions widget
    routeInstructionsInstance.on(routeInstructionsInstance.Events.InstructionGroupClickedExpand, function(eventObject) {
        zoomToPoints(eventObject.points);
    });
    routeInstructionsInstance.on(routeInstructionsInstance.Events.InstructionGroupClickedCollapse, function(eventObject) {
        zoomToPoints(eventObject.points);
    });

    // Show popups over the points in the map when the use move the cursor over the instruction steps
    routeInstructionsInstance.on(routeInstructionsInstance.Events.InstructionHoverOn, function(eventObject) {
        let position = {
            lat:  eventObject.point.latitude,
            lon: eventObject.point.longitude
        };
        instructionMarker = tomtom.L.marker(position, {
            icon: tomtom.L.icon({
                iconUrl: 'https://'+window.location.hostname+'/maps/sdk/img/instruction_marker.svg',
                iconSize: tomtom.L.Browser.retina ? [34, 34] : [20, 20],
                iconAnchor: tomtom.L.Browser.retina ? [17, 17] : [10, 10]
            }),
            zIndexOffset: 100
        });
        map.addLayer(instructionMarker);
        tomtom.L.popup({autoPan: false, maxWidth: 150}).setLatLng(position)
            .setContent(eventObject.message.toString()).openOn(map);
    });
    routeInstructionsInstance.on(routeInstructionsInstance.Events.InstructionHoverOff, function() {
        map.removeLayer(instructionMarker);
        instructionMarker = undefined;
        map.closePopup();
    });

    // Hightlight all the steps of a group in the map when the use move the cursor over an instructions group
    routeInstructionsInstance.on(routeInstructionsInstance.Events.InstructionGroupHoverOn, function(eventObject) {
        var markersForGroup = eventObject.points.map(function(instruction) {
            return tomtom.L.marker({
                lat: instruction.latitude,
                lon: instruction.longitude
            }, {
                icon: tomtom.L.icon({
                    iconUrl: 'https://'+window.location.hostname+'/maps/sdk/img/instruction_marker.svg',
                    iconSize: tomtom.L.Browser.retina ? [25, 25] : [15, 15],
                    iconAnchor: tomtom.L.Browser.retina ? [13, 13] : [7, 7]
                }),
                zIndexOffset: 100
            });
        });
        groupMarkersLayer = tomtom.L.layerGroup(markersForGroup);
        map.addLayer(groupMarkersLayer);
    });
    routeInstructionsInstance.on(routeInstructionsInstance.Events.InstructionGroupHoverOff, function() {
        map.removeLayer(groupMarkersLayer);
    });

    function zoomToPoints(points) {
        var latLons = points.map(function(point) {
            return tomtom.L.latLng(point.latitude,point.longitude);
        });
        map.fitBounds(tomtom.L.latLngBounds(latLons));
    }

    routingLocaleService.on(L.LocaleService.Events.LOCALE_CHANGED, function(evt) {
        var langCode = evt.getLanguageCode();
        routeOnMapView.options.serviceOptions.language = langCode;
        if (lastEventObject) {
            routeOnMapView.draw(lastEventObject.points);
        }
    });
    /*create route*/
   /* var route, colors = {
        car: '#F020E8',
        truck: '#F06368',
        taxi: '#F77A03',
        bus: '#1F9B9B',
        van: '#258541',
        motorcycle: '#FFFF00',
        bicycle: '#9E2776',
        pedestrian: '#1216F0'
    };
    function calculateRoute() {
        tomtom.routing({traffic: false})
            .locations(':52.36357,4.898046255')
            .go()
            .then(function(routeJson) {
                    if (route) {
                        map.removeLayer(route);
                    }
                    route = tomtom.L.geoJson(routeJson, {
                        style: {
                            color: colors['motorcycle'],
                            opacity: 0.7
                        }
                    }).addTo(map);
                    map.fitBounds(route.getBounds(), {padding: [5, 5]});
                }
            );
    }
    calculateRoute();*/
</script>
</body>
</html>