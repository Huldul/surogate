const menu = document.querySelector('.menu');
const menu_bg = document.querySelector('.menu_bg');
const menu_in = document.querySelector('.menu_in');
// const body = document.querySelector('body');

menu.addEventListener('click', () => {
  menu.classList.toggle('active');
  menu_bg.classList.toggle('active');
  menu_in.classList.toggle('active');

  if (body.classList.contains('hidden')) {
    body.classList.remove('hidden');
  } else {
    body.classList.add('hidden');
  }

});


menu_bg.addEventListener('click', () => {
  menu.classList.remove('active');
  menu_bg.classList.remove('active');
  menu_in.classList.remove('active');
})

menu_in.addEventListener('click', () => {
  menu_in.classList.remove('active');
  menu.classList.remove('active');
  menu_bg.classList.remove('active');
})

const modal_btns = document.querySelectorAll('.modal_btn');
const modal_wrapper = document.querySelector('.modal_wrapper');
const modal = document.querySelector('.main_modal');

modal_btns.forEach(modal_btn => {
  modal_btn.addEventListener('click', () => {
    modal.classList.toggle('active');
    modal_wrapper.classList.toggle('active')
  });

});




modal_wrapper.addEventListener('click', () => {
  modal.classList.remove('active');
  modal_wrapper.classList.remove('active')
});


const language = document.querySelector('.language');
const language_btn = document.querySelector('.language_btn');
const language_btn_name = document.querySelector('.language_btn_name');
const language_down = document.querySelectorAll('.language .language_down .language_down_link');

language_btn.addEventListener('click', () => {
  language.classList.toggle('active');
});

language_down.forEach(btn => {
  btn.addEventListener('click', () => {
    language_btn_name.innerText = btn.textContent;

    language.classList.remove('active');
  })
})


try {

  let swiper1 = new Swiper(".licensesSlider", {
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
      nextEl: ".licenses_right_btn",
      prevEl: ".licenses_left_btn",
    },
    breakpoints: {
      250: {
        slidesPerView: 1,
      },
      1000: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });

  var swiper2 = new Swiper(".newsSlider", {
    slidesPerView: 4,
    spaceBetween: 24,
    breakpoints: {
      250: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
      1300: {
        slidesPerView: 4,
      },
    },
    navigation: {
      nextEl: ".news_slider_btns .right_btn",
      prevEl: ".news_slider_btns .left_btn",
    },
  });

  var swiper3 = new Swiper(".homeSlider", {
    pagination: {
      el: ".home_slider_pagination",
      clickable: true,
    },
  });

  var swiper4 = new Swiper(".partenrsSlider", {
    slidesPerView: 6,
    spaceBetween: 24,
    breakpoints: {
      250: {
        slidesPerView: 1,
      },
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1000: {
        slidesPerView: 4,
      },
      1400: {
        slidesPerView: 6,
      },
    },
    navigation: {
      nextEl: ".partners_btn_right",
      prevEl: ".partners_btn_left",
    },
  });

  const accardion_btn = document.querySelectorAll(".accardion_btn");

  accardion_btn.forEach(accardion_btn => {
    accardion_btn.addEventListener("click", event => {
      accardion_btn.classList.toggle("active");
      const accordionItemBody = accardion_btn.nextElementSibling;
      if (accardion_btn.classList.contains("active")) {
        accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
      }
      else {
        accordionItemBody.style.maxHeight = 0;
      }
    });

  });

}
catch {

}

let light_gallery_wrapper = document.querySelectorAll('.light_gallery_wrapper');

if (light_gallery_wrapper.length) {
  light_gallery_wrapper.forEach(gallery => {
    let images  = gallery.querySelectorAll('a[data-lightbox="gallery"]');
    images.forEach(image => {
      image.onclick = e => {
        e.preventDefault();
        let src = [];
        images.forEach(item => {
          let current_img = item.querySelector('img')
          if(item === image ){
            src.unshift({
              'src': current_img.getAttribute('src'),
              'thumb': current_img.getAttribute('src'),
              'subHtml': ''
            });            
          } else {
            src.push({
                'src': current_img.getAttribute('src'),
                'thumb': current_img.getAttribute('src'),
                'subHtml': ''
            });
          }
        })
        $('#lightgallery').remove();
        const galleryContainer = document.createElement('div');
        galleryContainer.id = 'lightgallery';
        document.body.appendChild(galleryContainer);
        lightGallery(galleryContainer, {
            dynamic: true,
            dynamicEl: src,
        });
      }
    })
  })
}