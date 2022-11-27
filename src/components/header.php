<nav>
  <div class="logo-div">
    <img src="../../assets/eu.png" alt="" class="logo">
  </div>
  <ul class="nav-links">
    <li>
      <a href="">O que é RoboCode</a>
    </li>
    <li>
      <a href="../../pages/Tutors/index.php">Tutoriais</a>
    </li>
    <li>
      <a href="../../pages/QuemSomos/index.php">Quem Somos</a>
    </li>
    <li>
      <a href="">Contato</a>
    </li>
  </ul>

</nav>

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
    width: 60%;
    align-items: center;
    display: flex;
    justify-content: space-around;
  }

  nav .nav-links li {
    margin: 30px;
    list-style: none;
  }

  nav .nav-links a {
    width: 200px;
    font-size: 20px;
    font-weight: 400;
    letter-spacing: 1px;
    text-decoration: none;
    border: none;
    border-radius: 1em;
    background-color: transparent;
    color: white;
    transition: all 200ms ease-in-out;
    padding: 12px;
  }

  nav .nav-links a:hover {
    cursor: pointer;
    color: black;
    font-weight: 600;
    background-color: white;
  }
</style>