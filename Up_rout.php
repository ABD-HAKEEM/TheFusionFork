<?php
include_once "dbconnection.php";
include_once __DIR__ . '/Controller/Up_ProductController.php';

// Set JSON content type
header('Content-Type: application/json');

// Check request method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Decode the JSON input
    $inputData = json_decode(file_get_contents("php://input"), true);

    if (isset($inputData['id'])) {
        echo UpdateProductDetails($inputData); // Call the controller function
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Product ID is required"
        ]);
    }
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid request method"
    ]);
}
