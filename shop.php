<?php
     require "retrieveShop.php"; 
?> 

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
    <?php include "header.php" ?>
    
    <div class="brands">
      <ul class="brands-tabs">
        <li id="nintendo">
          <div>NINTENDO</div>
          <ul class="nintendo-list" id="nintendo-list">
          
                
            <li id="nintendo64"><a href="?where=console_name='Nintendo 64'">Nintendo 64</a></li>
            <li id="gamecube"><a  href="?where=console_name='GameCube'">GameCube </a></li>
            <li id="nintendoNes"><a  href="?where=console_name='Nintendo NES'">Nintendo NES</a></li>
            <li id="superNintendo"><a  href="?where=console_name='Super Nintendo'">Super Nintendo</a></li>
            <li id="wii"><a href="?where=console_name='Wii'">Wii</a></li>
            <li id="wiiU"><a href="?where=console_name='Wii U'">Wii U</a></li>
            <li id="gameboy"><a href="?where=console_name='Gameboy'">GameBoy</a></li>
            <li id="gameboyAdvance"><a href="?where=console_name='Gameboy Advanced'">GameBoy Advance</a></li>
            <li id="ds">DS</li>
            <li id="3ds">3DS</li>
          </ul>
        </li>
        <li id="sega">
          <div>SEGA</div>
          <ul class="sega-list" id="sega-list">
            <li id="genesis">Genesis</li>
            <li id="dreamcast">Dreamcast</li>
            <li id="saturn">Saturn</li>
            <li id="gamegear">Game Gear</li>
            <li id="32x">32X</li>
            <li id="masterSystem">Master System</li>
          </ul>
        </li>
        <li id="playstation">
          <div>PLAYSTATION</div>
          <ul class="playstation-list" id="playstation-list">
            <li id="playstation1">PlayStation 1</li>
            <li id="playstation2">PlayStation 2</li>
            <li id="playstation3">PlayStation 3</li>
            <li id="playstation4">PlayStation 4</li>
            <li id="playstationPortable">PlayStation Portable</li>
            <li id="psVita">PS Vita</li>
          </ul>
        </li>
        <li id="xbox">
          <div>XBOX</div>
          <ul class="xbox-list" id="xbox-list">
            <li id="originalXbox">Original Xbox</li>
            <li id="xbox360">Xbox 360</li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="console-container" id="console-container">
      <div class="console" id="console">
        <ul class="console-tabs">
          <li>
          <a href="?where=<?php echo $where ?>&type=product_type_id=1">
            <p class="console-name"><?php echo $where ?></p>
            <p>System</p>
          </a>
          </li>
          <li>
          <a href="?where=<?php echo $where ?>&type=product_type_id=2">
            <p class="console-name"><?php echo $where ?></p>
            <p>Games</p> 
          </a>
          </li>
          <li>
          <a href="?where=<?php echo $where ?>&type=product_type_id=3">
            <p class="console-name"><?php echo $where ?></p>
            <p>Accesories</p>
          </a> 
          </li>
        </ul>
      </div>
    </div>
<!--////////////////////////////////////items displayed///////////////////////////////////////////////////-->   

<div class="shop-list">
    
    <?php
    
      while($row = mysqli_fetch_array($result)){?>
      
                 <div class="shop-cards" style="height:30vh">

                <div style="width:100%;height: 70%; background-color:gray;display:flex;justify-content:center ">
                  <img src="./ProductImages/Nintendo/Game_Images/3DS/mariokart7.jpg" style='height:100%'>
                </div>
                  <p><?php echo $row['product_id']; ?></p> 
                  <p><?php echo $row['product_name']; ?></p>
                  <p>&#8369; <?php echo $row['price']; ?>.00</p>
                  <!--  name='edit' >View</button> -->
                  <form  action="viewItem.php" method='POST'>
                 <button class="view" value="view"  type='submit' name="view"  >View</button>
                 
                 <input type="hidden" name='product_name' 
                            value= '<?php echo $row['product_name']; ?>'>
                  </form> 
                 </div>
         
         <?php } ?>
        
      </div>
      
     
      
 <!--//////////////////////Pagination///////////////////////////////////-->        
         <div style="display:flex; justify-content:center">
       <a class="page"style="color:white; text-decoration:none;border:1px solid white;margin:2px;padding:2px;width:27px;text-align:center;display:<?php echo ($page<=1)?'none':'inline-block';?> " href="shop.php?page=<?php echo $previous_page ?>"><< </a>

        <?php
        $bcolor = '';
        $textcolor = '';
       

        for ($i = 1; $i <= $total_pages;$i++){
          if ($page == $i){
            $color= 'background-color:bisque';
            $textcolor="black";
          }else{
            $color = '';
            $textcolor="white";
          }
          echo '<a class="page" style="color:'.$textcolor.'; text-decoration:none;border:1px solid white;margin:2px;padding:2px;width:27px;text-align:center;'.$color.'" href="shop.php?page='.$i.'">' .$i .'</a>';
        }
        ?>
      <a class='page' style="color:white; text-decoration:none;border:1px solid white;margin:2px;padding:2px;width:27px;text-align:center;display:<?php echo ($page>=$total_pages)?'none':'inline-block';?> " href="shop.php?page=<?php echo $next_page ?>">>> </a>
        </div>
        <div style='color:aqua'>
          <strong >Page <?= $page; ?> of <?= $total_pages; ?></strong>
        </div>
    <?php include "footer.php" ?>
<!--//////////////////////////Javascript///////////////////////////////////////////////-->
    <script src="shop.js"></script>
  
  </body>
</html>
