<?php
session_start();
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

if ($user_id === '') {
    header('location: login.php');
} else {
    echo $user_id;
}
?>




<!DOCTYPE html>
<html lang="en">





<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="Navbar">
        <div class="navbarHeading">
            <div class="navbartitle">
                <h1 class="title"> WheelZ4U </h1>
            </div>


            <div class="navbarsearch">
                <form action="">
                    <input type="text" name="search" id="search" placeholder="Search">
                    <button type="submit">Search</button>
                </form>
            </div>



            <div class="navbarLogin">
                <a href="signup.php">Signup</a>
            </div>
        </div>


        <!-- links in Navbar -->


        <div class="navbarLinks">
            <div class="Links">
                <ul>
                    <li><a href="../php/landingPage.php">Home</a></li>
                    <li><a href="../php/buy.php">Buy</a></li>
                    <li><a href="../html/sell.html">Sell</a></li>
                    <li><a href="../php/cartPage.php">Cart</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- buying page -->

    <div class="buyingPage">
        <div class="Buy">
            <?php
            include 'connect.php';


            $show_products = $conn->prepare("SELECT `cardetails`.*
                FROM cardetails
                INNER JOIN wishlist ON cardetails.carID = wishlist.carID
                where wishlist.userid = $user_id");
            $show_products->execute();
            if ($show_products->rowCount() > 0) {
                while ($fetch_products = $show_products->fetch(PDO::FETCH_ASSOC)) {
            ?>
                    <div class="cars">
                        <div class="carImage">
                            <a href="car.php?id=<?= $fetch_products['carID']; ?>">
                                <!-- Replace 'carID' with the actual column name containing the car's unique identifier -->
                                <img src="images/<?= $fetch_products['image']; ?>" alt="" class="img">
                            </a>

                        </div>
                        <div class="carDetails">
                            <div class="carName">
                                <h1><?= $fetch_products['carBrand']; ?> <?= $fetch_products['carModel']; ?></h1>
                            </div>
                            <ul class="details">
                                <li><?= $fetch_products['carYear']; ?> Model</li>
                                <li><?= $fetch_products['carKM']; ?> KM driven</li>
                                <li><?= $fetch_products['carFuel']; ?> </li>
                            </ul>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>
    </div>



</body>

</html>