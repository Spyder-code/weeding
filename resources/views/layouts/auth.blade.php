
<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

    <head>
        <meta charset="utf-8" />
        <title>Sistem Informasi Klinik</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Your time is limited, don't waste it living someone else's life. Don't be trapped by dogma, which is living with the results of other people's thinking. Don't let the noise of others' opinions drown your own inner voice. Most importantly, have the courage to follow your heart and intuition, they somehow already know what you truly want to become. Everything else is secondary" name="description" />
        <meta content="Mediku" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">

		<!-- Theme Config Js -->
		<script src="{{ asset('assets') }}/js/head.js"></script>

		<!-- Bootstrap css -->
		<link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="app-style" />

		<!-- App css -->
		<link href="{{ asset('assets') }}/css/app.min.css" rel="stylesheet" type="text/css" />

		<!-- Icons css -->
		<link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body class="auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="p-3">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-start">
                            <div class="auth-brand">
                                <a href="/" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{ asset('img/logo.png') }}" alt="" height="100">
                                    </span>
                                </a>

                                <a href="/" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="{{ asset('img/logo.png') }}" alt="" height="100">
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!-- title-->
                        <h4 class="mt-0">Sign In</h4>
                        <p class="text-muted mb-4">Enter your email address and password to access account.</p>
                        <div class="my-2">
                            @if ($errors->any())
                            <div class="alert alert-danger py-1">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-danger">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                        @yield('content')

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <h2 class="mb-3 text-white">Stay Healthy!</h2>
                    <p class="lead"><i class="mdi mdi-format-quote-open"></i> Your time is limited, don't waste it living someone else's life. Don't be trapped by dogma, which is living with the results of other people's thinking. Don't let the noise of others' opinions drown your own inner voice. Most importantly, have the courage to follow your heart and intuition, they somehow already know what you truly want to become. Everything else is secondary. <i class="mdi mdi-format-quote-close"></i>
                    </p>
                    <h5 class="text-white">
                        - Steve Jobs
                    </h5>
                </div> <!-- end auth-user-testimonial-->
            </div>
            <!-- end Auth fluid right content -->
        </div>
        <!-- end auth-fluid-->
        <!-- Vendor js -->
        <script src="{{ asset('assets') }}/js/vendor.min.js"></script>
        <!-- App js -->
        <script src="{{ asset('assets') }}/js/app.min.js"></script>
        <script src="{{ asset('assets/js/pages/authentication.init.js') }}"></script>
    </body>
</html>
