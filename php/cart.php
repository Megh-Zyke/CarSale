<?php

session_start();
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

if ($user_id === '') {
    header('location: login.php');
} else {
    echo $user_id;
}

include 'connect.php';


if (isset($_POST['cart'])) {
    $id = $_POST['carID'];
    $id = filter_var($id, FILTER_SANITIZE_STRING);

    $insert_product = $conn->prepare("INSERT INTO `wishlist`(carID , userid) VALUES(?,?)");
    if ($insert_product->execute([$id, $user_id])) {
        echo "Added to checklist";
    }

    header('location:../php/buy.php');
}
