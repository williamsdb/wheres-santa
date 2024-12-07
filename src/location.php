<?php

if ($_REQUEST['guid'] != '8020e13f-73d4-4778-a3be-4c17b179be97') die;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw POST data (JSON payload)
    $json_data = file_get_contents('php://input');

    // Decode the JSON data into a PHP array
    $data = json_decode($json_data, true);

    // Check if the data is valid
    if (is_array($data) && isset($data['latitude']) && isset($data['longitude'])) {
        $latitude = $data['latitude'];
        $longitude = $data['longitude'];

        file_put_contents("loc.txt", $latitude.','.$longitude);
    } else {
        // If the data is not valid
        http_response_code(400); // Bad request
    }
} else {
    // If it's not a POST request
    http_response_code(405); // Method Not Allowed
}

?>
