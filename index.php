<?php
require_once 'includes/functions.php';

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    $links = get_safe_links();
    foreach ($links as $link) {
        if ($link['url'] === $url) {
            header('Location: ' . $link['redirect_url']);
            exit;
        }
    }
    echo "Invalid link!";
} else {
    echo "No URL specified.";
}
?>
