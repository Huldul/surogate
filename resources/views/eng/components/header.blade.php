<!-- modal -->
<section class="modal_wrapper">
</section>
<div class="main_modal">
    <img class="modal_img" src="{{asset("./images/modal_bg.svg")}}" alt="">
    <h3>Leave a request and we will contact you</h3>
    <form method="Post" action="/postApplication">
        @csrf
        <input type="text" name="name" placeholder="Ваше имя">
        <input type="tel" name="number" placeholder="Ваш телефон">
        <textarea name="comment" name="comment" placeholder="Комментарий"></textarea>
        <p>By clicking the “Submit” button you consent to the processing of <a href="#">personal data</a>
        </p>
        <button type="submit" class="button_three">Submit your application</button>
    </form>
</div>
<header>
    <div class="main_container">
        <div class="header_left">
            <a class="logo" href="#">
                <img src="{{asset('storage/'.setting('kontakty.logo'))}}" alt="">
                <h4>
                    {{setting('kontakty.titleen')}}<br>
                    <span>{{setting('kontakty.subtitleen')}}</span>
                </h4>
            </a>
            <button class="menu">
                <img class="menu_open" src="{{asset("./images/menu_icon.svg")}}" alt="">
                <img class="menu_close clone_img" src="{{asset("./images/menu_close.svg")}}" alt="">
                <span class="menu_open">Menu</span>
                <span class="menu_close">Close</span>
            </button>
            <div class="language">
                <div class="language_btn">
                    <span class="language_btn_name">Eng</span>
                    <img src="{{asset("./images/language_icon.svg")}}" alt="">
                </div>
                <div class="language_down">
                    <a href="/changeRu" class="language_down_link">Eng</a>
                    <a href="/changeEn" class="language_down_link">Rus</a>
                </div>
            </div>
        </div>
        <div class="header_right">
            <div class="messenger">
                <a class="first_icon" href="{{'https://'.setting('kontakty.email')}}" target="_blank">
                    <img src="{{asset("./images/email_icon.svg")}}" alt="">
                </a>
                <a href="{{'https://'.setting('kontakty.wa')}}" target="_blank">
                    <img src="{{asset("./images/whatsapp_icon.svg")}}" alt="">
                </a>
                <a href="{{'https://'.setting('kontakty.tg')}}" target="_blank">
                    <img src="{{asset("./images/telegram_icon.svg")}}" alt="">
                </a>
            </div>
            <div class="number">
                <a href="tel:{{setting('kontakty.number')}}">{{setting('kontakty.number')}}</a>
                <span>{{setting('kontakty.work')}}</span>
            </div>
            <button class="button_three modal_btn">connect with us</button>
        </div>
    </div>
    <div class="menu_in">
        <img class="bg_img" src="./images/menu_bg_img.svg" alt="">
        <div class="main_container">
            <div class="menu_messanger">
                <div class="messenger">
                    <a class="first_icon" href="{{'https://'.setting('kontakty.email')}}" target="_blank">
                        <img src="{{asset("./images/email_icon.svg")}}" alt="">
                    </a>
                    <a href="{{'https://'.setting('kontakty.wa')}}" target="_blank">
                        <img src="{{asset("./images/whatsapp_icon.svg")}}" alt="">
                    </a>
                    <a href="{{'https://'.setting('kontakty.tg')}}" target="_blank">
                        <img src="{{asset("./images/telegram_icon.svg")}}" alt="">
                    </a>
                </div>
                <div class="number">
                    <a href="tel:{{setting('kontakty.number')}}">{{setting('kontakty.number')}}</a>
                    <span>{{setting('kontakty.work')}}</span>
                </div>
                <button class="button_three modal_btn">
                    connect with us
                </button>
            </div>
        </div>
        <div class="main_container">
            <div class="menu_block">
                <h3>About Us</h3>
                <a href="/eng/">Home</a>
                <a href="/eng/employees">Employees</a>
                <a href="/eng/about">About company</a>
                <a href="/eng/documentation">Documentation</a>
                <a href="/eng/contact">Contacts</a>
                <a href="/eng/legislation" class="menu_main_link">Legislation</a>
            </div>
            <div class="menu_block">
                <h3>Procedures</h3>
                <a href="/eng/surrogacy">Surrogacy program</a>
                <a href="/eng/requirements-donor">Surrogacy questionnaire</a>
                <a href="/eng/donor">Donation program</a>
                <a href="/eng/requirements">Donation form</a>
                <a href="/eng/questions">Questions</a>
                <a href="/eng/news" class="menu_main_link">Mass Media</a>
            </div>
            <div class="menu_block">
                <h3>Price</h3>
                <a href="/eng/price">Price for citizens of the Kazakhstan</a>
                <a href="/eng/priceru">Price for citizens of the Russian Federation</a>
                <a href="/eng/pricech">Price for Chinese citizens</a>
                <a href="/eng/priceot">Price for citizens of other countries</a>
                <a class="menu_block_height" href="#"></a>
                <a href="/eng/partners" class="menu_main_link">Partners</a>
            </div>
        </div>
    </div>
</header>
<div class="menu_bg">
</div>



