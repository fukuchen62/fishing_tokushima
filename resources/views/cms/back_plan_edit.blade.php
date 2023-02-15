@extends('layouts.news_ly')

@section('title', 'プランの編集画面')

@section('menubar')

    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href="http://localhost/fishing_tokushima/public/admin/planshow">HOME</a></li>
        <li><a href="http://localhost/fishing_tokushima/public/admin/planentry">新規登録</a></li>
        <li>その他</li>
    </ul>
@endsection

@section('content')
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- <form action="admin/newsedit" method="post"> -->
    <form method="post" action="{{ route('planedit') }}">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{ $form->id }}">
            <tr>
                <th>タイトル: </th>
                <td><input type="text" name="title" value="{{ $form->title }}" required></td>
            </tr>
            <tr>
                <th>難易度:</th>
                <td>
                    <textarea name="number" id="number" cols="50" rows="5" required> {{ $form->number }} </textarea>
                </td>
            </tr>
            <tr>
                <th>概要: </th>
                <td><input type="overview" name="overview" value="{{ $form->overview }}" required></td>
            </tr>
            <tr>
                <th>地域・市町村:</th>
                <td>
                    <input type="number" name="city_id" value="{{ $form->city_id }}">
                </td>
            </tr>
            <tr>
                <th>釣りスポットID:</th>
                <td>
                    <input type="number" name="spot_id" value="{{ $form->spot_id }}">
                </td>
            </tr>
            <tr>
                <th>魚ID:</th>
                <td>
                    <input type="number" name="fish_id" value="{{ $form->fish_id }}">
                </td>
            </tr>
            <tr>
                <th>釣り方のフロー:</th>
                <td>
                    <textarea name="flow" id="flow" cols="50" rows="5" required> {{ $form->flow }} </textarea>
                </td>
            </tr>
            <tr>
                <th>アイキャッチ:</th>
                <td>
                    <input type="text" name="eye_catch" value="{{ $form->eye_catch }}">
                </td>
            </tr>
            <tr>
                <th>サムネイル:</th>
                <td>
                    <input type="text" name="thumbnail" value="{{ $form->thumbnail }}">
                </td>
            </tr>
            <tr>
                <th>表示フラグ:</th>
                <td>
                    <input type="boolean" name="is_show" value="{{ $form->is_show }}">
                </td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit"value="修正">

        </table>
    </form>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
