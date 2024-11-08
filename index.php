<?php
$username ="1";
$password ="1";
if (isset($_POST)){
    $getusername = $_POST['username'];
    $getpassword = $_POST['password'];
    
    if ($username === $getusername && $password === $getpassword) {
          echo "تم تسجيل الدخول";
          header('location: login.php');
    } else {
        echo "  ";
    }
}
?>
