


let myImage = document.querySelector("img");

myImage.addEventListener('click', function() {
    let mySrc = myImage.getAttribute('src');
    switch (mySrc) {
        case '/ImageSite/couverture.jpg':
            myImage.setAttribute('src', '/ImageSite/combat_double_page.png');
            break;
        case '/ImageSite/combat_double_page.png':
            myImage.setAttribute('src', '/ImageSite/chevalier_gonzague.jpg');
            break;
        case '/ImageSite/chevalier_gonzague.jpg':
            myImage.setAttribute('src', '/ImageSite/couverture.jpg');
            break;
    }
})

var titre = 'titre2';
var description = 'description 2';
var image = 'ImageSite/photo.jpg';