<script src="../../components/popupCard/popup.js" defer></script>
<script src="../../components/animatedButton.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js" integrity="sha512-yAr4fN9WZH6hESbOwoFZGtSgOP+LSZbs/JeoDr02pOX4yUFfI++qC9YwIQXIGffhnzliykJtdWTV/v3PxSz8aw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="popup-wrapper">
    <div class="popup-container">
        <h2 class="popup-name"></h2>
        <div class="popup-info">
            <img class="popup-image" src="https://i.pinimg.com/originals/cb/1e/7d/cb1e7dbbb2cd77a1e7d78616bb2a0e03.png" alt="">
            <p class="popup-bio"></p>
        </div>
        <div class="social-media-container">
            <div class="animated-button-container" style="width: 60px; height: 60px;">
                <animated-button class="animated-button" direction="1" type="repeat" animation="https://assets6.lottiefiles.com/packages/lf20_atjsyyed.json"></animated-button>
            </div>
            <div class="animated-button-container" style="width: 80px; height: 80px;" id="github-icon">
                <animated-button class="animated-button" direction="1" type="repeat" animation="https://assets3.lottiefiles.com/private_files/lf30_1ldonjtk.json"></animated-button>
            </div>
            <div class="animated-button-container" style="width: 60px; height: 60px;">
                <animated-button class="animated-button" direction="1" type="repeat" animation="https://assets9.lottiefiles.com/packages/lf20_2ks3pjua.json"></animated-button>
            </div>
        </div>
    </div>
</div>

<style>
.popup-wrapper{
    display: none;
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

    width: 52%;
    height: 40%;
    background-color: #FFF;
}

.popup-image{
    width: 200px;
    border-radius: 50%;
}

.popup-name{
    text-align: center;
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
    max-width: 65%;
}

.social-media-container{
    display: flex;
    width: 80%;
    height: 50px;
    justify-content: center;
}

#github-icon{
    transform: translateY(-13%);
}

.animated-button{
    width: 10px;
    height: 10px;
}

.animated-button-container{
    transition: 0.2s ease-out;
}

.animated-button-container:hover{
    scale: 1.1;
    cursor: pointer;
}
</style>