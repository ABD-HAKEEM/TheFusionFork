<?php
// ProductController.php
include_once dirname(__DIR__) . '/model/Del_menu_item.php';

function DelAllProducts() {
    try {
        // Retrieve the product ID from the POST request
        $input = json_decode(file_get_contents("php://input"), true);
        if (!isset($input['id'])) {
            throw new Exception("Product ID is required.");
        }

        $productId = $input['id'];
        $response = DelProducts($productId); // Pass the ID to DelProducts

        // Return JSON response
        return json_encode([
            "status" => "success",
            "message" => "Product deleted successfully."
        ]);
    } catch (\Throwable $th) {
        return json_encode([
            "status" => "error",
            "message" => "An error occurred: " . $th->getMessage()
        ]);
    }
}

?>
