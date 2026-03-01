document.addEventListener('DOMContentLoaded', () => {

  // =========================
  // ICON INITIALIZATION
  // =========================
  //lucide.createIcons();
if (typeof lucide !== "undefined") {
    lucide.createIcons();
}



  // =========================
  // Back to Top Button
  // =========================
  const backToTopBtn = document.getElementById("backToTop");
  if (backToTopBtn) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 300) {
        backToTopBtn.classList.remove("hidden");
      } else {
        backToTopBtn.classList.add("hidden");
      }
    });

    backToTopBtn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  // =========================
  // Hero Slider
  // =========================
  const heroSlider = document.getElementById('heroSlider');
  if (heroSlider) {
    const slides = heroSlider.querySelectorAll('.slide');
    let currentIndex = 0;
    const slideCount = slides.length;
    const slideDuration = 5000; // 5 seconds
    const fps = 60; 
    const scaleStep = 0.1 / (slideDuration / (1000 / fps));
    let zoomInterval;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        const img = slide.querySelector('img');
        if (!img) return;
        slide.style.opacity = i === index ? '1' : '0';
        img.style.transform = 'scale(1)';
      });

      const currentImg = slides[index].querySelector('img');
      if (currentImg) {
        let scale = 1;
        clearInterval(zoomInterval);
        zoomInterval = setInterval(() => {
          scale += scaleStep;
          if (scale > 1.1) scale = 1.1;
          currentImg.style.transform = `scale(${scale})`;
        }, 1000 / fps);
      }
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % slideCount;
      showSlide(currentIndex);
    }

    showSlide(currentIndex);
    setInterval(nextSlide, slideDuration);

    const prevBtn = heroSlider.querySelector('.prev-slide');
    const nextBtn = heroSlider.querySelector('.next-slide');
    prevBtn?.addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + slideCount) % slideCount;
      showSlide(currentIndex);
    });
    nextBtn?.addEventListener('click', () => {
      nextSlide();
    });
  }

  // =========================
  // Testimonial Sliders
  // =========================
  // Slider 2
  const slidesContainer2 = document.getElementById('testimonialSlides2');
  if (slidesContainer2) {
    const slides2 = slidesContainer2.children;
    const slideCount = slides2.length;
    let index2 = 0;

    function showSlide2(i) {
      const width = slides2[0].offsetWidth;
      slidesContainer2.style.transform = `translateX(-${i * width}px)`;
    }

    const prevBtn2 = document.getElementById('prevTestimonial2');
    const nextBtn2 = document.getElementById('nextTestimonial2');
    prevBtn2?.addEventListener('click', () => {
      index2 = (index2 - 1 + slideCount) % slideCount;
      showSlide2(index2);
    });
    nextBtn2?.addEventListener('click', () => {
      index2 = (index2 + 1) % slideCount;
      showSlide2(index2);
    });
    setInterval(() => {
      index2 = (index2 + 1) % slideCount;
      showSlide2(index2);
    }, 5000);
  }

  // Slider 1
  const testimonialSlider = document.getElementById('testimonialSlider');
  if (testimonialSlider) {
    const testimonialSlides = testimonialSlider.children;
    const testimonialTotal = testimonialSlides.length;
    let testimonialIndex = 0;
    const testimonialDots = document.querySelectorAll('.testimonial-dot');

    function updateTestimonialSlider() {
      testimonialSlider.style.transform = `translateX(-${testimonialIndex * 100}%)`;
      testimonialDots.forEach((dot, i) => {
        dot.classList.toggle('bg-gray-400', i === testimonialIndex);
        dot.classList.toggle('bg-gray-300', i !== testimonialIndex);
      });
    }

    document.getElementById('testimonialNext')?.addEventListener('click', () => {
      testimonialIndex = (testimonialIndex + 1) % testimonialTotal;
      updateTestimonialSlider();
    });

    document.getElementById('testimonialPrev')?.addEventListener('click', () => {
      testimonialIndex = (testimonialIndex - 1 + testimonialTotal) % testimonialTotal;
      updateTestimonialSlider();
    });

    testimonialDots.forEach((dot, i) => {
      dot.addEventListener('click', () => {
        testimonialIndex = i;
        updateTestimonialSlider();
      });
    });

    setInterval(() => {
      testimonialIndex = (testimonialIndex + 1) % testimonialTotal;
      updateTestimonialSlider();
    }, 5000);

    updateTestimonialSlider();
  }

  // =========================
  // Mobile Menu
  // =========================
  const menuBtn = document.getElementById('menuBtn');
  const mobileNav = document.getElementById('mobileNav');
  const menuIcon = document.getElementById('menuIcon');

  if (menuBtn && mobileNav && menuIcon) {
    let menuOpen = false;
    menuBtn.addEventListener('click', () => {
      menuOpen = !menuOpen;
      menuIcon.classList.toggle('rotate-90');
      if (menuOpen) {
        mobileNav.classList.remove('max-h-0');
        mobileNav.classList.add('max-h-[500px]');
      } else {
        mobileNav.classList.add('max-h-0');
        mobileNav.classList.remove('max-h-[500px]');
      }
    });
  }

  // =========================
  // Highlight Active Links
  // =========================
  const links = document.querySelectorAll('nav a, #mobileNav a');
  links.forEach(link => {
    if (link.href === window.location.href) {
      link.classList.add('text-[#EC4724]');
      const underline = document.createElement('span');
      underline.className = 'absolute left-0 -bottom-1 w-full h-[2px] bg-[#EC4724]';
      link.appendChild(underline);
    }
  });

  // =========================
  // Services Carousel
  // =========================
  const servicesTrack = document.getElementById("services-track");
  if (servicesTrack) {
    const items = servicesTrack.children.length;
    let index = 0;
    setInterval(() => {
      index++;
      if (index > items - 3) index = 0;
      servicesTrack.style.transform = `translateX(-${index * (100 / 3)}%)`;
    }, 3000);
  }
// =========================
  // FAQ Toggle
  // =========================  
document.querySelectorAll('.faq-toggle').forEach(btn => {
  btn.addEventListener('click', () => {
    const content = btn.nextElementSibling;
    const icon = btn.querySelector('span');

    content.classList.toggle('hidden');
    icon.textContent = content.classList.contains('hidden') ? '+' : '−';
  });
});
}); // End DOMContentLoaded
