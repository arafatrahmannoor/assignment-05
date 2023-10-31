<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    
   
    file_put_contents('users.txt', "$email:$password:$username\n", FILE_APPEND);

    header("Location: index.php");
}
?>
