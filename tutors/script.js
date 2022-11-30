const title = document.querySelectorAll(".title");
let subTitle;

for (let i = 0; i < title.length; i++) {
    title[i].addEventListener("click", () => {
        subTitle = String(title[i].id).slice(6);
        const ul = document.querySelector("." + subTitle);
        ul.classList.toggle("view");
        const sep = document.querySelector("#separator-"+subTitle) //separator-install
        sep.classList.toggle("view");
    });
}

var animation = lottie.loadAnimation({
    container: document.querySelector('.animation-container'), // Required
    path: 'https://assets4.lottiefiles.com/packages/lf20_oec0t53s.json', // Required
    renderer: 'svg', // Required
    loop: true, // Optional
    autoplay: true, // Optional
    name: "Robot", // Name for future reference. Optional.
    })
    
animation.play()