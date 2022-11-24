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
            <li id="nintendo64">Nintendo 64</li>
            <li id="gamecube">GameCube</li>
            <li id="nintendoNes">Nintendo NES</li>
            <li id="superNintendo">Super Nintendo</li>
            <li id="wii">Wii</li>
            <li id="wiiU">Wii U</li>
            <li id="gameboy">GameBoy</li>
            <li id="gameboyAdvance">GameBoy Advance</li>
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
            <p class="console-name"></p>
            <p>System</p>
          </li>
          <li>
            <p class="console-name"></p>
            Games
          </li>
          <li>
            <p class="console-name"></p>
            Accesories
          </li>
        </ul>
      </div>
    </div>

    <div class="shop-list">
      <div class="shop-cards">
        <img src="./images/mario-kart-64.jfif" />
        <p>Mario kart 64</p>
        <p>500.00php</p>
        <span style="color: black; font-size: small">|Nintendo 64</span>
        <span style="color: black; font-size: small">|Nintendo Game</span>
      </div>
      <div class="shop-cards">
        <img src="./images/super-mario-64.jpg" />
        <p>Super MArio 64</p>
        <p>500.00php</p>
        <span style="color: black; font-size: small">|Nintendo 64</span>
        <span style="color: black; font-size: small">|Nintendo Game</span>
      </div>
      <div class="shop-cards">
        <img src="./images/donkey-kong-64.jpg" />
        <p>Donkey Kong 64</p>
        <p>500.00php</p>
        <span style="color: black; font-size: small">|Nintendo 64</span>
        <span style="color: black; font-size: small">|Nintendo Game</span>
      </div>
      <div class="shop-cards">
        <img src="./images/pokemon-stadium.webp" />
        <p>Pokemon Stadium</p>
        <p>500.00php</p>
        <span style="color: black; font-size: small">|Nintendo 64</span>
        <span style="color: black; font-size: small">|Nintendo Game</span>
      </div>
      <div class="shop-cards">
        <img src="./images/Yoshis-Story.jpg" />
        <p>Yoshi's Story</p>
        <p>500.00php</p>
        <span style="color: black; font-size: small">|Nintendo 64</span>
        <span style="color: black; font-size: small">|Nintendo Game</span>
      </div>
      <div class="shop-cards">
        <img src="./images/mario-kart-64.jfif" />
        <p>Mario kart 64</p>
        <p>500.00php</p>
        <span style="color: black; font-size: small">|Nintendo 64</span>
        <span style="color: black; font-size: small">|Nintendo Game</span>
      </div>
      <div class="shop-cards">
        <img src="./images/super-mario-64.jpg" />
        <p>Super MArio 64</p>
        <p>500.00php</p>
        <span style="color: black; font-size: small">|Nintendo 64</span>
        <span style="color: black; font-size: small">|Nintendo Game</span>
      </div>
      <div class="shop-cards">
        <img src="./images/donkey-kong-64.jpg" />
        <p>Donkey Kong 64</p>
        <p>500.00php</p>
        <span style="color: black; font-size: small">|Nintendo 64</span>
        <span style="color: black; font-size: small">|Nintendo Game</span>
      </div>
      <div class="shop-cards">
        <img src="./images/pokemon-stadium.webp" />
        <p>Pokemon Stadium</p>
        <p>500.00php</p>
        <span style="color: black; font-size: small">|Nintendo 64</span>
        <span style="color: black; font-size: small">|Nintendo Game</span>
      </div>
      <div class="shop-cards">
        <img src="./images/Yoshis-Story.jpg" />
        <p>Yoshi's Story</p>
        <p>500.00php</p>
        <span style="color: black; font-size: small">|Nintendo 64</span>
        <span style="color: black; font-size: small">|Nintendo Game</span>
      </div>
    </div>

    <?php include "footer.php" ?>
    <script src="shop.js"></script>
  </body>
</html>
