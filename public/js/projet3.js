


let myImage = document.querySelector("img");

myImage.addEventListener('click', function() {
    let mySrc = myImage.getAttribute('src');
    switch (mySrc) {
        case '/ImageSite/photo_arche.jpg':
            myImage.setAttribute('src', '/ImageSite/photo_arche_cote.png');
            break;
        case '/ImageSite/photo_arche_cote.png':
            myImage.setAttribute('src', '/ImageSite/photo_arche.jpg');
            break;
    }
})