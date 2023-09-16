<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Log in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="wrapper" style="background-color: #f1f1f1">
        <div class="inner">


            <form action="" class="login-form" method="POST">

                <h3>LOG IN</h3>
                <div class="form-wrapper">
                    <input type="text" name="email" placeholder="Email Address" class="form-control">
                    <i class="zmdi zmdi-email"></i>
                </div>

                <div class="form-wrapper">
                    <input type="password" name="pass" placeholder="Password" class="form-control">
                    <i class="zmdi zmdi-lock"></i>
                </div>

                <button type="submit">Log in
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>

        </div>
    </div>

</body>

</html>

<?php

include 'connect.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $password = $_POST['pass'];

    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND validation = 1");
    $select_user->execute([$email]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);

    if ($select_user->rowCount() > 0 && password_verify($password, $row['password_hash'])) {

        $_SESSION['user_id'] = $row['id'];
        header('location: landingPage.php');
        exit();
    } else {
        $message[] = 'Incorrect username or password!';
    }
}

?>