@extends('layouts.news_ly')

@section('title', '管理画面')


@section('menubar')
    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <div>
        <h2> Fish テーブル</h2>
    <ul>
        <li><a href= "http://localhost/fishing_tokushima/public/admin/newsshow" >一覧（修正・削除）</a></li>
        <li><a href= "http://localhost/fishing_tokushima/public/admin/newsentry">新規登録</a></li>
    </ul>
    </div>

    <div>
        <h2> Shots テーブル</h2>
    <ul>
        <li><a href= "http://localhost/fishing_tokushima/public/admin/newsshow" >一覧（修正・削除）</a></li>
        <li><a href= "http://localhost/fishing_tokushima/public/admin/newsentry">新規登録</a></li>
    </ul>
</div>

<div>
    <h2> Spots テーブル</h2>
<ul>
    <li><a href= "http://localhost/fishing_tokushima/public/admin/newsshow" >一覧（修正・削除）</a></li>
    <li><a href= "http://localhost/fishing_tokushima/public/admin/newsentry">新規登録</a></li>
</ul>
</div>

<div>
    <h2> Plans テーブル</h2>
<ul>
    <li><a href= "http://localhost/fishing_tokushima/public/admin/newsshow" >一覧（修正・削除）</a></li>
    <li><a href= "http://localhost/fishing_tokushima/public/admin/newsentry">新規登録</a></li>
</ul>
</div>

<div>
    <h2> News テーブル</h2>
<ul>
    <li><a href= "http://localhost/fishing_tokushima/public/admin/newsshow" >一覧（修正・削除）</a></li>
    <li><a href= "http://localhost/fishing_tokushima/public/admin/newsentry">新規登録</a></li>
</ul>
</div>

<div>
    <h2> Knowledge テーブル</h2>
<ul>
    <li><a href= "http://localhost/fishing_tokushima/public/admin/knowledgeshow" >一覧（修正・削除）</a></li>
    <li><a href= "http://localhost/fishing_tokushima/public/admin/knowledgeentry">新規登録</a></li>

</ul>
</div>







@endsection

{{-- @section('content')
    <table border="1">
    <tr><th>ID</th><th>カテゴリー名前</th><th>タイトル</th><th>修正</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->title}}</td>
                <!-- <td><a href="admin/newsedit?id={{ $item->id }}">編集</a></td> -->
            <td><a href="{{route('newsedit',['id'=>$item->id])}}">編集</a></td>
        </tr>
    @endforeach
    </table>
@endsection --}}


@section('footer')
copyright 2020 tuyano.
@endsection
