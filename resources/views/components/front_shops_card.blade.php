<!-- カードの構造 -->
                <div class="section__content">
                    <div class="section__content--left">

                        <div>{{ $shop_name }}</div>

                        <div><img src="../assets/images/img_neko_700_3.jpg" alt="お店の外観"></div>

                        <!-- 疑似要素でアイコンを追加する -->
                        <div class="section__image--location">{{ $shop_address }}</div>

                        <div class="section__image--open">営業時間</div>
                        <div class="section__content--day">
                            <p class="section__content--dayleft">{{ $shop_service_day }}</p>
                        </div>

                        <div class="section__image--number">電話番号 {{ $shop_tel }}</div>
                        <div class="section__image--address">メールアドレス {{ $shop_email }}</div>

                        <div class="section__image--homepage">
                            ホームページ <a href="http://www.iharatsurigu.co.jp/wp/"><span>こちらから</span></a>
                        </div>

                    </div>


                    <div class="section__image--service section__content--left">サービス内容</div>

                    <div class="section__content--margin">
                        <div class="store__description">
                            <p class="store__description--margin">
                                {{ $shop_service }}
                            </p>
                        </div>
                    </div>

                    <div class="section__image--message section__content--left">お店からのメッセージ</div>

                    <div class="section__content--margin">
                        <div class="store__description">
                            <p class="store__description--margin">
                                {{ $shop_pr }}
                            </p>
                        </div>
                    </div>

                    <!-- 疑似要素でアイコンを追加する -->
                    <div class="section__image--information section__content--left">お店の周辺情報</div>

                    <!-- Googleマップで周辺情報を表す -->
                    <div class="section__wrap--infomation">
                        {{ $shop_iframe }}
                        {{-- <iframe class="section__map--information"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105749.94989893542!2d134.50598449901784!3d34.07756439038653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35536e59cfa2e1a5%3A0xfc218cb261e84ce7!2z44GE44Gv44KJ6Yej5YW3!5e0!3m2!1sja!2sjp!4v1676339393022!5m2!1sja!2sjp"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe> --}}
                    </div>
                </div>
<!-- /カードの構造 -->
