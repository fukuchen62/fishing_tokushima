@extends('layouts.news_ly')

@section('title', 'ニュースの編集画面')

@section('menubar')

    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href= "http://localhost/fishing_tokushima/public/admin/newsshow" >HOME</a></li>
        <li><a href="http://localhost/fishing_tokushima/public/admin/newsentry">新規登録</a></li>
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
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th>タイプ: </th><td><input type="text" name="name"
            value="{{$form->name}}" required></td></tr>
        <tr><th>タイトル: </th><td><input type="text" name="title"
            value="{{$form->title}}" required></td></tr>
        <tr><th>概要: </th><td><input type="text" name="overview"
            value="{{$form->overview}}" required></td></tr>
            <tr>
                <th>記事内容:</th>
                <td>
                    <textarea name="content" id="content" cols="50" rows="5" required> {{$form->content}} </textarea>
                </td>
            </tr>
            <tr><th>アイキャッチ画像:</th><td>
                <input type="text" name="eyecatch" value="{{$form->eyecatch}}">
            </td></tr>
            <tr><th>表示フラグ:</th><td>
                <input type="boolean" name="is_show" value="{{$form->is_show}}">
            </td></tr>
        <tr><th></th><td><input type="submit"value="修正">
            <!-- <a href="newsremove?id={{ $form->id }}">削除</a></td></tr> -->
                        <a href="{{route('newsremove',['id'=>$form->id])}}">削除</a></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
