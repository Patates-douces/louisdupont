

let myImage = document.querySelector("img");

myImage.addEventListener('click', function() {
    let mySrc = myImage.getAttribute('src');
    alert(mySrc);
    if (mySrc === '/ImageSite/livre.jpg') {
        myImage.setAttribute('src', '/ImageSite/photo.jpg');
    } else {

        myImage.setAttribute('src', '/ImageSite/photo.jpg');
    }
});