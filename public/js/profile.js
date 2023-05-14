const slides = document.querySelectorAll('.carousel-slide');
let currentIndex = 0;

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.style.display = i === index ? 'block' : 'none';
  });
}

function nextSlide() {
  currentIndex++;
  if (currentIndex >= slides.length) {
    currentIndex = 0;
  }
  showSlide(currentIndex);
}

// Ganti dengan setInterval jika ingin penggeseran otomatis
setInterval(nextSlide, 5000);

// Panggil showSlide(0) jika ingin menampilkan slide pertama secara manual
showSlide(0);