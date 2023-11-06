<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://kit.fontawesome.com/d7cff5fbbc.js" crossorigin="anonymous"></script>
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
 

<!-- 
  Main Page -->

  
  <div class="mainPage">
        <div class="block">
        </div>
        <img src="../image/cars/pngwing.com.png" alt="" class="homePageImage">

    <div class="landingPage">
        <h1 class = "LandingPageHeading" >Search for your next Dream Car</h1>
        <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <br><br>
        <h2>Get Your Dream Car Now !!!</h2>
       
        <form action="">
        <div>  
        <select name="carModel" id="carModel" class="carModel">
            <option value="" disabled select>Select Car Model</option>
            <option value="" ></option>
            <?php
   
            include 'connect.php'; // 


            $show_products = $conn->prepare("SELECT distinct(carBrand)  FROM `cardetails`");
            $show_products->execute();
            if ($show_products->rowCount() > 0) {
                while ($fetch_products = $show_products->fetch(PDO::FETCH_ASSOC)) {
            ?>
                    <option value="<?= $fetch_products['carBrand']; ?>"><?= $fetch_products['carBrand']; ?></option>  

            <?php
                }
            } else {  
              ?>  
                <option value="">No Car Brands Found</option>
            <?php
            }
            ?>
          
              </select>

          <select class="carBodyType" name="carBodyType">
            <option value="" disabled select>Select Car Body Type</option>
            <option value="" ></option>
            <option value="Convertible">Convertible</option>
            <option value="Crossover">Crossover</option>
            <option value="Hatchback">Hatchback</option>
            <option value="Sedan">Sedan</option>
            <option value="SUV">SUV</option>
            <option value="MUV">MUV</option>
            <option value="Super Car">Super Car</option>
          </select>
        </div>
        <div class="btnClass">
          <button type="submit" class="landingPageButton" >Search</button>
       </div>
        </form>
    </div>
  </div>
  




  <!-- Brands -->


  <div class="carBrands">
    <div class="Brandsdisplay">
      <h1> Brands you love and trust, all around you</h1>

      <div class="brands">
        <div class="brand">
          <img src="../image/logos/pngimg.com_-_car_logo_PNG1667-removebg-preview.png" alt="" class="brandimg">
        </div>

        <div class="brand">
          <img src="../image\logos\png-clipart-suzuki-car-logo-subaru-suzuki-angle-logo-removebg-preview.png" alt="" class="brandimg">
        </div>

        <div class="brand">
          <img src="../image/logos/kisspng-toyota-land-cruiser-prado-car-toyota-camry-solara-toyota-logo-5b2c8d319d3c97.1626403215296463856441-removebg-preview.png" alt="" class="brandimg">
        </div>


        <div class="brand">
          <img src="../image/logos/car_logo_PNG1658-removebg-preview.png" alt="" class="brandimg">
        </div>


        <div class="brand">
          <img src="../image/logos/car_logo_PNG1645-removebg-preview.png" alt="" class="brandimg">
        </div>
      </div>
    </div>
  </div>



  <!-- Featured Cars -->

  <h1 style="text-align:center;"> Check out some of our Featured Cars </h1>
              <div class="carsCard">

                <?php
                include 'connect.php';

                $show_products = $conn->prepare("SELECT * FROM `cardetails` order by carID  limit 3");
                $show_products->execute();
                if ($show_products->rowCount() > 0) {
                    while ($fetch_products = $show_products->fetch(PDO::FETCH_ASSOC)) {
                ?>
                  <div class="car-card">
                  <div class="car-card-inner">
                  <div class="car-image">
                  <img src="images/<?= $fetch_products['image']; ?>" alt="Car 1" class="car-img">
                  </div>
                  <div class="car-info">
                  <h2><?= $fetch_products['carBrand']; ?> <?= $fetch_products['carModel']; ?></h2>
                  <p><?= $fetch_products['carBody']; ?> </p>
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

                  <?php
                    }
                }
                ?>
      </div>

  <!-- customer Reviews -->

  <div class="views">

    <h1>Check out what our customers say ❤️</h1>
    <div class="customerViews">


      <div class="reviews">
        <div class="customer_Image">
          <img src="../image/People/Person 1 (1).jpg" alt="" class="customerImage">
        </div>

        <div class="Reviews">
          <div class="rating">
            <i class="fa-solid fa-star" style="color: #eff221;"></i><i class="fa-solid fa-star" style="color: #eff221;"></i><i class="fa-solid fa-star" style="color: #eff221;"></i>
            <i class="fa-solid fa-star"></i>
          </div>

          <div class="abstract">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab aliquid nulla, veritatis iusto
            itaque reiciendis mollitia nostrum tempora non corporis natus odio quasi praesentium autem nihil
            magni maxime porro impedit!
          </div>
        </div>
      </div>


      <div class="reviews">
        <div class="customer_Image">
          <img src="../image/People/Person 1 (2).jpg" alt="" class="customerImage">
        </div>

        <div class="Reviews">
          <div class="rating">
            <i class="fa-solid fa-star" style="color: #eff221;"></i>
            <i class="fa-solid fa-star" style="color: #eff221;"></i>
            <i class="fa-solid fa-star" style="color: #eff221;"></i>
            <i class="fa-solid fa-star" style="color: #eff221;"></i>
            <i class="fa-solid fa-star" style="color: #eff221;"></i>
          </div>

          <div class="abstract">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab aliquid nulla, veritatis iusto
            itaque reiciendis mollitia nostrum tempora non corporis natus odio quasi praesentium autem nihil
            magni maxime porro impedit!
          </div>
        </div>
      </div>


      <div class="reviews">
        <div class="customer_Image">
          <img src="../image/People/Person 1 (3).jpg" alt="" class="customerImage">
        </div>

        <div class="Reviews">
          <div class="rating">
            <i class="fa-solid fa-star" style="color: #eff221;"></i>
            <i class="fa-solid fa-star" style="color: #eff221;"></i>
            <i class="fa-solid fa-star" style="color: #eff221;"></i>
            <i class="fa-solid fa-star" style="color: #eff221;"></i>
            <i class="fa-solid fa-star" style="color: #eff221;"></i>
          </div>

          <div class="abstract">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab aliquid nulla, veritatis iusto
            itaque reiciendis mollitia nostrum tempora non corporis natus odio quasi praesentium autem nihil
            magni maxime porro impedit!
          </div>
        </div>


      </div>
    </div>
  </div>
</body>

</html>