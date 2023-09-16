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
                <a href="">Login/Signup</a>
            </div>
        </div>


        <!-- links in Navbar -->


        <div class="navbarLinks">
            <div class="Links">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Buy</a></li>
                    <li><a href="">Sell</a></li>
                    <li><a href="">Cart</a></li>
                </ul>
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

            <div class="CarDetails">
                <h1><?= $fetch_products['carBrand']; ?> <?= $fetch_products['carModel']; ?> </h1>
                <h3><?= $fetch_products['regno']; ?></h3>

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

        <div class="CarPrice">
            <h1>Cost of the Car : <?= $fetch_products['carPrice']; ?></h1>

            <form action="cart.php" method="post">
                <!-- Added method="post" to the form -->
                <input type="hidden" value="<?= $fetch_products['carID']; ?>" name="carID">
                <!-- Add other hidden fields if needed -->
                <input type="submit" value="Add to Cart" name="cart" class="SubmitBtn">
            </form>

            <div class="consumerDetails">
                Click here to get Sellers Details
            </div>
        </div>

    </div>
</body>

</html>