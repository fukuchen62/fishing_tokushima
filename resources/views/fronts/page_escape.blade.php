{{-- <!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>避難場所一覧</title>
</head> --}}

@extends('layouts.layout_front')

@section('description', 'プライバシーポリシーページ表示')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '避難場所一覧')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection

<body>

    @section('content')

    <section class="titlesection">
        <div class="titlesection__box">
            <h1 class="pagetitle">ページタイトル</h1>
        </div>
    </section>

    <section class="section">

        <h2 class="section__box--title ">避難場所一覧</h2>

        <table>
            <tr>
                <th>避難場所一覧</th>
            </tr>
            @foreach($evacuations as $item)
            <tr>
                <td>{{$item->getData()}}</td>
            </tr>
            @endforeach
        </table>
    </section>

    <div id="page_top" class="flex">
        <a href="#"><img src="{{ asset('assets/images/fish hook.png') }}" alt="釣り針" class="topbutton__hook"></a>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection

    {{-- <h1>避難場所一覧</h1>
    <table>
        <tr>
            <th>避難場所一覧</th>
        </tr>
        @foreach($evacuations as $item)
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
        @endforeach
    </table> --}}
</body>

</html>
