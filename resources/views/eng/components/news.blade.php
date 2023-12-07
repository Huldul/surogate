<div class="news_slider">
    <div class="wrapper_container">
        <div class="main_container">
            <div class="news_slider_head">
                <div>
                    <span>новости</span>
                    <h2>узнайте о последних событиях</h2>
                </div>
                <div class="news_slider_btns">
                    <button class="left_btn">
                        <img src="./images/news_slider_next.svg" alt="">
                    </button>
                    <button class="right_btn">
                        <img src="./images/news_slider_next.svg" alt="">
                    </button>
                </div>
            </div>
            <div class="swiper newsSlider">
                <div class="swiper-wrapper">
                    @foreach ($news as $new)
                    <div class="swiper-slide">
                        <div class="massmedia_card">
                            <div class="massmedia_card_img">
                                <img src="{{asset("storage/".$new->image)}}" alt="">
                                <span class="massmedia_date">{{ \Carbon\Carbon::parse($new->created_at)->isoFormat('D MMMM YYYY[\г.]') }}</span>
                            </div>

                            <h4>{{$new->title}}</h4>
                            <p>{!!$new->subtitle!!}</p>
                            <a href="news-single/{{$new->url}}" target="_blank">
                                Читать полностью
                                <img src="./images/massmadia_icon2.svg" alt="">
                            </a>
                        </div>
                        </div>
                    @endforeach
                
                </div>
            </div>
        </div>
    </div>
</div>