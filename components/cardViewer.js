import { createGeneric } from '../Utils/createElements.js';

export class CardViewer extends HTMLElement{
    constructor(src, title){
        super()
        
        this.src = src
        this.title = title

        this.build()
    }

    build(){
        const shadow = this.attachShadow({ mode: 'open' })
        shadow.appendChild(this.styles())

        const card = createGeneric('div', 'list-viewer-card')

        const image = createGeneric('img', 'list-viewer-image')
        image.src = this.src

        const title = createGeneric('h2', 'list-viewer-title')
        title.innerHTML = this.title

        card.appendChild(image)
        card.appendChild(title)
        shadow.appendChild(card)
    }

    styles(){
        const style = document.createElement('style')
        style.textContent = `          
            .list-viewer-image{
                width: 334px;
                height: 188px;
            }
            
            .list-viewer-title{
                text-align: center;
            }
        `
        return style
    }
}

customElements.define('card-viewer', CardViewer)