document.addEventListener("DOMContentLoaded", function () {
    var jouerButton = document.getElementById("jouerButton");
    var modeJeuxContainer = document.getElementById("modeJeuxContainer");

    jouerButton.addEventListener("click", function () {
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
