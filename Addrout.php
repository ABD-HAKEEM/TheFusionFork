<?php
include_once "dbconnection.php";
include_once __DIR__ . '/Controller/AddProductController.php';
// Set JSON content type
header('Content-Type: application/json');

// Parse the request URL
$requestURL = trim($_SERVER['REQUEST_URI'], '/');

// Route to handle fetching products
if ($requestURL === 'Addrout.php') {
    try {
        echo AddProductController(); 
    } catch (Exception $e) {
        echo json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]);
    }
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Endpoint not found"
    ]);
}