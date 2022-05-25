window.onload = () => {
    window.addEventListener('scroll', () => {
        let hauteur = document.documentElement.scrollHeight - window.innerHeight;
        let position = window.scrollY;
        let largeur = document.documentElement.clientWidth * 0.8;

        let barre = (position /hauteur) * largeur;

        document.getElementById("barre").style.width = barre + "px";
    });
}

var count = 100,
    particleClass = "particle",
    particleColors = ["f6e58d", "#ffbe76", "#ff7979", "#badc58"],
    wrapper = document.getElementById("wrapper"),
    w = wrapper.offsetWidth,
    h = wrapper.offsetHeight,
    elem;

for (var i = 0; i < count; i++) {
    elem = document.createElement('div');
    elem.className = particleClass;
    wrapper.appendChild(elem);

    gsap.set(elem, {
        x: gsap.utils.random(0, w),
        y: gsap.utils.random(0, h) - (h * 0.5),
        scale: gsap.utils.random(0.5, 1),
        backgroundColor: gsap.utils.random(particleColors)
    });
    anime(elem);

    function anime(elem){
        // gsap.to : permet de définir les valuers de destination
        // gsap.utils.random : Get a random number between 5 and 10
        gsap.to(elem, gsap.utils.random(5,10), {
            y: h,
            ease: "none",
            repeat: -1,
            delay: -10
        })
        gsap.to(elem, gsap.utils.random(1,6), {
            x: "+=50",
            ease: "power1.inOut", // permet d'avoir un début vite et une fin smooth
            repeat: -1,
            yoyo: true,
        });
        gsap.to(elem, gsap.utils.random(1,2), {
            opacity: 0,
            ease: "power1.inOut",
            repeat: 1,
            yoyo: true,
        });
    }
}