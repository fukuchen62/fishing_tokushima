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

    {{-- <form action="fish_Edit" method="post"> --}}
    <form method="post" action="{{ route('fishedit') }}">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{ $form->id }}">
            <tr>
                <th>魚の名前(普通の呼び方): </th>
                <td><input type="text" name="name" value="{{ $form->name }}"required></td>
            </tr>
            <tr>
                <th>魚の名前(正式名称): </th>
                <td><input type="text" name="formal_name" value="{{ $form->formal_name }}"></td>
            </tr>
            <tr>
                <th>詳細説明: </th>
                <td><input type="text" name="detail" value="{{ $form->detail }}"required></td>
            </tr>
            <tr>
                <th>注意事項: </th>
                <td><input type="text" name="warning" value="{{ $form->detail }}"></td>
            </tr>
            <tr>
                <th>食べ方1: </th>
                <td><input type="text" name="cooking1" value="{{ $form->cooking1 }}" required></td>
            </tr>
            <tr>
                <th>食べ方2: </th>
                <td><input type="text" name="cooking2" value="{{ $form->cooking2 }}"></td>
            </tr>
            <tr>
                <th>食べ方3: </th>
                <td><input type="text" name="cooking3" value="{{ $form->cooking3 }}"></td>
            </tr>
            <tr>
                <th>食べ方の写真1: </th>
                <td><input type="text" name="cooking_img1" value="{{ $form->cooking_img1 }}"required></td>
            </tr>
            <tr>
                <th>食べ方の写真2: </th>
                <td><input type="text" name="cooking_img2" value="{{ $form->cooking_img2 }}"></td>
            </tr>
            <tr>
                <th>食べ方の写真3: </th>
                <td><input type="text" name="cooking_img3" value="{{ $form->cooking3 }}"></td>
            </tr>
            <tr>
                <th>釣り方: </th>
                <td><input type="text" name="method" value="{{ $form->method }}" required></td>
            </tr>
            <tr>
                <th>釣れる月: </th>
                <td><input type="text" name="month" value="{{ $form->month }}"></td>
            </tr>
            <tr>
                <th>難易度: </th>
                <td><input type="number" name="level" value="{{ $form->level }}"></td>
            </tr>
            <tr>
                <th>釣りスポット: </th>
                <td><input type="text" name="spot_id" value="{{ $form->spot_id }}"></td>
            </tr>
            <tr>
                <th>魚の画像1: </th>
                <td><input type="text" name="fish_img1" value="{{ $form->fish_img1 }}"required></td>
            </tr>
            <tr>
                <th>魚の画像2: </th>
                <td><input type="text" name="fish_img2" value="{{ $form->fish_img2 }}"></td>
            </tr>
            <tr>
                <th>魚の画像3: </th>
                <td><input type="text" name="fish_img3" value="{{ $form->fish_img3 }}"></td>
            </tr>
            <tr>
                <th>おすすめプラン: </th>
                <td><input type="text" name="plan_id" value="{{ $form->plan_id }}" required></td>
            </tr>
            <tr>
                <th>備考欄: </th>
                <td><input type="text" name="memo" value="{{ $form->memo }}"></td>
            </tr>
            <tr>
                <th>表示フラグ：</th>
                <td>
                    <input type="boolean" name="is_show" value="{{ $form->is_show }}"required>
                </td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit"value="修正">
                    {{-- <a href="fish_delete?id={{ $form->id }}">削除</a></td></tr> --}}
                    <a href="{{ route('fishremove', ['id' => $form->id]) }}">削除</a>
                </td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2023 tuttoku.
@endsection
