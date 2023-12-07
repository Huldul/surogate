<footer>
    <div class="footer_top_block"></div>
    <div class="main_container">
        <div class="footer_top">
            <div class="footer_block">
                <div class="logo_footer">
                    <h4>{{setting('kontakty.titleen')}}</h4>
                    <p>{{setting('kontakty.subtitleen')}}</p>
                </div>
                <p class="letsinziya">{{setting('kontakty.licence')}}
                </p>
                <p class="address">Address</p>
                <h6 class="footer_text">{{setting('kontakty.adress')}}</h6>
            </div>
            <div class="footer_block">
                <a class="footer_link" href="/eng/">Home</a>
                <a class="footer_link" href="/eng/about">About </a>
                <a class="footer_link" href="/eng/price">Price</a>
                <a class="footer_link" href="/eng/legislation">Legislation</a>
                <a class="footer_link" href="/eng/surrogacy">Surrogacy</a>
                <p class="address"></p>
                <a href="tel:{{setting('kontakty.number')}}" class="phone">{{setting('kontakty.number')}}</a>
                <a href="tel:{{setting('kontakty.number')}}" class="phone">{{setting('kontakty.number')}}</a>
                <p class="address_bottom">{{setting('kontakty.work')}}</p>
            </div>
            <div class="footer_block">
                <a href="/eng/donor" class="footer_link">Donation</a>
                <a href="/eng/partners" class="footer_link">Partners</a>
                <a href="/eng/news" class="footer_link">Mass Media</a>
                <a href="/eng/questions" class="footer_link">Question answer</a>
                <a href="/eng/contacts" class="footer_link">Contacts</a>

                <p class="address">Mail</p>
                <a class="footer_text email_link" target="_blank" href="mailto:{{setting('kontakty.email')}}">{{setting('kontakty.email')}}</a>
            </div>
            <div class="footer_block">
                <button class="button_three button_three_footer_one modal_btn">Submit your application</button>
                <a href="/requirements" class="button_three button_three_footer_two">become a surrogate mother</a>
                <p class="address address_end">Social networks</p>
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
            <p>Design and development</p>
        </div>
    </div>
</footer>