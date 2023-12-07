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
                <span>Documents</span>
            </li>
        </ul>
        <h1 class="main_title">Documents</h1>
    </div>
    <!-- link_path -->

    <!-- documentation -->
    <section id="documentation">
        <div class="main_container">
            <h3 class="documentation_title">Sertificates</h3>
        </div>
        <ul class="main_container light_gallery_wrapper">
            @foreach ($sertifications as $sertification)
            <li class="documentation_card">
                <a href="{{asset('storage/'.$sertification->image)}}" class="documentation_img" data-lightbox="gallery">
                    <img src="{{asset('storage/'.$sertification->image)}}"  alt="">
                </a>
                <h4>{{$sertification->title}}</h4>
                <p>{{$sertification->company}}</p>
                <span>{{$sertification->year}}</span>
            </li>
            @endforeach

        </ul>
    </section>

    <section id="licenses">
        <div class="wrapper_container">
            <div class="licenses_title">
                <h2>Licences</h2>
                <div class="licenses_btns">
                    <img class="licenses_left_btn" src="./images/licenses_right.svg" alt="">
                    <img class="licenses_right_btn" src="./images/licenses_right.svg" alt="">
                </div>
            </div>
            <div class="swiper licensesSlider">
                <div class="swiper-wrapper light_gallery_wrapper">
                @foreach ($licenses as $license)
                <div class="swiper-slide">
                    <div class="documentation_card">
                        <a href="{{asset('storage/'.$license->image)}}" class="documentation_img" data-lightbox="gallery">
                            <img src="{{asset('storage/'.$license->image)}}"  alt="">
                        </a>
                        <h4>{{$license->title}}</h4>
                        <p>{{$license->company}}</p>
                        <span>{{$license->year}}</span>
                    </div>
                  </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- documentation -->

    <section id="documentation">
        <div class="main_container">
            <h3 class="documentation_title">Thanksgiving letters</h3>
        </div>
        <ul class="main_container light_gallery_wrapper">
            @foreach ($letters as $letter)
            <li class="documentation_card">
                <a href="{{asset('storage/'.$letter->image)}}" class="documentation_img" data-lightbox="gallery">
                    <img src="{{asset('storage/'.$letter->image)}}"  alt="">
                </a>
                <h4>{{$letter->title}}</h4>
                <p>{{$letter->company}}</p>
                <span>{{$letter->year}}</span>
            </li>
            @endforeach
        </ul>
    </section>

@endsection