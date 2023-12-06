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
                <span>требования к суррогатным матерям</span>
            </li>
        </ul>
        <h1 class="main_title" style="width: 550px">{{$page->title}}</h1>
    </div>
    <!-- link_path -->

    <!-- questionnaire -->
    <section id="questionnaire">
        <div class="main_container">
            <div class="questionnaire_home">
                <h4>
                    {{$page->title1}}
                </h4>

                <ul>
                    @foreach ($reqs as $req)
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                            <circle cx="5" cy="5" r="5" fill="#6E86C0"/>
                        </svg>
                        {!!$req->main!!}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        
        <div class="analyzes">
            <img src="./images/analizy_effekt.svg" alt="" class="analizy_effekt">
            <div class="wrapper_container">
                <h2>
                    {{$page->title2}}
                </h2>
                <div class="analyzes_in">
                    
                    <div class="analyzes_left">
                        <ul>
                            @php
                            $Counter = 1;
                            @endphp
                            @foreach ($leftBlockRecords as $an)
                            <li>
                                <div class="circle">
                                    <span>{{$Counter}}</span>
                                </div>
                                
                                {!!$an['main']!!}
                            </li>
                            @php
                            $Counter++;
                            @endphp
                            @endforeach
                        </ul>
                    </div>
                    <div class="analyzes_right">
                        <ul>
                            @foreach ($rightBlockRecords as $an)
                            <li>
                                <div class="circle">
                                    <span>{{$Counter}}</span>
                                </div>
                                {!!$an['main']!!}
                            </li>
                            @php
                            $Counter++;
                            @endphp
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="documents">
            <div class="main_container">
                <div class="documents_left">
                    <h2>
                        {{$page->title3}}
                    </h2>
                    <ul>
                        @foreach ($docs as $doc)
                        <li>
                            <div class="circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <circle cx="5" cy="5" r="5" fill="#6E86C0"/>
                                </svg>
                            </div>
                            {!!$doc->main!!}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="documents_bottom">
            <div class="wrapper_container">
                <img src="{{asset('storage/'.$page->image)}}" alt="">
            </div>
        </div>

        <div class="questionnaire_text">
            <div class="main_container">
                <div class="questionnaire_text_left">
                    {!!$page->main!!}

                    <div class="text_left">
                        <h2>
                            {{$page->title4}}
                        </h2>

                        <ul>
                            @foreach ($comps as $comp)
                                
                            @endforeach
                            <li>
                                {!!$comp->main!!}
                            </li>
                        </ul>
                    </div>
                    <span>
                        {{$page->titlefoot}}
                    </span>
                </div>
                <div class="questionnaire_text_right">
                    <h4>
                        {{$page->titleanon}}
                    </h4>
                    {!!$page->anonmain!!}
                </div>
            </div>
        </div>

        
    </section>
    <!-- questionnaire -->

    <div id="home">
        <div class="application">
            <div class="wrapper_container application_in">
                <div class="application_left">
                    <img src="{{asset('storage/'.$contactus->image)}}" alt="">
                </div>
                <div class="application_right partenrsBlock">
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