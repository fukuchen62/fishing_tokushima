@extends('layouts.news_ly')

@section('title', 'ショップの編集画面')

@section('menubar')

    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href="./shopsshow">HOME</a></li>
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
    <form method="post" action="{{ route('shopsedit') }}">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{ $form->id }}">
            <tr>
                <th>店名: </th>
                <td><input type="text" name="name" value="{{ $form->name }}"></td>
            </tr>
            <tr>
                <th>地域ID: </th>
                <td><input type="text" name="city_id" value="{{ $form->city_id }}"></td>
            </tr>
            <tr>
                <th>郵便番号: </th>
                <td><input type="text" name="postal_code" value="{{ $form->postal_code }}"></td>
            </tr>
            <tr>
                <th>住所:</th>
                <td>
                    <input type="text" name="address" value="{{ $form->address }}">
                </td>
            </tr>
            <tr>
                <th>iframe:</th>
                <td>
                    <input type="text" name="iframe" value="{{ $form->iframe }}">
                </td>
            </tr>
            <tr>
                <th>経度: </th>
                <td><input type="text" name="longitude" value="{{ $form->longitude }}"></td>
            </tr>
            <tr>
                <th>緯度: </th>
                <td><input type="text" name="latitude" value="{{ $form->latitude }}"></td>
            </tr>
            <tr>
                <th>電話番号: </th>
                <td><input type="text" name="tel" value="{{ $form->tel }}"></td>
            </tr>
            <tr>
                <th>fax:</th>
                <td>
                    <input type="text" name="fax" value="{{ $form->fax }}">
                </td>
            </tr>
            <tr>
                <th>email: </th>
                <td><input type="text" name="email" value="{{ $form->email }}"></td>
            </tr>
            <tr>
                <th>url: </th>
                <td><input type="text" name="url" value="{{ $form->url }}"></td>
            </tr>
            <tr>
                <th>営業日: </th>
                <td><input type="text" name="service_day" value="{{ $form->service_day }}"></td>
            </tr>
            <tr>
                <th>営業内容:</th>
                <td>
                    <input type="text" name="service" value="{{ $form->service }}">
                </td>
            </tr>
            <tr>
                <th>PR:</th>
                <td>
                    <input type="text" name="pr" value="{{ $form->pr }}">
                </td>
            </tr>
            <tr>
                <th>画像: </th>
                <td><input type="text" name="img" value="{{ $form->img }}"></td>
            </tr>
            <tr>
                <th>備考: </th>
                <td><input type="text" name="memo" value="{{ $form->memo }}"></td>
            </tr>
            <tr>
                <th>表示フラグ:</th>
                <td>
                    <input type="boolean" name="is_show" value="{{ $form->is_show }}">
                </td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit"value="修正">
                </td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
