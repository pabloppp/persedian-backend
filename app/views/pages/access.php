<!DOCTYPE html>
<html ng-app>
	<head>
		<title>Persedian - Access</title>
    	<meta charset="UTF-8">
    	<link href='bower_resources/bootstrap/dist/css/bootstrap.css' rel="stylesheet">
    	<link href='bower_resources/font-awesome/css/font-awesome.min.css' rel="stylesheet">
    	<link href='bower_resources/font-awesome-animation/dist/font-awesome-animation.min.css' rel="stylesheet">
    	<link href='resources/css/main.css' rel="stylesheet">
    	<link href='resources/css/access.css' rel="stylesheet">

   		<script src='bower_resources/angular/angular.min.js'></script>
	</head>

	<body>	
		<div class="col-md-6 appInfo">  
			<h1><span class="smalltitle">Sign in to</span> PERSEDIAN</h1>
			<span class="appDescription">Shop inventory made easy, fast and simple access to all your products, seamless integration with your business.</span>
		</div>
		<div class="col-md-6 accessForm">		
			<form class="form-1">
	    		<div class="field">
			        <input class="prettyInput" type="email" name="email" placeholder="Your email...">
			        <i class="fa fa-user"></i>
	    		</div>
	        	<div class="field">
	        		<input  class="prettyInput" type="password" name="password" placeholder="Your password...">
	        		<i class="fa fa-unlock-alt"></i>
	    		</div>        
	    		<div class="submit">
	        		<button type="submit" class="submitButton" name="submit"><i class="fa fa-thumbs-o-up faa-vertical animated-hover"></i></button>
	    		</div>

                <br>
                <!--<div class="checkboxFour">
                    <input type="checkbox" value="1" id="checkboxFourInput" name="" />
                    <label for="checkboxFourInput">Stay signed in</label>
                </div>-->

			</form>
		</div>
		<a ng-href="#" class="forgotCase">Forgot your password?</a>
	</body>


</html>