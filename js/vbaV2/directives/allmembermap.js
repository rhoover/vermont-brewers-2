'use strict';

angular.module('vbaV2App')
    .directive('membershippageMap', ['$interval', 'googleMap', function ($interval, googleMap) {

        return {
            restrict: 'A',
            link: function (scope, element, attrs) {
                var myMapOptions, map, marker, infoContent, infowindow, i;
                var div = element[0];
                myMapOptions = googleMap.mapOptions(7, 44.0407, -72.7093);
                map = googleMap.mapCreator(div, myMapOptions);
                var forLoop = function () {
                    for (i=0; i < scope.members.length; i++) {
                        var aml = scope.members[i];
                        marker = googleMap.mapMarker(map, aml.latitude, aml.longitude);

                        infoContent = '<p>'+aml.name+'</p>'+
                        '<p>'+aml.address+'</p>'+
                        '<p>'+aml.city+', '+aml.state+'</p>' +
                         '<a href="http://vermontbrewers.com/'+aml.selector+' ">Go To Listing</a>';

                        infowindow = googleMap.infoWindowCreator(infoContent);

                        googleMap.infoWindowsClick(map, marker, infowindow, infoContent);
                    } //end for loop
                };
                if (!scope.members) { //for landing page
                    var stop = $interval(function () {
                        if (scope.members) {
                            forLoop();
                            if (angular.isDefined(stop)) {
                                $interval.cancel(stop);
                                stop = undefined;
                            }
                        }
                    }, 200, 5);
                } else {
                    forLoop();
                }
            } // end link
        }; //end return
    }]);
