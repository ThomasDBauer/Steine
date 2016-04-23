angular.module('waehrung', ['ui.router', 'waherung.controllers', 'waehrung.services'])

.run()

.config(function ($stateProvider, $urlRouterProvider) {
    // add config here

    $stateProvider
        .state('app', {
            url: '/',
            abstract: true,
            templateUrl: '../www/app.html',
            controller: 'AppCtrl'
        })

        .state('login', {
            url: '/login',
            template: '../www/login.html',
            controller: 'LoginCtrl'
    });

    // if none of the above states are matched, use this as the fallback
    $urlRouterProvider.otherwise('/login');

});