const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slide");
const prevBtn = document.querySelector(".prev");
const nextBtn = document.querySelector(".next");

let currentIndex = 0;

function goToSlide(index) {
  slides.forEach((slide) => {
    slide.style.transform = `translateX(-${index * 100}%)`;
  });
}

prevBtn.addEventListener("click", () => {
  if (currentIndex > 0) {
    currentIndex--;
    goToSlide(currentIndex);
  }
});

nextBtn.addEventListener("click", () => {
  if (currentIndex < slides.length - 1) {
    currentIndex++;
    goToSlide(currentIndex);
  }
});

// Auto play
setInterval(() => {
  if (currentIndex === slides.length - 1) {
    currentIndex = 0;
  } else {
    currentIndex++;
  }

  goToSlide(currentIndex);
}, 5000);
