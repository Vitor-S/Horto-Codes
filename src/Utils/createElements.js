export function createGeneric(type, class_name){
    const element = document.createElement(type)
    element.classList.add(class_name)
    return element
}