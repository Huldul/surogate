@extends('layout')

@section('content')
  
    <!-- link_path -->
    <div class="main_container">
        <ul class="link_path">
            <li>
                <a href="/">Главная</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="8" viewBox="0 0 7 8" fill="none">
                    <circle cx="3.5" cy="4" r="3.5" fill="#6E86C0"/>
                </svg>
            </li>
            <li>
                <a href="#">требования к суррогатным матерям</a>
            </li>
        </ul>
        <h1 style="width: 550px" class="main_title">{{$page->title}}</h1>
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
                <h2>Для суррогатной матери первичные анализы и справки:</h2>
                <div class="analyzes_in">
                    <ul class="analyzes_left">
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
                    <ul class="analyzes_right">
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

        <div class="documents">
            <div class="main_container">
                <div class="documents_left">
                    <h2>{{$page->title3}}</h2>
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
                </div>
                <div class="documents_right">
                    {!!$page->compensacy!!}
                </div>
            </div>
        </div>

        <div class="documents_bottom">
            <div class="wrapper_container">
                <img src="{{asset('storage/'.$page->image)}}" alt="">
            </div>
        </div>

        <div class="candidate">
            <div class="main_container">
                <h2>
                    {{$page->title4}}
                </h2>
                
                <div class="candidate_in">
                @foreach ($gars as $gar)
                    <div class="candidate_card">
                        <h3>
                            {{$gar->title}}
                        </h3>
                        {!!$gar->main!!}
                    </div>
                    @endforeach
                
                    
                </div>
            </div>
        </div>

        <div class="application">
            <div class="wrapper_container application_in">
                <div class="application_left">
                    <img src="{{asset('storage/'.$contactus->image)}}" alt="">
                </div>
                <div class="application_right partenrsBlock">
                    <span>остались вопросы?</span>
                    <h1>{{$contactus->title}}</h1>
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
    </section>
    <!-- questionnaire -->
@endsection