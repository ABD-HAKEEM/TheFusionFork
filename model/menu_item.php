<?php
// menu_item.php
include_once dirname(__DIR__) . '/dbconnection.php';

function GetProducts() {
    global $conn;

    $sql = "SELECT * FROM menu_items";
    $result = $conn->query($sql);

    $products = [];
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    } else {
        throw new Exception("Database query failed: " . $conn->error);
    }

    return $products;
}
