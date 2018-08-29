    
<!DOCTYPE html>
<html class="no-js sidebar-large">
<head>
    <title>Bywave Login</title>
     <head>
   <meta charset="utf-8">
    <title>Bywave</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="assets/img/company.png" style = 'height:1px';>
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="assets/css/icons/icons.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bywave.css" rel="stylesheet">
    <link href="assets/css/plugins.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <link href="#" rel="stylesheet" id="theme-color">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="assets/css/animate-custom.css" rel="stylesheet">
    <!-- END PAGE LEVEL STYLE -->
    <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>

 </head>
</head>




<body class="login fade-in" data-page='login'>

<div class="container" id="login-block" >
    <div class="row">
        <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
            <div class="login-box clearfix animated flipInY" style="padding-top: 3%;">
                <div class="login-logo">
                  <a href="#?login-theme-3">
                <img src="assets/img/company.png" style="height: 50px" alt="Company Logo">
                    </a>
              </div>
                <form action="#" method="POST">
                <div class="login-form" style="margin-top: 4%; padding-top: 5%;">
                    <form  class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="login-form{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="login-form">
                                <input class="input-field form-control user" type="email" class="form-control" name="email" placeholder="E-Mail" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="login-form{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"></label>

                            <div class="login-form">
                                <input id="password" type="password" class="input-field form-control password" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
</form>
                        

                        <div class="form-form">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-login ladda-button">
                                    Login
                                </button><br>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>



 <script src="assets/plugins/jquery-1.11.js"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script src="assets/plugins/jquery-mobile/jquery.mobile-1.4.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="asset  s/plugins/backstretch/backstretch.min.js"></script>
    <script src="assets/plugins/bootstrap-loading/lada.min.js"></script>
    <script src="assets/js/account.js"></script>
</body>
</html>
