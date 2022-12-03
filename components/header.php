<link rel="shortcut icon" href="../assets/favicon.gif" type="image/x-icon">
<nav>
    <a class="logo-div" href="../home">
      <img src="../assets/eu.png" alt="" class="logo">
    </a>
    <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
    <ul class="nav-links">
      <li>
        <a class="link" href="../robocode">O que é RoboCode</a>
      </li>
      <li>
        <a class="link" href="../tutors">Tutoriais</a>
      </li>
      <li>
        <a class="link" href="../quemsomos">Quem Somos</a>
      </li>
      <li>
        <a class="link" href="../contato">Contato</a>
      </li>
    </ul>
  </nav>
<script>
  class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
      this.mobileMenu = document.querySelector(mobileMenu);
      this.navList = document.querySelector('.nav-links');
      this.navLinks = document.querySelectorAll(navLinks);
      this.activeClass = "active";

      this.handleClick = this.handleClick.bind(this);
    }

    animateLinks() {
      this.navLinks.forEach((link, index) => {
        link.style.animation
          ? (link.style.animation = "")
          : (link.style.animation = `navLinkFade 0.5s ease forwards ${
              index / 7 + 0.3
            }s`);
      });
    }

    handleClick() {
      this.navList.classList.toggle(this.activeClass);
      this.mobileMenu.classList.toggle(this.activeClass);
      this.mobileMenu.classList.contains(this.activeClass) ? document.body.style = 'overflow: hidden;' : document.body.style = 'overflow: none;'
      this.animateLinks();
    }

    addClickEvent() {
      this.mobileMenu.addEventListener("click", this.handleClick);
    }

    init() {
      if (this.mobileMenu) {
        this.addClickEvent();
      }
      return this;
    }
}

  const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-links",
    ".nav-links li",
  );
  
  mobileNavbar.init();


</script>
<style>
   * {
    margin: 0;
    padding: 0;
  }

  .nav-links {
    width: 100vw;
    list-style: none;
    display: flex;
  }

  .mobile-menu {
    display: none;
    cursor: pointer;
  }

  .mobile-menu div {
    width: 32px;
    height: 2px;
    background: #fff;
    margin: 8px;
    transition: 0.3s;
  }

  @media (max-width: 1200px) {
    .nav-links {
      z-index: 5;
      position: absolute;
      top: 80px;
      left: 0;
      height: 65vh;
      background: #9640BE;
      flex-direction: column;
      align-items: center;
      justify-content: space-around;
      transform: translateY(-120%);
      transition: transform 0.3s ease-in;
  }

  .mobile-menu {
      display: block;
    }
  }

  .nav-links.active {
    width: 100vw;
    transform: translateX(0);
  }

  .mobile-menu.active .line1 {
    transform: rotate(-45deg) translate(-8px, 8px);
  }

  .mobile-menu.active .line2 {
    opacity: 0;
  }

  .mobile-menu.active .line3 {
    transform: rotate(45deg) translate(-5px, -7px);
  }

nav {
    width: 95vw;
    top: 0;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

nav .logo {
    width: 80px;
    height: 80px;
    border-radius: 75px;
}

nav .nav-links {
    align-items: center;
    display: flex;
    justify-content: space-around;
}

nav .nav-links li {
    list-style: none;
}

nav .nav-links a {
    position: relative;
    text-decoration: none;
    color: #FFF;

    font-size: 1.3rem;
    font-weight: 500;
}

nav .nav-links a::after {
    content: "";
    position: absolute;
    background-color: #FFF;
    height: 3px;
    width: 0;
    left: 0;
    bottom: -3px;
    transition: 0.3s ease-out;
}

nav .nav-links a:hover::after {
    width: 100%;
    border-radius: 10 px;
}
</style>
