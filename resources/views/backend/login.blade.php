<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="/backend/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="/backend/css/styles.css" rel="stylesheet">
</head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					@if ($errors->any())
						@foreach ($errors->all() as $item)
							<div class="alert alert-danger">{{$item}}</div>
						@endforeach
						
					@endif
					<form method="post" action="{{route('login.post')}}" role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="Username" type="email" autofocus="" value="{{old('Username')}}">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="Password" type="password" value="{{old('Password')}}">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
						</fieldset>
						@csrf
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</body>

</html>