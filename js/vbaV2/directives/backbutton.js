'use strict';

angular.module('vbaV2App')
  .directive('backButton', [function () {
    return {
        restrict: 'A',
        compile: function (tElement, tAttributes, transclude) {
            return function (scope, element, attrs) {
                element.bind('click', goBack);
                function goBack() {
                    history.back();
                    scope.$apply();
                };
            } //end return function
        } //end compile
    }; //end return
  }]);
