<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login Admin NACE</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/toastr/toastr.min.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/logoutama.png')}}">
</head>

<body>
	@include('sweetalert::alert')

	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="img/logo2.png" width="300px" height="55px"></div>
								<p class="lead">Login to your account</p>
							</div>
                            <form class="form-auth-small" action="{{ url('/login/cek') }}" method="post">
                                @csrf
								<div class="form-group">
									<input name="username" type="text"  class="form-control" placeholder="Username" required>
								</div>

								@error('username')
									<div class="alert alert-danger alert-dismissible mt-3" role="alert">
  										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  											{{	$message	}}
									</div>
								@enderror

								<div class="form-group">
									<input name="password" type="password" class="form-control" placeholder="Password" required>
								</div>

								@error('password')
									<div class="alert alert-danger alert-dismissible mt-3" role="alert">
  										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  										{{	$message	}}
									</div>
								@enderror

								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>

								<a href="home/" class="btn btn-primary btn-md" style="font-family: Source Sans Pro, sans-serif;"><span class="fa fa-arrow-left"></span> BACK</a>
							</form>
							<br>
							@if(session()->has('pesan'))
							<div class="alert alert-danger alert-dismissible mt-3" role="alert">
  								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  								{{session('pesan')}}
							</div>
							@endif
						</div>
					</div>
					<div class="right" class="img-responsive" style="background-image: url('{{ asset('img/bg/bglogin.jpg')}}');"></div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->

	<!-- Javascript -->
	<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('vendor/toastr/toastr.min.js')}}"></script>
	<script src="{{asset('scripts/klorofil-common.js')}}"></script>
</body>

</html>
