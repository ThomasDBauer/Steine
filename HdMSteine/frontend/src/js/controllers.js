angular.module('steine.controllers', [])

    .controller('AppCtrl', function ($scope) {
        $scope.hello = "Hello World from Angular!"
    })

    .controller('LoginCtrl', function ($scope) {
        $scope.username = "Heribert"
    });