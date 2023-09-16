<?php
$uri = $_SERVER['REQUEST_URI'];

if ($uri === 'php/car') {
    $carID = $_GET['id'];
} else {
    // Handle 404 Not Found
    http_response_code(404);
}
