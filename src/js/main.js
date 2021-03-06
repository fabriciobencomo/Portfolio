<<<<<<< HEAD
$(window).on("load", function(){
    $(".loader").fadeOut(2000);
    $(".content-full").fadeIn(1000)
    .then(portfolio().then(animation()));
});

document.addEventListener('DOMContentLoaded', function() {
    EventListeners();
=======
document.addEventListener('DOMContentLoaded', function() {
    EventListeners();
    portfolio();
>>>>>>> f510c7cae82882670cbb112e84f2b02fd24d6984
})
var widthBrowser = window.outerWidth;

var num = 1

var WebSites;
var botonesModal;


function EventListeners(){
<<<<<<< HEAD
=======
    animation();
>>>>>>> f510c7cae82882670cbb112e84f2b02fd24d6984
    scrollNav();
    navegacionFija();
    navegacionResponsive();
    mensajeDisapear();
}
<<<<<<< HEAD


function animation(){
    window.sr = ScrollReveal();
=======
window.sr = ScrollReveal();

function animation(){
>>>>>>> f510c7cae82882670cbb112e84f2b02fd24d6984
    sr.reveal('.about-title', {
        duration: 2000,
        origin: 'left',
        distance:'200px'

    });
    sr.reveal('.project-title', {
        duration: 2000,
        origin: 'right',
        distance:'200px'

    });

    sr.reveal('.contenido-video', {
        duration: 2000

    });

    sr.reveal('.about-content', {
        duration: 2000,
        origin: 'bottom',
        distance: '200px'
    });

    sr.reveal('.card', {
        duration: 2000,
        origin: 'bottom',
        distance: '200px'
    });


    sr.reveal('.contact-title', {
        duration: 2000,
        origin: 'left',
        distance: '200px'
    });
    sr.reveal('form', {
        duration: 2000,
        origin: 'right',
        distance: '400px'
    });
    sr.reveal('.fijo', {
        duration: 2000,
        origin: 'pop',
    });

}


function scrollNav() {
    const enlaces = document.querySelectorAll('.nav a');
    
    enlaces.forEach( function( enlace ) {
        enlace.addEventListener('click', function(e) {
            e.preventDefault();
            const seccion = document.querySelector(e.target.attributes.href.value);

            seccion.scrollIntoView({
                behavior: 'smooth'
            });

            if(widthBrowser <= 480){
                animacionResponsive();
            }
        });
    });

    const boton = document.querySelector('.boton-blanco');
    const goHome = document.querySelector('.go-home');

    if(!goHome){
        boton.addEventListener('click', function (e){
            e.preventDefault();
            const seccion = document.querySelector('.aboutMe');
    
            seccion.scrollIntoView({
                behavior: 'smooth'
            })
        })
    }
}

function navegacionFija() {

    const barra = document.querySelector('.navbar');

    const observer = new IntersectionObserver( function(entries) {
        if(entries[0].isIntersecting && widthBrowser <= 0) {
            barra.classList.remove('fijo');
        } else{
            barra.classList.add('fijo');
        }
    });


    observer.observe(document.querySelector('.video'));
}

function navegacionResponsive(){
    const burger = document.querySelector('.burger')

    burger.addEventListener('click', () => {

        animacionResponsive();
    })


}

function animacionResponsive(){
    const nav = document.querySelector('.nav');
    const navlinks = document.querySelectorAll('.nav a')
    const navAcitve = document.querySelector('.nav-active')
    const burger = document.querySelector('.burger')
    nav.classList.toggle('nav-active')
    navlinks.forEach((link,index) =>{
        if(link.style.animation){
            link.style.animation = '';
        }else {
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 5 +.2}s`;
        }
    });
    burger.classList.toggle('toggle')
}

function mensajeDisapear(){
    const mensaje = document.querySelector('.mensaje_form');

    if(num === 1 && mensaje)(
        setTimeout(function(){
            mensaje.classList.add('none');
        },5000)
    )
}


async function getData() {
    if(WebSites == undefined)
    {
        const resultado = await fetch('./webSites.json');
        const db = await resultado.json();
        WebSites = db;
    }
}

async function portfolio(){
    const section = document.querySelector('.project-content')
    try {
        await getData();
        console.log(WebSites.WebSites)
        WebSites.WebSites.forEach( webSite => {
            const { id, nombre, Descripcion, url, Github } = webSite;
            const card = document.createElement('DIV')
            card.classList.add('card')
            const hover = document.createElement('DIV')
            const title = document.createElement('H4')
            title.textContent = nombre
            hover.classList.add('hover')
            const boton = document.createElement('A')
            boton.classList.add('boton-blanco')
            boton.classList.add('sitioweb')
            boton.setAttribute('id', id)
            boton.textContent = "Read More"
            const htmlContent = 
            `<img src="./build/img/${id}.webp" alt="Proyecto lorem">`;
            card.innerHTML = htmlContent;
            section.append(card);
            card.append(hover)
            hover.appendChild(title)
            hover.appendChild(boton)
            boton.onclick = showModal;
        } )
    }catch (error) {
        console.log(error);
    }
}


function showModal(e){
    getData();

    const modal = document.querySelector('.modal')

    if(modal.classList.contains('none')){
        const botonId = e.target.id
        WebSites.WebSites.forEach(website =>{
        if(website.id == botonId){
            const {id, nombre, Descripcion, url, Github} = website
            const overlay = document.querySelector('.projects')
            overlay.classList.add('overlay-body')
            modal.classList.remove('none')
            const hide = document.querySelector('.project-content')
            const hideTitle = document.querySelector('.project-title')
            const hideNavBar = document.querySelector('.navbar')
            hide.style.visibility = 'hidden'
            hideTitle.classList.add('none')
            hideNavBar.style.display = 'none'
            const htmlContent = 
            `<img src="./build/img/${id}.webp" class="img-web" alt="website">
            <h3>${nombre}</h3>
            <p>${Descripcion}</p>
            <div class="url-website">
            <div class="button-web">
                <img src="./build/img/github.webp" alt="Github Icon">
                <a href="${Github}">Github</a>
            </div>
            <div class="button-web">
                <img src="./build/img/web.webp" alt="Website Icon">
                <a href="${url}">Website</a>
            </div>
            </div>`;
            modal.innerHTML = htmlContent;
            if(overlay.classList.contains('inactive')){
                setTimeout( function(){
                    overlay.classList.add('active')
                    overlay.classList.remove('inactive')
                    var active = document.querySelector('.active')
                    active.onclick = closeModal
                }, 1)
            }
        }
    })
    }
}

function closeModal(){
    const modal = document.querySelector('.modal')
    const overlay = document.querySelector('.projects')
    if(overlay.classList.contains('active') && !overlay.classList.contains('inactive')){
        modal.classList.add('none')
        overlay.classList.remove('overlay-body')
        overlay.classList.remove('active')
        overlay.classList.add('inactive')
        const show = document.querySelector('.project-content')
        const hideTitle = document.querySelector('.project-title')
        const hideNavBar = document.querySelector('.navbar')
        hideTitle.classList.remove('none')
        hideNavBar.style.display = 'flex'
        show.style.visibility = 'visible'
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> f510c7cae82882670cbb112e84f2b02fd24d6984
