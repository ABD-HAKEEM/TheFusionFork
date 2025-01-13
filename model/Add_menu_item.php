<?php
include_once dirname(__DIR__) . '/dbconnection.php'; // Ensure correct path

function AddProducts($name, $description, $price, $category, $stock_quantity, $image) {
    global $conn; // Ensure access to the global $db object

    if (!$conn) {
        throw new Exception("Database connection is not established.");
    }

    $query = "
        INSERT INTO menu_items (name, description, price, category, stock_quantity, image, is_available)
        VALUES (?, ?, ?, ?, ?, ?, ?)
    ";

    $stmt = $conn->prepare($query);
    if (!$stmt) {
        throw new Exception("Statement preparation failed: " . $conn->error);
    }

    $is_available = 1; // Default availability

    if (!$stmt->bind_param("ssdssis", $name, $description, $price, $category, $stock_quantity, $image, $is_available)) {
        throw new Exception("Parameter binding failed: " . $stmt->error);
    }

    if (!$stmt->execute()) {
        throw new Exception("Database error: " . $stmt->error);
    }

    return [
        "status" => "success",
        "message" => "Product added successfully",
        "data" => [
            "id" => $stmt->insert_id,
            "name" => $name,
            "description" => $description,
            "price" => $price,
            "category" => $category,
            "stock_quantity" => $stock_quantity,
            "is_available" => $is_available,
            "image" => $image,
        ],
    ];
}
?>
