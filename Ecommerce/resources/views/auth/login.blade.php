@extends('layouts.main')
@section('content')
<div class="row">
    <div class="card col l6 push-l3" style="padding: 10px; margin: 25px;">
        <h4 class="card-title center">Dados de Login</h4>
        <form method="POST" action="{{route('login')}}" >
            @csrf
            <div class="input-field">
                <label for="email"  value="{{ __('Email') }}">E-mail</label>
                <input type="email" name="email" id="email" :value="old('email')" required autofocus>
            </div>
            <div class="input-field">
                <label for="password" value="{{ __('Password') }}">Senha</label>
                <input type="password" id="password" name="password" required autocomplete="current-password">
            </div>

             <div >
                <label for="remember_me" class="flex items-center">
                    <p>
                       <label>
                        <input type="checkbox" />
                        <span>{{ __('Remember me') }}</span>
                      </label>
                    </p>
                </label>
            </div>


            <div class="col l12 push-l5">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 " href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                    <input type="submit" value="{{ __('Log in') }}" name="submit" class="btn green lighten-1">
                     

            </div>
        </form>
    </div>

</div>


@endsection