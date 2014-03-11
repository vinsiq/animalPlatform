'use strict';


// Declare app level module which depends on filters, and services
angular.module('myApp', [
    'ngRoute',
    'myApp.filters',
    'myApp.services',
    'myApp.directives',
    'myApp.controllers'
]).
config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/', {templateUrl: 'partials/animals.html', controller: 'MyCtrl1'});
    $routeProvider.when('/login', {templateUrl: 'partials/login.html', controller: 'MyCtrl1'});
    $routeProvider.when('/contact', {templateUrl: 'partials/contact.html', controller: 'MyCtrl1'});
    $routeProvider.otherwise({redirectTo: '/'});
}]);

