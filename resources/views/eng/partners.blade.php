@extends('eng/layout')

@section('content')
    <!-- link_path -->
    <div class="main_container">
        <ul class="link_path">
            <li>
                <a href="#">Ho,e</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="8" viewBox="0 0 7 8" fill="none">
                    <circle cx="3.5" cy="4" r="3.5" fill="#6E86C0"/>
                </svg>
            </li>
            <li>
                <span>partners</span>
            </li>
        </ul>
    </div>
    <!-- link_path -->

    <div id="home">
        <div class="partners_slider">
            <div class="main_container">
                <div class="partners_title">
                    <div>
                        <h3>partners</h3>
                    </div>
                    <div class="partners_btn">
                        <button class="partners_btn_left">
                            <img src="./images/partners_icon.svg" alt="">
                        </button>
                        <button class="partners_btn_right">
                            <img src="./images/partners_icon.svg" alt="">
                        </button>
                    </div>
                </div>
                <div class="swiper partenrsSlider">
                    <div class="swiper-wrapper">
                        @foreach ($partners as $partner)
                    <div class="swiper-slide">
                        <div class="partners_card">
                            <div class="partners_logo">
                                <img style="width: 250px" src="{{asset('storage/'.$partner->image)}}" alt="">
                            </div>
                            <h3>{{$partner->title}}</h3>
                            <a href="{{$partner->url}}" target="_blank">{{$partner->url}}</a>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="application">
            <div class="wrapper_container application_in">
                <div class="application_left">
                    <img src="{{asset('storage/'.$contactus->image)}}" alt="">
                </div>
                <div class="application_right partenrsBlock">
                    <img src="./images/partners_effekt.svg" alt="" class="application_effekt">
                    <h3>{{$contactus->title}}</h3>
                    {!!$contactus->subtitle!!}
                    <div class="application_btns">
                        <a href="{{'https://'.setting('kontakty.email')}}" target="_blank">
                            <img src="./images/application_main2.svg" alt="">
                        </a>
                        <a href="{{'https://'.setting('kontakty.wa')}}" target="_blank">
                            <img src="./images/application_whatsapp2.svg" alt="">
                        </a>
                        <a href="{{'https://'.setting('kontakty.tg')}}" target="_blank">
                            <img src="./images/application_telegram2.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection