

angular.module('app.controllers')
    .controller('AccessCtrl', ['$scope','AccessResource', '$timeout', '$interval',
        function($scope, AccessResource, $timeout, $interval) {

            $scope.googleSigninUrl = AccessResource.googleSigninUrl;

            $scope.doLogin = function(){

                AccessResource.resource.login({"email":$scope.email, "password":$scope.password}).$promise.then(
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

                AccessResource.resource.register({"email":$scope.email, "password":$scope.password}).$promise.then(
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