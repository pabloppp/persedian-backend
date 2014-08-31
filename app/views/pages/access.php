<!DOCTYPE html>
<html ng-app = "app">
	<head>
		<title>Persedian - Access</title>
    	<meta charset="UTF-8">
    	<link href='bower_resources/bootstrap/dist/css/bootstrap.min.css' rel="stylesheet">
    	<link href='bower_resources/font-awesome/css/font-awesome.min.css' rel="stylesheet">
    	<link href='bower_resources/font-awesome-animation/dist/font-awesome-animation.min.css' rel="stylesheet">
    	<link href='resources/css/access.css' rel="stylesheet">

        <!-- THIR PARTY JS -->
   		<script src='bower_resources/angular/angular.min.js'></script>
        <script src='bower_resources/angular-resource/angular-resource.min.js'></script>
        <script src="bower_resources/angular-animate/angular-animate.min.js"></script>

        <script src="angular_access/app.js"></script>

        <!-- SERVICES -->
        <script src="angular_commons/services/AccessServices.js"></script>

        <!-- CONTROLLERS -->
        <script src="angular_access/controllers/AccessCtrl.js"></script>

    </head>

	<body ng-controller="AccessCtrl">
		<div class="col-md-6 appInfo">  
			<h1><span class="smalltitle">Sign in to</span> PERSEDIAN</h1>
			<span class="appDescription">Shop inventory made easy, fast and simple access to all your products, seamless integration with your business.</span>
		</div>
		<div class="col-md-6 accessForm">		
			<form class="form-1" ng-submit="doLogin()">
	    		<div class="field">
			        <input class="prettyInput" type="email" name="email" ng-model="email" placeholder="Your email...">
			        <i class="fa fa-user"></i>
	    		</div>
	        	<div class="field">
	        		<input  class="prettyInput" type="password" name="password" ng-model="password" placeholder="Your password...">
	        		<i class="fa fa-unlock-alt"></i>
	    		</div>        
	    		<div class="submit">
	        		<button type="submit" class="submitButton" name="submit"><i class="fa fa-thumbs-o-up faa-vertical animated-hover"></i></button>
	    		</div>

                <a ng-href="{{googleSigninUrl}}"> Sign in with Google </a>

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