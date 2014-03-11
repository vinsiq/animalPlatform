'use strict';

// Declare app level module which depends on filters, and services
angular.module('appAdmin', [
    'ngRoute',
    'appAdmin.filters',
    'appAdmin.services',
    'appAdmin.directives',
    'appAdmin.controllers'
]).
config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/', {templateUrl: 'partials/admin/welcome.php', controller: 'MyCtrl1'});
    $routeProvider.when('/dashboard', {templateUrl: 'partials/admin/welcome.php', controller: 'MyCtrl1'});
    $routeProvider.when('/register', {templateUrl: 'partials/admin/register.php', controller: 'MyCtrl1'});
    $routeProvider.when('/manager', {templateUrl: 'partials/admin/manager.php', controller: 'MyCtrl1'});
    $routeProvider.when('/users', {templateUrl: 'partials/admin/users.html', controller: 'MyCtrl1'});
    $routeProvider.otherwise({redirectTo: '/'});
}]);

