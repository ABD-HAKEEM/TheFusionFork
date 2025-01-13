<?php
include_once dirname(__DIR__) . '/model/Up_menu_item.php';

function UpdateProductDetails() {
    // Get input data from the POST request
    $inputData = json_decode(file_get_contents("php://input"), true);

    // Extract data
    $id = $inputData['id'] ?? null;
    $name = $inputData['name'] ?? null;
    $description = $inputData['description'] ?? null;
    $price = $inputData['price'] ?? null;
    $category = $inputData['category'] ?? null;
    $image_url = $inputData['image_url'] ?? null;
    $sku = $inputData['sku'] ?? null;

    // Validate inputs
    if (!$id || !$name || !$description || !$price || !$category) {
        return json_encode([
            "status" => "error",
            "message" => "All fields are required."
        ]);
    }

    try {
        // Update the product in the database
        $result = UpdateProduct($id, $name, $description, $price, $category, $image_url, $sku);

        if ($result) {
            return json_encode([
                "status" => "success",
                "message" => "Product updated successfully."
            ]);
        } else {
            return json_encode([
                "status" => "error",
                "message" => "Failed to update product."
            ]);
        }
    } catch (Exception $e) {
        return json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]);
    }
}
