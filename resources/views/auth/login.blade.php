@section('title', 'Login')
<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    @include('layouts.dash.head')

    <body class="layout-login-centered-boxed">

        <div class="layout-login-centered-boxed__form card">
            <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
                <a href="/"
                   class="navbar-brand flex-column mb-2 align-items-center mr-0"
                   style="min-width: 0">
                    <img src="{{ asset('img/logo.png') }}" alt="site-logo" width="250px" />
                </a>
                <p class="m-0">Login to access your account</p>
            </div>
            <form action="{{ route('login') }}"
                  method="post"
                  novalidate>
                  @csrf
                <div class="form-group">
                    <label class="text-label"
                           for="email_2">Email Address:</label>
                    <div class="input-group input-group-merge">
                        <input id="email_2"
                               type="email"
                               required=""
                               name="email"
                               autofocus
                               value="{{ old('email') }}"
                               class="form-control form-control-prepended"
                               placeholder="john@doe.com">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="far fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-label"
                           for="password_2">Password:</label>
                    <div class="input-group input-group-merge">
                        <input id="password_2"
                               type="password"
                               name="password"
                               value="{{ old('password') }}"
                               required=""
                               class="form-control form-control-prepended"
                               placeholder="Enter your password">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-key"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-primary"
                            type="submit">Login</button>
                </div>
                <div class="form-group text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox"
                               class="custom-control-input"
                               checked=""
                               id="remember">
                        <label class="custom-control-label"
                               for="remember">Remember me for 30 days</label>
                    </div>
                </div>
            </form>
        </div>

        @include('layouts.dash.js')

    </body>

</html>
