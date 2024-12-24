    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.style.display = i === index ? 'block' : 'none';
      });
    }

    prevButton.addEventListener('click', () => {
      currentSlide = (currentSlide > 0) ? currentSlide - 1 : slides.length - 1;
      showSlide(currentSlide);
    });

    nextButton.addEventListener('click', () => {
      currentSlide = (currentSlide < slides.length - 1) ? currentSlide + 1 : 0;
      showSlide(currentSlide);
    });

    // Изначально показываем первый слайд
    showSlide(currentSlide);
