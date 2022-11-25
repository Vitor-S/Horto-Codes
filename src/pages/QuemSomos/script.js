async function personCard(id) { // criando função asyn para poder usar WAIT dentro dela

    // criando fetch para juntar script php com id selecionado quando o card é clicado
    const dados = await fetch('../../scripts/visualizePopup.php?id=' + id);
    const resposta = await dados.json(); // esperando o script retornar o $resposta como JSON

    if (!resposta['status']) { // tratando erro
        alert('Error');
    }
    // caso volte sem erros, é mostrado o popup
    // colocando informações tranzidas por ele dentro dos elementos html
    else {
        const popup = document.querySelector('.popup-wrapper').style.display="flex";
        const popupName = document.querySelector('.popup-name');
        const popupImage = document.querySelector('.popup-image');
        const popupBio = document.querySelector('.popup-bio');
  
        popupName.innerHTML = resposta['dados'].PRIMEIRO_NOME;
        popupImage.innerHTML = resposta['dados'].IMAGEM;
        popupBio.innerHTML = resposta['dados'].DESCRICAO;
    }
}
