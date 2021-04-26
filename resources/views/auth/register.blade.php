<!doctype html>
<html lang="en">


<!-- Mirrored from www.wrraptheme.com/templates/lucid/hr/html/light/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 12:10:56 GMT -->
<head>
<title>:: ICM :: PORTAL</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="/assets1/css/main.css">
<link rel="stylesheet" href="/assets1/css/color_skins.css">
</head>

<body class="theme-blue">
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle auth-main">
				<div class="auth-box">
                    <div class="top">
                    <img src="/assets/images/inner.png" alt="ICM">
                    </div>
					<div class="card">
                        <div class="header">
                            <p class="lead">Create an account</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                    <label for="signup-name" class="control-label sr-only">Full Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Full Name"  value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="signup-email" class="control-label sr-only">Email</label>
                                    <input type="email" name="email" class="form-control" id="signup-email" placeholder="Your email" value="{{ old('email') }}">
                                  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('email') }}</p>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <label for="signup-password" class="control-label sr-only">Password</label>
                                    <input type="password" name="password" class="form-control" id="signup-password" placeholder="Password">
                                    
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('password') }}</p>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <label for="signup-password" name="password_confirmation" class="control-label sr-only">Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="signup-password" placeholder="Confirm Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
                                <div class="bottom">
                         <span class="helper-text">Already have an account? <a href="{{route('login')}}">Login</a></span>
                                </div>
                            </form>
                           
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hr/html/light/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 12:10:56 GMT -->
</html>
