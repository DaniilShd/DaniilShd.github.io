<?php include 'header.php'; ?>


<!-- Intro start -->
    <main class="main">
      <section class="intro">
        <div class="wrapper">
          <h1 class="intro_title" >Организуем детские праздники!</h1>
           <div class="row middle-xs bottom-xs">
             <div class="carouselStock_intro col-xs-12">

   <!-- Карусель со спецпредложениями полноэкранный -->

               <div id="carouselStockFullScreen" class="carousel slide carousel-fade" data-bs-ride="carousel">
                 <div class="carousel-inner">
                   <div class="carousel-item active" data-bs-interval="1500">
                     <img src="../static/img/1.png" class="d-block w-100" alt="...">
                   </div>
                   <div class="carousel-item" data-bs-interval="1500">
                     <img src="../static/img/2.png" class="d-block w-100" alt="...">
                   </div>
                   <div class="carousel-item" data-bs-interval="1500">
                     <img src="../static/img/3.png" class="d-block w-100" alt="...">
                   </div>
                 </div>
                 <button class="carousel-control-prev" type="button" data-bs-target="#carouselStockFullScreen" data-bs-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-bs-target="#carouselStockFullScreen" data-bs-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Next</span>
                 </button>
               </div>

<!-- Карусель со спецпредложениями для мобильного экрана -->

               <div id="carouselStockMobileScreen" class="carousel slide carousel-fade" data-bs-ride="carousel">
                 <div class="carousel-inner">
                   <div class="carousel-item active" data-bs-interval="1500">
                     <img src="../static/img/4.png" class="d-block w-100" alt="...">
                   </div>
                   <div class="carousel-item" data-bs-interval="1500">
                     <img src="../static/img/5.png" class="d-block w-100" alt="...">
                   </div>
                   <div class="carousel-item" data-bs-interval="1500">
                     <img src="../static/img/6.png" class="d-block w-100" alt="...">
                   </div>
                 </div>
                 <button class="carousel-control-prev" type="button" data-bs-target="#carouselStockMobileScreen" data-bs-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-bs-target="#carouselStockMobileScreen" data-bs-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Next</span>
                 </button>
               </div>



             </div>




<!-- Форма обратной связи -->

              <div class="hidden_all col-lg-4 col-md-5 col-sm-7 col-xs-12" >
                <div class="row center-xs">
                  <form class="search-form" autocomplete="off">
                    <fieldset class="search-form_wrap">
                      <p class="form_title_up">Рассчитать праздник</p>
                      <div class="search-form_info">
                        <div class="input_frame">
                          <input class="search-form_field" type="text" name="name" value="" placeholder="Ваше имя">
                          <input class="search-form_field" type="text" name="tel" value="" required maxlength="12" placeholder="Номер телефона" id="tel" >
                        </div>
                        <div class="check">
                          <div class="politica_check">
                            <input type="checkbox" checked="checked" onchange="fun_check()" name="form_application" value="yes" id="check_form_intro">
                            <label for="check_form_intro"></label>
                            <div class="politica">
                              <p class="check_text">Я согласен на обработку персональных данных</p>
                              <p class="check_text_desc"><a class="check_text_desc_a" href="!#">Политика конфиденциальности</a></p>
                            </div>
                          </div>
                          <button class="search-form_submit search-form_submit_active" type="submit" name="" id="button_form_intro">Отправить</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
              <div class="hidden_all col-lg-8 col-md-7 col-sm-5">
                <div class="row end-xs">
                  <div class="feya-pic">
                    <img src="../static/img/din-din.png" alt="Детские шоу">
                  </div>
                </div>





              </div>


        <!--  Форма прилипшая к экрану компьютера -->

              <div class="form_down" id = "form_down">

                <div class="search_wrap_down">
                  <form class="row middle-xs center-lg" autocomplete="off">
                      <div class="col-lg-4">
                        <p class="form_title_down">Поможем организовать любой праздник</p>
                      </div>

                      <div class="col-lg-6">
                        <div class="input_frame_down">
                          <input class="search_form_field_down" type="text" name="name" value="" placeholder="Ваше имя">
                          <input class="search_form_field_down" type="text" name="tel" value="" required maxlength="12" placeholder="Номер телефона" id="tel_down">
                          <div class="politica_check_down">
                            <input type="checkbox" checked="checked" onchange="fun_check_down()" class="form-checkbox" name="form_application" value="yes" id="check_form_down">
                            <label for="check_form_down"></label>
                            <p class="check_text_down">Я согласен на обработку персональных данных</p>
                            <div class="politica_down">

                              <p class="check_text_desc_down"><a class="check_text_desc_a_down" href="!#">Политика конфиденциальности</a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                              <button class="search_form_submit_down search-form_submit_active_down" type="submit" name="" id="button_form_down">Отправить</button>
                      </div>
                  </form>
                </div>
              </div>
              <!--  Конец формы -->

          </div>
        </div>

      </section>

