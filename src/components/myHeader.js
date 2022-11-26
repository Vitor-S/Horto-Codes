import { createGeneric } from '../Utils/createElements.js'

class MyHeader extends HTMLElement{
    constructor(){
        super()

        this.build()
        this.mappingActive()
    }

    build(){
        const shadow = this.attachShadow({ mode: 'open' })
        shadow.appendChild(this.styles())

        const header = createGeneric('header', 'header')

        const logo = createGeneric('img', 'logo')
        logo.src = this.getAttribute('logosrc')
    
        const nav = createGeneric('div', 'nav')

        const home = createGeneric('div', 'header-link')
        home.innerHTML = 'Home'

        const robocode = createGeneric('div', 'header-link')
        robocode.innerHTML = 'O que é Robocode'

        const tutor = createGeneric('div', 'header-link')
        tutor.innerHTML = 'Tutoriais'

        const contact = createGeneric('div', 'header-link')
        contact.innerHTML = 'Contato'

        const quemsomos = createGeneric('div', 'header-link')
        quemsomos.innerHTML = 'Quem Somos'

        this.headerLinks = [home, robocode, tutor, contact, quemsomos]
        this.headerLinks.forEach(hl => nav.appendChild(hl))

        header.appendChild(logo)
        header.appendChild(nav)

        shadow.appendChild(header)
    }

    styles(){
        const style = document.createElement('style')

        style.textContent = `
            header{
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                width: 100%;
                height: 200px;   
            }
            
            .header-link{
                display: flex;
                align-items: center;
                justify-content: center;
            
                width: 180px;
                height: 40px;
                font-family: Fira Code;
                font-weight: 100;
                font-size: 1rem;
            
                border: 2px solid #000;
                border-radius: 5px;
            
                transition: 0.3s ease-out;
            }
            
            .logo{
                max-width: 100px;
                height: 100px;
                margin-left: 4.5%;
            }
            
            .nav{
                width: 100%;
                display: flex;
                justify-content: space-around;
            }
            
            .header-link:hover{
                cursor: pointer;
            }
        `

        return style
    }

    mappingActive(){
        this.headerLinks.forEach(hl => hl.addEventListener('click', e => {
            this.headerLinks.forEach(link => link.style = 'background-color: transparent; color: #000;')
            hl.style = 'background-color: #1E3B0E; color: #FFF;'
        }))
    }
}

customElements.define('my-header', MyHeader)