"use strict";

let casesLibres = cases;
const tabCasesLibres = Array.from(casesLibres);

function freeCells() {
  tabCasesLibres.splice(0, tabCasesLibres.length);
  for (let i = 0; i < cases.length; i++) {
    if (cases[i].value.trim() != 'X' || cases[i].value.trim() != 'O') {
      tabCasesLibres.push(cases[i]);
    }
  }
}

function botPlayer(tabCasesLibres) {

  const coupBot = Math.floor(Math.random() * tabCasesLibres.length);
  return coupBot;
}

function automaticPlay() {
  cases[botPlayer(tabCasesLibres)].value = "O";
  cases[botPlayer(tabCasesLibres)].style.color = '#00a2ff';
}

function isOver(cases) {
  for (let i = 0; i < cases.length; i++) {
    if (cases[i].value.trim() === "") {
      return false;
    }
  }
  return true;
}

function execBot(casee) {
  if (isOver(cases) === false) {
    if (casee.value != "X" && casee.value != "O") {
      casee.value = "X";
      casee.style.color = '#ff9a00';
      freeCells();
      automaticPlay();
      console.log("O joue");  
  }

  //On teste si X a gagné
  if (checkWin("X")) {
    console.log("Le joueur X a gagné!");
  } 
  //On test si O a gagné
  else if (checkWin("O")) {
    console.log("Le joueur O a gagné !");
  }

}

console.log(tabCasesLibres);
}
