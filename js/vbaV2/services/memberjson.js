'use strict';

angular.module('vbaV2App')
    .factory('memberjson', ['$http', function ($http) {

        //below pattern is v1.2 with promises. yes!
        return {
            getMemberData: function () {
                return $http.get('http://vbav2/wp-content/themes/vbav2/data/vbamembership.json').then(function (result) {
                    return result.data;
                });
            }
        }
    }]);
