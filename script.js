document.addEventListener("DOMContentLoaded", function () {
    const dropdownToggle = document.getElementById("dropdown-toggle");
    const languageSelector = document.querySelector(".language-selector");

    // Ouvrir ou fermer le menu au clic sur le bouton
    dropdownToggle.addEventListener("click", function (event) {
        event.stopPropagation(); // Empêche la propagation pour éviter la fermeture immédiate
        languageSelector.classList.toggle("active");
    });

    // Fermer le menu si on clique ailleurs sur la page
    document.addEventListener("click", function () {
        languageSelector.classList.remove("active");
    });

    // Empêcher la fermeture en cliquant à l'intérieur du menu
    languageSelector.querySelector(".dropdown-content").addEventListener("click", function (event) {
        event.stopPropagation();
    });
});