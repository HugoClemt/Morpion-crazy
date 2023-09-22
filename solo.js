// Tableau pour représenter l'état du jeu
let grilleDeJeu = ["", "", "", "", "", "", "", "", ""];

// Défini les symboles pour le joueur et l'ordinateur
const joueurSymbole = "X";
const ordinateurSymbole = "O";

// Indique le tour du joueur
let tourJoueur = true;

// Fonction pour gérer le clic d'une case
function gererClicCase(id) {
  const caseCliquee = document.getElementById(id);

  // Vérifier si la case est vide et si c'est au tour du joueur
  if (caseCliquee.value === "" && tourJoueur) {
    caseCliquee.value = joueurSymbole;
    grilleDeJeu[id] = joueurSymbole;
    tourJoueur = false; //C'est à l'ordi de jouer
    verifierFinDePartie();

    // On laisse un délai à l'ordi
    setTimeout(jouerOrdinateur, 500);
  }
}

// Fonction pour faire jouer l'ordinateur
function jouerOrdinateur() {
  // Recherche de la meilleure case libre pour l'ordinateur 
  const meilleureCase = trouverMeilleureCase();

  if (meilleureCase !== -1) {
    const caseOrdinateur = document.getElementById(meilleureCase);
    caseOrdinateur.value = ordinateurSymbole;
    grilleDeJeu[meilleureCase] = ordinateurSymbole;
    tourJoueur = true; // Passer le tour au joueur
    verifierFinDePartie();
  }
}

// Fonction pour trouver la meilleure case libre pour l'ordinateur 
function trouverMeilleureCase() {

  // On choisit la première cases libre
  for (let i = 0; i < grilleDeJeu.length; i++) {
    if (grilleDeJeu[i] === "") {
      return i;
    }
  }

  // Si aucune case n'est libre, retourne -1 pour indiquer que la grille est pleine
  return -1;
}

// Ajoutez un gestionnaire d'événements "click" à chaque case pour permettre au joueur de jouer
const allCase = document.querySelectorAll('.case');
allCase.forEach((caseElement, index) => {
  caseElement.addEventListener('click', () => {
    gererClicCase(index);
  });
});

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
