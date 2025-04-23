<?php
require_once 'database.php';

function get_safe_links() {
    $conn = db_connect();
    $query = "SELECT * FROM links";
    $result = $conn->query($query);
    $links = [];
    while ($row = $result->fetch_assoc()) {
        $links[] = $row;
    }
    $conn->close();
    return $links;
}

function add_safe_link($url, $redirect_url) {
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO links (url, redirect_url) VALUES (?, ?)");
    $stmt->bind_param("ss", $url, $redirect_url);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
