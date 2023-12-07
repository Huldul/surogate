@extends('eng/layout')

@section('content')
  

    <!-- link_path -->
    <div class="main_container">
        <ul class="link_path">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="8" viewBox="0 0 7 8" fill="none">
                    <circle cx="3.5" cy="4" r="3.5" fill="#6E86C0"/>
                </svg>
            </li>
            <li>
                <span>Mass Media</span>
            </li>
        </ul>
        <h1 class="main_title">Mass Media</h1>
    </div>
    <!-- link_path -->

    <!-- massmedia -->
    <section id="massmedia">
        <div class="main_container">
            @foreach ($news as $new)
            <div class="massmedia_card">
                <div class="massmedia_card_img">
                    <img src="{{asset('storage/'.$new->image)}}" alt="">
                    <span class="massmedia_date">{{$new->created_at->format('d M. Y')}}</span>
                </div>
                <h4>{{$new->title}}</h4>
                {!!$new->subtitle!!}
                <a href="news-single/{{$new->url}}" target="_blank">
                    Read completely
                    <img src="./images/massmadia_icon.svg" alt="">
                </a>
            </div>
            @endforeach
        </div>
        @if ($news->lastPage()>1)
        <div class="main_container">
            <div class="massmedia_pagination">
            @if ($news->onFirstPage())
                <a href="#">Back</a>
            @else
                <a href="{{ $news->previousPageUrl() }}">Back</a>
            @endif

            @for ($i = 1; $i <= $news->lastPage(); $i++)
                @if ($i == $news->currentPage())
                    <button class="active">{{$i}}</button>
                @else
                    <a href="{{ $news->url($i) }}"><button>{{$i}}</button></a>
                @endif
            @endfor

            @if ($news->hasMorePages())
                <a href="{{ $news->nextPageUrl() }}">Forward</a>
            @else
                <a href="#">Forward</a>
            @endif
            </div>
        </div>
        @endif
    </section>
    <!-- massmedia -->
@endsection