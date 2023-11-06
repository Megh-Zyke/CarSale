<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter&family=Gabarito&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="Navbar">
        <div class="navbarHeading">
            <div class="navbartitle">
                <h1 class="title"> WheelZ4U </h1>
            </div>
            <div class="Links">
                <ul>
                    <li><a href="LandingPage.php">Home</a></li>
                    <li><a href="buy.php">Buy</a></li>
                    <li><a href="sellCars.php">Sell</a></li>
                    <li><a href="cartPage.php">Cart</a></li>
                </ul>
            </div>
            <div class="navbarLogin">
                <a href="">Login/Signup</a>
            </div>
        </div>
    </div>

    <!-- car information -->

    <div class="carInformation">
        <?php
        include 'connect.php';
        $carID = $_GET['id'];
        $show_products = $conn->prepare("SELECT * FROM `cardetails` where carID = $carID");
        $show_products->execute();
        $fetch_products = $show_products->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="carInfo">
            <div class="CarImage">
                <img src="images/<?= $fetch_products['image']; ?>" alt="" class="CarImg">
            </div>
            <h1>Cost of the Car : <?= $fetch_products['carPrice']; ?>     </h1>
            
            <form action= "" method="post">
                <!-- Added method="post" to the form -->
                <input type="hidden" value="<?= $fetch_products['carID']; ?>" name="carID">
                <!-- Add other hidden fields if needed -->
                <input type="submit" value="Like Car 🖤" name="cart" class="SubmitBtn">
            </form>
        </div>
        <div class="carDetails">
            <div class="CarDetails">
                <h1><?= $fetch_products['carBrand']; ?> <?= $fetch_products['carModel']; ?> </h1>
                <h3><?= $fetch_products['regno']; ?>  <?= $fetch_products['carBody']; ?></h3>
                <ul>
                    <li>Year Manufactured : <?= $fetch_products['carYear']; ?></li>
                    <li>Total Kilometers Driven : <?= $fetch_products['carKM']; ?></li>
                    <li>Car Body Type : <?= $fetch_products['carBody']; ?> </li>
                    <li>Car Transmission Type : <?= $fetch_products['Transmission']; ?></li>
                    <li>Car Fuel Type : <?= $fetch_products['carFuel']; ?></li>
                    <li>Car Engine Capacity : <?= $fetch_products['engine']; ?></li>
                    <li>Number of Seats in Car : <?= $fetch_products['seats']; ?> </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $carID = $_POST['carID'];

    try {
        include 'connect.php'; // Include the database connection

        $insert_query = $conn->prepare('INSERT INTO wishlist (carID) VALUES (:carID)');
        $insert_query->bindParam(':carID', $carID, PDO::PARAM_INT);
        $insert_query->execute();


    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>
