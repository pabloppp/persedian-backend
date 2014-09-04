/**
 * Created by pablopernias on 31/08/14.
 */

angular.module("common.services")

.service('AccessService', function($resource) {

    var result = {};

    result.logoutUrl = '/access/logout';
    result.googleSigninUrl = '/access/google';

    result.resource = $resource('/access', {},{
        login:{
            url:'access/login',
            method:'POST'
        },

        register:{
            url:'access/register',
            method:'POST'
        }

    });

    return result;

})

;