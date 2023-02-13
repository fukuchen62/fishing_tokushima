@extends('layouts.news_ly')

@section('title', 'ニュース一覧')


@section('menubar')
    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href= "http://localhost/fishing_tokushima/public/news_show" >HOME</a></li>
        <li><a href= "http://localhost/fishing_tokushima/public/cms/news_entry">新規登録</a></li>
        <li>その他</li>
    </ul>
@endsection

@section('content')
    <table border="1">
    <tr><th>修正</th><th>ID</th><th>タイプ</th><th>タイトル</th></tr>
    @foreach ($items as $item)
        <tr>
            <td><a href="cms/news_edit?id={{ $item->id }}">編集</a></td>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->title}}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
