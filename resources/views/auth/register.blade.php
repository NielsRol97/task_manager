@extends('layouts.app')

@section('content')
<div class="auth_wrapper">
    <form action="{{ route('auth.register') }}" method="POST" class="form_container">
        @csrf 
        <x-form-field 
            inputName="name" 
            inputId="name" 
            inputType="text" 
            inputValue="{{ old('name') }}" 
            labelClass="form_label"
            labelValue="{{__('Gebruikersnaam:')}}" 
            inputClass="form_input"
        />

        <x-form-field 
            inputName="email" 
            inputId="email" 
            inputType="email" 
            inputValue="{{ old('email') }}" 
            labelValue="{{__('E-mailadres:')}}" 
            labelClass="form_label" 
            inputClass="form_input"
        />

        <x-form-field 
            inputName="password" 
            inputId="password" 
            inputType="password" 
            inputValue="{{ old('password') }}" 
            labelClass="form_label"
            labelValue="{{__('Wachtwoord:')}}" 
            inputClass="form_input"
        />

        <x-form-field 
            inputName="password_confirmation" 
            inputId="password_confirmation" 
            inputType="password" 
            inputValue="{{ old('password_confirmation') }}" 
            labelClass="form_label" 
            labelValue="{{__('Wachtwoord bevestigen')}}"
            inputClass="form_input"
        />

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="button_primary">{{ __('Registreren') }}</button>
            </div>
        </div>
    </form>
</div>
@endsection
