// Counter
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll('.counter');
  const section = document.querySelector('.fast-facts');
  let started = false;

  new IntersectionObserver(entries => {
    if (entries[0].isIntersecting && !started) {
      started = true;
      counters.forEach(counter => {
        const target = +counter.dataset.target;
        let count = 0;
        const step = Math.ceil(target / 200); 

        const interval = setInterval(() => {
          count += step;
          if (count >= target) {
            counter.innerText = target;
            clearInterval(interval);
          } else {
            counter.innerText = count;
          }
        }, 30);
      });
    }
  }, { threshold: 0.3 }).observe(section);
});
// award section
document.addEventListener('DOMContentLoaded', function () {

  function initSlider(trackId, prevId, nextId) {

    const track = document.getElementById(trackId);
    const prevBtn = document.getElementById(prevId);
    const nextBtn = document.getElementById(nextId);

    if (!track || !prevBtn || !nextBtn) return;

    const outer = track.parentElement;
    let currentIndex = 0;

    function getVisible() {
      const w = outer.offsetWidth;
      if (w < 480) return 1;
      if (w < 768) return 2;
      if (w < 1024) return 3;
      return 4;
    }

    function getGap() {
      const style = window.getComputedStyle(track);
      return parseInt(style.gap) || 0;
    }

    function getCardWidth() {
      const vis = getVisible();
      const gap = getGap();
      return Math.floor((outer.offsetWidth - gap * (vis - 1)) / vis);
    }

    function totalSlides() {
      return track.children.length;
    }

    function goTo(index) {
      const vis = getVisible();
      const total = totalSlides();
      const maxIndex = Math.max(0, total - vis);
      currentIndex = Math.max(0, Math.min(index, maxIndex));

      const move = currentIndex * (getCardWidth() + getGap());
      track.style.transform = `translateX(-${move}px)`;
    }
    prevBtn.addEventListener('click', () => goTo(currentIndex - 1));
    nextBtn.addEventListener('click', () => goTo(currentIndex + 1));
    window.addEventListener('resize', () => goTo(currentIndex));
    let startX = 0;
    track.addEventListener('touchstart', e => startX = e.touches[0].clientX, { passive: true });
    track.addEventListener('touchend', e => {
      const diff = startX - e.changedTouches[0].clientX;
      if (Math.abs(diff) > 40) goTo(currentIndex + (diff > 0 ? 1 : -1));
    }, { passive: true });
    goTo(0);
  }
  initSlider('slider1', 's1-prev', 's1-next');
  initSlider('slider2', 's2-prev', 's2-next');

}); 
// testmoniel
 document.addEventListener("DOMContentLoaded", function () {

  const ttsTrack = document.querySelector('.tts-track');
  const ttsDots = document.querySelectorAll('.tts-dot');
  let ttsIndex = 0;

  function ttsUpdateSlider(i) {
    ttsTrack.style.transform = `translateX(-${i * 100}%)`;
    ttsDots.forEach(dot => dot.classList.remove('active'));
    ttsDots[i].classList.add('active');
  }

  ttsDots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
      ttsIndex = i;
      ttsUpdateSlider(ttsIndex);
    });
  });

  setInterval(() => {
    ttsIndex++;
    if (ttsIndex >= ttsDots.length) ttsIndex = 0;
    ttsUpdateSlider(ttsIndex);
  }, 5000);
});

// Pop up slick slider
jQuery('.case-studies-design-one .tech-slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2500,
  arrows: true,
  dots: false,
  prevArrow: `<button type="button" class="slick-prev">
        <svg width="50" height="58" viewBox="0 0 50 58" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M30.837 43.1719L18.5022 28.7812L30.837 14.3906" stroke="#132136" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

        </button>`,
  nextArrow: `<button type="button" class="slick-next">
        <svg width="50" height="58" viewBox="0 0 50 58" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18.5023 14.3906L30.8372 28.7813L18.5023 43.1719" stroke="#132136" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></button>`,
  responsive: [
    { breakpoint: 991, settings: { slidesToShow: 2 } },
    { breakpoint: 767, settings: { slidesToShow: 1 } }
  ]
});

jQuery('.case-studies-design-two .tech-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2500,
  arrows: true,
  dots: false,
  prevArrow: `<button type="button" class="slick-prev">
        <svg width="50" height="58" viewBox="0 0 50 58" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M30.837 43.1719L18.5022 28.7812L30.837 14.3906" stroke="#132136" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

        </button>`,
  nextArrow: `<button type="button" class="slick-next">
        <svg width="50" height="58" viewBox="0 0 50 58" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18.5023 14.3906L30.8372 28.7813L18.5023 43.1719" stroke="#132136" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></button>`,
  responsive: [
    { breakpoint: 991, settings: { slidesToShow: 2 } },
    { breakpoint: 767, settings: { slidesToShow: 1 } }
  ]
});

jQuery('.profile-card-inner-slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2500,
  arrows: true,
  dots: false,
  prevArrow: `<button type="button" class="slick-prev">
        <svg width="50" height="58" viewBox="0 0 50 58" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M30.837 43.1719L18.5022 28.7812L30.837 14.3906" stroke="#3EB3E3" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
        </button>`,
  nextArrow: `<button type="button" class="slick-next">
        <svg width="50" height="58" viewBox="0 0 50 58" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18.5023 14.3906L30.8372 28.7813L18.5023 43.1719" stroke="#3EB3E3" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></button>`,
  responsive: [
    { breakpoint: 991, settings: { slidesToShow: 2 } },
    { breakpoint: 767, settings: { slidesToShow: 1 } }
  ]
});

function setEqualHeight() {
  var maxHeight = 0;

  jQuery('.profile-card-inner-slider .slick-slide').each(function () {
    var thisHeight = jQuery(this).outerHeight();
    if (thisHeight > maxHeight) {
      maxHeight = thisHeight;
    }
  });

  jQuery('.profile-card-inner-slider .slick-slide').css('height', maxHeight + 'px');
}

jQuery('.profile-card-inner-slider').on('setPosition', function () {
  setEqualHeight();
});


jQuery(document).ready(function () {

  jQuery(document).on("click", ".tech-btn", function (e) {
    e.preventDefault();

    let card = jQuery(this).closest(".tech-card");
    let popupContent = card.find(".popup-content-card").html();

    jQuery(".popup-content").html(popupContent);
    jQuery(".popup-overlay").fadeIn();
  });

  jQuery(document).on("click", ".popup-close", function () {
    jQuery(".popup-overlay").fadeOut();
  });

  jQuery(document).on("click", ".popup-overlay", function (e) {
    if (jQuery(e.target).is(".popup-overlay")) {
      jQuery(".popup-overlay").fadeOut();
    }
  });

});
