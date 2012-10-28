angular.module('angular-app', []).
    config(function ($routeProvider) {
        $routeProvider.
            when('/menu1', {templateUrl:'partials/menu1.html', controller:Menu1Controller}).
            when('/menu2', {templateUrl:'partials/menu2.html', controller:Menu2Controller}).
            otherwise({redirectTo:"/menu1"});
});