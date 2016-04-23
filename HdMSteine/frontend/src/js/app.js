angular.module('steine', ['ng', 'ngResource', 'ui.router', 'steine.controllers'])

    .run(function () {
    })
    .config(function ($stateProvider, $urlRouterProvider) {
        // add config here

        $stateProvider
            .state('app', {
                url: '/',
                templateUrl: '../../src/www/index.html',
                abstract: true,
                controller: 'AppCtrl'
                // TODO: add resolve for api
            })

            .state('login', {
                url: '/login',
                templateUrl: '../../src/www/login.html',
                controller: 'LoginCtrl'
                // TODO: add resolve for api
            });

        // if none of the above states are matched, use this as the fallback
    $urlRouterProvider.otherwise('/login');
    });