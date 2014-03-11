'use strict';

/* Controllers */

angular.module('appAdmin.controllers', []).
        controller('MyCtrlAdmin', ['$scope', '$location', function($scope, $location) {
                $scope.isActive = function(viewLocation) {
                    var active = (viewLocation === $location.path());
                    
                    return active;
                };
            }]);