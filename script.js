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

function animateTexts(elementId, texts, letterDelay = 100, pauseBetweenTexts = 1000) {
    const element = document.getElementById(elementId);
    let textIndex = 0;

    function typeText(text, callback) {
        let currentText = '';
        let letterIndex = 0;

        function typeLetter() {
            if (letterIndex < text.length) {
                currentText += text[letterIndex];
                element.textContent = currentText;
                letterIndex++;
                setTimeout(typeLetter, letterDelay);
            } else {
                setTimeout(callback, pauseBetweenTexts);
            }
        }

        typeLetter();
    }

    function eraseText(callback) {
        let currentText = element.textContent;
        let letterIndex = currentText.length;

        function removeLetter() {
            if (letterIndex > 0) {
                currentText = currentText.slice(0, -1);
                element.textContent = currentText;
                letterIndex--;
                setTimeout(removeLetter, letterDelay);
            } else {
                callback();
            }
        }

        removeLetter();
    }

    function startAnimation() {
        typeText(texts[textIndex], () => {
            eraseText(() => {
                textIndex = (textIndex + 1) % texts.length;
                startAnimation();
            });
        });
    }

    startAnimation();
}

