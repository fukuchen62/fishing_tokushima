@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', '魚')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>徳島で釣れる魚の編集画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="./fishshow">HOME</a></li>
        <li><a href="./fishentry">新規登録</a></li>
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

    <form method="post" action="{{ route('fishedit') }}">
        <table class="info edit_info">
            @csrf
            <input type="hidden" name="id" value="{{ $fish->id }}">
            <tr>
                <th width="20%"> <span>*</span> 魚の名前(普通の呼び方): </th>
                <td><input type="text" name="name" value="{{ $fish->name }}"required></td>
            </tr>
            <tr>
                <th>魚の名前(正式名称): </th>
                <td><input type="text" name="formal_name" value="{{ $fish->formal_name }}"></td>
            </tr>
            <tr>
                <th> <span>*</span> 詳細説明: </th>
                <td>
                    <textarea name="detail" cols="50" rows="5" required> {{ $fish->detail }} </textarea>
                </td>
            </tr>
            <tr>
                <th>保存方法: </th>
                <td>
                    <textarea name="keep" cols="50" rows="5"> {{ $fish->keep }} </textarea>
            </tr>
            <tr>
                <th> <span>*</span> 食べ方1: </th>
                <td><input type="text" name="cooking1" value="{{ $fish->cooking1 }}" required></td>
            </tr>
            <tr>
                <th>食べ方2: </th>
                <td><input type="text" name="cooking2" value="{{ $fish->cooking2 }}"></td>
            </tr>
            <tr>
                <th>食べ方3: </th>
                <td><input type="text" name="cooking3" value="{{ $fish->cooking3 }}"></td>
            </tr>
            <tr>
                <th>食べ方の写真1: </th>
                <td><input type="text" name="cooking_img1" value="{{ $fish->cooking_img1 }}"></td>
            </tr>
            <tr>
                <th>食べ方の写真2: </th>
                <td><input type="text" name="cooking_img2" value="{{ $fish->cooking_img2 }}"></td>
            </tr>
            <tr>
                <th>食べ方の写真3: </th>
                <td><input type="text" name="cooking_img3" value="{{ $fish->cooking3 }}"></td>
            </tr>
            <tr>
                <th> <span>*</span> 釣り方: </th>
                <td><input type="text" name="method" value="{{ $fish->method }}" required></td>
            </tr>
            <tr>
                <th>釣れる月: </th>
                <td><input type="text" name="month" value="{{ $fish->month }}"></td>
            </tr>
            <tr>
                <th> <span>*</span> 難易度: </th>
                <td><input type="number" name="level" value="{{ $fish->level }}" required></td>
            </tr>
            <tr>
                <th>釣りスポットID: </th>
                <td><input type="text" name="spot_id" value="{{ $fish->spot_id }}"></td>
            </tr>
            <tr>
                <th> <span>*</span> 魚の画像1: </th>
                <td><input type="text" name="fish_img1" value="{{ $fish->fish_img1 }}"required></td>
            </tr>
            <tr>
                <th>魚の画像2: </th>
                <td><input type="text" name="fish_img2" value="{{ $fish->fish_img2 }}"></td>
            </tr>
            <tr>
                <th>魚の画像3: </th>
                <td><input type="text" name="fish_img3" value="{{ $fish->fish_img3 }}"></td>
            </tr>
            <tr>
                <th>おすすめプラン: </th>
                <td><input type="text" name="plan_id" value="{{ $fish->plan_id }}"></td>
            </tr>
            <tr>
                <th>備考欄: </th>
                <td><input type="text" name="memo" value="{{ $fish->memo }}"></td>
            </tr>
            <tr>
                <th> <span>*</span> 表示フラグ：</th>
                <td>
                    <input type="boolean" name="is_show" value="{{ $fish->is_show }}"required>
                </td>
            </tr>
        </table>

        <div class="change_btn">
            @php
                $title = $fish->name;
                $url = route('fishremove', ['id' => $fish->id]);
            @endphp
            <input type="submit"value="修正" class="submit_btn" onclick="return saveComfirm('{{ $title }}')">

            <input type="button"value="削除" class="delete_btn"
                onclick="return deleteComfirm('{{ $title }}','{{ $url }}')">
        </div>

    </form>
@endsection

@section('footer')
    copyright 2023 tuttoku.
@endsection
