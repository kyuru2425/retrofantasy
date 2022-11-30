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

            
                
            <li ><a href="?where='Nintendo 64'"><div id="nintendo64">Nintendo 64</div></a></li>
            <li><a  href="?where='GameCube'"><div id="gamecube">GameCube </div></a></li>
            <li><a  href="?where='Nintendo NES'"><div  id="nintendoNes">Nintendo NES</div></a></li>
            <li><a  href="?where='Super Nintendo'"><div id="superNintendo">Super Nintendo</div></a></li>
            <li><a href="?where='Wii'"><div id="wii">Wii</div></a></li>
            <li><a href="?where='Wii U'"><div  id="wiiU">Wii U</div></a></li>
            <li><a href="?where='Gameboy'"><div  id="gameboy">GameBoy</div></a></li>
            <li ><a href="?where='Gameboy Advanced'"><div id="gameboyAdvance">GameBoy Advance</div></a></li>
            <li id="ds"><a href="?where='DS'"><div id="ds">DS</div></a></li>
            <li id="3ds"><a href="?where='3DS'"><div id="3ds">3DS</div></a></li>
          </ul>
        </li>
        <li id="sega">
          <div>SEGA</div>
          <ul class="sega-list" id="sega-list">
            <li><a href="?where='Genesis'"><div id="genesis">Genesis</div></a></li>
            <li><a href="?where='Dreamcast'"><div  id="dreamcast">Dreamcast</div></a></li>
            <li><a href="?where='Saturn'"><div id="saturn">Saturn</div></a></li>
            <li><a href="?where='Game Gear'"><div id="gamegear">Game Gear</div></a></li>
            <li><a href="?where='32x'"><div id="32x">32X</div></a></li>
            <li><a href="?where='Master System'"><div id="masterSystem">Master System</div></a></li>
          </ul>
        </li>
        <li id="playstation">
          <div>PLAYSTATION</div>
          <ul class="playstation-list" id="playstation-list">
            <li><a href="?where='Playstation 1'"><div id="playstation1">PlayStation 1</div></a></li>
            <li><a href="?where='Playstation 2'"><div id="playstation2">PlayStation 2</div></a></li>
            <li><a href="?where='Playstation 3'"><div id="playstation3">PlayStation 3</div></a></li>
            <li><a href="?where='Playstation 4'"><div  id="playstation4">PlayStation </div></a></li>
            <li><a href="?where='Playstation Portable'"><div id="playstationPortable">PlayStation Portable</div></a></li>
            <li ><a href="?where='Playstation Vita'"><div id="psVita">PS Vita</div></a></li>
          </ul>
        </li>
        <li id="xbox">
          <div>XBOX</div>
          <ul class="xbox-list" id="xbox-list">
            <li><a href="?where='Original Xbox'"><div id="originalXbox">Original Xbox</div></a></li>
            <li ><a href="?where='Xbox 360'"><div id="xbox360">Xbox 360</div></a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="console-container" id="console-container">
      <div class="console" id="console">
        <?php 
          if(isset($_GET['where'])){
            $parameter1= "where=".$_GET['where']."&type=1";
            $parameter2= "where=".$_GET['where']."&type=2";
            $parameter3= "where=".$_GET['where']."&type=3";
          }
          else{
            $parameter1 = "type=1" ;
            $parameter2= "type=2";
            $parameter3= "type=3";
          }
        ?>
        <ul class="console-tabs">
          <li>
          <a href="?<?php echo $parameter1; ?>">
            <p class="console-name"><?php echo $console ?></p>
            <p>System</p>
          </a>
          </li>
          <li>
          <a href="?<?php echo $parameter2; ?>">
            <p class="console-name"><?php echo $console ?></p>
            <p>Games</p> 
          </a>
          </li>
          <li>
          <a href="?<?php echo $parameter3; ?>">
            <p class="console-name"><?php echo $console ?></p>
            <p>Accesories</p>
          </a> 
          </li>
        </ul>
      </div>
    </div>
