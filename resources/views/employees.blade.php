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
                <span>сотрудники компании</span>
            </li>
        </ul>
        <h1 class="main_title">сотрудники компании</h1>
        <p class="main_title_under">Мы верим, что наши сотрудники - наш самый ценный ресурс, и их преданность и опыт являются ключевыми составляющими нашего успеха.</p>
    </div>
    <!-- link_path -->

    <!-- employees -->
    <section id="employees">
        <ul class="main_container">
            @foreach ($workers as $employ)
            <li class="employees_card">
                <img src="{{asset('storage/'.$employ->avatar)}}" alt="">
                <div class="employess_text">
                    <h4>{{$employ->name}}</h4>
                    <p>{{$employ->function}}</p>
                    <div class="more_link">
                        <p>Стаж работы: {{$employ->experience}}</p>
                        @if ($employ->url)
                        <a class="employess_link" href="{{$employ->url}}" target="_blank">подробнее</a>
                        @endif
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </section>
    <!-- employees -->
@endsection