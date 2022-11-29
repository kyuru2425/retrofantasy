//drop down effect for nintendo//
let nintendo = document.getElementById("nintendo");
// let nintendoDisplay = "none";
// nintendo.addEventListener("click", function () {
//   if (nintendoDisplay == "none") {
//     document.getElementById("nintendo-list").style.display = "block";
//     nintendoDisplay = "block";
//     console.log(nintendoDisplay);
//   } else if (nintendoDisplay == "block") {
//     document.getElementById("nintendo-list").style.display = "none";

//     nintendoDisplay = "none";
//     console.log(nintendoDisplay);
//   }
// });

nintendo.addEventListener("mouseover", function () {
  document.getElementById("nintendo-list").style.display = "block";
});
nintendo.addEventListener("mouseleave", function () {
  document.getElementById("nintendo-list").style.display = "none";
});

//drop down effect for sega//
let sega = document.getElementById("sega");
sega.addEventListener("mouseover", function () {
  document.getElementById("sega-list").style.display = "block";
});
sega.addEventListener("mouseleave", function () {
  document.getElementById("sega-list").style.display = "none";
});

//drop down effect for playstation//
let playstation = document.getElementById("playstation");
playstation.addEventListener("mouseover", function () {
  document.getElementById("playstation-list").style.display = "block";
});
playstation.addEventListener("mouseleave", function () {
  document.getElementById("playstation-list").style.display = "none";
});
//drop down effect for xbox//
let xbox = document.getElementById("xbox");
xbox.addEventListener("mouseover", function () {
  document.getElementById("xbox-list").style.display = "block";
});
xbox.addEventListener("mouseleave", function () {
  document.getElementById("xbox-list").style.display = "none";
});

//drop down effect for search bar//
let searchIcon = document.getElementById("search-icon");
let inputDisplay = "none";
searchIcon.addEventListener("click", function () {
  if (inputDisplay == "none") {
    document.getElementById("search-form-container").style.display = "block";
    inputDisplay = "block";
  } else if (inputDisplay == "block") {
    document.getElementById("search-form-container").style.display = "none";
    inputDisplay = "none";
  } else {
    document.getElementById("search-form-container").style.display = "none";
    inputDisplay = "none";
  }
});
// //////////////////NINTENDO////////////////////////////
// /////////////display console tab//////////////////////
// let nintendo64 = document.getElementById("nintendo64");
// let gamecube = document.getElementById("gamecube");
// let nintendoNes = document.getElementById("nintendoNes");
// let superNintendo = document.getElementById("superNintendo");
// let wii = document.getElementById("wii");
// let wiiU = document.getElementById("wiiU");
// let gameboy = document.getElementById("gameboy");
// let gameboyAdvance = document.getElementById("gameboyAdvance");
// let ds = document.getElementById("ds");
// let threeds = document.getElementById("3ds");

// nintendo64.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = nintendo64.textContent;
//   }
// });
// gamecube.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = gamecube.textContent;
//   }
// });
// nintendoNes.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = nintendoNes.textContent;
//   }
// });
// superNintendo.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = superNintendo.textContent;
//   }
// });
// wii.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = wii.textContent;
//   }
// });
// wiiU.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = wiiU.textContent;
//   }
// });

// gameboy.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = gameboy.textContent;
//   }
// });
// gameboyAdvance.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = gameboyAdvance.textContent;
//   }
// });

// ds.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = ds.textContent;
//   }
// });

// threeds.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = threeds.textContent;
//   }
// });
// //////////////SEGA//////////////////////
// /////////////display console tab//////////////////////
// let genesis = document.getElementById("genesis");
// let dreamcast = document.getElementById("dreamcast");
// let saturn = document.getElementById("saturn");
// let gamegear = document.getElementById("gamegear");
// let x32 = document.getElementById("32x");
// let masterSystem = document.getElementById("masterSystem");

// genesis.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = genesis.textContent;
//   }
// });
// dreamcast.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = dreamcast.textContent;
//   }
// });
// saturn.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = saturn.textContent;
//   }
// });
// gamegear.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = gamegear.textContent;
//   }
// });
// x32.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = x32.textContent;
//   }
// });
// masterSystem.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = masterSystem.textContent;
//   }
// });
// //////////////////PLAYSTATION////////////////////////////
// /////////////display console tab//////////////////////
// let playstation1 = document.getElementById("playstation1");
// let playstation2 = document.getElementById("playstation2");
// let playstation3 = document.getElementById("playstation3");
// let playstation4 = document.getElementById("playstation4");
// let playstationPortable = document.getElementById("playstationPortable");
// let psVita = document.getElementById("psVita");

// playstation1.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = playstation1.textContent;
//   }
// });
// playstation2.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = playstation2.textContent;
//   }
// });
// playstation3.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = playstation3.textContent;
//   }
// });
// playstation4.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = playstation4.textContent;
//   }
// });
// playstationPortable.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = playstationPortable.textContent;
//   }
// });

// psVita.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = psVita.textContent;
//   }
// });
// //////////////////XBOX////////////////////////////
// /////////////display console tab//////////////////////
// let originalXbox = document.getElementById("originalXbox");
// let xbox360 = document.getElementById("xbox360");
// originalXbox.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = originalXbox.textContent;
//   }
// });
// xbox360.addEventListener("click", function () {
//   document.getElementById("console-container").style.display = "block";
//   let console = document.getElementsByClassName("console-name");
//   for (var i = 0; i < console.length; i++) {
//     console[i].innerHTML = xbox360.textContent;
//   }
// });
