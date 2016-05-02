angular.module('steine.controllers', [])

    .controller('AppCtrl', function ($scope) {
        $scope.hello = "Hello World from Angular!";
    })

    // TODO fix login ctrl and routing / ui view
    .controller('LoginCtrl', function ($scope) {
        $scope.username = "Elena";
    })

    .controller('OverviewCtrl', function ($scope, posts) {
        console.log('controller.js ping');
        $scope.posts = posts;
    });