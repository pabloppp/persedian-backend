/**
 * Created by pablopernias on 03/09/14.
 */

angular.module('app.controllers')
    .controller('InventoryListCtrl', ['$scope','AccessService', 'ApiService', '$timeout', '$interval',
        function($scope, $access, $api, $timeout, $interval) {

            $scope.logoutUrl = $access.logoutUrl;

            $scope.show = "owned";

            refreshInventories();

            $scope.addInventory = function(){
                $api.inventories.add($scope.newinventory).$promise.then(function(result){
                    $scope.newinventory.name = "";
                    $scope.newinventory.description = "";
                    $scope.owned.push(result);
                    $scope.adding = false;
                });

            }

            $scope.changeTo = function(to){
                $scope.show = to;
                if(to == "owned") $scope.inventories = $scope.owned;
                else if(to == "collaborating") $scope.inventories = $scope.collaborating;
            }

            $scope.removeInventory = function(inventory){
                $api.inventories.delete(inventory).$promise.then(function(result){
                    $scope.owned.splice($scope.owned.indexOf(inventory), 1);
                    $scope.inventories = $scope.owned;
                });
            }


            function refreshInventories(){
                $scope.owned = $api.inventories.owned().$promise.then(function(result){
                    $scope.owned = result;
                    $scope.inventories = $scope.owned;
                });

                $scope.collaborating = $api.inventories.collaborating().$promise.then(function(result){
                    $scope.collaborating = result;
                });


            }

        }]);