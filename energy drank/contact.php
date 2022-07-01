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
        <div class="logo">CanaEnergy</div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
          <!-- USING CHECKBOX HACK -->
          <input type="checkbox" id="checkbox_toggle" />
          <label for="checkbox_toggle" class="hamburger">&#9776;</label>
          <!-- NAVIGATION MENUS -->
          <div class="menu">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li class="services">
              <a href="eventspagina1.php">Events</a>
              <!-- DROPDOWN MENU -->
            </li>
            <li><a href="pricing.php">Pricing</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="logout.php">Uitloggen</a></li>
            <img src="images/shop.png" alt="#" height="32px" class="shop">
          </div>
        </ul>
    </nav>
      <article id="panel">
        <form class="contact-formulier" method="POST" action="messagesend.php">
          <label for="Naam">Name</label><br><input type="text" placeholder="Name*"><br><br>
          <label for="Achternaam">Surname</label><br><input type="text" placeholder="Surname*"><br><br>
          <label for="Email">Email</label><br><input type="text" placeholder="Email*"><br><br>
          <label for="Bericht">Message</label><br><textarea rows="8" class="contact-message" placeholder="Message*"></textarea><br><br>
          <label></label><br><input type="submit" class="contact-submit" value = "Submit">
        </form>
      </article>
      <div class="footer">
  <section>
    <img id="logo-foto" src="images/logo_large.png">
  </section>
</div>
</body>
</html>

<?php

?>