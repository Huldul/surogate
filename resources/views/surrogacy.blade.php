@extends('layout')

@section('content')
  
    <!-- link_path -->
    <div class="main_container">
        <ul class="link_path">
            <li>
                <a href="#">Главная</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="8" viewBox="0 0 7 8" fill="none">
                    <circle cx="3.5" cy="4" r="3.5" fill="#6E86C0"/>
                </svg>
            </li>
            <li>
                <span>программа суррогатного материнства</span>
            </li>
        </ul>
    </div>
    <!-- link_path -->

    <!-- legislation -->
    <div id="legislation">
        <div class="main_container">
            <div class="legislation_text">
                <h1 class="main_title">программа суррогатного материнства</h1>
                <p>
                    В Болашак мы предоставляем уникальную и индивидуальную программу суррогатного материнства, которая создана для того, чтобы воплотить в жизнь вашу мечту о родительстве. Мы понимаем, что каждая семья уникальна, и наша программа разработана так, чтобы соответствовать вашим потребностям и целям.
                </p>
                <p>
                    Наша программа суррогатного материнства предлагает шаг за шагом поддержку на всем пути к родительству. Мы начинаем с внимательной консультации, в ходе которой мы выясняем ваши пожелания и предоставляем всю необходимую информацию о процессе.
                </p>
                <p>
                    Мы гордимся каждой семьей, которой мы помогли осуществить мечту о родительстве через суррогатное материнство. Ваши истории успеха - наша главная мотивация и стимул.
                    Если вы готовы начать ваш путь к родительству через суррогатное материнство, обратитесь к нам. Наша программа разработана, чтобы сделать этот путь доступным, безопасным и успешным для вас. Дайте себе шанс на семейное счастье с Болашак.
                </p>
                <p>
                    Наши опытные специалисты всегда готовы ответить на ваши вопросы и предоставить вам информацию, которая поможет вам сделать информированное решение. Подарите себе возможность стать родителями через нашу программу суррогатного материнства. В Болашак мы готовы поддержать вас на этом удивительном пути и помочь вам создать семью, о которой вы всегда мечтали.
                </p>
                <blockquote cite="#">
                    Если вы готовы начать ваш путь к родительству через суррогатное материнство, свяжитесь с нами. Мы с нетерпением ждем возможности поддержать вас на этом удивительном пути.
                </blockquote>
            </div>
            <div class="legislation_right">
                <img src="./images/legeslation_img.svg" alt="" class="effekt">
                <h3>свяжитесь с нами для обсуждения деталей</h3>
                <p>Если у вас есть вопросы, или вы хотите оставить отзыв, переходите в удобный для вас мессенджер и мы с вами всё обсудим</p>
                <div class="massanger">
                    <a href="#" target="_blank">
                        <img src="./images/question_gmail.svg" alt="">
                    </a>
                    <a href="#" target="_blank">
                        <img src="./images/question_whatsapp.svg" alt="">
                    </a>
                    <a href="#" target="_blank">
                        <img src="./images/question_telegram.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="news_slider">
            <div class="wrapper_container">
                <div class="main_container">
                    <div class="news_slider_head">
                        <div>
                            <span>новости</span>
                            <h2>узнайте о последних событиях</h2>
                        </div>
                        <div class="news_slider_btns">
                            <button class="left_btn">
                                <img src="./images/news_slider_next.svg" alt="">
                            </button>
                            <button class="right_btn">
                                <img src="./images/news_slider_next.svg" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="swiper newsSlider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="massmedia_card">
                                <div class="massmedia_card_img">
                                    <img src="./images/massmadia_1.png" alt="">
                                    <span class="massmedia_date">11 сент. 2023</span>
                                </div>
                                <h4>Причины поиска суррогатной матери в Алматы</h4>
                                <p>В каком случае пациентам требуется суррогатное материнство? Самой распространенной причиной поиска...</p>
                                <a href="#" target="_blank">
                                    Читать полностью
                                    <img src="./images/massmadia_icon2.svg" alt="">
                                </a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="massmedia_card">
                                <div class="massmedia_card_img">
                                    <img src="./images/massmadia_2.png" alt="">
                                    <span class="massmedia_date">11 сент. 2023</span>
                                </div>
                                <h4>Причины поиска суррогатной матери в Алматы</h4>
                                <p>В каком случае пациентам требуется суррогатное материнство? Самой распространенной причиной поиска...</p>
                                <a href="#" target="_blank">
                                    Читать полностью
                                    <img src="./images/massmadia_icon2.svg" alt="">
                                </a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="massmedia_card">
                                <div class="massmedia_card_img">
                                    <img src="./images/massmadia_3.png" alt="">
                                    <span class="massmedia_date">11 сент. 2023</span>
                                </div>
                                <h4>Причины поиска суррогатной матери в Алматы</h4>
                                <p>В каком случае пациентам требуется суррогатное материнство? Самой распространенной причиной поиска...</p>
                                <a href="#" target="_blank">
                                    Читать полностью
                                    <img src="./images/massmadia_icon2.svg" alt="">
                                </a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="massmedia_card">
                                <div class="massmedia_card_img">
                                    <img src="./images/massmadia_4.png" alt="">
                                    <span class="massmedia_date">11 сент. 2023</span>
                                </div>
                                <h4>Причины поиска суррогатной матери в Алматы</h4>
                                <p>В каком случае пациентам требуется суррогатное материнство? Самой распространенной причиной поиска...</p>
                                <a href="#" target="_blank">
                                    Читать полностью
                                    <img src="./images/massmadia_icon2.svg" alt="">
                                </a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="massmedia_card">
                                <div class="massmedia_card_img">
                                    <img src="./images/massmadia_1.png" alt="">
                                    <span class="massmedia_date">11 сент. 2023</span>
                                </div>
                                <h4>Причины поиска суррогатной матери в Алматы</h4>
                                <p>В каком случае пациентам требуется суррогатное материнство? Самой распространенной причиной поиска...</p>
                                <a href="#" target="_blank">
                                    Читать полностью
                                    <img src="./images/massmadia_icon2.svg" alt="">
                                </a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="massmedia_card">
                                <div class="massmedia_card_img">
                                    <img src="./images/massmadia_2.png" alt="">
                                    <span class="massmedia_date">11 сент. 2023</span>
                                </div>
                                <h4>Причины поиска суррогатной матери в Алматы</h4>
                                <p>В каком случае пациентам требуется суррогатное материнство? Самой распространенной причиной поиска...</p>
                                <a href="#" target="_blank">
                                    Читать полностью
                                    <img src="./images/massmadia_icon2.svg" alt="">
                                </a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="massmedia_card">
                                <div class="massmedia_card_img">
                                    <img src="./images/massmadia_3.png" alt="">
                                    <span class="massmedia_date">11 сент. 2023</span>
                                </div>
                                <h4>Причины поиска суррогатной матери в Алматы</h4>
                                <p>В каком случае пациентам требуется суррогатное материнство? Самой распространенной причиной поиска...</p>
                                <a href="#" target="_blank">
                                    Читать полностью
                                    <img src="./images/massmadia_icon2.svg" alt="">
                                </a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="massmedia_card">
                                <div class="massmedia_card_img">
                                    <img src="./images/massmadia_4.png" alt="">
                                    <span class="massmedia_date">11 сент. 2023</span>
                                </div>
                                <h4>Причины поиска суррогатной матери в Алматы</h4>
                                <p>В каком случае пациентам требуется суррогатное материнство? Самой распространенной причиной поиска...</p>
                                <a href="#" target="_blank">
                                    Читать полностью
                                    <img src="./images/massmadia_icon2.svg" alt="">
                                </a>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- legislation -->
@endsection