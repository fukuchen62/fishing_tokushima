@extends('layouts.layout_front')

@section('title', 'トップページ')

{{-- pageCss --}}
@section('pageCss')

@endsection

{{-- メイン --}}
@section('content')
    <div class="keyvisual">
        キービジュアル
    </div>

    <section class="titlesection flex">
        <div class="titlesection__block ">
            <div class="titlesection__block--group flex">
                <h1 class="pagetitle">ページタイトル</h1>
            </div>
            <img src="{{ asset('assets/images/kai_baigai.png') }}" alt="貝" class="background__img shellfish1">
            <img src="{{ asset('assets/images/kai_baigai.png') }}" alt="貝" class="background__img shellfish2">
            <img src="{{ asset('assets/images/kai_baigai.png') }}" alt="貝" class="background__img shellfish3">

        </div>
        <div class="custom-shape-divider-top-1676265750">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
        <div class="custom-shape-divider-top-1676265750 backp">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-p"></path>
            </svg>
        </div>
    </section>

    <section class="firstsection">
        <div class="section__title--box">
            <h2 class="section__title firsttitle">第一セクション</h2>
        </div>
        <div>
            <div class="btn">基礎ボタン</div>
            <div>text</div>
        </div>
        <div>
            <div>syasin</div>
            <div>text</div>
        </div>
        <div>
            <div>syasin</div>
            <div>text</div>
        </div>
        <div>
            <div>syasin</div>
            <div>text</div>
        </div>
    </section>

    <section>
        <h2>釣りスポット</h2>
        <div>東部</div>
        <!--botan -->
        <div>南部</div>
        <!--botan -->
    </section>

    <section>
        <h2>体験プラン</h2>
        <div>
            <div>プラン名</div>
            <div>概要</div>
            <div>画像</div>
        </div>

        <div>
            <div>プラン名</div>
            <div>概要</div>
            <div>画像</div>
        </div>

        <div>
            <div>プラン名</div>
            <div>概要</div>
            <div>画像</div>
        </div>
        <a href=""> もっと見る</a>
    </section>

    <section>
        <h2>徳島で釣れる魚</h2>
        <div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
        </div>
        <div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
        </div>
        <div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
            <div>
                <div>吹き出し（魚の名前）</div>
                <div>画像</div>
            </div>
        </div>
    </section>

    <section>
        <h2>infomation</h2>
        <div>
            <div>
                <div>
                    日付
                </div>
                <div><a href="">タイトル</a></div>
            </div>
            <div>
                <div>
                    日付
                </div>
                <div><a href="">タイトル</a></div>
            </div>
            <div>
                <div>
                    日付
                </div>
                <div><a href="">タイトル</a></div>
            </div>
            <div>
                <div>
                    日付
                </div>
                <div><a href="">タイトル</a></div>
            </div>
        </div>
        <a href=""> もっと見る</a>
    </section>
    <div><span>トップに戻る</span></div>
@endsection

@section('pageJs')
    <script>
        (function(d) {
            var config = {
                    kitId: 'xan8yzi',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
@endsection
