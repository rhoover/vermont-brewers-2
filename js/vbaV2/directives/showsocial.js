'use strict';

angular.module('vbaV2App')
    .directive('showSocial', [function () {

    return {
        restrict: 'A',
        link: function (scope, element, attrs) {

            if (!attrs.href) {
                element.addClass('no-show');
            };
        }
    };
}]);