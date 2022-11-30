const popupWrapperVideo = document.querySelector('.popup-wrapper-video')

async function popupVideo(id) { // criando função asyn para poder usar WAIT dentro dela

    // criando fetch para juntar script php com id selecionado quando o card é clicado
    const dados = await fetch('../scripts/visualizePopupVideo.php?id=' + id);
    const resposta = await dados.json(); // esperando o script retornar o $resposta como JSON

    if (!resposta['status']) { // tratando erro
        alert('Error');
    }
    // caso volte sem erros, é mostrado o popup
    // colocando informações tranzidas por ele dentro dos elementos html
    else {
        const popup = document.querySelector('.popup-wrapper-video').style.display="flex";
        const popupVideo = document.querySelector('.popup-video');
        
        popupVideo.src = resposta['dados'].LINK_TUTORIAL;

    }
}

// quando o usuário clicar fora do popup com ele aberto, irá se fechar
document.addEventListener('click', e => {

    // tratando o evento em que o usuário fecha o popup com o vídeo ainda em play
    // trocando o src do iframe do player para poder parar o video e limpar o cache do iframe
    var iframes = document.querySelector('.popup-video'); 
      iframes.src = "";

    if(e.target.classList.contains('popup-wrapper-video')){
        popupWrapperVideo.style = 'display: none;'
    }
})
