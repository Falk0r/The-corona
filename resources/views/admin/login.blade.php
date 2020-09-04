<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" type="image/png" href="images/icon/favicon.png">
    
    <!-- Basic -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/metisMenu.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/slicknav.min.css">
    <link rel="stylesheet" href="css/select2.min.css">

    <!-- Amchart -->
    <link rel="stylesheet" href="css/export.css" media="all">
    
    <!-- Datatable -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">

    <!-- Datepicker for bootstrap 4 -->
    <link rel="stylesheet" href="css/gijgo.min.css">

    <!-- Font-Awesome -->
    <script src="https://kit.fontawesome.com/bac71461de.js" crossorigin="anonymous"></script>

    <!-- Others -->
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/default-css.css">
    <link rel="stylesheet" href="css/spacing.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Modernizr -->
    <script src="js/modernizr-2.8.3.min.js"></script>

</head>

<body>    

    <!-- Page container area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="{{ route($loginRoute) }}">
                    @csrf
                    <div class="login-form-head">
                        <h4>Sign In</h4>
                        <p>Please sign in first to access to admin panel</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                            <i class="ti-email"></i>
                            <div class="text-danger">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-gp">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" name="password" required>
                            <i class="ti-lock"></i>
                            <div class="text-danger">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" name="form1">{{ __('Login') }}<i class="ti-arrow-right"></i></button>
                        </div>
                        <div class="row mb-4 rmber-area mt-3">
                            <div class="col-12 text-center">
                                <a href="{{ route($forgotPasswordRoute) }}">{{ __('Forgot Your Password?') }}</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Page container area end -->
    
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Basic -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/metisMenu.min.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <!-- Datatable -->
    <script src="js/jquery.dataTables.min.js"></script>

    <!-- Amcharts -->
    <script src="js/amcharts.js"></script>
    <script src="js/serial.js"></script>
    
    <!-- Bar chart -->
    <script src="js/bar-chart.js"></script>

    <!-- Datepicker for bootstrap 4 -->
    <script src="js/gijgo.min.js"></script>

    <!-- Others -->
    <script src="js/plugins.js"></script>
    <script src="js/scripts.js"></script>

</body>
</html>