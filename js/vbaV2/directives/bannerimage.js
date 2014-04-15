'use strict';

angular.module('vbaV2App')
    .directive('bannerImage', [function () {
        return {
            restrict: 'A',
            link: function (scope, element, attrs) {
            //Responsive Image Solution
            //Inspired by: http://tech.particulate.me/javascript/2013/10/10/how-to-conveniently-check-for-responsive-breakpoints-in-javascript/
                var result = getComputedStyle(element[0], ':after').content;
                result = result.replace(/"/g,''); //Because Firefox keeps quotes from content
                // console.log(result);
                switch (result) {
                    case "phone" :
                        element.addClass("bg-phone");
                    break;
                    case "tablet" :
                        element.addClass("bg-tablet");
                    break;
                    case "computer" :
                        element.addClass("bg-computer");
                    break;
                }
            }
        }
    }]);