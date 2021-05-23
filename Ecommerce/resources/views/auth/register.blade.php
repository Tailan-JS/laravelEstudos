@extends('layouts.main')
@section('content')
<div class="row">
    <div class="card col l6 push-l3" style="padding: 15px; margin: 25px;">
        <p class="card-title center">Dados de Cadastro</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input-field">
                  <label for="name" value="{{ __('Name') }}" />Nome</label>
                <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

             <div class="input-field">
                <label for="email" value="{{ __('Email') }}" />E-mail</label>
                <input id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="input-field">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password"  type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="input-field">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation"  type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </label>
                </div>
            @endif

            <div class="col l6 push-l6">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <input type="submit" name="submit" value="{{ __('Register') }}" class="btn green lighten-1" style="margin-left: 20px;">
            </div>

        </form>
    </div>
</div>



@endsection