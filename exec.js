// Tableau pour représenter l'état du jeu
let grilleDeJeu = ["", "", "", "", "", "", "", "", ""];

// Définir les symboles pour les joueurs
const joueur1Symbole = "X";
const joueur2Symbole = "O";

// Indiquer si c'est au tour du joueur 1 ou du joueur 2
let tourJoueur1 = true;

// Fonction pour gérer le clic d'une case
function gererClicCase(id) {
  const caseCliquee = document.getElementById(id);

  // Vérifier si la case est vide
  if (caseCliquee.value === "") {
    if (tourJoueur1) {
      caseCliquee.value = joueur1Symbole;
      grilleDeJeu[id] = joueur1Symbole;
      caseCliquee.classList.add('x')
    } else {
      caseCliquee.value = joueur2Symbole;
      grilleDeJeu[id] = joueur2Symbole;
      caseCliquee.classList.add('y')
    }

    // Changer de joueur
    tourJoueur1 = !tourJoueur1;

    verifierFinDePartie();
  }
}

// Fonction pour vérifier la fin de la partie
function verifierFinDePartie() {
  const lignesGagnantes = [
    [0, 1, 2], [3, 4, 5], [6, 7, 8], // lignes horizontales
    [0, 3, 6], [1, 4, 7], [2, 5, 8], // lignes verticales
    [0, 4, 8], [2, 4, 6] // diagonales
  ];

  // Vérifier s'il y a une victoire
  for (const ligne of lignesGagnantes) {
    const [a, b, c] = ligne;
    if (grilleDeJeu[a] && grilleDeJeu[a] === grilleDeJeu[b] && grilleDeJeu[a] === grilleDeJeu[c]) {
      afficherResultat(grilleDeJeu[a] + " a gagné !");
      return;
    }
  }

  // Vérifier s'il y a égalité (toutes les cases sont remplies)
  if (!grilleDeJeu.includes("")) {
    afficherResultat("Égalité !");
    return;
  }

  // Si la partie n'est pas terminée, continuer à jouer
}

// Fonction pour afficher le résultat dans le modal
function afficherResultat(resultat) {
  const modalTitle = document.querySelector(".modal-title");
  modalTitle.textContent = resultat;

  const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
  modal.show();
}

// Ajoutez un gestionnaire d'événements "click" à chaque case pour permettre aux joueurs de jouer
const cases = document.querySelectorAll('.case');
cases.forEach((caseElement, index) => {
  caseElement.addEventListener('click', () => {
    gererClicCase(index);
  });
});


// Fonction pour réinitialiser la grille
function reinitialiserGrille() {
  // Réinitialisez la grilleDeJeu et les valeurs des cases ici
  grilleDeJeu = ["", "", "", "", "", "", "", "", ""];
  const cases = document.querySelectorAll('.case');
  cases.forEach(caseElement => {
    caseElement.value = "";
    location.reload();
  });

  // Fermez la modal
  const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
  modal.hide();
}

// Ajoutez un gestionnaire d'événements au bouton "Revanche"
const rejouerBtn = document.getElementById('rejouerBtn');
rejouerBtn.addEventListener('click', reinitialiserGrille);
