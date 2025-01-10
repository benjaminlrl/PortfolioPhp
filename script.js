document.addEventListener("DOMContentLoaded", () => {
    // Gestion du dropdown
    const dropdownToggle = document.getElementById("dropdown-toggle");
    const languageSelector = document.querySelector(".language-selector");

    if (dropdownToggle && languageSelector) {
        dropdownToggle.addEventListener("click", (event) => {
            event.stopPropagation();
            languageSelector.classList.toggle("active");
        });

        document.addEventListener("click", () => {
            languageSelector.classList.remove("active");
        });

        const dropdownContent = languageSelector.querySelector(".dropdown-content");
        if (dropdownContent) {
            dropdownContent.addEventListener("click", (event) => {
                event.stopPropagation();
            });
        }
    }

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

    // Gestion du scroll pour les conteneurs
    function isInView(element) {
        const rect = element.getBoundingClientRect();
        return rect.top < window.innerHeight && rect.bottom >= 0;
    }

    function handleScroll() {
        const containers = document.querySelectorAll('.container-presentation, .container-competences, .container-langues, .container-parcours');
        containers.forEach(container => {
            if (isInView(container)) {
                container.classList.add('visible-container');
            } else {
                container.classList.remove('visible-container');
            }
        });

        // Gestion de l'icône au scroll
        const iconeUp = document.querySelector('.icone-up');
        if (iconeUp) {
            const scrollTop = window.scrollY || document.documentElement.scrollTop;
            const windowHeight = window.innerHeight;

            if (scrollTop > windowHeight) {
                iconeUp.classList.add('visible-icone');
            } else {
                iconeUp.classList.remove('visible-icone');
            }
        }
    }

    // Remonter en haut de la page
    const iconeUp = document.querySelector('.icone-up');
    if (iconeUp) {
        iconeUp.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Header : activer le lien correspondant à l'URL actuelle
    const links = document.querySelectorAll('.nav-link');
    links.forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add('active-link');
        } else {
            link.classList.remove('active-link');
        }
    });

    // Écoute des événements de défilement
    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Initialisation
});
