<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Display</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</head>
<body>
<?php
    $file=file_get_contents('loc.txt');
    $loc=explode(',',$file);
?>

    <input type="hidden" id="lat" name="lat" value="<?php echo $loc[0] ?>">
    <input type="hidden" id="long" name="long" value="<?php echo $loc[1] ?>">
    <div id="map" style="width: 100%; height: 400px;"></div>

    <script src="map.js"></script>
</body>
</html>

