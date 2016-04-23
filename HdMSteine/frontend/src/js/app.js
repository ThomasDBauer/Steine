angular.module('steine', ['ng', 'ngResource', 'ui.router', 'steine.controllers'])

    .run(function () {
        console.log('hi world')
    })
    .config(function ($stateProvider, $urlRouterProvider) {
        // add config here

        $stateProvider
            .state('app', {
                url: '/',
                templateUrl: 'huhuhu',
                controller: 'AppCtrl'
            })

            .state('login', {
                url: '/login',
                template: "<h1>hi!</h1>",
                //templateUrl: '../../src/www/login.html',
                controller: 'LoginCtrl'
        });

        // if none of the above states are matched, use this as the fallback
    $urlRouterProvider.otherwise('/');
    });