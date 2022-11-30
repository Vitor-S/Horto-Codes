import { Card } from "../components/card.js"

export function createGeneric(type, class_name){
    const element = document.createElement(type)
    element.classList.add(class_name)
    return element
}

function searchPersons(search, data){
    return data.filter(person => person.group == search)
}

export function mappingCards(sections, data){
    sections.forEach(sec => {
        searchPersons(sec.id, data).forEach(person => {
            const card = new Card(person.image, person.first_name)
            sec.appendChild(card)
        })
    })
}

export function mappingCardViewer(sections, data){
    sections.forEach(sec => {
        searchPersons(sec.id, data).forEach(tutor => {
            const cardViewer = new cardViewer(tutor.image, tutor.first_name)
            sec.appendChild(card)
        })
    })
}