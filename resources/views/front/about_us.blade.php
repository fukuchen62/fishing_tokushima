@extends('layouts.front_base')

@section('title', '私たちについて')


{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
@endsection

{{-- メイン --}}
@section('main')
    <main class="main">
        <div class="key_visual_wrapper">
            <img src="{{ asset('img/about_top_img.jpg') }}" alt="" class="key_visual">
            <h2 class="page_title">私たちについて</h2>
        </div>
        <span class="spacer_sm"></span>
        <div class="base_container">
            <div class="base_wrapper">
                <div class="aboutus_container">
                    <!-- <section class="aboutus"> -->
                    <section class="aboutus_wrapper">
                        <h3 class="heading">私たちとは</h3>
                        <div class="aboutus_wrapper_box">
                            <img class="aboutus_image" src="{{ asset('img/member.jpg') }}" alt="" srcset="">
                            <p class="aboutus_paragraph">
                                私たちは徳島県のQLiPプログラミングスクールにて2022年2月から8月の間開講された職業訓練「Webアプリケーション制作科第1期」の受講生です。本サイトはその講座の最終制作として私達が制作したものです。<br>
                            </p>
                        </div>
                    </section>
                    <section class="aboutus_wrapper">
                        <h3 class="heading">プロジェクトについて</h3>
                        <div class="aboutus_wrapper_box aboutus_wrapper_box_ourprofile">
                            <img class="aboutus_image" src="{{ asset('img/menber02.jpeg') }}" alt="" srcset="">
                            <p class="aboutus_paragraph">
                                コンセプトは「徳島県のITを盛り上げる」。コマンドのショートカットキーという身近なものに注目し、業務効率化のためにそれを使いこなせるよう練習できるサイトを本サイトは目指しています。また一風変わったアプローチによってより多くのユーザーの目に届くことを目標としています。
                            </p>
                        </div>
                    </section>
                    <!-- </section> -->
                </div>
            </div>
        </div>
        <!-- .base_container -->
    </main>
@endsection

@section('js')
    <script src="{{ asset('js/audio_off.js') }}"></script>
@endsection
