'use strict';

angular.module('vbaV2App')
    .directive('membershippageMap', ['$timeout', 'googleMap', function ($timeout, googleMap) {

        return {
            restrict: 'A',
            compile: function (tElement, tAttributes, transclude) {
                return function (scope, element, attrs) {

                    $timeout(function () {

                        //Map Stuff
                        var myMapOptions, map, marker, infoContent, infowindow, i;
                        var div = element[0];

                        myMapOptions = googleMap.mapOptions(7, 44.0407, -72.7093);

                        map= googleMap.mapCreator(div, myMapOptions);

                        for (i=0; i < scope.members.length; i++) {
                            var aml = scope.members[i];
                            marker = googleMap.mapMarker(map, aml.latitude, aml.longitude);

                            infoContent = '<p>'+aml.name+'</p>'+
                            '<p>'+aml.address+'</p>'+
                            '<p>'+aml.city+', '+aml.state+'</p>';

                            infowindow = googleMap.infoWindowCreator(infoContent);

                            googleMap.infoWindowsClick(map, marker, infowindow);
                        } //end for loop
                    }, 300); //end $timeout
                } //end return function
            } //end compile
        }; //end return
    }]);
