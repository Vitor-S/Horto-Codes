import { createGeneric } from '../Utils/createElements.js'

export class Card extends HTMLElement{
    constructor(src, name){
        super()

        this.src = src
        this.name = name
        this.build()
        this.mappingClick()
    }

    build(){
        const shadow = this.attachShadow({ mode: 'open' })
        shadow.appendChild(this.styles())

        const card = createGeneric('div', 'card-container')

        const img = createGeneric('img', 'card-img')
        img.src = this.src

        const name = createGeneric('div', 'card-name')
        name.innerHTML = this.name

        card.appendChild(img)
        card.appendChild(name)

        shadow.appendChild(card)
    }

    styles(){
        const style = document.createElement('style')

        style.textContent = `
            .card-container{
                display: flex;

                flex-direction: column;
                align-items: center;
                border-radius: 3%;

                transition: 0.4s ease-out;
            }
            
            .card-img{
                width: 120px;
                border-radius: 50%;
            }

            .card-name{
                font-family: Fira Code;
                font-weight: bold;
            }

            .card-container:hover{
                scale: 1.07;
                cursor: pointer;
            }
        `

        return style;
    }

    mappingClick(){
        this.addEventListener('click', e => {
            document.querySelector('.popup-wrapper').style = 'display: flex;'
        })
    }
}

customElements.define('person-card', Card)