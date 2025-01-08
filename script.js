document.addEventListener("DOMContentLoaded", () => {
    // Gestion du dropdown
    const dropdownToggle = document.getElementById("dropdown-toggle");
    const languageSelector = document.querySelector(".language-selector");

    dropdownToggle.addEventListener("click", (event) => {
        event.stopPropagation();
        languageSelector.classList.toggle("active");
    });

    document.addEventListener("click", () => {
        languageSelector.classList.remove("active");
    });

    languageSelector.querySelector(".dropdown-content").addEventListener("click", (event) => {
        event.stopPropagation();
    });

    // Gestion des ancres
    if (window.location.hash) {
        const id = window.location.hash.substring(1);
        const targetElement = document.getElementById(id);

        if (targetElement) {
            const offset = window.innerHeight / 2 - targetElement.getBoundingClientRect().height / 2;

            window.scrollTo({
                top: targetElement.offsetTop - offset,
                behavior: "smooth",
            });

            history.replaceState(null, null, ' ');
        }
    }
});

// Animation de texte
function animateTexts(elementId, texts, letterDelay = 100, pauseBetweenTexts = 1000) {
    const element = document.getElementById(elementId);
    if (!element) return;

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

// Gestion du scroll
function isInView(element) {
    const rect = element.getBoundingClientRect();
    return rect.top < window.innerHeight && rect.bottom >= 0;
}

function handleScroll() {
    const sections = document.querySelectorAll('.section-presentation, .section-competences, .section-langues, .section-parcours');
    sections.forEach(section => {
        if (isInView(section)) {
            section.classList.add('visible-section');
        } else {
            section.classList.remove('visible-section');
        }
    });
}

window.addEventListener('scroll', handleScroll);
handleScroll();


  // Récupère toutes les balises avec la classe 'nav-link'
const links = document.querySelectorAll('.nav-link');

  // Parcourt chaque lien
links.forEach(link => {
    // Compare le href du lien avec l'URL actuelle
    if (link.href === window.location.href) {
      link.classList.add('active-link'); // Ajoute la classe active
    } else {
      link.classList.remove('active-link'); // Au cas où, enlève l'ancienne classe active
    }
  });


