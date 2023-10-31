<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['email'] !== 'admin@example.com') {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?> (Admin)</h1>
   
</body>
</html>