<!--////////////////////////////////////items displayed///////////////////////////////////////////////////-->   

<div class="shop-list">
    
    <?php
    
      while($row123 = mysqli_fetch_assoc($result)){?>
      
                 <div class="shop-cards" style="height:35vh">

                <div style="width:100%;height: 70%; background-color:gray;display:flex;justify-content:center ">
                  <img src="<?php echo $row123['image']; ?>" style='height:100%; max-width: 100%'>
                </div>
                  <p><?php echo $row123['product_id']; ?></p> 
                  <p><?php echo $row123['product_name']; ?></p>
                  <p>&#8369; <?php echo $row123['price']; ?>.00</p>
                  <!--  name='edit' >View</button> -->
                  <form  action="viewItem.php" method='POST'>
                 <button class="view" value="view"  type='submit' name="view"  >View</button>
                 
                 <input type="hidden" name='product_name' 
                            value= '<?php echo $row123['product_name']; ?>'>
                  </form> 
                 </div>
         
         <?php } ?>
        
      </div>
      
     
      
 <!--//////////////////////Pagination///////////////////////////////////-->        
        <div style="display:flex; justify-content:center">
        <?php
        
        if(isset($_GET['where']) && isset($_GET['type']) ){
          
          $previouspage="where=".$_GET['where']."&type=".$_GET["type"]."&page=".$previous_page;
        }
        else if (isset($_GET['where'])){
         
          $previouspage="where=".$_GET['where']."&page=".$previous_page;
        }else if (isset($_GET["type"])){
        
          $previouspage="type=".$_GET["type"]."&page=".$previous_page;
        }
        
        else{
          
          $previouspage="page=".$previous_page;
          }
        ?>
       <a class="page"style="color:white; text-decoration:none;border:1px solid white;margin:2px;padding:2px;width:27px;text-align:center;display:<?php echo ($page<=1)?'none':'inline-block';?> " href="shop.php?<?php echo $previouspage ?>"><< </a>

        <?php
        $bcolor = '';
        $textcolor = '';
        $param='';

       

        for ($i = 1; $i <= $total_pages;$i++){

          if ($page == $i){
            $color= 'background-color:bisque';
            $textcolor="black";
          }else{
            $color = '';
            $textcolor="white";
          }
         

          if(isset($_GET['where']) && isset($_GET['type']) ){
            $param="where=".$_GET['where']."&type=".$_GET["type"]."&page=".$i;
            $nextpage="where=".$_GET['where']."&type=".$_GET["type"]."&page=".$next_page;
          
          }
          else if (isset($_GET['where'])){
            $param="where=".$_GET['where']."&page=".$i;
            $nextpage="where=".$_GET['where']."&page=".$next_page;
          }else if (isset($_GET["type"])){
            $param="type=".$_GET["type"]."&page=".$i;
          
            $nextpage="type=".$_GET["type"]."&page=".$next_page;
           
          }
          
          else{
            $param="page=".$i;
            $nextpage="page=".$next_page;
     
            }
          

          echo '<a class="page" style="color:'.$textcolor.'; text-decoration:none;border:1px solid white;margin:2px;padding:2px;width:27px;text-align:center;'.$color.'" href="shop.php?'.$param.'">' .$i .'</a>';
        }
        ?>
      <a class='page' style="color:white; text-decoration:none;border:1px solid white;margin:2px;padding:2px;width:27px;text-align:center;display:<?php echo ($page>=$total_pages)?'none':'inline-block';?> " href="shop.php?<?php echo $nextpage ?>">>> </a>
        </div>
        <div style='color:aqua'>
          <strong >Page <?= $page; ?> of <?= $total_pages; ?></strong>
        </div>
    <?php include "footer.php" ?>
<!--//////////////////////////Javascript///////////////////////////////////////////////-->
    <script src="shop.js"></script>
       
  </body>
</html>
