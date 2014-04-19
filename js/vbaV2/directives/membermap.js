'use strict';

angular.module('vbaV2App')
    .directive('memberpageMap', [function () {

        return {
            restrict: 'A',
            link: function (scope, element, attrs) {

                var lat = scope.member.latitude;
                var lon = scope.member.longitude;

                //Map Stuff
                var myMapOptions, map, marker, infoContent, infowindow;

                myMapOptions = {
                    zoom: 10,
                    center: new google.maps.LatLng(lat, lon),
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                    },
                    zoomControl: true,
                    streetViewControl: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                map = new google.maps.Map(element[0], myMapOptions);

                marker = new google.maps.Marker ({
                    position: new google.maps.LatLng(lat, lon),
                    map: map
                });

                infoContent = '<p>'+scope.member.name+'</p>'+
                '<p>'+scope.member.address+'</p>'+
                '<p>'+scope.member.city+', '+scope.member.state+'</p>';

                infowindow = new google.maps.InfoWindow({
                    content: infoContent
                });

                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.open(map, marker);
                });
            } //end link function
        }; //end return
    }]);