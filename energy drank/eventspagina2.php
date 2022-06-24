<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TS Energy</title>
    <link rel="stylesheet" href="css/eventspagina1.css">
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
              <a href="#">Events</a>
              <!-- DROPDOWN MENU -->
              <ul class="dropdown">
                <li><a href="#">Dropdown 1 </a></li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li>
            <li><a href="pricing.php">Pricing</a></li>
            <li><a href="contact.php">Contact</a></li>
            <img src="images/shop.png" alt="#" height="32px" class="shop">
          </div>
        </ul>
      </nav>

      <section id="events-eerste-rij">
          <a href="justinbieber.php"><img src="images/Justin-Bieber-1.png" class="Justin-Bieber"></>
          <a href="eminem.php"><img src="images/eminem.png" class="Eminem"></a>
          <a href="dualipa.php"><img src="images/dualipa.png" class="Dua-Lipa"></a>
      </section>
      <section class="events-tweede-rij">
          <a href="dojacat.php"><img src="images/dojacat.png" class="Doja-Cat"></>
          <a href="billie.php"><img src="images/billie.png" class="Billie"></>
          <a href="olivia.php"><img src="images/olivia.png" class="Olivia"></>
      </section>

</body>
</html>