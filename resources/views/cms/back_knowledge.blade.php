@extends('layouts.news_ly')

@section('title', '基礎知識一覧')


@section('menubar')
    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href= "http://localhost/fishing_tokushima/public/admin/knowledgeshow" >HOME</a></li>
        <li><a href= "http://localhost/fishing_tokushima/public/admin/knowledgeentry">新規登録</a></li>

    </ul>
@endsection

@section('search')

    {{-- 検索条件入力フォーム --}}
    <form action="search" method="get">
        検索条件 :&nbsp;<input type="text" name="s" id="s"><br>
        <input type="submit" value="検索">
    </form>

@endsection

@section('content')
    <table border="1">
    <tr><th>ID</th><th>カテゴリーID</th><th>タイトル</th><th>概要</th><th>修正</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->category_id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->overview}}</td>
            {{-- <td><a href="cms/knowledge_Edit?id={{ $item->id }}">編集</a></td> --}}
            <td><a href="{{route('knowledgeedit',['id'=>$item->id])}}">編集</a></td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2023 tuttoku.
@endsection
