<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('mypage')}}" method="post">
        <table>
            @csrf

            {{-- @if ($errors->has('msg'))
            <tr>
                <th>ERROR</th>
                <td>{{ $errors -> fist('msg') }}</td>
            </tr>
            @endif --}}

            <tr>
                <th>MESSAGE:</th>

                <td><input type="text" name="spot_id" value="" id=""></td>
                <td><input type="text" name="plan_id" value="" id=""></td>


                {{-- <td><input type="submit" name="spot_id" value="2" id=""></td>
                <td><input type="submit" name="plan_id" value="3" id=""></td> --}}

                <td><input type="submit" value="送信"></td>
            </tr>
        </table>
    </form>

    <p>{{ $msg2 }}</p>
    <p>{{ $msg3 }}</p>

{{-- @php
    print_r($data);
@endphp --}}

{{-- @php
    $spots ="";
@endphp --}}

<h2>釣りスポット</h2>

@if ($spots != "")
    @foreach ($spots as $key => $spot)
    <h3>{{ $key }}</h3>
                <p>{{ $spot->img1 }}</p>
                <p>{{ $spot->name }}</p>
                <p>{{ $spot->overview }}</p>
            <a href="{{ route('spotsinfo', ['id' => $spots[$key]]) }}">リンク</a>
    @endforeach
@endif

<h2>おすすめプラン</h2>

@if ($plans != "")
    @foreach ($plans as $key => $plan)
    <h3>{{ $key }}</h3>
                <p>{{ $plan->eye_catch }}</p>
                <p>{{ $plan->title }}</p>
                <p>{{ $plan->overview }}</p>
            <a href="{{ route('planinfo', ['id' => $plans[$key]]) }}">リンク</a>
    @endforeach
@endif

</body>
</html>
