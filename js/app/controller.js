var AppController = function ($scope, $location, $route) {
    $scope.route = $route;

    $scope.appName = "Angular Slim Seed";

    $scope.activeClass = function (page) {
        var currentRoute = $location.path().substring(1) || "home";
        return page == currentRoute ? 'active' : '';
    }
};


var Menu1Controller = function ($scope) {
     $scope.name = "Angular Slim";
};

var Menu2Controller = function ($scope) {

};

