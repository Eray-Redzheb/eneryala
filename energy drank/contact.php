<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TS Energy</title>
    <link rel="stylesheet" href="css/contact.css">
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
            <li><a href="#">Home</a></li>
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
            <li><a href="index.html">Pricing</a></li>
            <li><a href="#">Contact</a></li>
            <img src="images/shop.png" alt="#" height="32px" class="shop">
          </div>
        </ul>
    </nav>
        <article id="panel">
            <section>
        <th>Naam</th><input type="text" name="Naam"><br><br>
        <th>Achternaam</th><input type="text" name="Achternaam"><br><br>
        <th>Email</th><input type="text" name="Email"><br><br>
        <th>Bericht</th><input type="text" name="Bericht"><br><br>
        <th></th><input type="submit" name="submit">
</section>
</article>
</body>
</html>