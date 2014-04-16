'use strict';

angular.module('vbaV2App')
    .controller('MemberPageCtrl', ['$scope', '$attrs', 'memberjson', 'storageService', 'memberdataFilter', function ($scope, $attrs, memberjson, storageService, memberdataFilter) {

        $scope.$emit('LOADING');

        //see if we have been here before
        var membershipCache = storageService.get('vba-membership-cache');

        //if we have...
        if (membershipCache != null) {
            var memberName = $attrs.member;
            $scope.member = memberdataFilter.member(membershipCache, memberName);

            $scope.$emit('LOADED');
        } else {

            //apparently we have not been here, so...

            //below pattern is for a service that returns a promise
            memberjson.getMemberData().then(function (data) {

                var memberName = $attrs.member;
                $scope.member = memberdataFilter.member(membershipCache, memberName);

                $scope.$emit('LOADED');

                storageService.save('vba-membership-cache', data);

            });
        }; //end if-else

    }]);
