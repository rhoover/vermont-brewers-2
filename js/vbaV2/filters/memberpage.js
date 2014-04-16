'use strict';

angular.module('vbaV2App')
    .filter('memberdata', [function () {

        return {
            member: function (input, arg) { //input is membership json, arg1 is member.selector
                var outMember = [];
                for (var i=0; i<input.length; i++) {
                    if (input[i].selector === arg) {
                        outMember.push(input[i]);
                        return outMember[0];
                    };
                }
            }
        } //end return
    }]);
