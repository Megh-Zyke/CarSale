<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://kit.fontawesome.com/d7cff5fbbc.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <div class="Navbar">
    <div class="navbarHeading">
      <div class="navbartitle">
        <h1 class="title"> WheelZ4U </h1>
      </div>


      <form action="search.php" method="post" style="width : 100%; display :flex ; justify-content : center">

        <div class="navbarsearch">
          <form action="">
            <input type="text" name="search" id="search" placeholder="Search">
            <button type="submit" name='submit'>Search</button>
          </form>
        </div>
      </form>


      <div class="navbarLogin">
        <a href="">Login/Signup</a>
      </div>
    </div>


    <!-- links in Navbar -->


    <div class="navbarLinks">
      <div class="Links">
        <ul>
          <li><a href="landingPage.php">Home</a></li>
          <li><a href="buy.php">Buy</a></li>
          <li><a href="../html/sell.html">Sell</a></li>
          <li><a href="cartPage.php">Cart</a></li>
        </ul>
      </div>
    </div>
  </div>




  <!-- Landing Page -->
  <div class="mainPage">
    <div class="landingPageWallpaper">
      <div class="searchBox">
        <h1>Search for your next Dream Car</h1>
        <form action="">
          <select name="carModel" id="carModel" class="carModel">
            <option value="" disabled select>Select Car Model</option>
          </select>

          <select class="carBodyType" name="carBodyType">
            <option value="" disabled select>Select Car Body Type</option>
            <option value="Convertible">Convertible</option>
            <option value="Crossover">Crossover</option>
            <option value="Hatchback">Hatchback</option>
            <option value="Sedan">Sedan</option>
            <option value="SUV">SUV</option>
            <option value="MUV">MUV</option>
          </select>

          <button type="submit" class="button" id="button">Search</button>
        </form>
      </div>
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