document.addEventListener("DOMContentLoaded", function () {
    const mainImage = document.getElementById("mainImage");
    const thumbsSwiper = new Swiper(".thumbs-swiper", {
      slidesPerView: "auto",
      spaceBetween: 10,
      centeredSlides: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      slideToClickedSlide: true,
      on: {
        slideChange: function () {
          updateMainImage(this.realIndex);
          updateCategory(this.realIndex);
        },
      },
    });
  
    const slides = document.querySelectorAll(".swiper-slide");
    const categories = document.querySelectorAll(".categories span");
  
    slides.forEach((slide, index) => {
      slide.addEventListener("click", () => {
        const img = slide.getAttribute("data-img");
        mainImage.src = img;
        thumbsSwiper.slideTo(index);
        updateCategory(index);
      });
    });
  
    function updateMainImage(index) {
      const selectedSlide = slides[index];
      if (selectedSlide) {
        mainImage.src = selectedSlide.getAttribute("data-img");
      }
    }
  
    function updateCategory(index) {
      categories.forEach((cat, i) => {
        cat.classList.toggle("active", i === index);
      });
    }
  
    // Inicializa categoria ativa e imagem principal
    updateMainImage(0);
    updateCategory(0);
  });
  