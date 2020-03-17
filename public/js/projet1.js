


let myImage = document.querySelector("img");

myImage.addEventListener('click', function() {
    let mySrc = myImage.getAttribute('src');
    if (mySrc === '/ImageSite/sitelouis.jpg') {
        myImage.setAttribute('src', '/ImageSite/photo.jpg');
    } else {

        myImage.setAttribute('src', '/ImageSite/sitelouis.jpg');
    }
});