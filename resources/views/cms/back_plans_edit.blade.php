@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', '体験プラン')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>体験プランの編集画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="./plansshow">HOME</a></li>
        <li><a href="./plansentry">新規登録</a></li>
    </ul>

    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('plansedit') }}">
        <table class="info edit_info">
            @csrf
            <input type="hidden" name="id" value="{{ $plan->id }}">
            <tr>
                <th width="15%"> <span>*</span> タイトル: </th>
                <td><input type="text" name="title" value="{{ $plan->title }}" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 概要:</th>
                <td>
                    <textarea name="overview" cols="50" rows="5" required>{{ $plan->overview }}</textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 難易度: </th>
                <td>
                    <input type="number" name="level" value="{{ $plan->level }}" required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 地域ID:</th>
                <td>
                    <input type="number" name="city_id" value="{{ $plan->city_id }}" required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 釣りスポットID:</th>
                <td>
                    <input type="number" name="spot_id" value="{{ $plan->spot_id }}" required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 魚ID:</th>
                <td>
                    <input type="number" name="fish_id" value="{{ $plan->fish_id }}" required>
                </td>
            </tr>
            <tr>
                <th>釣り方のフロー:</th>
                <td>
                    <textarea name="flow" id="flow" cols="50" rows="5"> {{ $plan->flow }} </textarea>
                </td>
            </tr>
            <tr>
                <th>アイキャッチ:</th>
                <td>
                    <input type="text" name="eye_catch" value="{{ $plan->eye_catch }}">
                </td>
            </tr>
            <tr>
                <th>サムネイル:</th>
                <td>
                    <input type="text" name="thumbnail" value="{{ $plan->thumbnail }}">
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 表示フラグ:</th>
                <td>
                    <input type="boolean" name="is_show" value="{{ $plan->is_show }}" required>
                </td>
            </tr>
        </table>
        <div class="change_btn">
            @php
                $title = $plan->title;
                $url = route('plansremove', ['id' => $plan->id]);
            @endphp
            <input type="submit"value="修正" class="submit_btn" onclick="return saveComfirm('{{ $title }}')">

            <input type="button"value="削除" class="delete_btn"
                onclick="return deleteComfirm('{{ $title }}','{{ $url }}')">

            {{-- <a href="{{ route('plansremove', ['id' => $plan->id]) }}" class="delete_btn">削除</a> --}}
        </div>
    </form>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
