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
                <span>Законодательство</span>
            </li>
        </ul>
    </div>
    <!-- link_path -->

    <!-- legislation -->
    <div id="legislation">
        <div class="main_container">
            <div class="legislation_text">
                <h1 class="main_title">Законодательство</h1>
                <p>
                    Программа «Суррогатное материнство» начинается с заключения генетическими родителями договора с Центром суррогатного материнства о предоставлении им кандидатуры суррогатной матери. После подбора кандидатуры суррогатной матери и проведения всех необходимых медицинских и психологических обследований супружеской паре необходимо заключить контракт с суррогатной матерью. В контракте прописываются права и обязанности обеих сторон.
                </p>
                <p>
                    Согласно условиям контракта генетические родители компенсируют суррогатной маме ее услуги, питание, при необходимости проживание, наблюдение специалистов и роды. В свою очередь суррогатная мама обязуется выносить, родить и передать законным способом рожденного ребенка его генетическим родителям (согласно всем условиям, указанным в контракте).
                </p>
                <blockquote cite="#">
                    Центр суррогатного материнства "БОЛАШАК" выступает гарантом конфиденциальности отношений суррогатных матерей и генетических родителей.
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
                                <a href="#">
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
                                <a href="#">
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
                                <a href="#">
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
                                <a href="#">
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
                                <a href="#">
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
                                <a href="#">
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
                                <a href="#">
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
                                <a href="#">
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