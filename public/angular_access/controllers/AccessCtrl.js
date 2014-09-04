

angular.module('app.controllers')
    .controller('AccessCtrl', ['$scope','AccessService', '$timeout', '$interval',
        function($scope, AccessService, $timeout, $interval) {

            $scope.googleSigninUrl = AccessService.googleSigninUrl;

            $scope.doLogin = function(){

                AccessService.resource.login({"email":$scope.email, "password":$scope.password}).$promise.then(
                function(result){
                    //Success
                    console.log(result);
                },

                function(error){
                    if(error.data){  //Controlled error
                        console.log(error.data.error);
                    }
                    else {   //Server error
                        console.log("System Error");
                    }
                });

            }

            $scope.doRegister = function(){

                AccessService.resource.register({"email":$scope.email, "password":$scope.password}).$promise.then(
                    function(result){
                        //Success
                        console.log(result);
                    },

                    function(error){
                        if(error.data){  //Controlled error
                            console.log(error.data.error);
                        }
                        else {   //Server error
                            console.log("System Error");
                        }
                    });

            }

        }]);