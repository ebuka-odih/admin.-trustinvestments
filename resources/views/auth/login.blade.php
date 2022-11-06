
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trust Investment | Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="https://unitrustinvest.com/login-assets/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://unitrustinvest.com/trade/login-assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://unitrustinvest.com/trade/login-assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://unitrustinvest.com/trade/login-assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://unitrustinvest.com/trade/login-assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://unitrustinvest.com/trade/login-assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://unitrustinvest.com/trade/login-assets/vendor/animsition/css/animsition.min.css">
    <!--============================https://admin.unitrustinvest.com/===================================================================-->
    <link rel="stylesheet" type="text/css" href="https://unitrustinvest.com/trade/login-assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://unitrustinvest.com/trade/login-assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://unitrustinvest.com/trade/login-assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="https://unitrustinvest.com/trade/login-assets/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90">
            <form action="{{ route('login') }}" method="POST" class="login100-form validate-form flex-sb flex-w">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div style="background: #0B65C6; width: 100%; padding: 10px">
                    <center>
                        <a href="{{ route('index') }}">
                            <h3 style="color: white; font-weight: bolder">Trust Investment</h3>
                            {{-- <img src="{{ asset('assets/images/logo.png') }}" width="200px"> --}}
                        </a>
                    </center>
                </div>
                <span class="login100-form-title p-b-51">
						Login
					</span>


                <div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-24">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        {{--                        <a href="forgot_password" class="txt1">--}}
                        {{--                            Forgot?--}}
                        {{--                        </a>--}}
                        @if (Route::has('password.request'))
                            <a class="txt1" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>

                <div class="container-login100-form-btn m-t-17">
                    <button name="login" style='background: #0B65C6' type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>
                <center>	Don't have an Account? <a href="{{ route('register') }}">Register</a></center>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="login-assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="login-assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="login-assets/vendor/bootstrap/js/popper.js"></script>
<script src="login-assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="login-assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="login-assets/vendor/daterangepicker/moment.min.js"></script>
<script src="login-assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="login-assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="login-assets/js/main.js"></script>
<script src="https://unitrustinvest.com/LIVECHAT.js" async></script>

<style>
    .cus-float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        left:40px;
        background-color:#0C9;
        color:#FFF;
        border-radius:50px;
        text-align:center;
    }

    .my-float{
        margin-top:22px;
    }
</style>


</body>
</html>
