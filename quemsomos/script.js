const cards = document.querySelectorAll('.card-container')

cards.forEach(card => {
    card.addEventListener('click', e => {
        document.body.style = 'overflow: hidden;'
    })
})

document.querySelector('.popup-wrapper').addEventListener('click', e => {
    document.body.style = 'overflow: none;'
})