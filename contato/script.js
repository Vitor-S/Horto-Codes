var animation = lottie.loadAnimation({
    container: document.querySelector('.email-animation'), // Required
    path: 'https://assets4.lottiefiles.com/packages/lf20_zd8ore6a.json', // Required
    renderer: 'svg', // Required
    loop: true, // Optional
    autoplay: true, // Optional
    name: "Email", // Name for future reference. Optional.
    })
    
animation.play()