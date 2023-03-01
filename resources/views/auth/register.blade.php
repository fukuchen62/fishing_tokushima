@extends('layouts.layout_auth')

@section('content')
    <div class="login-form">

        <h2 class="card-header">ユーザ登録</h2>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="input-item mb20">
                    <label for="name" class="item-label">お名前</label>

                    <div class="input-box">
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required
                            autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="input-item mb20">
                    <label for="email" class="item-label">メールアドレス</label>

                    <div class="input-box">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required
                            autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="input-item mb20">
                    <label for="password" class="item-label">パスワード</label>

                    <div class="input-box">
                        <input id="password" type="password" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="input-item mb20">
                    <label for="password-confirm" class="item-label">パスワード確定</label>

                    <div class="input-box">
                        <input id="password-confirm" type="password" required autocomplete="new-password">
                    </div>
                </div>

                <div class="input-item mb20">
                    <div class="button-box">
                        <button type="submit" class="btn btn-primary">
                            登　録
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
