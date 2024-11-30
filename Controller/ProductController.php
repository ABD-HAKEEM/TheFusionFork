<?php
// ProductController.php
include_once dirname(__DIR__) . '/model/menu_item.php';

function GetAllProducts() {
    try {
        $products = GetProducts(); // Fetch products from the database

        // Return JSON response
        return json_encode([
            "status" => "success",
            "data" => $products
        ]);
    } catch (\Throwable $th) {
        return json_encode([
            "status" => "error",
            "message" => "An error occurred: " . $th->getMessage()
        ]);
    }
}
