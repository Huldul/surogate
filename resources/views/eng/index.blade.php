@extends('eng/layout')

@section('content')
    
<!-- home -->
<div id="home">
    <div class="wrapper_container home_wrapper">
        <div class="home_slider">
            <div class="home_slider_pagination"></div>
            <div class="swiper homeSlider">
                <div class="swiper-wrapper">
                    @foreach ($appeals as $appeal)
                    <div class="swiper-slide">
                        <img class="home_slider_effekt" src="./images/home_slider_img.svg" alt="">
                        <div class="home_slider_head">
                            <span>{{$appeal->head}}</span>
                        </div>
                        <h1 style="width: 450px">{{$appeal->title}}</h1>
                        {!!$appeal->main!!}
                        <div class="home_btns">
                            <a href="#" class="home_btn_1 modal_btn">Submit your application</a>
                            <a href="#" class="home_btn_2">become a surrogate mother</a>
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
        <div class="home_img">
            <img src="{{asset("storage/".$page->image)}}" alt="">
        </div>
    </div>

    <div class="mission">
        <div class="main_container">
            <div class="mission_left">
                <span>mission</span>
                
                <h3>{{$about->index_title}}</h3>
                <a href="">
                    More details
                    <img src="./images/massmadia_icon.svg" alt="">
                </a>
            </div>
            <div class="mission_right">
                {!!$about->index_subtitle!!}
                <div class="mission_right_statistic">
                    <div class="mission_right_statistic_block">{!!$about->statistic1!!}</div>
                    <div class="mission_right_statistic_block">{!!$about->statistic2!!}</div>
                    <div class="mission_right_statistic_block">{!!$about->statistic3!!}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="mission_bottom">
        <div class="wrapper_container">
            <img src="./images/mission_bottom_img.png" alt="">
        </div>
    </div>

    <div class="opportunity">
        <div class="main_container">
            <div class="opportunity_text">
                <span>{{$opportunity->head}}</span>
                <h3>{{$opportunity->title}}</h3>
                {!!$opportunity->subtitle!!}
                <a href="#">
                    More details
                    <img src="./images/opartunity_more_icon.svg" alt="">
                </a>
            </div>
            <div class="opportunity_img">
                <img src="{{asset('storage/'.$opportunity->image1)}}" alt="">
                <img src="./images/opartunity_img2.png" alt="">
            </div>
        </div>
        <img class="opportunity_effekt" src="./images/opartunity_effekt.svg" alt="">
    </div>

    @include('components/news',['news'=>$news])

    <div class="news_slider_bottom">
        <div class="wrapper_container">
            <img src="./images/news_slider_bottom.png" alt="">
        </div>
    </div>

    <div class="partners_slider">
        <div class="main_container">
            <div class="partners_title">
                <div>
                    <span>partners</span>
                    <h3>companies that<br> cooperate with us </h3>
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
        <div class="wrapper_container">
            <div class="application_left">
                <img src="{{asset('storage/'.$contactus->image)}}" alt="">
            </div>
            <div class="application_right">
                <span>заявка</span>
                <h3>{{$contactus->title}}</h3>
                {!!$contactus->subtitle!!}
                <div class="application_btns">
                    <a href="{{'https://'.setting('kontakty.email')}}" target="_blank">
                        <img src="./images/application_main.svg" alt="">
                    </a>
                    <a href="{{'https://'.setting('kontakty.wa')}}" target="_blank">
                        <img src="./images/application_whatsapp.svg" alt="">
                    </a>
                    <a href="{{'https://'.setting('kontakty.tg')}}" target="_blank">
                        <img src="./images/application_telegram.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="questions">
        <div class="main_container">
            <div class="questions_title">
                <span>questions</span>
                <h3>We have collected the most frequently asked questions with answers for you</h3>
                <img class="questions_effekt" src="./images/questions_effekt.svg" alt="">
            </div>
            <div class="accardion_wrapper">
                @foreach ($questions as $question)
                <button class="accardion_btn">
                    <span>{{$question->question}}</span>
                    <img src="./images/plus.svg" alt="">
                </button>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        {!!$question->answer!!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="contact_block">
        <div class="wrapper_container">
            <div class="contact_block_left">
                <h3>{{$applicationblock->title}}</h3>
                {!!$applicationblock->subtitle!!}
                <div class="contact_block_left_btns">
                    <div class="btns">
                        <button class="left_btn modal_btn">
                            Submit your application
                        </button>
                        <button class="right_btn">
                            become a surrogate mother 
                        </button>
                    </div>
                    <div class="massanger">
                        <a href="{{'https://'.setting('kontakty.email')}}" target="_blank">
                            <img src="./images/contact_gmail.svg" alt="">
                        </a>
                        <a href="{{'https://'.setting('kontakty.wa')}}" target="_blank">
                            <img src="./images/contact_whatsapp.svg" alt="">
                        </a>
                        <a href="{{'https://'.setting('kontakty.tg')}}" target="_blank">
                            <img src="./images/contact_telegram.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="contact_block_right">
                <img src="{{asset('storage/'.$applicationblock->image)}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- home -->

@endsection
