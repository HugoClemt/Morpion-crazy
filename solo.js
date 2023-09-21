"use strict";

let casesLibres = cases;
const tabCasesLibres = Array.from(casesLibres);
//console.log(tabCasesLibres);

function freeCells() {
  tabCasesLibres.splice(0, tabCasesLibres.length);
  for (let i = 0; i < cases.length; i++) {
    if (cases[i].value.trim() === "") {
      tabCasesLibres.push(cases[i]);
    }
  }
  return tabCasesLibres;
}

let coupBot;

function botPlayer(tabCasesLibres) {
  coupBot = Math.floor(Math.random() * tabCasesLibres.length);
  return coupBot;
}

//console.log(botPlayer(tabCasesLibres));

function automaticPlay() {
  cases[botPlayer(tabCasesLibres)].value = "O";
  state = 0;
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
  if (state == 0 && casee.value != "X" && casee.value != "O") {
    casee.value = "X";
    state = 1;
    execBot(casee);

  } else if (state === 1) {
    if (isOver(cases) === false) {
      automaticPlay();
      state = 0;
      execBot(casee);
    }
  }

      //On vient tester toutes les possibilités de victoire
    //On teste si X a gagné
    if (checkWin('X')) {
        console.log("Le joueur X a gagné!")
      //   document.write("Le joueur X a gagné");
      }
      else if (checkWin('O')) {
        console.log("Le joueur O a gagné !")
      //   document.write("Le joueur O a gagné");
  
      }
}

execBot(cases);