
document.addEventListener("DOMContentLoaded", function () {
    // Récupérez l'élément du bouton avec l'ID "jouerButton"
    var jouerButton = document.getElementById("jouerButton");

    // Récupérez l'élément conteneur avec l'ID "modeJeuxContainer"
    var modeJeuxContainer = document.getElementById("modeJeuxContainer");

    // Attachez un gestionnaire d'événements au bouton "jouerButton" pour l'événement "click"
    jouerButton.addEventListener("click", function () {
        // Masquez le bouton "jouerButton" en le rendant invisible
        jouerButton.style.display = "none";

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                modeJeuxContainer.innerHTML += xhr.responseText;
            }
        };

        xhr.open("GET", "./view/components/mode-jeux.php", true);

        xhr.send();
    });
});
