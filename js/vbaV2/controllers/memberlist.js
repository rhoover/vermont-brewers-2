'use strict';

angular.module('vbaV2App')
    .controller('MemberListCtrl', ['$scope', 'memberjson', 'storageService', function ($scope, memberjson, storageService) {

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

                storageService.save('vba-membership-cache', data);

            });
        }; //end if-else

    }]);
