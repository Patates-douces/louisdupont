


let myImage = document.querySelector("img");

myImage.addEventListener('click', function() {
    let mySrc = myImage.getAttribute('src');
    switch (mySrc) {
        case '/ImageSite/louis3.jpg':
            myImage.setAttribute('src', '/ImageSite/louis.jpg');
            break;
        case '/ImageSite/louis.jpg':
            myImage.setAttribute('src', '/ImageSite/louis2.jpg');
            break;
        case '/ImageSite/louis2.jpg':
            myImage.setAttribute('src', '/ImageSite/louis3.jpg');
            break;
    }
})