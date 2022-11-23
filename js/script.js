// Variables

const pageName = document.querySelector('title').innerHTML;

// Nav Responsivity

// Open and close navigation bar when hamburger button pressed
function openNav() {
    if (document.getElementById('nav-links').style.display == 'block') {
        document.getElementById('nav-links').style.display = 'none';
    } else {
        document.getElementById('nav-links').style.display = 'block';
    }
}

// Open or close navigation bar when resizing nav

function resizeNav() {
    if (visualViewport.width >= 900) {
        document.getElementById('nav-links').style.display = 'flex';
    } else {
        document.getElementById('nav-links').style.display = 'none';
    }
}

// Load Events

// Before page is loaded, there is a white layer that "hides" the page. When page is loaded, this layer is removed

document.body.onload = () => {
    document.querySelector('#load').style.opacity = 0;
    setTimeout(() => {document.querySelector('#load').style.display = 'none';}, 200)
}

// CSS differences

// Defines which image will be in header background

let archiveImg = ''

if (pageName == "Yogui-se") {
    archiveImg = 'banner.jpg';
} else if (pageName == "Yoga") {
    archiveImg = 'banner-yoga.jpg';
} else if (pageName == "Cadastro"){
    archiveImg = 'banner-cadastro.jpg';
} else if (pageName == 'Práticas'){
    archiveImg = 'banner-praticas.jpg';
} else if (pageName == 'Pranayamas') {
    archiveImg = 'banner-pranayamas.jpg';
} else if (pageName == 'Asanas') {
    archiveImg = 'banner-asanas.jpg';
} else if (pageName == 'Meditações') {
    archiveImg = 'banner-meditacoes.jpg';
} else if (pageName == 'Sobre') {
    archiveImg = 'banner-sobre.jpg';
} else if (pageName == 'Galeria') {
    archiveImg = 'banner-galeria.jpg'
} else if (pageName == 'Faça Agora') {
    archiveImg = 'banner-facaagora.jpg'
} else if (pageName == 'Glossário') {
    archiveImg = 'banner-glossario.jpg'
}
document.querySelector('header').style.backgroundImage = 'url(img/header/' + archiveImg + ')';

// Interactive Timeline

// The next two functions hide or show the section of timeline

function historia (h) {
    if (visualViewport.width >= 726) {
        document.querySelector('#' + h ).style.opacity = '100%';
    }
}
function qhistoria (h) {
    if (visualViewport.width >= 726) {
        document.querySelector('#' + h ).style.opacity = '0';
    }
}

// The next function controls a modal that show the sections of Yoga history

function modaltimeline(h) {
    if (visualViewport.width < 726) {
        document.querySelector('#modal-timeline').style.display = 'block';
        document.querySelector('#modal-timeline').style.opacity = '100%';

        let title = document.getElementById(h + '-h3').innerHTML;
        let text = document.getElementById(h + '-p').innerHTML;

        document.querySelector('#modal-timeline h3').innerHTML = title;
        document.querySelector('#modal-timeline p').innerHTML = text;

        document.querySelector('#modal-timeline #close-modal').addEventListener('click', () => {
            document.querySelector('#modal-timeline').style.opacity = '0';
            setTimeout(() => {document.querySelector('#modal-timeline').style.display = 'none'}, 300)
            
        })
    }
}