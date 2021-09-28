import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';

UIkit.use(Icons);

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