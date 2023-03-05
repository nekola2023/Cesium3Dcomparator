<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include the CesiumJS JavaScript and CSS files -->
    <script src="https://cesium.com/downloads/cesiumjs/releases/1.102/Build/Cesium/Cesium.js"></script>
    <link href="https://cesium.com/downloads/cesiumjs/releases/1.102/Build/Cesium/Widgets/widgets.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="cesiumContainer"></div>
        <script>
            // This is the default access token from your ion account
            Cesium.Ion.defaultAccessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJiNDFkMDE3Yi05NTRiLTQ5NmUtYTUzZC0wOWM3NThiZDQxNTYiLCJpZCI6MTI2MTk2LCJpYXQiOjE2NzcyNTUxOTR9.kYrd0bUaaMnpHGJbWi8zHW0krp3qRTraDDPga9ziIww';

            // Initialize the Cesium Viewer in the HTML element with the `cesiumContainer` ID.
            const viewer = new Cesium.Viewer('cesiumContainer', {
                terrainProvider: Cesium.createWorldTerrain()
                });    
            // Add Cesium OSM Buildings, a global 3D buildings layer.
            const buildingTileset = viewer.scene.primitives.add(Cesium.createOsmBuildings());   
            // Fly the camera to San Francisco at the given longitude, latitude, and height.
            viewer.camera.flyTo({
                destination : Cesium.Cartesian3.fromDegrees(-122.4175, 37.655, 400),
                orientation : {
                    heading : Cesium.Math.toRadians(0.0),
                    pitch : Cesium.Math.toRadians(-15.0),
                    }
                });
        </script>
    </div>
    
</body>
</html>