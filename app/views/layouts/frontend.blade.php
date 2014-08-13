<html lang="en">
	<head>
		<title>Persedian - Your smart inventory</title>
		<meta charset="UTF-8">
		<!--IMPORTING STUFF -->
		
		<link href="{{ asset('bower_resources/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('css/main.css') }}" rel="stylesheet">

	</head>
    <body>  
    	<div class = "start"> 
	    	<h1>Persedian</h1>
	    	<h2>Your smart inventory</h2> 	    	     
    	</div>
        @yield('content')

 		<script language="JavaScript" src="{{ asset('bower_resources/bootstrap/dist/js/bootstrap.js')}}"></script>


    </body>
</html>