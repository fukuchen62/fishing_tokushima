@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', 'ダッシュボード')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')
@endsection

{{-- メイン --}}
@section('content')
    <div>
        <h2> Fish テーブル</h2>
        <ul>
            <li><a href="http://localhost/fishing_tokushima/public/admin/newsshow">HOME</a></li>
            <li><a href="http://localhost/fishing_tokushima/public/admin/newsentry">新規登録</a></li>
        </ul>
    </div>

    <div>
        <h2> Shots テーブル</h2>
        <ul>
            <li><a href="http://localhost/fishing_tokushima/public/admin/newsshow">HOME</a></li>
            <li><a href="http://localhost/fishing_tokushima/public/admin/newsentry">新規登録</a></li>
        </ul>
    </div>

    <div>
        <h2> Spots テーブル</h2>
        <ul>
            <li><a href="http://localhost/fishing_tokushima/public/admin/newsshow">HOME</a></li>
            <li><a href="http://localhost/fishing_tokushima/public/admin/newsentry">新規登録</a></li>
        </ul>
    </div>

    <div>
        <h2> Plans テーブル</h2>
        <ul>
            <li><a href="http://localhost/fishing_tokushima/public/admin/newsshow">HOME</a></li>
            <li><a href="http://localhost/fishing_tokushima/public/admin/newsentry">新規登録</a></li>
        </ul>
    </div>

    <div>
        <h2> News テーブル</h2>
        <ul>
            <li><a href="http://localhost/fishing_tokushima/public/admin/newsshow">HOME</a></li>
            <li><a href="http://localhost/fishing_tokushima/public/admin/newsentry">新規登録</a></li>
        </ul>
    </div>

    <div>
        <h2> Knowledge テーブル</h2>
        <ul>
            <li><a href="http://localhost/fishing_tokushima/public/admin/newsshow">HOME</a></li>
            <li><a href="http://localhost/fishing_tokushima/public/admin/newsentry">新規登録</a></li>
        </ul>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
