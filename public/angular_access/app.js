/**
 * Created by pablopernias on 31/08/14.
 */


angular.module('common.services', []);
angular.module('app.controllers', []);

angular.module('app', ['ngResource', 'ngAnimate', 'common.services', 'app.controllers'])