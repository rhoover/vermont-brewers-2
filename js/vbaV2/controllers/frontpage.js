'use strict';

angular.module('vbaV2App')
    .controller('HomeCtrl', ['$scope', 'memberjson', 'storageService', function ($scope, memberjson, storageService) {

        $scope.$emit('LOADING');

        //see if we have been here before
        var membershipCache = storageService.get('vba-membership-cache');

        //if we have...
        if (membershipCache != null) {
            $scope.memberList = membershipCache;

            $scope.$emit('LOADED');
        } else {

            //apparently we have not been here, so...

            //below pattern is for a service that returns a promise
            memberjson.getMemberData().then(function (data) {
                $scope.memberList = data;

                $scope.$emit('LOADED');

                var saveMe = data;
                storageService.save('vba-membership-cache', saveMe);

            });
        }; //end if-else

    }]);
