let currentSlide = 0;
const slider = document.getElementById("teachersSlider");
const slides = document.querySelectorAll(".teacher-slide");
const indicators = document.querySelectorAll(".indicator");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const totalSlides = 5; // Total number of slide groups
const slidesPerView = Math.floor(slides.length / totalSlides);

function updateSlider() {
  const translateX = -currentSlide * (100 / totalSlides);
  slider.style.transform = `translateX(${translateX}%)`;

  // Update indicators
  indicators.forEach((indicator, index) => {
    indicator.classList.toggle("active", index === currentSlide);
  });

  // Update button states
  prevBtn.disabled = currentSlide === 0;
  nextBtn.disabled = currentSlide === totalSlides - 1;
}

function nextSlide() {
  if (currentSlide < totalSlides - 1) {
    currentSlide++;
    updateSlider();
  }
}

function prevSlide() {
  if (currentSlide > 0) {
    currentSlide--;
    updateSlider();
  }
}

function goToSlide(slideIndex) {
  currentSlide = slideIndex;
  updateSlider();
}

// Event listeners
nextBtn.addEventListener("click", nextSlide);
prevBtn.addEventListener("click", prevSlide);

indicators.forEach((indicator, index) => {
  indicator.addEventListener("click", () => goToSlide(index));
});

// Auto-slide functionality (optional)
let autoSlideInterval = setInterval(nextSlide, 4000);

// Pause auto-slide on hover
slider.addEventListener("mouseenter", () => {
  clearInterval(autoSlideInterval);
});

slider.addEventListener("mouseleave", () => {
  autoSlideInterval = setInterval(nextSlide, 4000);
});

// Initialize
updateSlider();
