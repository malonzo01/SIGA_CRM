@extends('layouts.auth')

@section('content')
    <style>
        h4.title-group {
            border-bottom: 1px dashed;
            color: #0F4690;
            font-weight: 600;
            margin-bottom: 5px;
            padding-bottom: 5px;
            padding-top: 20px;
        }

        .form-control,
        .form-select,
        input#vin {
            border: 1px solid #ced4da;
            border-radius: 15px;
            color: #8c8c8c;
            color: var(--gray-text);
            font-size: 12px;
            height: 30px;
            padding: 2px 10px;
        }

        @media (min-width: 320px) and (max-width: 480px) {

            .row .form-group-design {
                width: 50%;
            }

        }
    </style>
    <div class="container">
        <section class="section register d-flex flex-column align-items-center justify-content-center py-4 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center py-4">
                            <a href="index.php" class="logo d-flex align-items-center w-auto">
                                <img src="{{ url('img/logo.png') }}" alt="{{ config('app.name', 'Laravel') }}">
                                <span class="d-none d-lg-block">{{ config('app.name', 'Laravel') }}</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">{{ __('Recover password')}}</h5>
                                </div>
                                <div class="mb-4 text-sm text-gray-600">
                                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                </div>

                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <x-validation-errors class="mb-4" />

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="block">
                                        <x-label for="email" value="{{ __('Email') }}" />
                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                            :value="old('email')" required autofocus autocomplete="username" />
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary w-100">{{ __('Password Reset Link') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
