@extends('layout')

@section('content')
  
    <!-- header -->

    <!-- link_path -->
    <div class="main_container">
        <ul class="link_path">
            <li>
                <a href="/">Главная</a>
            </li>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="8" viewBox="0 0 7 8" fill="none">
                    <circle cx="3.5" cy="4" r="3.5" fill="#6E86C0"/>
                </svg>
            </span>
            <li>
                <span>{{$about->title}}</span>
            </li>
        </ul>
        <h1 class="main_title">{{$about->title}}</h1>
    </div>
    <!-- link_path -->

    <section id="about">
        <div class="main_container">
            <div class="about_text">
                <div class="text_wrapper">{!!$about->main!!}</div>

                <img class="mobile_img" src="./images/about_img.png" alt="">

                <div class="about_statistic">
                    <div class="about_statistic_block">{!!$about->statistic1_about!!}</div>
                    <div class="about_statistic_block">{!!$about->statistic2_about!!} </div>
                    <div class="about_statistic_block">{!!$about->statistic3_about!!}</div>
                </div>
            </div>
            <div class="about_img">
                <img src="./images/about_img.png" alt="">
            </div>
        </div>
        <img class="about_effekt_img" src="./images/about_effekt_img.svg" alt="">
    </section>


@endsection
