(function () {
  const header = document.querySelector('.site-header');
  const burger = document.querySelector('.burger');
  const mobileMenu = document.getElementById('mobile-menu');

  const closeMobileMenu = function () {
    if (!mobileMenu || !burger) {
      return;
    }

    if (!mobileMenu.hasAttribute('hidden')) {
      mobileMenu.setAttribute('hidden', '');
      burger.setAttribute('aria-expanded', 'false');
      // Ulepszenie: Usuń klasę z body
      document.body.classList.remove('menu-is-open');
    }
  };

  const openMobileMenu = function () {
    if (!mobileMenu || !burger) {
      return;
    }
    mobileMenu.removeAttribute('hidden');
    burger.setAttribute('aria-expanded', 'true');
    // Ulepszenie: Dodaj klasę do body
    document.body.classList.add('menu-is-open');
  };

  if (burger && mobileMenu) {
    // Przełączanie menu burgerem
    burger.addEventListener('click', function () {
      const isHidden = mobileMenu.hasAttribute('hidden');
      if (isHidden) {
        openMobileMenu();
      } else {
        closeMobileMenu();
      }
    });

    // Zamykanie po kliknięciu linku w menu
    mobileMenu.addEventListener('click', function (event) {
      if (event.target instanceof HTMLElement && event.target.closest('a')) {
        closeMobileMenu();
      }
    });

    // Zamykanie klawiszem Escape
    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape') {
        closeMobileMenu();
        if (burger) {
          burger.focus();
        }
      }
    });

    // Ulepszenie: Zamykanie po kliknięciu poza menu
    document.addEventListener('click', function (event) {
      if (
        !mobileMenu.hasAttribute('hidden') &&
        !mobileMenu.contains(event.target) &&
        !burger.contains(event.target)
      ) {
        closeMobileMenu();
      }
    });
  }

  // Obsługa scrollowania dla sticky-header
  const handleScroll = function () {
    if (!header) {
      return;
    }

    if (window.scrollY > 20) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();
})();