function isInView(element) {
    const rect = element.getBoundingClientRect();
    return rect.top < window.innerHeight && rect.bottom >= 0;
}

function handleScroll() {
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        if (isInView(section)) {
            section.classList.add('visible-section');
        } else {
            section.classList.remove('visible-section');
        }
    });
}

window.addEventListener('scroll', handleScroll);
handleScroll(); // Vérifie les sections au chargement
