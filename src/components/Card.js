import { createGeneric } from '../Utils/createElements.js'

class Card extends HTMLElement{
    constructor(){
        super()

        this.build()
    }

    build(){
        const shadow = this.attachShadow({ mode: 'open' })
        shadow.appendChild(this.styles())

        const card = createGeneric('div', 'card-container')

        const img = createGeneric('img', 'card-img')
        img.src = this.getAttribute('src')

        const name = createGeneric('div', 'card-name')
        name.innerHTML = this.getAttribute('name')

        card.appendChild(img)
        card.appendChild(name)

        shadow.appendChild(card)
    }

    styles(){
        const style = document.createElement('style')
        style.textContent = `
            .card-container{
                display: flex;
                padding: 1.5rem;
                flex-direction: column;
                align-items: center;
                gap: 1rem;
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

    // createGeneric(type, class_name){
    //     const element = document.createElement(type)
    //     element.classList.add(class_name)
    //     return element
    // }
}

customElements.define('person-card', Card)