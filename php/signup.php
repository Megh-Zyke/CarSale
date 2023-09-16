<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="wrapper" style="background-color: #f1f1f1">
        <div class="inner">

            <form class="signup-form" method="post" novalidate>
                <h3>SIGN UP</h3>
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name" class="form-control">
                </div>

                <div class="form-wrapper">
                    <input type="text" name="email" placeholder="Email Address" class="form-control">
                    <i class="zmdi zmdi-email"></i>
                </div>

                <div class="form-wrapper">
                    <input type="password" name="pass" placeholder="Password" class="form-control">
                    <i class="zmdi zmdi-lock"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" name="cpass" placeholder="Confirm Password" class="form-control">
                    <i class="zmdi zmdi-lock"></i>
                </div>
                <button>Register
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>

        </div>
    </div>

</body>

</html>

<?php

// validaton

if (empty($_POST['name'])) {
    die('Name is required');
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    die('Valid email is required');
}


if (strlen($_POST['pass']) < 8) {
    die('Password must atlest be 8 characters');
}

if (!preg_match("/[a-z]/i", $_POST['pass'])) {
    die("Password must atleast contain 1 letter");
}

if (!preg_match("/[0-9]/", $_POST['pass'])) {
    die("Password must contain atleast one number");
}

if ($_POST['pass'] !== $_POST['cpass']) {
    die('Passwords should match');
}

$password_hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);

include 'connect.php';

$sql = "INSERT INTO users (name,email,password_hash)
        VALUES (?,?,?)";

$name = $_POST['name'];
$email = $_POST['email'];


try {
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $email, $password_hash]);
    header("Location: login.php");
    exit();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>