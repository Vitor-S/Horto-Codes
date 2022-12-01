
  <nav>
    <a class="logo-div" href="../home">
      <img src="../assets/eu.png" alt="" class="logo">
    </a>
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

<style>

nav {
    top: 0;
    display: flex;
    align-items: center;
    justify-content: space-around;
    width: 95vw;
}

nav .logo {
    width: 80px;
    height: 80px;
    border-radius: 75px;
}

nav .nav-links {
    width: 65%;
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