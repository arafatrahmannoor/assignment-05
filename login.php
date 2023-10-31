<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

  
    $users = file('users.txt', FILE_IGNORE_NEW_LINES);
    
    foreach ($users as $user) {
        list($storedEmail, $storedPassword, $username) = explode(':', $user);
        if ($email === $storedEmail && password_verify($password, $storedPassword)) {
         
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            
            if ($email === 'admin@example.com') {
                header("Location: admin.php");
            } else {
                header("Location: user.php");
            }
            exit();
        }
    }
    
   
    header("Location: index.php");
}
?>