<!-- Intro end -->

<!-- Benefits start -->

     <section class="benefits">
       <div class="benefits_wrapper">
         <div class="garlands_left"></div>
         <div class="garlands_right"></div>
         <h2 class="benefits_title">
           Выберите праздник
         </h2>
         <div class="benefit_cards">
           <div class="row">
              <!-- Первая карточка -->
             <div class="col-lg-3 col-md-4 col-xs-6 benefits_card" onclick="location.href='#!';" style="cursor: pointer;">
               <div class="benefits_card-pic">
                <img class="benefits_card-tumb" src="../static/img/svg/party-hat.svg" width="130" height="130" alt="Анимационные программы">
               </div>
              <h3 class="benefit_card-title">
                Анимационные программы
              </h3>
             </div>
             <!-- Вторая карточка -->
             <div class="col-lg-3 col-md-4 col-xs-6 benefits_card" onclick="l.href='#!';" style="cursor: pointer;">
               <div class="benefits_card-pic">
                <img class="benefits_card-tumb" src="../static/img/svg/confetti.svg" width="130" height="130" alt="Анимационные программы">
               </div>
              <h3 class="benefit_card-title">
                Праздник под ключ
              </h3>
             </div>
             <!-- Третья карточка -->
             <div class="col-lg-3 col-md-4 col-xs-6 benefits_card" onclick="l.href='#!';" style="cursor: pointer;">
               <div class="benefits_card-pic">
                <img class="benefits_card-tumb" src="../static/img/svg/balloons.svg" width="130" height="130" alt="Анимационные программы">
               </div>
              <h3 class="benefit_card-title">
                Праздник в квартире
              </h3>
             </div>
             <!-- Четвертая карточка -->
             <div class="col-lg-3 col-md-4 col-xs-6 benefits_card" onclick="l.href='#!';" style="cursor: pointer;">
               <div class="benefits_card-pic">
                <img class="benefits_card-tumb" src="../static/img/svg/icon-cake.svg" width="130" height="130" alt="Анимационные программы">
               </div>
              <h3 class="benefit_card-title">
                Праздник на улице
              </h3>
             </div>
             <!-- Пятая карточка -->
             <div class="col-lg-3 col-md-4 col-xs-6 benefits_card" onclick="l.href='#!';" style="cursor: pointer;">
               <div class="benefits_card-pic">
                <img class="benefits_card-tumb" src="../static/img/svg/trumpet.svg" width="130" height="130" alt="Анимационные программы">
               </div>
              <h3 class="benefit_card-title">
                Анимация на свадьбу
              </h3>
             </div>
             <!-- Шетсая карточка -->
             <div class="col-lg-3 col-md-4 col-xs-6 benefits_card" onclick="l.href='#!';" style="cursor: pointer;">
               <div class="benefits_card-pic">
                <img class="benefits_card-tumb" src="../static/img/svg/icon-confetti.svg" width="130" height="130" alt="Анимационные программы">
               </div>
              <h3 class="benefit_card-title">
                Анимационные программы для взрослых
              </h3>
             </div>
             <!-- Седьмая карточка -->
             <div class="col-lg-3 col-md-4 col-xs-6 benefits_card" onclick="l.href='#!';" style="cursor: pointer;">
               <div class="benefits_card-pic">
                <img class="benefits_card-tumb" src="../static/img/svg/celebrate.svg" width="130" height="130" alt="Анимационные программы">
               </div>
              <h3 class="benefit_card-title">
                Шоу-программы
              </h3>
             </div>
             <!-- Восьмая карточка -->
             <div class="col-lg-3 col-md-4 col-xs-6 benefits_card" onclick="l.href='#!';" style="cursor: pointer;">
               <div class="benefits_card-pic">
                <img class="benefits_card-tumb" src="../static/img/svg/gift.svg" width="130" height="130" alt="Анимационные программы">
               </div>
              <h3 class="benefit_card-title">
                Мастер-классы
              </h3>
             </div>

           </div>
         </div>

         <div class="instruction">
           <div class="instruction_title">
             Как заказать праздник
           </div>

           <div class="row center-xs">
             <div class="col-xs-12 col-sm-12">
               <div class="row center-xs middle-xs">
                   <div class="col-sm-3 col-xs-12">
                     <div class="row">
                       <div class="flex_pointer">
                         <div class="row center-xs middle-xs point_number">
                               1
                         </div>
                       <div class=" row start-xs middle-xs point_text">
                             Выберите программу
                       </div>
                       </div>
                     </div>
                    </div>
                   <div class="col-sm-4 col-xs-12">
                     <div class="row">
                       <div class="flex_pointer">
                         <div class="row center-xs middle-xs point_number">
                               2
                         </div>
                       <div class=" row start-xs middle-xs point_text">
                             Оставьте заявку на сайте
                       </div>
                       </div>
                     </div>
                    </div>
                   <div class="col-sm-5 col-xs-12">
                     <div class="row">
                       <div class="flex_pointer">
                         <div class="row center-xs middle-xs point_number">
                               3
                         </div>
                       <div class=" row start-xs middle-xs point_text">
                             Согласуйте дату и место с менеджером
                       </div>
                       </div>
                     </div>
                    </div>
               </div>
             </div>
           </div>


           <div class="kontur">
             <div class="kontur_pink"></div>
           </div>
         </div>
           <form class="benefit_search-form" autocomplete="off">
             <fieldset class="row benefit_search-form_wrap">
               <div class="row center-xs middle-xs">
                 <div class="col-sm-2">
                   <img src = "../static/img/svg/confetti_white.svg" class="confetti_black">
                 </div>
                   <div class="col-sm-8 col-xs-12">
                     <div class="row center-xs">
                       <p class="benefit_form_title">Поможем организовать любой праздник</p>
                     </div>
                     <div class="row">
                         <div class="col-sm-4 col-xs-12">
                           <input class="benefit_search-form_field" type="text" name="name" value="" placeholder="Ваше имя">
                         </div>
                         <div class="col-sm-4 col-xs-12">
                           <input class="benefit_search-form_field" type="text" name="tel" value="" required maxlength="12" placeholder="Номер телефона" id="tel_benefit">
                         </div>
                         <div class="col-sm-4 col-xs-12">
                           <button class="benefit_search-form_submit search-form_submit_active_benefit" type="submit" name="" id="benefit_button_form">Отправить</button>
                         </div>
                     </div>
                      <div class="row">
                        <div class="col-xs-12 benefit_check">
                         <div class = "flex_check">
                           <input type="checkbox" checked="checked" onchange="fun_check_benefit()" class="form-checkbox" name="form_application" value="yes" id="check_form_benefit">
                           <label for="check_form_benefit"></label>
                           <p class="benefit_check_text">Я согласен на обработку персональных данных</p>
                         </div>
                          <p class="benefit_check_text_desc"><a class="benefit_check_text_desc_a" href="!#">Политика конфиденциальности</a></p>
                        </div>
                      </div>
                   </div>
                   <div class="col-sm-2">
                     <img src = "../static/img/svg/paper_plane.svg" fill="#fff" class="paper_plane">
                   </div>
               </div>
             </fieldset>
             <div class="kontur_line_green">
               <div class="kontur_green"></div>
             </div>
           </form>
       </div>
       <div class="animation_wave">
         <div class="wave_1"></div>
         <div class="wave_2"></div>
       </div>
     </section>

<!-- Benefits end -->
</main>

<?php include 'footer.php'; ?>
