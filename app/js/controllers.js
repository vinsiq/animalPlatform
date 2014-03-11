'use strict';

/* Controllers */

angular.module('myApp.controllers', []).
        controller('MyCtrl1', ['$scope', '$location', function($scope, $location) {
                $scope.isActive = function(viewLocation) {
                    var active = (viewLocation === $location.path());
                    return active;
                };
            }]);