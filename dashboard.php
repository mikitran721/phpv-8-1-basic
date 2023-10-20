<?php
session_start();
if (isset($_SESSION['email'])) {
    echo "Email from session: " . $_SESSION['email'];
    echo "<a href='/logout.php'>Log out</a>";
} else {
    echo "Welcome to Dashboard page";
    echo "<a href='/session.php'>Back to login</a>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check session</title>
</head>

<body>
    <h2>This is session page</h2>
</body>

</html>