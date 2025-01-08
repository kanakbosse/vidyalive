
  document.addEventListener("DOMContentLoaded", function() {
      // Image Slider
      const images = document.querySelectorAll('.slider-image');
      let currentImageIndex = 0;

      function showImage(index) {
          images.forEach(img => img.style.display = 'none');
          images[index].style.display = 'block';
      }

      // Show next image
      document.querySelector('.next').addEventListener('click', function() {
          currentImageIndex = (currentImageIndex + 1) % images.length;
          showImage(currentImageIndex);
      });

      // Show previous image
      document.querySelector('.prev').addEventListener('click', function() {
          currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
          showImage(currentImageIndex);
      });
  });
