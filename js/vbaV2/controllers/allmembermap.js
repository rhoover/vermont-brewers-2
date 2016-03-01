'use strict';

angular.module('vbaV2App')
  .controller('MembershipMapCtrl', ['$scope', 'memberjson', 'storageService', function ($scope, memberjson, storageService) {

        $scope.$emit('LOADING');

        //see if we have been here before
        var membershipCache = storageService.get('vba-membership-cache');

        //if we have...
        if (membershipCache != null) {
            $scope.members = membershipCache;

            $scope.$emit('LOADED');
        } else {

            //apparently we have not been here, so...

            //below pattern is for a service that returns a promise
            memberjson.getMemberData().then(function (data) {

                //pass off the heavy lifting to the filter
                // $scope.member = appdataFilter(data, memberSelector);

                $scope.$emit('LOADED');
                $scope.members = data;

                storageService.save('vba-membership-cache', data);
                console.log('JSON Stored');

            });
        }; //end if-else
  }]);
