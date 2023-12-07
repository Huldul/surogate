<!-- modal -->
<section class="modal_wrapper">
</section>
<div class="main_modal">
    <img class="modal_img" src="{{asset("./images/modal_bg.svg")}}" alt="">
    <h3>Оставьте заявку, и мы с вами свяжемся</h3>
    <form method="Post" action="/postApplication">
        @csrf
        <input type="text" name="name" placeholder="Ваше имя">
        <input type="tel" name="number" placeholder="Ваш телефон">
        <textarea name="comment" name="comment" placeholder="Комментарий"></textarea>
        <p>Нажимая кнопку “Отправить” вы даёте согласие на обработку  <a href="#">персональных данных</a>
        </p>
        <button type="submit" class="button_three">Оставить заявку</button>
    </form>
</div>
<header>
    <div class="main_container">
        <div class="header_left">
            <a class="logo" href="#">
                <img src="{{asset('storage/'.setting('kontakty.logo'))}}" alt="">
                <h4>
                    {{setting('kontakty.title')}}<br>
                    <span>{{setting('kontakty.subtitle')}}</span>
                </h4>
            </a>
            <button class="menu">
                <img class="menu_open" src="{{asset("./images/menu_icon.svg")}}" alt="">
                <img class="menu_close clone_img" src="{{asset("./images/menu_close.svg")}}" alt="">
                <span class="menu_open">Меню</span>
                <span class="menu_close">Закрыть</span>
            </button>
            <div class="language">
                <div class="language_btn">
                    <span class="language_btn_name">рус</span>
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
            <button class="button_three modal_btn">связаться с нами</button>
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
                    связаться с нами
                </button>
            </div>
        </div>
        <div class="main_container">
            <div class="menu_block">
                <h3>О нас</h3>
                <a href="/">Главная</a>
                <a href="/employees">Сотрудники</a>
                <a href="/about">О компании</a>
                <a href="/documentation">Документы</a>
                <a href="/contact">Контакты</a>
                <a href="/legislation" class="menu_main_link">Законодательство</a>
            </div>
            <div class="menu_block">
                <h3>Процедуры</h3>
                <a href="/surrogacy">Суррогатное материнство программа</a>
                <a href="/requirements-donor">Суррогатное материнство анкета</a>
                <a href="/donor">Донорство программа</a>
                <a href="/requirements">Донорство анкета</a>
                <a href="/questions">Вопрос-ответ</a>
                <a href="/news" class="menu_main_link">СМИ о нас</a>
            </div>
            <div class="menu_block">
                <h3>Прайс</h3>
                <a href="/price">Прайс для граждан РК</a>
                <a href="/priceru">Прайс для граждан РФ</a>
                <a href="/pricech">Прайс для граждан Китая</a>
                <a href="/priceot">Прайс для граждан других стран</a>
                <a class="menu_block_height" href="#"></a>
                <a href="/partners" class="menu_main_link">Партнеры</a>
            </div>
        </div>
    </div>
</header>
<div class="menu_bg">
</div>



