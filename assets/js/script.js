const swiper=new Swiper('.spec__slider',{
    loop: true,
    mousewhell:true,
    Keyboard: true,
    speed: 1000,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderCustom: function(swiper, current, total) {
          var names = [];
          $(".swiper-wrapper .swiper-slide").each(function(i) {
              names.push($(this).data("name"));
          });
          var text = "<ul>";
          for (let i = 1; i <= total; i++) {
            if (current == i) {
              text += `<li class="swiper-pagination-bullet active">${names[i]}</li>`;
            } else {
              text += `<li class="swiper-pagination-bullet">${names[i]}</li>`;
            }
          }
          text += "</ul>";
          return text;
        }
      }
})


const swiperMenu=new Swiper('.menu__slider',{
  slidesPerView:2,
  grid: { rows:2 },
  mousewhell:true,
  Keyboard: true,
  speed: 1000,
  pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderCustom: function(swiper, current, total) {
        var names = [];
        $(".swiper-wrapper .swiper-slide").each(function(i) {
            names.push($(this).data("name"));
        });
        var text = "<ul>";
        for (let i = 1; i <= total; i++) {
          if (current == i) {
            text += `<li class="swiper-pagination-bullet active">${names[i]}</li>`;
          } else {
            text += `<li class="swiper-pagination-bullet">${names[i]}</li>`;
          }
        }
        text += "</ul>";
        return text;
      }
    }
})

let tabs= document.querySelector('.tabs');
let menuSlider= document.querySelectorAll('.menu__slider-block');

tabs.addEventListener('click', function(e){
  if(e.target.classList.contains('tabs__item')){
    this.querySelectorAll('.tabs__item').forEach(item=>item.classList.remove('active'));
    e.target.classList.add('active');

  }

  menuSlider.forEach(slider=>slider.classList.remove('show'));
  let tabIndex= e.target.dataset.tab;
  let thisSwiper=document.querySelector(tabIndex);
  thisSwiper.classList.add('show');

})

window.addEventListener('load', overflowTabs);
window.addEventListener('resize',overflowTabs);

function overflowTabs(){
      let outerTabs = document.querySelector('.tabs_container');
      let innerTabs=document.querySelector('.tabs');
      if(innerTabs.offsetWidth>outerTabs.offsetWidth){
        innerTabs.classList.add('overflow')
      } else{
        innerTabs.classList.remove('overflow')
      }
}
