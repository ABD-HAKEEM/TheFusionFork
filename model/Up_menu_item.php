<?php
include_once dirname(__DIR__) . '/dbconnection.php';

function UpdateProduct($id, $name, $description, $price, $category, $image_url, $sku) {
    global $conn;

    $sql = "UPDATE menu_items 
            SET name = ?, description = ?, price = ?, category = ?, image_url = ?, sku = ? 
            WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssdsisi", $name, $description, $price, $category, $image_url, $sku, $id);
        if ($stmt->execute()) {
            return true;
        } else {
            throw new Exception("Database query failed: " . $stmt->error);
        }
    } else {
        throw new Exception("Database query failed: " . $conn->error);
    }
}
