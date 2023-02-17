@extends('layouts.news_ly')

@section('title', '基本知識の編集画面')

@section('menubar')

    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href="./knowledgeshow">HOME</a></li>
        <li><a href="./knowledgeentry">新規登録</a></li>

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
        <table>
            @csrf
            <input type="hidden" name="id" value="{{ $knowledge->id }}">
            <tr>
                <th>カテゴリーID: </th>
                <td><input type="text" name="category_id" value="{{ $knowledge->category_id }}"required></td>
            </tr>
            <tr>
                <th>タイトル: </th>
                <td><input type="text" name="title" value="{{ $knowledge->title }}"required></td>
            </tr>
            <tr>
                <th>概要: </th>
                <td><input type="text" name="overview" value="{{ $knowledge->overview }}"required></td>
            </tr>
            <tr>
                <th>記事の内容：</th>
                <td>
                    <textarea name="content" id="content" cols="50" rows="5"> {{ $knowledge->content }} </textarea>
                </td>
            </tr>
            <tr>
                <th>サムネ画像：</th>
                <td>
                    <input type="text" name="thumbnail" value="{{ $knowledge->thumbnail }}"required>
                </td>
            </tr>
            <tr>
                <th>表示フラグ：</th>
                <td>
                    <input type="text" name="is_show" value="{{ $knowledge->is_show }}"required>
                </td>
            </tr>

            <tr>
                <th></th>
                <td><input type="submit"value="修正">
                    <a href="{{ route('knowledgeremove', ['id' => $knowledge->id]) }}">削除</a>
                </td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2023 tuttoku.
@endsection
