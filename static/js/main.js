//Замена карусели в зависимости от размера экрана

(function () {

  const carouselStockFullScreen = document.getElementById('carouselStockFullScreen');
  const carouselStockMobileScreen = document.getElementById('carouselStockMobileScreen');

    if (window.innerWidth <= 768) {
    carouselStockFullScreen.classList.add('hidden_all');
    carouselStockMobileScreen.classList.remove('hidden_all');
    console.log(11);
  } else {
    carouselStockFullScreen.classList.remove('hidden_all');
    carouselStockMobileScreen.classList.add('hidden_all');
    console.log(22);
  }
}());


// Форма обратной связи появляющаяся внизу экрана при скроле и фиксированное меню

(function (){
  // для горищзонтального меню
  const header_menu = document.querySelector('.header_menu');
  const header = document.querySelector('.header');
  //для формы обратной связи

  const form = document.getElementById('form_down');
  const upbutton = document.querySelector('.button_back');
  var pageHeight = document.documentElement.scrollHeight;
  var screenHeight = document.documentElement.clientHeight;
  var pageHeight_1 = pageHeight - (screenHeight + 400);
  //var pageHeight_1 = pageHeight - (screenHeight + 250);

  window.onscroll = () => {
    // для горизонтального меню
    if (window.pageYOffset >= 90 && window.innerWidth > 950) {
      header_menu.classList.add('menu_active');
      header.classList.add('header_active');
    } else  {
      header_menu.classList.remove('menu_active');
      header.classList.remove('header_active');
    }

    //для формы обратной связи внизу экрана
    if (window.pageYOffset > pageHeight_1) {
      form.classList.add('hidden_form');
      form.classList.remove('visible_form');
    } else if (window.pageYOffset > 50 && window.innerWidth >= 1024) { //Редактировать высоту экрана в пикселях!!!
      form.classList.remove('hidden_form');
      form.classList.add('visible_form');
    } else {
      form.classList.add('hidden_form');
      form.classList.remove('visible_form');
    }
    //появление upbotton
    if (window.pageYOffset > 500) {
      upbutton.classList.add('upbutton_visiable');
      upbutton.classList.remove('upbutton_hidden');
    } else {
      upbutton.classList.add('upbutton_hidden');
      upbutton.classList.remove('upbutton_visiable');
    }
  };
}());


//Маска для номера телефона
(function (){
let inp = document.querySelector('#tel');

// Проверяем фокус
inp.addEventListener('focus', _ => {
  // Если там ничего нет или есть, но левое
  if(!/^\+\d*$/.test(inp.value))
    // То вставляем знак плюса как значение
    inp.value = '+7';
});

inp.addEventListener('keypress', e => {
  // Отменяем ввод не цифр
  if(!/\d/.test(e.key))
    e.preventDefault();
});
}());


(function (){
let inp = document.querySelector('#tel_down');

// Проверяем фокус
inp.addEventListener('focus', _ => {
  // Если там ничего нет или есть, но левое
  if(!/^\+\d*$/.test(inp.value))
    // То вставляем знак плюса как значение
    inp.value = '+7';
});

inp.addEventListener('keypress', e => {
  // Отменяем ввод не цифр
  if(!/\d/.test(e.key))
    e.preventDefault();
});

}());

(function (){
let inp = document.querySelector('#tel_benefit');

// Проверяем фокус
inp.addEventListener('focus', _ => {
  // Если там ничего нет или есть, но левое
  if(!/^\+\d*$/.test(inp.value))
    // То вставляем знак плюса как значение
    inp.value = '+7';
});

inp.addEventListener('keypress', e => {
  // Отменяем ввод не цифр
  if(!/\d/.test(e.key))
    e.preventDefault();
});
}());

// Появление кнопки отправки при установке галочки в чекбоксе

function fun_check() {
  var chbox = document.getElementById('check_form_intro');
  var btn = document.getElementById('button_form_intro');
  const button_1 = document.querySelector('.search-form_submit');

  if (!chbox.checked) {
    btn.setAttribute('disabled', true);
    button_1.classList.remove('search-form_submit_active');

  } else {
    btn.removeAttribute('disabled');
    button_1.classList.add('search-form_submit_active');

  }
}

// Появление кнопки отправки при установке галочкb в чекбоксе

function fun_check_down() {
  var chbox = document.getElementById('check_form_down');
  var btn = document.getElementById('button_form_down');
  const button_1 = document.querySelector('.search_form_submit_down');

  if (!chbox.checked) {
    btn.setAttribute('disabled', true);
    button_1.classList.remove('search-form_submit_active_down');

  } else {
    btn.removeAttribute('disabled');
    button_1.classList.add('search-form_submit_active_down');

  }
}

// Появление кнопки отправки при установке галочкb в чекбоксе

function fun_check_benefit() {
  var chbox = document.getElementById('check_form_benefit');
  var btn = document.getElementById('benefit_button_form');
  const button_1 = document.querySelector('.benefit_search-form_submit');

  if (!chbox.checked) {
    btn.setAttribute('disabled', true);
    button_1.classList.remove('search-form_submit_active_benefit');

  } else {
    btn.removeAttribute('disabled');
    button_1.classList.add('search-form_submit_active_benefit');

  }
}

//Burger handler

(function () {
  const burgerItem = document.querySelector('.burger');
  const menu = document.getElementById('burger_menu');
  const body = document.body;
  const menuLinks = document.querySelectorAll('.menu_link_burger');
  const menuLinksSub = document.querySelectorAll('.menu_link_sub_burger');
  burgerItem.addEventListener('click', () => {
    menu.classList.toggle('burger_nav_active');
    burgerItem.classList.toggle('burger_active');
    body.classList.toggle('stop-scrolling');
  });
  if (window.innerWidth <= 950) {
    for (let i = 0; i < menuLinks.length; i++) {
      console.log(21);
      menuLinks[i].addEventListener('click', () => {
        menu.classList.remove('burger_nav_active');
        body.classList.toggle('stop-scrolling');
        burgerItem.classList.toggle('burger_active');
      });
    }
    for (let i = 0; i < menuLinksSub.length; i++) {
      menuLinksSub[i].addEventListener('click', () => {
        menu.classList.remove('burger_nav_active');
        body.classList.toggle('stop-scrolling');
        burgerItem.classList.toggle('burger_active');
      });
    }
  }
}());

//Scroll

// Scroll to anchors
document.querySelectorAll('a[href^="#"').forEach(link => {

    link.addEventListener('click', function(e) {
        e.preventDefault();

        let href = this.getAttribute('href').substring(1);

        const scrollTarget = document.getElementById(href);

        const topOffset = document.querySelector('.header').offsetHeight;
        // const topOffset = 0; // если не нужен отступ сверху
        const elementPosition = scrollTarget.getBoundingClientRect().top;
        const offsetPosition = elementPosition - topOffset;

        window.scrollBy({
            top: offsetPosition,
            behavior: 'smooth'
        });
    });
});



// Scroll to anchors
