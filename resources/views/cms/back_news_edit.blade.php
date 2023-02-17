@extends('layouts.news_ly')

@section('title', 'ニュースの編集画面')

@section('menubar')

    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href="./newsshow">HOME</a></li>
        <li><a href="./newsentry">新規登録</a></li>
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
    <form method="post" action="{{ route('newsedit') }}">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{ $news->id }}">
            <tr>
                <th>カテゴリー名: </th>
                <td><input type="text" name="name" value="{{ $news->name }}" required></td>
            </tr>
            <tr>
                <th>タイトル: </th>
                <td><input type="text" name="title" value="{{ $news->title }}" required></td>
            </tr>
            <tr>
                <th>概要: </th>
                <td><input type="text" name="overview" value="{{ $news->overview }}" required></td>
            </tr>
            <tr>
                <th>詳細内容:</th>
                <td>
                    <textarea name="content" id="content" cols="50" rows="5" required> {{ $news->content }} </textarea>
                </td>
            </tr>
            <tr>
                <th>アイキャッチ画像:</th>
                <td>
                    <input type="text" name="eyecatch" value="{{ $news->eyecatch }}">
                </td>
            </tr>
            <tr>
                <th>表示フラグ:</th>
                <td>
                    <input type="boolean" name="is_show" value="{{ $news->is_show }}">
                </td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit"value="修正">
                    <a href="{{ route('newsremove', ['id' => $news->id]) }}">削除</a>
                </td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
