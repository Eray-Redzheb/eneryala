<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TS Energy</title>
    <link rel="stylesheet" href="css/billie.css">
</head>
<body>

    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo">CanaEnergy</div>
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
              <a href="eventspagina1.php">Events</a>
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
            <li><a href="logout.php">Uitloggen</a></li>
            <img src="images/shop.png" alt="#" height="32px" class="shop">
          </div>
        </ul>
    </nav>
    <section id="images">
        <img src="images/billie.png" class="Billie-1">
        <img src="images/billie1.png" class="Billie-2">
        <img src="images/billie2.png" class="Billie-3">
    </section>
        <section  class="Billie-Info">
            <p><b>Artist:</b><br>Billie Eilish</p>
            <p><b>Where:</b><br>Amsterdam</p>
            <p><b>When:</b><br>16 July 2022</p>
            <p><b>What time:</b><br>From 2PM to 8PM</p>
        </section>

</body>
</html>