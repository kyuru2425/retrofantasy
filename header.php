<header class="header">
      <nav class="nav-main">
        <div class="logo">
          <img
            src="./images/retro-fantasy-logo2.png"
            alt="retro-fantasy-logo"
          />
        </div>
        <ul class="nav-tabs" style="border:none">
          <li><a href="/index.php" id="home" >HOME</a></li>
          <li><a href="/shop.php">SHOP</a></li>
          <li><a href="/aboutus.php">ABOUT US</a></li>
          <li><a href="/contactus.php">CONTACT US</a></li>
          <li><a href="/account.php">ACCOUNT</a></li>
        </ul>
        <ul class="nav-tabs-sub">
          
          <li><a href="/cart.php">CART</a></li>
          <?php
              
              session_start();
              if(empty($_SESSION['email'])){?>
              <li><a href="/login.php">LOG-IN</a></li>
              <li style=" background-color:#f0ad4e;margin:15px 0; padding:5px;border-radius:15px"><a href="/signup.php" style="color:black" >SIGN-UP</a></li>
          <?php }else{?>
            <li style=" background-color:red;margin:15px 0; padding:5px;border-radius:15px"><form action="/logout.php" method="post">
            <input style="background:transparent;border:none;color:black"type="submit" value="Log out">
              </form></li>
             
          <?php
           
          } ?>
            
        </ul>
      </nav>
    </header>
    <div class="search-form-container" id="search-form-container">
      <form action="" class="search-form">
        <input type="text" name="search" id="search" />
        <input class="search-submit" type="submit" value="Search" />
      </form>
    </div>