@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', '入門知識')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>基本知識の編集画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="./knowledgeshow">HOME</a></li>
        <li><a href="./knowledgeentry">新規登録</a></li>
    </ul>

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
        <table class="info edit_info">
            @csrf
            <input type="hidden" name="id" value="{{ $knowledge->id }}">
            <tr>
                <th width="15%"> <span>*</span> カテゴリーID: </th>
                <td><input type="text" name="category_id" value="{{ $knowledge->category_id }}"required></td>
            </tr>
            <tr>
                <th> <span>*</span> タイトル: </th>
                <td><input type="text" name="title" value="{{ $knowledge->title }}"required></td>
            </tr>
            <tr>
                <th>概要: </th>
                <td>
                    <textarea name="overview" cols="50" rows="5" required> {{ $knowledge->overview }} </textarea>
                </td>
            </tr>
            <tr>
                <th>記事の内容：</th>
                <td>
                    <textarea name="content" id="content" cols="50" rows="5"> {{ $knowledge->content }} </textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> サムネ画像：</th>
                <td>
                    <input type="text" name="thumbnail" value="{{ $knowledge->thumbnail }}"required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 表示フラグ：</th>
                <td>
                    <input type="text" name="is_show" value="{{ $knowledge->is_show }}"required>
                </td>
            </tr>
        </table>
        <div class="change_btn">
            <input type="submit" value="修正" class="submit_btn">
            <a href="{{ route('knowledgeremove', ['id' => $knowledge->id]) }}" class="delete_btn">削除</a>
        </div>
    </form>
@endsection

@section('footer')
    copyright 2023 tuttoku.
@endsection
