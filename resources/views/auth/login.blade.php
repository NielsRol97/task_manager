@extends('layouts.app')

@section('content')
<div class="auth_wrapper">
    <form action="{{ route('auth.login') }}" method="POST" class="form_container">
        @csrf
        
        <x-form-field 
            inputName="email" 
            inputId="email" 
            inputType="email" 
            inputValue="{{ old('email') }}" 
            labelClass="form_label"
            labelValue="{{ __('E-mailadres:') }}"
            inputClass="form_input @error('email') is-invalid @enderror"
        />
        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
        <x-form-field 
            inputName="password" 
            inputId="password" 
            inputType="password" 
            inputValue="{{ old('password') }}" 
            labelClass="form_label"
            labelValue="{{ __('Wachtwoord:') }}" 
            inputClass="form_input @error('password') is-invalid @enderror"
        />
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
        <div class="form-group row">
            <div class="col-md-6">
                <label for="remember_me" class="form-label">
                    <input type="checkbox" name="remember" id="remember_me" class="form-checkbox">
                    {{ __('Onthoud mij') }}
                </label>
            </div>
        </div>
        
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="button_primary">{{ __('Login') }}</button>
            </div>
        </div>
    </form>
</div>
@endsection
