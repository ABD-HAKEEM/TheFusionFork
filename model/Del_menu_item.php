<?php
// menu_item.php
include_once dirname(__DIR__) . '/dbconnection.php';

// Delmenu_item.php
function DelProducts($productId) {
    global $conn;

    $sql = "DELETE FROM menu_items WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        throw new Exception("Failed to prepare the statement: " . $conn->error);
    }

    $stmt->bind_param("i", $productId); 

    // Execute the query
    if ($stmt->execute()) {
        return [
            "status" => "success",
            "message" => "Product deleted successfully."
        ];
    } else {
        throw new Exception("Failed to delete product: " . $stmt->error);
    }
}

?>
