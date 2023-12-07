@extends('eng/layout')

@section('content')
  

    <!-- link_path -->
    <div class="main_container">
        <ul class="link_path">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="8" viewBox="0 0 7 8" fill="none">
                    <circle cx="3.5" cy="4" r="3.5" fill="#6E86C0"/>
                </svg>
            </li>
            <li>
                <span>question-answer</span>
            </li>
        </ul>
        <h1 class="main_title">question-answer</h1>
    </div>
    <!-- link_path -->

    <!-- accardion -->
    <div id="questions">
        <div class="main_container">
            <ul class="accardion_wrapper">
                @foreach ($questions as $question)
                <li>
                    <button class="accardion_btn">
                        <span>{{$question->question}}</span>
                        <img src="./images/plus.svg" alt="">
                    </button>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                            {!!$question->answer!!}
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="application">
            <div class="wrapper_container">
                <div class="application_left">
                    <img src="{{asset("storage/".$contactus->image)}}" alt="">
                </div>
                <div class="application_right">
                    <span>
                        Any questions?</span>
                    <h1>{{$contactus->title}}</h1>
                    {!!$contactus->subtitle!!}
                    <div class="application_btns">
                        <a href="{{setting('kontakty.email')}}" target="_blank">
                            <img src="{{asset("./images/question_gmail.svg")}}" alt="">
                        </a>
                        <a href="{{setting('kontakty.wa')}}" target="_blank">
                            <img src="{{asset("./images/question_whatsapp.svg")}}" alt="">
                        </a>
                        <a href="{{setting('kontakty.tg')}}" target="_blank">
                            <img src="{{asset("./images/question_telegram.svg")}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- accardion -->

@endsection