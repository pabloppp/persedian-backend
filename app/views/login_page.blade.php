<!DOCTYPE html>
<html ng-app>
<head>
    <title>Persedian - login</title>
    <meta charset="UTF-8">
    <link href="{{ asset('bower_resources/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_resources/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_resources/font-awesome-animation/dist/font-awesome-animation.min.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/css/main.css') }}" rel="stylesheet">

    <script src="{{ asset('bower_resources/angular/angular.min.js') }}"></script>
</head>
<body ng-model="loginModel" ng-class="{redBody : !color, blueBody : color == 1, greenBody : color == 2, pinkBody : color == 3, lightblueBody : color == 4, lightgreenBody : color == 5}">

    <header></header>
    <div class="col-md-8 infoBody">
        <h1>PERSEDIAN</h1>
        <h2>Your smart inventory & shopping companion.</h2>
        <span class="separator">***</span>
        <h3>Shop inventory made easy, fast and simple access to all your products, seamless integration with your business. </h3>
        <span class="separator">~</span>
        <p>Register NOW to access the FREE plan and upgrade to SENIOR for only 5$/Month</p>

        <button class="btn btn-primary" ng-click="color = null" >RED</button>
        <button class="btn btn-primary" ng-click="color = 1" >BLUE</button>
        <button class="btn btn-primary" ng-click="color = 2" >GREEN</button>
        <button class="btn btn-primary" ng-click="color = 3" >LIGHT RED</button>
        <button class="btn btn-primary" ng-click="color = 4" >LIGHT BLUE</button>
        <button class="btn btn-primary" ng-click="color = 5" >LIGHT GREEN</button>
    </div>
    <div class="col-md-4">
        <div class="loginTitle">
            Join for FREE!<br>
            <i class="fa fa-hand-o-down faa-bounce animated"></i>
        </div>
        <div class="loginTwoZone">
        <div class="loginTwoBox">
            <form>
               <div class="inputBox">
                   <div class="row">
                       <input type="email" placeholder="email" /><i class="fa fa-user"></i>
                   </div>
                   <hr>
                   <div class="row">
                       <input type="password" placeholder="password" /><i class="fa fa-unlock-alt"></i>
                   </div>
               </div>
               <button ng-hide="loginMode" type="submit">REGISTER</button>
                <button ng-show="loginMode" type="submit">LOGIN</button>
            </form>
        </div>
        <button ng-hide="loginMode" class="btn btn-link" ng-click="loginMode = true" >or login</button>
            <button ng-show="loginMode" class="btn btn-link" ng-click="loginMode = false" >or register</button>
        </div>
    </div>



    <footer></footer>


</body>
</html>