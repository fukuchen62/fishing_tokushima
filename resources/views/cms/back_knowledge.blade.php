@extends('layouts.news_ly')

@section('title', '基礎知識一覧')


@section('menubar')
    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href= "http://localhost/fishing_tokushima_bkp0210/public/knowledge_Show" >HOME</a></li>
        <li><a href= "http://localhost/fishing_tokushima_bkp0210/public/cms/knowledge_Entry">新規登録</a></li>
        <li>その他</li>
    </ul>
@endsection

@section('content')
    <table border="1">
    <tr><th>修正</th><th>ID</th><th>カテゴリーID</th><th>タイトル</th><th>概要</th></tr>
    @foreach ($items as $item)
        <tr>
            <td><a href="cms/knowledge_Edit?id={{ $item->id }}">編集</a></td>
            <td>{{$item->id}}</td>
            <td>{{$item->category_id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->overview}}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2023 tuttoku.
@endsection
