<!DOCTYPE html>
<html ng-app = "app">
<head>
    <title>Persedian - Access</title>
    <meta charset="UTF-8">
    <link href='bower_resources/bootstrap/dist/css/bootstrap.min.css' rel="stylesheet">
    <link href='bower_resources/font-awesome/css/font-awesome.min.css' rel="stylesheet">
    <link href='bower_resources/font-awesome-animation/dist/font-awesome-animation.min.css' rel="stylesheet">
    <link href='resources/css/main.css' rel="stylesheet">

    <!-- THIR PARTY JS -->
    <script src='bower_resources/angular/angular.min.js'></script>
    <script src='bower_resources/angular-resource/angular-resource.min.js'></script>
    <script src="bower_resources/angular-animate/angular-animate.min.js"></script>
    <script src="bower_resources/angular-route/angular-route.min.js"></script>

    <script src="angular_main/app.js"></script>

    <!-- SERVICES -->
    <script src="angular_commons/services/AccessServices.js"></script>
    <script src="angular_main/services/ApiServices.js"></script>

    <!-- CONTROLLERS -->
    <script src="angular_main/InventoryList/InventoryListCtrl.js"></script>

</head>

<body>
    <div ng-view></div>
</body>


</html>