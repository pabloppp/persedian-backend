/**
 * Created by pablopernias on 31/08/14.
 */

angular.module("app.services")

.service('ApiService', function($resource) {

    var result = {};

    result.inventories = $resource('/api/resources', {},{
        owned:{
            url:'/api/inventories/owned',
            method:'GET',
            isArray:'true'
        },

        collaborating:{
            url:'/api/inventories/collaborating',
            method:'GET',
            isArray:'true'
        },

        add:{
            url:'/api/inventories',
            method:'POST'
        },

        delete:{
            url:'/api/inventories/:name/delete',
            method:'GET'
        }

    });

    return result;

})

;