    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/styleBuying.css">
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
        <!-- buying page -->
        
        <div class="buyingPage" >
            <h1 style ="margin-left:10% ; margin-top:3.5%">Recently Added</h1>
            <div class="Buy">
                <?php
                include 'connect.php';

                $show_products = $conn->prepare("SELECT * FROM `cardetails` order by carID DESC");
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
                                    <ul>
                                    <li><span><?= $fetch_products['carBrand']; ?> <?= $fetch_products['carModel']; ?> </span>  <?= $fetch_products['carYear']; ?> Model </li> 
                                </div>
                             
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