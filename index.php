<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Retro Fantasy</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="home.css" />
  </head>
  <body>
    <!-- <header class="header">
      <nav class="nav-main">
        <div class="logo">
          <img
            src="./images/retro-fantasy-logo2.png"
            alt="retro-fantasy-logo"
          />
        </div>
        <ul class="nav-tabs">
          <li><a href="#">HOME</a></li>
          <li><a href="/shop.html">SHOP</a></li>
          <li><a href="#">ABOUT US</a></li>
          <li><a href="#">CONTACT US</a></li>
          <li><a href="#">ACCOUNT</a></li>
        </ul>
        <ul class="nav-tabs-sub">
          <li id="search-icon">
            <a href="#"><i class="bi bi-search"></i></a>
          </li>
          <li><a href="#">CART</a></li>
          <li><a href="/login.php">LOG-IN</a></li>
          <li><a href="/signup.php">SIGN-UP</a></li>
        </ul>
      </nav>
    </header>
    <div class="search-form-container" id="search-form-container">
      <form action="" class="search-form">
        <input type="text" name="search" id="search" />
        <input class="search-submit" type="submit" value="Search" />
      </form>
    </div> -->
    <?php include "header.php"; ?>

    <div class="landing-page">
      <h1>PRESS START</h1>
      <p>to shop</p>
      <div class="select-start">
        <button class="shopNowButton">SELECT</button>
        <button class="shopNowButton">START</button>
      </div>
    </div>
    <div class="console-cards">
      <div class="console-card">
        <img src="./images/Nintendo-Logo.png" />
      </div>
      <div class="console-card">
        <img src="./images/Sega-logo.png" />
      </div>
      <div class="console-card">
        <img src="./images/playstation-logo.png" />
      </div>
      <div class="console-card">
        <img src="./images/xbox-logo.png" />
      </div>
    </div>

    <!-- <footer>
      <div class="footer-container">
        <div class="quick-links">
          <ul>
            <h3>Quick Links</h3>
            <li><a href="/home.php">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Account</a></li>
          </ul>
        </div>
        <div class="social-media-footer">
          <h3>Our Social Media</h3>
          <ul>
            <li><i class="bi bi-facebook"></i></li>
            <li><i class="bi bi-twitter"></i></li>
            <li><i class="bi bi-instagram"></i></li>
            <li><i class="bi bi-youtube"></i></li>
          </ul>
        </div>
        <div class="contacts-footer">
          <h3>Contact Us</h3>
          Email: retrofantasy@gmail.com <br />
          Contact Number: 0923-456-7890 <br />Address: Unit 27 Building RF, San
          pablo st.,<br />Makati city, Philippines<br />
          Credits:
          <a href="https://www.dkoldies.com/">https://www.dkoldies.com/</a
          ><br />
          (for our project's reference)
        </div>
      </div>
      <div class="brands-footer">
        <img src="/images/Nintendo-Logo.png" alt="nintendo-logo" />
        <img src="/images/Sega-logo.png" alt="Sega-logo" />
        <img src="/images/playstation-logo.png" alt="playstation-logo" />
        <img src="/images/xbox-logo.png" alt="xbox-logo" />
      </div>
      <div class="copyright">
        Copyright <i class="bi bi-c-circle"></i> Retro Fantasy
      </div>
    </footer> -->
    <?php include "footer.php"; ?>
    <script src="home.js"></script>
  </body>
</html>
