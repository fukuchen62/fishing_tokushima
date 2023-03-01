@extends('layouts.layout_auth')

@section('content')
    <div class="login-form">

        <h2 class="card-header">ログイン画面</h2>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input-item mb20">
                    <label for="email" class="item-label">メールアドレス</label>

                    <div class="input-box">
                        <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                            autofocus>

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
                        <input id="password" type="password" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="input-item mb20">
                    <div class="remember-box">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">
                            パスワードを覚える
                        </label>

                    </div>
                </div>

                <div class="input-item mb20">
                    <div class="button-box">
                        <button type="submit" class="btn btn-primary">
                            ログイン
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                パスワード忘れ
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
