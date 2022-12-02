<script src="../components/popupCard/popup.js" defer></script>

<div class="popup-wrapper">
    <div class="popup-container">
        <img class="popup-image" src="https://i.pinimg.com/originals/cb/1e/7d/cb1e7dbbb2cd77a1e7d78616bb2a0e03.png" alt="">
        <h2 class="popup-name">Vitor Silva Oliveira</h2>
        <div class="popup-info">
            <p class="popup-bio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum enim modi repudiandae repellat. Cumque quasi pariatur, rem at nobis maiores ea facere. Cum mollitia cumque voluptates! Explicabo quos at reprehenderit.</p>
        </div>
        <div class="social-media-container">
            <a href="">
                <img src="https://cdn-icons-png.flaticon.com/512/1051/1051326.png" class="animated-button-container" id="instagram-icon">
            </a>
            <a href="">
                <img src="https://cdn-icons-png.flaticon.com/512/1377/1377213.png" class="animated-button-container" id="linkedin-icon">
            </a>
            <a href="">
                <img src="https://cdn-icons-png.flaticon.com/512/4138/4138124.png" class="animated-button-container" id="instagram-icon">
            </a>
        </div>
    </div>
</div>

<style>
.popup-wrapper{
    display: flex;
    align-items: center;
    justify-content: center;

    position: fixed;
    width: 100vw;
    height: 100vh;
    top: 0;

    background-color: rgba(20, 20, 20, 0.9);
}

.popup-container{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    padding: 1rem;

    width: 25%;
    min-width: 360px;
    height: 70%;
    border-radius: 5px;
    color: #FFF;
}

.popup-image{
    width: 200px;
    border-radius: 50%;
}

.popup-name{
    text-align: center;
    font-weight: 500;
}

.popup-info{
    display: flex;
    justify-content: space-evenly;
    align-items: center;

    width: 100%;
    font-family: Fira Code;
    font-size: 1.2rem;
    font-weight: 500;
}

.popup-bio{
    font-weight: 300;
    text-align: center;
    max-width: 75%;
}

.social-media-container{
    display: flex;
    width: 50%;
    height: 50px;
    justify-content: space-around;
}

#github-icon{
    transform: translateY(-13%);
}

.animated-button{
    width: 10px;
    height: 10px;
}

.animated-button-container{
    width: 40px;
    height: 40px;
    transition: 0.2s ease-out;
}

.animated-button-container:hover{
    scale: 1.1;
    cursor: pointer;
}

.popup-container {
    background: linear-gradient(-135deg, transparent, transparent, transparent, transparent, #815AB4, #5B407F, #B780FF, #AD65AD, #AD65AD);
    background-size: 1000% 1000%;
    -webkit-animation: gradient 15s ease infinite;
    animation: gradient 20s ease infinite;
}


  @-webkit-keyframes gradient {
    0% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0% 50%;
    }
  }
  
  @keyframes gradient {
    0% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0% 50%;
    }
  }
</style>