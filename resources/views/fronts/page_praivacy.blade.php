@extends('layouts.layout_front')

@section('description', 'ページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'プライバシーポリシー @ 釣徳！')

{{-- <h1>プライバシーポリシー @ 釣っトク！</h1> --}}

{{-- 該当ページのCSS --}}
@section('pageCss')
    <!-- 共通のCSSファイル -->
    <link rel="stylesheet" href="{{ asset('assets/css/privacy.css') }}">
@endsection

{{-- メイン --}}
@section('content')



    <section class="section">

        {{-- <h2 class="section__box--title ">第一セクション</h2> --}}

        <div class="privacy-wrap">

            <div class="section-wrap">
                <!-- margin-top: 50px設定 2022.10.15 akamatsu -->
                <h2 class="section-ttl" style="margin-top:50px; white-space: nowrap"><span
                        class="under">プライバシーポリシー・免責事項</span></h2>
            </div>

            <h3 class="privacy-title">個人情報の取扱いについて</h3>

            <p class="privacy-text">本プライバシーポリシーは、釣っトク！（以下「本サイト」といいます。）
                の各種サービス（本サイトによる情報提供、お問い合わせ等）において、本サイトを利用する方々の個人情報およびそれに準ずる情報を取り扱う際に、本サイトが遵守する方針を示したものです。</p>

            <h3 class="privacy-title">第１章・基本方針</h3>

            <p class="privacy-text">
                本サイトでは、個人情報の重要性を認識し、個人情報を保護することが社会的責務であると考え、個人情報に関する法令を遵守し、本サイトで取り扱う個人情報の取得、利用、管理を適正に行います。
                本サイトで収集した情報は、利用目的の範囲内で適切に取り扱います。</p>

            <h3 class="privacy-title">第２章・収取する情報の範囲</h3>

            <p class="privacy-text">
                本サイトでは、インターネットドメイン名、IPアドレス、サイト内検索のクエリ情報、その他当サイトの閲覧等に係る情報を自動的に収集します。なお、クッキー（サーバ側で利用者を識別するために、サーバから利用者のブラウザに送信され、利用者のコンピュータに蓄積させる情報）は、使い勝手の向上を目的とする内容に限定するものであり、個人情報は一切含みません。
            </p>

            <h3 class="privacy-title">第３条・利用目的</h3>

            <p class="privacy-text">
                本サイトでは、お客様からのお問い合わせやサービスへのお申し込み等を通じて、お客様の氏名、生年月日、住所、電話番号、メールアドレス等の個人情報をご提供いただく場合があります。その場合は、以下に示す利用目的のために、適正に利用するものと致します。
            </p>

            <h3 class="privacy-title">第４条・情報管理</h3>

            <p class="privacy-text">お客様からお預かりした個人情報は、不正アクセス、紛失、漏えい等が起こらないよう、慎重かつ適切に管理します。</p>

            <h3 class="privacy-title">第５条・適用範囲</h3>

            <p class="privacy-text">本プライバシーポリシーは、当サイトにおいてのみ適用されます。</p>

            <h3 class="privacy-title">第６条・内容の変更について</h3>

            <p class="privacy-text">
                本プライバシーポリシーの内容は、法令その他本プライバシーポリシーに別段の定めのある事項を除いて、ユーザーに通知することなく、変更することができるものとします。本サイトが別途定める場合を除いて、変更後のプライバシーポリシーは本サイトに掲載したときから効力を生じるものとします。
            </p>
        </div>

        <div class="section-wrap">
            <h2><span class="under">免責項目</span></h2>

            <p class="privacy-sub-text">釣徳！（以下、「本サイト」とします。）における免責事項は、下記の通りです。</p>
        </div>

        <div class="privacy-wrap">

            <h3 class="privacy-title">本サイトの情報の正確性について</h3>

            <p class="privacy-text sub-text">
                本サイトのコンテンツや情報において、可能な限り正確な情報を掲載するよう努めています。しかし、誤情報が入り込んだり、情報が古くなったりすることもあります。必ずしも正確性を保証するものではありません。合法性や安全性なども保証しません。
            </p>

            <h3 class="privacy-title">損害等の責任について</h3>

            <p class="privacy-text">本サイトに掲載された内容によって生じた損害等の一切の責任を負いかねますので、ご了承ください。
                また本サイトからリンクやバナーなどによって他のサイトに移動された場合、移動先サイトで提供される情報、サービス等について一切の責任も負いません。
                本サイトの保守、火災、停電、その他の自然災害、ウィルスや第三者の妨害等行為による不可抗力によって、本サイトによるサービスが停止したことに起因して利用者に生じた損害についても、何ら責任を負うものではありません。</p>

            <h3 class="privacy-title">本サイトで掲載している画像の著作権や肖像権等について</h3>

            <p class="privacy-text">本サイトで掲載している画像の著作権や肖像権等は、各権利所有者に帰属します。万が一問題がある場合は、お問い合わせよりご連絡いただけますよう宜しくお願い致します。</p>

            <h3 class="privacy-title">無断転載</h3>

            <p class="privacy-text">
                本サイトに存在する、文章や画像、動画等の著作物の情報を無断転載することを禁止します。引用の範囲を超えるものについては、法的処置を行います。転載する際には、お問い合わせよりご連絡いただけますよう宜しくお願い致します。
            </p>

            <p class="privacy-text">2023年3月7日 制定</p>
        </div>


    </section>

    <div id="page_top" class="flex">
        <a href="#"><img src="{{ asset('assets/images/fish hook.png') }}" alt="釣り針" class="topbutton__hook"></a>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
