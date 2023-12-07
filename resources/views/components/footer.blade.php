<footer>
    <div class="footer_top_block"></div>
    <div class="main_container">
        <div class="footer_top">
            <div class="footer_block">
                <div class="logo_footer">
                    <h4>{{setting('kontakty.title')}}</h4>
                    <p>{{setting('kontakty.subtitle')}}</p>
                </div>
                <p class="letsinziya">{{setting('kontakty.licence')}}
                </p>
                <p class="address">Адрес</p>
                <h6 class="footer_text">{{setting('kontakty.adress')}}</h6>
            </div>
            <div class="footer_block">
                <a class="footer_link" href="/">Главная</a>
                <a class="footer_link" href="/about">О компании</a>
                <a class="footer_link" href="/price">Прайс</a>
                <a class="footer_link" href="/legislation">Законодательство</a>
                <a class="footer_link" href="/surrogacy">Суррогатное материнство</a>
                <p class="address">Телефон</p>
                <a href="tel:{{setting('kontakty.number')}}" class="phone">{{setting('kontakty.number')}}</a>
                <a href="tel:{{setting('kontakty.number')}}" class="phone">{{setting('kontakty.number')}}</a>
                <p class="address_bottom">{{setting('kontakty.work')}}</p>
            </div>
            <div class="footer_block">
                <a href="/donor" class="footer_link">Донорство</a>
                <a href="/partners" class="footer_link">Партнеры</a>
                <a href="/news" class="footer_link">СМИ о нас</a>
                <a href="/questions" class="footer_link">Вопрос-ответ</a>
                <a href="/contacts" class="footer_link">Контакты</a>

                <p class="address">Почта</p>
                <a class="footer_text email_link" target="_blank" href="mailto:{{setting('kontakty.email')}}">{{setting('kontakty.email')}}</a>
            </div>
            <div class="footer_block">
                <button class="button_three button_three_footer_one modal_btn">Оставить заявку</button>
                <a href="/requirements" class="button_three button_three_footer_two">стать сурмамой</a>
                <p class="address address_end">Соц. сети</p>
                <div class="messengers">
                    <a href="{{'https://'.setting('kontakty.wa')}}" target="_blank">
                        <img src="{{asset("./images/footer_whatsapp.svg")}}" alt="">
                    </a>
                    <a href="{{'https://'.setting('kontakty.tg')}}" target="_blank">
                        <img src="{{asset("./images/footer_telegram.svg")}}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <p>{{setting('kontakty.copiright')}}</p>
            <p>Дизайн и разработка</p>
        </div>
    </div>
</footer>