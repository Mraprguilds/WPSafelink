<?php
require_once '../includes/functions.php';

$links = get_safe_links();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - WPSafelink</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <a href="settings.php">Settings</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>URL</th>
                <th>Redirect URL</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($links as $link): ?>
                <tr>
                    <td><?php echo $link['id']; ?></td>
                    <td><?php echo $link['url']; ?></td>
                    <td><?php echo $link['redirect_url']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
