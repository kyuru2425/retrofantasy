
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="home.css" />
  </head>
  <body>
   
        
    <?php include "header.php"; ?>

    <div class="landing-page" >
      <h1 style="color:white; font-weight:bold">PRESS START</h1>
      <p style="color:white">to shop</p>
      <div class="select-start">
        
        <button class="shopNowButton animated" style="height:50px;width:150px;border-radius:25px"><a href="/shop.php" style="color:black;text-decoration:none;">START</a></button>
      </div>
    </div>
    <!-- <div class="console-cards">
      
      <a href="/shop.php">
      <div class="console-card">
        <img src="./images/Nintendo-Logo.png" />
      </div>
      </a>
      <div class="console-card">
        <img src="./images/Sega-logo.png" />
      </div>
      <div class="console-card">
        <img src="./images/playstation-logo.png" />
      </div>
      <div class="console-card">
        <img src="./images/xbox-logo.png" />
      </div>
    </div> -->

  
    <?php include "footer.php"; ?>
    <script src="home.js"></script>
  </body>
</html>