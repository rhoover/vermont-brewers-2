'use strict';

angular.module('vbaV2App')
    .directive('memberpageMap', ['$timeout', 'googleMap', function ($timeout, googleMap) {

        return {
            restrict: 'A',
            compile: function (tElement, tAttributes, transclude) {
                return function (scope, element, attrs) {

                    $timeout(function () {

                        var lat = scope.member.latitude;
                        var lon = scope.member.longitude;

                        //Map Stuff
                        var myMapOptions, map, marker, infoContent, infowindow;
                        var div = element[0];

                        myMapOptions = googleMap.mapOptions(10, lat, lon);

                        map= googleMap.mapCreator(div, myMapOptions);

                        marker = googleMap.mapMarker(map, lat, lon);

                        infoContent = '<p>'+scope.member.name+'</p>'+
                        '<p>'+scope.member.address+'</p>'+
                        '<p>'+scope.member.city+', '+scope.member.state+'</p>';

                        infowindow = googleMap.infoWindowCreator(infoContent);

                        googleMap.infoWindowClick(map, marker, infowindow);
                    }, 0); //end $timeout
                } //end return function
            } //end compile
        }; //end return
    }]);
