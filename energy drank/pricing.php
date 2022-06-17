<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TS Energy</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo">LOGO</div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
          <!-- USING CHECKBOX HACK -->
          <input type="checkbox" id="checkbox_toggle" />
          <label for="checkbox_toggle" class="hamburger">&#9776;</label>
          <!-- NAVIGATION MENUS -->
          <div class="menu">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li class="services">
              <a href="#">Services</a>
              <!-- DROPDOWN MENU -->
              <ul class="dropdown">
                <li><a href="#">Dropdown 1 </a></li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li>
            <li><a href="#">Pricing</a></li>
            <li><a href="contact.php">Contact</a></li>
            <img src="images/shop.png" alt="#" height="32px" class="shop">
          </div>
        </ul>
      </nav>


      <section id="products">
      <div class="row">
        <div class="column">
          <img src="images/apple.png" alt="Snow" style="width:50%" class="img">
          <p class="productinfo">Apple Canna Energy</p>
          <p class="price"><b>8,99$</b></p> <p>Select quantity</p> <input type="number" id="quantity" name="quantity" value="1" min="1" max="5"> <br> <br> 
          <button id="buy">Buy Now</button>
        </div>
        <div class="column">
          <img src="images/aarbei.png" alt="Forest" style="width:50%" class="img">
          <p class="productinfo">Strawberry Canna Energy</p>
          <p class="price"><b>8,99$</b></p> <p>Select quantity</p> <input type="number" id="quantity" name="quantity" value="1" min="1" max="5"> <br> <br>
          <button id="buy">Buy Now</button>
        </div>
        <div class="column">
          <img src="images/mango.png" alt="Mountains" style="width:50%" class="img">
          <p class="productinfo">Mango Canna Energy</p>
          <p class="price"><b>8,99$</b></p> <p>Select quantity</p> <input type="number" id="quantity" name="quantity" value="1" min="1" max="5"> <br> <br>
          <button id="buy">Buy Now</button>
        </div>
      </div>
    </section>

    <section id="products">
      <div class="row">
        <div class="column">
          <img src="images/ananas.png" alt="Snow" style="width:50%" class="img">
          <p class="productinfo">Ananas Canna Energy</p>
          <p class="price"><b>8,99$</b></p> <p>Select quantity</p> <input type="number" id="quantity" name="quantity" value="1" min="1" max="5"> <br> <br> 
          <button id="buy">Buy Now</button>
        </div>
        <div class="column">
          <img src="images/blauwebessen.png" alt="Forest" style="width:50%" class="img">
          <p class="productinfo">Blueberry Canna Energy</p>
          <p class="price"><b>8,99$</b></p> <p>Select quantity</p> <input type="number" id="quantity" name="quantity" value="1" min="1" max="5"> <br> <br>
          <button id="buy">Buy Now</button>
        </div>
        <div class="column">
          <img src="images/frambose.png" alt="Mountains" style="width:50%" class="img">
          <p class="productinfo">Raspberry Canna Energy</p>
          <p class="price"><b>8,99$</b></p> <p>Select quantity</p> <input type="number" id="quantity" name="quantity" value="1" min="1" max="5"> <br> <br>
          <button id="buy">Buy Now</button>
        </div>
      </div>
    </section>

      <!-- <div class="slideshow-container">

        <div class="mySlides fade">
          <img src="images/dummy.jpg" class="images" style="width:40%">
        </div>
        
        <div class="mySlides fade">
          <img src="images/dummy.jpg" class="images" style="width:40%">
        </div>
        
        <div class="mySlides fade">
          <img src="images/dummy.jpg" class="images" style="width:40%">
        </div>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div> -->

      <!-- <article id="box">
        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, odio? Ab expedita qui ea quos, minima voluptatum unde sint corporis eligendi eaque assumenda ullam officiis iste placeat quas quod velit?</p>
      </article> -->

    

      <script src="js/script.js"></script>
    
</body>
</html>