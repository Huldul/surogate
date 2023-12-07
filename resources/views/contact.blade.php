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
                <span>контакты</span>
            </li>
        </ul>
        <h1 class="main_title">контакты</h1>
    </div>
    <!-- link_path -->

    <!-- contact -->
    <section id="contact">
        <div class="wrapper_container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3437.9821524761032!2d71.4049447083053!3d51.15988799538059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424586dc67324d57%3A0xa6a43704e90f89b8!2z0YPQuy4g0KLQsNGA0LDRgdCwINCo0LXQstGH0LXQvdC60L4sINCQ0YHRgtCw0L3QsCAwMjAwMDAsINCa0LDQt9Cw0YXRgdGC0LDQvQ!5e0!3m2!1sru!2s!4v1699793869749!5m2!1sru!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="main_container">
                <div class="contact">
                    <span>Адрес</span>
                    <address class="contact_address" href="#">
                        {{setting('kontakty.adress')}}
                    </address>
                    <span>Телефон</span>
                    <a href="tel:{{setting('kontakty.number')}}">
                        {{setting('kontakty.number')}}
                    </a>
                    <p>{{setting('kontakty.work')}}</p>
                    <span>Почта</span>
                    <a href="mailto:{{setting('kontakty.email')}}">
                        {{setting('kontakty.email')}}
                    </a>
                    <div class="contact_btns">
                        <div>
                            <a href="{{'https://'.setting('kontakty.wa')}}" target="_blank">
                                <img src="{{asset("./images/contact_whatsapp.svg")}}" alt="">
                            </a>
                            <a href="{{'https://'.setting('kontakty.tg')}}" target="_blank">
                                <img src="{{asset("./images/contact_telegram.svg")}}" alt="">
                            </a>
                        </div>
                        <button class="button_three modal_btn">связаться с нами</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->
@endsection
