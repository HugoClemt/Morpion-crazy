"use strict";

//Rectifier l'affichage de la modal

// TODO
//On intialise l'état à 0, il changera à chaque clic sur une case
var state = 0;

let cases = document.querySelectorAll(".case");

//Méthode qui effectue un coup X ou Y en fonction de l'état
//On vérifie que la case soit bien vide
function exec(casee) {
  if (state == 0 && casee.value != "X" && casee.value != "O") {
    casee.value = "X";
    state = 1;
  } else if (state == 1 && casee.value != "X" && casee.value != "O") {
    casee.value = "O";
    state = 0;
  }

  //On vient tester toutes les possibilités de victoire
  //On teste si X a gagné
  if (checkWin('X')) {
    console.log("Le joueur X a gagné!")
  }
  else if (checkWin('O')) {
    console.log("Le joueur O a gagné !")
  }
}

function checkWin(player) {
  for (let i = 0; i < 3; i++) {
    if (
      cases[i * 3].value === player &&
      cases[i * 3 + 1].value === player &&
      cases[i * 3 + 2].value === player
    ) {
      return true;
    }
    if (
      cases[i].value === player &&
      cases[i + 3] === player &&
      cases[i + 6] === player
    ) {
      return true;
    }

    if (
      (cases[0].value === player &&
        cases[4].value === player &&
        cases[8].value === player) ||
      (cases[2].value === player &&
        cases[4].value === player &&
        cases[6].value === player)
    ) {
      return true;
    }

    return false;
  }
}
