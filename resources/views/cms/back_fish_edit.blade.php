@extends('layouts.news_ly')

@section('title', '釣れる魚の編集画面')

@section('menubar')

    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href="./fishshow">HOME</a></li>
        <li><a href="./fishentry">新規登録</a></li>
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

    <form method="post" action="{{ route('fishedit') }}">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{ $fish->id }}">
            <tr>
                <th>魚の名前(普通の呼び方): </th>
                <td><input type="text" name="name" value="{{ $fish->name }}"required></td>
            </tr>
            <tr>
                <th>魚の名前(正式名称): </th>
                <td><input type="text" name="formal_name" value="{{ $fish->formal_name }}"></td>
            </tr>
            <tr>
                <th>詳細説明: </th>
                <td><input type="text" name="detail" value="{{ $fish->detail }}"required></td>
            </tr>
            <tr>
                <th>注意事項: </th>
                <td><input type="text" name="warning" value="{{ $fish->detail }}"></td>
            </tr>
            <tr>
                <th>食べ方1: </th>
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
                <td><input type="text" name="cooking_img1" value="{{ $fish->cooking_img1 }}"required></td>
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
                <th>釣り方: </th>
                <td><input type="text" name="method" value="{{ $fish->method }}" required></td>
            </tr>
            <tr>
                <th>釣れる月: </th>
                <td><input type="text" name="month" value="{{ $fish->month }}"></td>
            </tr>
            <tr>
                <th>難易度: </th>
                <td><input type="number" name="level" value="{{ $fish->level }}"></td>
            </tr>
            <tr>
                <th>釣りスポット: </th>
                <td><input type="text" name="spot_id" value="{{ $fish->spot_id }}"></td>
            </tr>
            <tr>
                <th>魚の画像1: </th>
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
                <td><input type="text" name="plan_id" value="{{ $fish->plan_id }}" required></td>
            </tr>
            <tr>
                <th>備考欄: </th>
                <td><input type="text" name="memo" value="{{ $fish->memo }}"></td>
            </tr>
            <tr>
                <th>表示フラグ：</th>
                <td>
                    <input type="boolean" name="is_show" value="{{ $fish->is_show }}"required>
                </td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit"value="修正">
                    <a href="{{ route('fishremove', ['id' => $fish->id]) }}">削除</a>
                </td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2023 tuttoku.
@endsection
