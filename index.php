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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

      <style>
              body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f1f1f1;
    }
    </style>
</head>
<body>
    <div>
    <form action="" method="POST">

            <label for="user">Email:</label><br>
            <input type="user" id="user" name="user" required placeholder="user"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required placeholder="password"><br>
            <input type="submit" value="Submit"><br>
    </form>    
    </div>
</body>
</html>
