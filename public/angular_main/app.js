/**
 * Created by pablopernias on 03/09/14.
 */

angular.module('common.services', []);

angular.module('app.services', []);
angular.module('app.controllers', []);

angular.module('app', ['ngRoute', 'ngResource', 'ngAnimate', 'common.services', 'app.services', 'app.controllers'])

    .config(function($routeProvider, $locationProvider) {
        $routeProvider

            .when('/', {
                controller:'InventoryListCtrl',
                templateUrl:'/angular_main/InventoryList/inventory-list.tpl.html '
            })

            .otherwise({
                redirectTo:'/'
            });

    })