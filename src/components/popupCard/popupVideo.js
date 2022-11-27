const popupWrapperVideo = document.querySelector('.popup-wrapper-video')

async function popupVideo(id) { // criando função asyn para poder usar WAIT dentro dela

    // criando fetch para juntar script php com id selecionado quando o card é clicado
    const dados = await fetch('../../scripts/visualizePopupVideo.php?id=' + id);
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

document.addEventListener('click', e => {

    if(e.target.classList.contains('popup-wrapper-video')){
        popupWrapperVideo.style = 'display: none;'
    }
})
