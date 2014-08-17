@section('content')
	<div class="loginBox">
		<form action="login" method="post" class="form-signin" role="form">
			<h2>Please, log in</h2><br>
			<input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
			<br>
        	<input name="password" type="password" class="form-control" placeholder="Password" required>
        	<div class="checkbox">
          		<label>
            		<input type="checkbox" value="remember-me"> Remember me
          		</label>
       		 </div>
       		 <button type="submit">submit</button>
		</form>
		
	</div>
@stop


