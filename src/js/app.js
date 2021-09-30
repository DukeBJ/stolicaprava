import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';

UIkit.use(Icons);

document.addEventListener('DOMContentLoaded', function() {

  const el = document.querySelector('.sp-top-time');
  el.innerText = workTime();

  const offcnvs = document.querySelector('#offcanvas-overlay');
  const menuOpen = document.querySelector('#menu-open');

  UIkit.offcanvas(offcnvs);

  menuOpen.addEventListener('click', function() {
    UIkit.offcanvas(offcnvs).show();
  })
})

const workTime = () => {
  const thisday = new Date();

  if (thisday.getDay() > 0 && thisday.getDay() <= 5) {
    return 'с 10:00 до 19:00';
  } else if (thisday.getDay() == 6) {
    return 'с 11:00 до 15:00';
  } else if (thisday.getDay() == 0) {
    return 'выходной';
  }
}

// components can be called from the imported UIkit reference
// UIkit.notification('Hello world.');


// *********************************************
// Тут используется JQ, а нужно нативное решение
// Универсальная функция для проверки расположения объекта в "области видимости"
// $.fn.onViewPort = function(){
//   var viewport = {};
//   viewport.top = $(window).scrollTop();
//   viewport.bottom = viewport.top + $(window).height();
//   var bounds = {};
//   bounds.top = this.offset().top;
//   bounds.bottom = bounds.top + this.outerHeight();
//   return ((bounds.top <= viewport.bottom) && (bounds.bottom >= viewport.top));
// };

// Используем после загрузки DOM
// $(function() {
//   // Инициализируем объект, который хотим отслеживать
//   var $vTarget = $('.view-target');
//  // Проверяем при скролле страницы
//   $(window).scroll(function() {
//     if($vTarget.onViewPort()) {
//       console.log('Объект в области видимости');
//     }
//   });
// });