@extends('layouts.news_ly')

@section('title', 'スポットの編集画面')

@section('menubar')

    @parent
    {{-- 以下はshowのところにはめ込む --}}
    <ul>
        <li><a href="./spotsshow">HOME</a></li>
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

    <form method="post" action="{{ route('spotsedit') }}">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{ $spot->id }}">
            <tr>
                <th>概要: </th>
                <td><input type="text" name="overview" value="{{ $spot->overview }}"></td>
            </tr>
            <tr>
                <th>画像1: </th>
                <td><input type="text" name="img1" value="{{ $spot->img1 }}"></td>
            </tr>
            <tr>
                <th>画像2: </th>
                <td><input type="text" name="img2" value="{{ $spot->img2 }}"></td>
            </tr>
            <tr>
                <th>画像3:</th>
                <td>
                    <input type="text" name="img3" value="{{ $spot->img4 }}">
                </td>
            </tr>
            <tr>
                <th>画像4:</th>
                <td>
                    <input type="boolean" name="img4" value="{{ $spot->img4 }}">
                </td>
            </tr>
            <tr>
                <th>画像5: </th>
                <td><input type="text" name="img5" value="{{ $spot->img5 }}"></td>
            </tr>
            <tr>
                <th>魚ID: </th>
                <td><input type="text" name="fish_id" value="{{ $spot->fish_id }}"></td>
            </tr>
            <tr>
                <th>金額: </th>
                <td><input type="text" name="mony" value="{{ $spot->mony }}"></td>
            </tr>
            <tr>
                <th>ショップID:</th>
                <td>
                    <input type="boolean" name="shop_id" value="{{ $spot->shop_id }}">
                </td>
            </tr>
            <tr>
                <th>体験プランID: </th>
                <td><input type="text" name="plan_id" value="{{ $spot->plan_id }}"></td>
            </tr>
            <tr>
                <th>避難場所ID: </th>
                <td><input type="text" name="evacuation_id" value="{{ $spot->evacuation_id }}"></td>
            </tr>
            <tr>
                <th>駐車場ID: </th>
                <td><input type="text" name="parking_id" value="{{ $spot->parking_id }}"></td>
            </tr>
            <tr>
                <th>病院ID:</th>
                <td>
                    <input type="text" name="hospital_id" value="{{ $spot->hospital_id }}">
                </td>
            </tr>
            <tr>
                <th>スーパーマーケットID:</th>
                <td>
                    <input type="boolean" name="supermarket_id" value="{{ $spot->supermarket_id }}">
                </td>
            </tr>
            <tr>
                <th>飲食店ID: </th>
                <td><input type="text" name="restaurant_id" value="{{ $spot->restaurant_id }}"></td>
            </tr>
            <tr>
                <th>その他ID: </th>
                <td><input type="text" name="other_id" value="{{ $spot->other_id }}"></td>
            </tr>
            <tr>
                <th>表示フラグ:</th>
                <td>
                    <input type="boolean" name="is_show" value="{{ $spot->is_show }}">
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
