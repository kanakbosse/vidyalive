
   let currentIndex = 0;
const images = document.querySelectorAll('.slider-image');
const prevArrow = document.querySelector('.prev');
const nextArrow = document.querySelector('.next');

function showImage(index) {
    images.forEach((image, i) => {
        image.style.display = i === index ? 'block' : 'none';
    });
}

function showNextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
}

function showPrevImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showImage(currentIndex);
}

// Show the first image initially
showImage(currentIndex);

// Automatically change images every 5 seconds
setInterval(showNextImage, 5000);

// Arrow button event listeners
nextArrow.addEventListener('click', showNextImage);
prevArrow.addEventListener('click', showPrevImage);
