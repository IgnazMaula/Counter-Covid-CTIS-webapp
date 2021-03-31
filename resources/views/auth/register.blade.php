<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter-Covid CTIS - login</title>
    <!-- Icon -->
    <link rel="icon" href="images/favicon.webp">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/register.css">

</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="mb-4" src="images/Counter-Covid Logo.png" alt="" width="300">
                <h2>Patient Registration Form</h2>
                <!-- <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required
                    form group has a validation state that can be triggered </p> -->
            </div>

            <div class="row g-3">
                <div class="col-lg-12">
                    <h4 class="mb-3">Please Fill the Registration Form</h4>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="row g-3">
                            {{-- First Name --}}
                            <div class="col-sm-6">
                                <label for="firstName">{{ __('First Name') }}</label>
                                <input type="text" class="form-control" id="firstName" name="name"
                                    placeholder="first name" value="{{ old('firstName') }}" required autofocus>
                                {{-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                            {{-- Last Name --}}
                            <div class="col-sm-6">
                                <label for="lastName">{{ __('Last Name') }}</label>
                                <input type="text" class="form-control" id="lastName" name="lastName"
                                    placeholder="last name" value="{{ old('lastName') }}" required>
                                {{-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                            {{-- Email --}}
                            <div class="col-12">
                                <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" placeholder="youremail@example.com" value="{{ old('email') }}"
                                    required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Password --}}
                            <div class="col-12">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Confirm Password --}}
                            <div class="col-12">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>
                            {{-- Birth Date --}}
                            <div class="col-6 mt-3 pe-5" id="sandbox-container">
                                <label for="birthDate" class="form-label">{{ __('Birth Date') }}</label>
                                <input type="text" class="form-control" id="birthDate" name="birthDate"
                                    placeholder="mm/dd/yyyy" value="{{ old('birthDate') }}" required>
                            </div>
                            {{-- Gender --}}
                            <div class="col-6 mt-3 ps-5">
                                <label for="gender" class="form-label">{{ __('Gender') }}</label>
                                <div class="form-check">
                                    <input id="gender" name="gender" type="radio" class="form-check-input" value="male"
                                        checked="" required="">
                                    <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check">
                                    <input id="gender" name="gender" type="radio" class="form-check-input"
                                        value="female" required="">
                                    <label class="form-check-label">Female</label>
                                </div>
                            </div>

                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-danger btn-lg" type="submit">{{ __('Register Now') }}</button>
                        <br><br>
                        <a href="/">
                            <button class="w-100 btn btn-outline-secondary btn-lg"
                                type="button">{{ __('Back to Main Page') }}</button>
                        </a>
                    </form>
                </div>
            </div>
        </main>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            &copy; 2021 Copyright <strong>Counter-Covid CTIS</strong>
        </footer>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <!-- JQuerry -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <!-- Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <!-- Datepicker -->
    <script>
        $('#sandbox-container input').datepicker({
            autoclose: true
        });

        $('#sandbox-container input').on('show', function(e) {
            console.debug('show', e.date, $(this).data('stickyDate'));

            if (e.date) {
                $(this).data('stickyDate', e.date);
            } else {
                $(this).data('stickyDate', null);
            }
        });

        $('#sandbox-container input').on('hide', function(e) {
            console.debug('hide', e.date, $(this).data('stickyDate'));
            var stickyDate = $(this).data('stickyDate');

            if (!e.date && stickyDate) {
                console.debug('restore stickyDate', stickyDate);
                $(this).datepicker('setDate', stickyDate);
                $(this).data('stickyDate', null);
            }
        });

    </script>

</body>

</html>

{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
