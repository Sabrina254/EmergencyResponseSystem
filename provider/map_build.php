<!DOCTYPE html>
<html class='use-all-space'>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta charset='UTF-8'>
    <title>Maps SDK for Web - Routing from my location</title>
    <meta name='viewport' content='width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no'/>
    <link rel='stylesheet' type='text/css' href='./sdk/map.css'/>
    <link rel='stylesheet' type='text/css' href='./css/elements.css'/>
    <script type='text/javascript' src='./js/form.js'></script>
    <script type='text/javascript' src='./sdk/tomtom.min.js'></script>
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
<body class='use-all-space'>
<div id='map' class='use-all-space'></div>
<script>
    // Define your product name and version
    tomtom.setProductInfo('<your-product-name>', '<your-product-version>');
    // Setting TomTom keys
    tomtom.routingKey('<your-tomtom-routing-API-key>');
    tomtom.searchKey('<your-tomtom-search-API-key>');

    // Creating map
    var map = tomtom.L.map('map', {
        key: '<your-tomtom-API-key>',
        source: 'vector',
        basePath: '<your-tomtom-sdk-base-path>'
    });
    map.zoomControl.setPosition('topright');

    var unitSelector = tomtom.unitSelector.getHtmlElement(tomtom.globalUnitService);
    var languageSelector = tomtom.languageSelector.getHtmlElement(tomtom.globalLocaleService, 'search');

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

    tomtom.controlPanel({
        position: 'bottomright',
        title: 'Settings',
        collapsed: true
    })
        .addTo(map)
        .addContent(unitRow)
        .addContent(langRow);

    // Adding the route inputs fields widget
    var routeInputs = tomtom.routeInputs().addTo(map);
    // Adding the route widget
    var routeOnMapView = tomtom.routeOnMap().addTo(map);

    // Connecting the routeInputs widget with the routeOnMap widget
    routeInputs.on(routeInputs.Events.LocationsFound, function(eventObject) {
        routeOnMapView.draw(eventObject.points);
    });
    routeInputs.on(routeInputs.Events.LocationsCleared, function(eventObject) {
        routeOnMapView.draw(eventObject.points);
    });

    // Show error in widget when location cannot be autodetected
    routeInputs.on(routeInputs.Events.LocationError, function() {
        routeInputs.showLocationNotFoundMessageBox();
    });

</script>
</body>
</html>