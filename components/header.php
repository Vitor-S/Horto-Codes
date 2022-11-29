<header>
<nav>
  <a class="logo-div" href="../home">
    <img src="../assets/eu.png" alt="" class="logo">
  </a>
  <ul class="nav-links">
    <li>
      <a href="../robocode">O que é RoboCode</a>
    </li>
    <li>
      <a href="../tutors">Tutoriais</a>
    </li>
    <li>
      <a href="../quemSomos">Quem Somos</a>
    </li>
    <li>
      <a href="../contato">Contato</a>
    </li>
  </ul>
</nav>
</header>

<style>
  nav {
    margin: 10px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    width: 100vw;
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
    margin: 30px;
    list-style: none;
  }

  nav .nav-links a {
    position: relative;
    text-decoration: none;
    color: #FFF;

    font-size: 1.3rem;
    font-weight: 500;

    padding: 30px 10px 10px 10px;
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

  nav .nav-links a:hover::after{
    width: 100%;
    border-radius: 10 px;
  }
</style>