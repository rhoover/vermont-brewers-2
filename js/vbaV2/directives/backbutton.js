'use strict';

angular.module('vbaV2App')
  .directive('backButton', [function () {
    return {
        restrict: 'A',
        link: function (scope, element, attrs) {
            element.bind('click', goBack);
            function goBack() {
                history.back();
                scope.$apply();
            };
        } //end link function
    }; //end return
  }]);
