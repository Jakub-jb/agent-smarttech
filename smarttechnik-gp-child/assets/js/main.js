// główny skrypt – obsługa burgera i sticky header
document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.querySelector('[data-menu-toggle]');
    const mobileMenu = document.querySelector('[data-menu-panel]');
    const body = document.body;

    function toggleMenu() {
        const expanded = menuBtn.getAttribute('aria-expanded') === 'true';
        menuBtn.setAttribute('aria-expanded', (!expanded).toString());
        mobileMenu.hidden = expanded;
        body.classList.toggle('menu-is-open', !expanded);
    }

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', toggleMenu);
        mobileMenu.addEventListener('click', (e) => {
            if (e.target.tagName === 'A') toggleMenu();
        });
        document.addEventListener('keyup', (e) => {
            if (e.key === 'Escape' && !mobileMenu.hidden) toggleMenu();
        });
        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !menuBtn.contains(e.target) && !mobileMenu.hidden) {
                toggleMenu();
            }
        });
    }

    // zmiana klasy headera przy scrollu
    const header = document.querySelector('.site-header');
    window.addEventListener('scroll', () => {
        if (header) {
            header.classList.toggle('scrolled', window.scrollY > 0);
        }
    });
});
