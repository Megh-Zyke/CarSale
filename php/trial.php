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