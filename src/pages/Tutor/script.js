import { mappingCardViewer } from "../../Utils/createElements.js"

const tutors_sections = document.querySelectorAll('.viewer-section')

//SUBSTITUIR PELOS DADOS DO BANCO
const tutors = [
    {
        id: 1,
        title: 'instalando o java',
        categoria: 'instalação',
        preview: 'https://source.unsplash.com/random/334x188/?bear'
    },
    {
        id: 2,
        title: 'instalando o robocode',
        categoria: 'instalação',
        preview: 'https://source.unsplash.com/random/334x188/?monkey'
    },
    {
        id: 3,
        title: 'movimentando o robô',
        categoria: 'movimentação',
        preview: 'https://source.unsplash.com/random/334x188/?apple'
    }
]

class TutorsPage{
    constructor(){
        mappingCardViewer(tutors_sections, tutors)
    }    
}

const tutors_page = new TutorsPage()