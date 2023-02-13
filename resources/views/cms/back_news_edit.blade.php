@extends('layouts.news_ly')

@section('title', 'メンバーの編集画面')

@section('menubar')

    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href= "http://localhost/fishing_tokushima/public/cms" >HOME</a></li>
        <li><a href="http://localhost/fishing_tokushima/public/cms/newsEntry">新規登録</a></li>
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

<form action="newsEdit" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th>タイプ: </th><td><input type="text" name="name"
            value="{{$form->name}}"></td></tr>
        <tr><th>タイトル: </th><td><input type="text" name="title"
            value="{{$form->title}}"></td></tr>
        <tr><th>概要: </th><td><input type="text" name="overview"
            value="{{$form->overview}}"></td></tr>
            <tr>
                <th>記事内容：</th>
                <td>
                    <textarea name="content" id="content" cols="50" rows="5" required> {{$form->content}} </textarea>
                </td>
            </tr>
        <tr><th></th><td><input type="submit"value="修正">
            <a href="delete?id={{ $form->id }}">削除</a></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
