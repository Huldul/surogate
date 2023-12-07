@extends('layout')

@section('content')
  
    <!-- link_path -->
    <div class="main_container">
        <ul class="link_path">
            <li>
                <a href="news">Главная</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="8" viewBox="0 0 7 8" fill="none">
                    <circle cx="3.5" cy="4" r="3.5" fill="#6E86C0"/>
                </svg>
            </li>
            <li>
                <a href="/news">Новости</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="8" viewBox="0 0 7 8" fill="none">
                    <circle cx="3.5" cy="4" r="3.5" fill="#6E86C0"/>
                </svg>
            </li>
            <li>
                <span>{{$news->title}}</span>
            </li>
        </ul>
    </div>
    <!-- link_path -->

    <!-- legislation -->
    <div id="legislation">
        <div class="main_container">
            <div class="legislation_text">
                <h1 class="main_title">{{$news->title}}</h1>
                {!!$news->main!!}
            </div> 
            <div class="legislation_right_in">
                <img style="width: 500px" class="internal_img" src="{{asset('storage/'.$news->image)}}" alt="">
                <div class="legislation_right">
                    <img src="{{asset("storage/".$contactus->image)}}" alt="" class="effekt">
                    <h3>{{$contactus->title}}</h3>
                    {!!$contactus->subtitle!!}
                    <div class="massanger">
                        <a href="{{'https://'.setting('kontakty.email')}}" target="_blank">
                            <img src="../images/question_gmail.svg" alt="">
                        </a>
                        <a href="{{'https://'.setting('kontakty.wa')}}" target="_blank">
                            <img src="../images/question_whatsapp.svg" alt="">
                        </a>
                        <a href="{{'https://'.setting('kontakty.tg')}}" target="_blank">
                            <img src="../images/question_telegram.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- legislation -->
@endsection