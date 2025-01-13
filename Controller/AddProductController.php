<?php
include_once dirname(__DIR__) . '/model/Add_menu_item.php';

function AddProductController() {
    try {
        $input = json_decode(file_get_contents("php://input"), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception("Invalid JSON input: " . json_last_error_msg());
        }

        $requiredFields = ['name', 'description', 'price', 'category', 'image'];
        foreach ($requiredFields as $field) {
            if (!isset($input[$field]) || empty(trim($input[$field]))) {
                throw new Exception("Missing or invalid value for: $field");
            }
        }

        $stock_quantity = isset($input['stock_quantity']) && is_numeric($input['stock_quantity']) 
            ? (int) $input['stock_quantity'] 
            : 0;

        $response = AddProducts(
            $input['name'],
            $input['description'],
            (float)$input['price'],
            $input['category'],
            $stock_quantity,
            $input['image']
        );

        echo json_encode($response);
    } catch (Throwable $th) {
        http_response_code(400); // Bad Request
        echo json_encode([
            "status" => "error",
            "message" => $th->getMessage(),
        ]);
    }
}
?>
