function smoothScroll(event) {
    event.preventDefault();

    const targetSectionId = event.target.getAttribute('href').substring(1);
    const targetSection = document.getElementById(targetSectionId);

    if (targetSection) {
        window.scrollTo({
            top: targetSection.offsetTop,
            behavior: 'smooth'
        });
    }
}

const links = document.querySelectorAll('a[href^="#"]');
links.forEach(link => {
    link.addEventListener('click', smoothScroll);
});
