import Swiper from 'swiper/bundle';

export default class Carrousel {
  constructor(e) {
    this.e = e;
    this.options = {
      slidesPerView: 1,
      spaceBetween: 20,
      pagination: {
        el: this.e.querySelector('.swiper-pagination'),
        type: 'bullets',
      },
      navigation: {
        nextEl: this.e.querySelector('.swiper-button-next'),
        prevEl: this.e.querySelector('.swiper-button-prev'),
      },
      breakpoints: {},
    };
    this.init();
  }

  init() {
    console.log('hello');
    this.setOptions();
    this.initSwiper();
  }
  setOptions() {
    if ('split' in this.e.dataset) {
      this.options.breakpoints = {
        768: {
          slidesPerView: 2.5,
        },
      };
    }

    if ('autoplay' in this.e.dataset) {
      this.options.autoplay = {
        delay: 3000,
        pauseOnMouseEnter: true,
        disableOnInteraction: false,
      };
    }

    if ('loop' in this.e.dataset) {
      this.options.loop = true;
    }

    if ('slides' in this.e.dataset) {
      this.options.slidesPerView = parseInt(
        this.e.dataset.slides || this.options.slidesPerView
      );
    }
  }
  initSwiper() {
    if (this.e) {
      const swiper = new Swiper(this.e, this.options);
    }
  }
}
