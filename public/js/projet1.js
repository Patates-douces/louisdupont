


let myImage = document.querySelector("img");

myImage.addEventListener('click', function() {
    let mySrc = myImage.getAttribute('src');
    switch (mySrc) {
        case '/ImageSite/livre_geometrie_pres.png':
            myImage.setAttribute('src', '/ImageSite/livre_geometrie_page.jpg');
            break;
        case '/ImageSite/livre_geometrie_page.jpg':
            myImage.setAttribute('src', '/ImageSite/livre_geometrie_continent.png');
            break;
        case '/ImageSite/livre_geometrie_continent.png':
            myImage.setAttribute('src', '/ImageSite/livre_geometrie_pres.png');
            break;
    }
})