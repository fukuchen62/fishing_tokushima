@extends('layouts.news_ly')

@section('title', '基本知識の編集画面')

@section('menubar')

    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href= "http://localhost/fishing_tokushima/public/admin/knowledgeshow" >HOME</a></li>
        <li><a href="http://localhost/fishing_tokushima/public/admin/knowledgeentry">新規登録</a></li>

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
    <form method="post" action="{{ route('knowledgeedit') }}">
{{-- <form action="knowledge_edit" method="post"> --}}
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th>カテゴリーID: </th><td><input type="text" name="category_id"
            value="{{$form->category_id}}"required></td></tr>
        <tr><th>タイトル: </th><td><input type="text" name="title"
            value="{{$form->title}}"required></td></tr>
        <tr><th>概要: </th><td><input type="text" name="overview"
            value="{{$form->overview}}"required></td></tr>
            <tr>
                <th>記事の内容：</th>
                <td>
                    <textarea name="content" id="content" cols="50" rows="5" > {{$form->content}} </textarea>
                </td>
            </tr>
            <tr>
                <th>サムネ画像：</th>
                <td>
                    <input type="text" name="thumbnail"
                    value="{{$form->thumbnail}}"required>
                </td>
            </tr>
            <tr>
                <th>表示フラグ：</th>
                <td>
                    <input type="text" name="is_show"
                    value="{{$form->is_show}}"required>
                </td>
            </tr>

        <tr><th></th><td><input type="submit"value="修正">
            {{-- <a href="knowledge_delete?id={{ $form->id }}">削除</a></td></tr> --}}
            <a href="{{route('knowledgeremove',['id'=>$form->id])}}">削除</a></td></tr>       </table>
    </form>
@endsection

@section('footer')
copyright 2023 tuttoku.
@endsection
