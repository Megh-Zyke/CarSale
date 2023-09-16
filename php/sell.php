<?php
include 'connect.php';

echo "<pre>";
print_r($_FILES);
echo "</pre>";


// session_start();

// $admin_id = $_SESSION['admin_id'];

// if (!isset($admin_id)) {
//    header('location:admin_login.php');
// };

if (isset($_POST['add_product'])) {

    $regno = $_POST['carRegisteration'];
    $regno = filter_var($regno, FILTER_SANITIZE_STRING);

    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'images/' . $image;

    $brand = $_POST['carBrandName'];
    $brand = filter_var($brand, FILTER_SANITIZE_STRING);

    $model = $_POST['carModelName'];
    $model = filter_var($model, FILTER_SANITIZE_STRING);

    $carYear = $_POST['carYear'];
    $carYear = filter_var($carYear, FILTER_SANITIZE_STRING);


    $carKM = $_POST['carKilometers'];
    $carKM = filter_var($carKM, FILTER_SANITIZE_STRING);


    $carPrice = $_POST['carPrice'];
    $carPrice = filter_var($carPrice, FILTER_SANITIZE_STRING);


    $fuel = $_POST['carFuelType'];
    $fuel = filter_var($fuel, FILTER_SANITIZE_STRING);


    $transmisson = $_POST['carTransmission'];
    $transmisson = filter_var($transmisson, FILTER_SANITIZE_STRING);


    $body = $_POST['carBodyType'];
    $body = filter_var($body, FILTER_SANITIZE_STRING);


    $engine = $_POST['carEngineCapacity'];
    $engine = filter_var($engine, FILTER_SANITIZE_STRING);


    $seat = $_POST['carSeats'];
    $seat = filter_var($seat, FILTER_SANITIZE_STRING);


    move_uploaded_file($image_tmp_name, $image_folder);

    $insert_product = $conn->prepare("INSERT INTO `cardetails`(regno,image, carBrand, carModel , carYear , carKM , carPrice , carFuel , Transmission , carBody , engine , seats) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
    $insert_product->execute([$regno, $image, $brand, $model, $carYear, $carKM, $carPrice, $fuel, $transmisson, $body, $engine, $seat]);

    $message[] = 'New product added!';

    header('location:../php/buy.php');
}
