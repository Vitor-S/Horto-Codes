import { Card } from "../../components/Card.js"

const sections = document.querySelectorAll('.group-section')
const popupWrapper = document.querySelector('.popup-wrapper')

const data = [
    {
        id: 1,
        first_name: 'vitor',
        last_name: 'oliveira',
        image: 'https://i.pinimg.com/originals/cb/1e/7d/cb1e7dbbb2cd77a1e7d78616bb2a0e03.png',
        group: 'web',
    },
    {
        id: 1,
        first_name: 'vitor',
        last_name: 'oliveira',
        image: 'https://i.pinimg.com/originals/cb/1e/7d/cb1e7dbbb2cd77a1e7d78616bb2a0e03.png',
        group: 'web',
    },
    {
        id: 2,
        first_name: 'Marcos',
        last_name: 'Dias',
        image: 'https://ih1.redbubble.net/image.1668069469.5112/st,small,507x507-pad,600x600,f8f8f8.jpg',
        group: 'banco_de_dados',
    },
    {
        id: 3,
        first_name: 'Álex',
        last_name: 'Sei la',
        image: 'https://cdnb.artstation.com/p/assets/images/images/030/647/969/large/vent-hoang-among-us-bullbasaur-02.jpg?1601243218',
        group: 'banco_de_dados',
    },
    {
        id: 4,
        first_name: 'Álvaro',
        last_name: 'Soares',
        image: 'https://ih1.redbubble.net/image.1681670101.0178/st,small,507x507-pad,600x600,f8f8f8.jpg',
        group: 'programação',
    },
    {
        id: 5,
        first_name: 'Rafael',
        last_name: 'Corrêa',
        image: 'https://static.wikia.nocookie.net/e4432cf6-87b8-4ed1-bb64-9c98090e75db',
        group: 'marketing',
    },
    {
        id: 5,
        first_name: 'Rafael',
        last_name: 'Corrêa',
        image: 'https://static.wikia.nocookie.net/e4432cf6-87b8-4ed1-bb64-9c98090e75db',
        group: 'marketing',
    },
    {
        id: 5,
        first_name: 'Rafael',
        last_name: 'Corrêa',
        image: 'https://static.wikia.nocookie.net/e4432cf6-87b8-4ed1-bb64-9c98090e75db',
        group: 'marketing',
    },
    {
        id: 5,
        first_name: 'Rafael',
        last_name: 'Corrêa',
        image: 'https://static.wikia.nocookie.net/e4432cf6-87b8-4ed1-bb64-9c98090e75db',
        group: 'marketing',
    },
    {
        id: 5,
        first_name: 'Rafael',
        last_name: 'Corrêa',
        image: 'https://static.wikia.nocookie.net/e4432cf6-87b8-4ed1-bb64-9c98090e75db',
        group: 'marketing',
    },
    {
        id: 6,
        first_name: 'Davi',
        last_name: 'Sei n',
        image: 'https://i.pinimg.com/564x/6c/3d/cc/6c3dccd791179fb303cc72148b09ed7d.jpg',
        group: 'design',
    },
    {
        id: 6,
        first_name: 'Davi',
        last_name: 'Sei n',
        image: 'https://i.pinimg.com/564x/6c/3d/cc/6c3dccd791179fb303cc72148b09ed7d.jpg',
        group: 'design',
    },
    {
        id: 6,
        first_name: 'Davi',
        last_name: 'Sei n',
        image: 'https://i.pinimg.com/564x/6c/3d/cc/6c3dccd791179fb303cc72148b09ed7d.jpg',
        group: 'design',
    },
    {
        id: 6,
        first_name: 'Davi',
        last_name: 'Sei n',
        image: 'https://i.pinimg.com/564x/6c/3d/cc/6c3dccd791179fb303cc72148b09ed7d.jpg',
        group: 'design',
    },
    {
        id: 2,
        first_name: 'Marcos',
        last_name: 'Dias',
        image: 'https://ih1.redbubble.net/image.1668069469.5112/st,small,507x507-pad,600x600,f8f8f8.jpg',
        group: 'gestão',
    },
    {
        id: 2,
        first_name: 'Marcos',
        last_name: 'Dias',
        image: 'https://ih1.redbubble.net/image.1668069469.5112/st,small,507x507-pad,600x600,f8f8f8.jpg',
        group: 'gestão',
    },
    {
        id: 3,
        first_name: 'Álex',
        last_name: 'Sei la',
        image: 'https://cdnb.artstation.com/p/assets/images/images/030/647/969/large/vent-hoang-among-us-bullbasaur-02.jpg?1601243218',
        group: 'tutoriais',
    },
    {
        id: 3,
        first_name: 'Álex',
        last_name: 'Sei la',
        image: 'https://cdnb.artstation.com/p/assets/images/images/030/647/969/large/vent-hoang-among-us-bullbasaur-02.jpg?1601243218',
        group: 'tutoriais',
    },
    {
        id: 3,
        first_name: 'Álex',
        last_name: 'Sei la',
        image: 'https://cdnb.artstation.com/p/assets/images/images/030/647/969/large/vent-hoang-among-us-bullbasaur-02.jpg?1601243218',
        group: 'tutoriais',
    },
    {
        id: 3,
        first_name: 'Álex',
        last_name: 'Sei la',
        image: 'https://cdnb.artstation.com/p/assets/images/images/030/647/969/large/vent-hoang-among-us-bullbasaur-02.jpg?1601243218',
        group: 'tutoriais',
    },
    {
        id: 4,
        first_name: 'Álvaro',
        last_name: 'Soares',
        image: 'https://ih1.redbubble.net/image.1681670101.0178/st,small,507x507-pad,600x600,f8f8f8.jpg',
        group: 'documentação',
    },
    {
        id: 4,
        first_name: 'Álvaro',
        last_name: 'Soares',
        image: 'https://ih1.redbubble.net/image.1681670101.0178/st,small,507x507-pad,600x600,f8f8f8.jpg',
        group: 'documentação',
    },
    {
        id: 4,
        first_name: 'Álvaro',
        last_name: 'Soares',
        image: 'https://ih1.redbubble.net/image.1681670101.0178/st,small,507x507-pad,600x600,f8f8f8.jpg',
        group: 'documentação',
    },
    {
        id: 4,
        first_name: 'Álvaro',
        last_name: 'Soares',
        image: 'https://ih1.redbubble.net/image.1681670101.0178/st,small,507x507-pad,600x600,f8f8f8.jpg',
        group: 'documentação',
    },
    {
        id: 5,
        first_name: 'Rafael',
        last_name: 'Corrêa',
        image: 'https://static.wikia.nocookie.net/e4432cf6-87b8-4ed1-bb64-9c98090e75db',
        group: 'banco_de_dados',
    },
    {
        id: 6,
        first_name: 'Davi',
        last_name: 'Sei n',
        image: 'https://i.pinimg.com/564x/6c/3d/cc/6c3dccd791179fb303cc72148b09ed7d.jpg',
        group: 'banco_de_dados',
    },
]

class QuemSomos {
    constructor(){
        this.mappingCards()
        this.closePopup()
    }

    mappingCards(){
        sections.forEach(sec => {
            this.searchPersons(sec.id).forEach(person => {
                const card = new Card(person.image, person.first_name)
                sec.appendChild(card)
            })
        })
    }

    //MUDAR PARA PESQUISAR NO BANCO
    searchPersons(search){
        return data.filter(person => person.group == search)
    }

    closePopup(){
        document.addEventListener('click', e => {

            if(e.target.classList.contains('popup-wrapper')){
                popupWrapper.style = 'display: none;'
            }
        })
    }
}

const quemSomos = new QuemSomos()