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
                <span>прайс для граждан РФ</span>
            </li>
        </ul>
    </div>
    <!-- link_path -->

    <!-- price -->
    <div id="price">
        <div class="main_container">
            <div class="price_title">
                <img class="price_effekt" src="./images/price_effekt2.svg" alt="">
                <h1 class="main_title">прайс для граждан РФ</h1>
                <p>
                    Рассматривайте стоимость суррогатного материнства как важную инвестицию в будущее вашей семьи. Начните путь к созданию вашей семьи сегодня и дайте себе шанс на счастливое родительство.
                </p>
            </div>

            <div class="price_services">
                <div class="price_services_title">
                    <h3 class="price_services_left">Наименование услуги</h3>
                    <h3 class="price_services_right">Сумма в рублях</h3>
                </div>
                @foreach ($price as $pric)
                <div class="price_block">
                    <div class="price_block_left">
                        <h4>{{$pric->title}}</h4>
                        <p>{!!$pric->subtitle!!}</p>
                    </div>
                    <div class="price_block_right">
                        <h4>{{$pric->price}}₽</h4>
                        <p>{{$pric->condition}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="contact_block">
            <div class="wrapper_container">
                <div class="contact_block_left">
                    <h3>{{$applicationblock->title}}</h3>
                {!!$applicationblock->subtitle!!}
                    <div class="contact_block_left_btns">
                        <div class="btns">
                            <button class="btns_block_one modal_btn">Оставить заявку</a>
                            <button class="btns_block_two">стать сурмамой</button>
                        </div>
                        <div class="messanger">
                            <a href="{{'https://'.setting('kontakty.email')}}" target="_blank">
                                <img src="/images/price_mail.svg" alt="">
                            </a>
                            <a href="{{'https://'.setting('kontakty.wa')}}" target="_blank">
                                <img src="/images/price_whatsapp.svg" alt="">
                            </a>
                            <a href="{{'https://'.setting('kontakty.tg')}}" target="_blank">
                                <img src="/images/price_telegram.svg" alt="">
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
    <!-- price -->

    
@endsection