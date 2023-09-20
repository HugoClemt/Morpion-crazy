"use strict";

//On intialise l'état à 0, il changera à chaque clic sur une case
var state = 0;

//On déclare un tableau de var qui vont récupérer les id de chaque case
let d1, d2, d3, d4, d5, d6, d7, d8, d9;
let cases = [d1, d2, d3, d4, d5, d6, d7, d8, d9];

//On boucle sur le tableau pour associer chaque var à son id
for (let o=0; o<cases.length; o++) {
    cases[o] = document.getElementById(o);
}

//console.log(cases[0]);
/** 
var c1, c2, c3, c4, c5, c6, c7, c8, c9;
c1 = document.getElementById("case-1");
c2 = document.getElementById("case-2");
c3 = document.getElementById("case-3");
c4 = document.getElementById("case-4");
c5 = document.getElementById("case-5");
c6 = document.getElementById("case-6");
c7 = document.getElementById("case-7");
c8 = document.getElementById("case-8");
c9 = document.getElementById("case-9");
**/

//Méthode qui effectue un coup X ou Y en fonction de l'état
//On vérifie que la case soit bien vide
function exec(casee) {

    if (state == 0 && casee.value != 'X' && casee.value != 'O') {
        casee.value = "X";
        state = 1;
    }

    else if (state == 1 && casee.value != 'X' && casee.value != 'O') {
        casee.value = "O";
        state = 0;
    }

    //On vient tester toutes les possibilités de victoire 
    //On teste si X a gagné
    if (cases[0].value == 'X' && cases[1].value == 'X' && cases[2].value == 'X') {
        console.log("Le joueur X a gagné");
    }

    //On teste si O a gagné
    else if (cases[0].value == 'O' && cases[1].value == 'O' && cases[2].value == 'O') {
        console.log("Le joueur O a gagné");
    }

//isDone();

}


function isDone() {
    for (let i=0; i<cases.length; i++) {
        console.log(cases[i].value)
        if (cases[i].value == "") {
            return false;
        }
        else {
            console.log("FIN DE LA PARTIE");
            return true;
        }
    }
}
