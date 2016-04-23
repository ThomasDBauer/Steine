angular.module('steine', ['ngResource', 'ui.router', 'steine.controllers'])

.run(function () {
    console.log('hi world')
})


.config(function ($stateProvider, $urlRouterProvider) {
    // add config here

    $stateProvider
        .state('app', {
            url: '/',
            templateUrl: '../../src/www/index.html',
            controller: 'AppCtrl'
        })

        .state('app.login', {
            url: '/login',
            templateUrl: '../../src/www/login.html',
            controller: 'LoginCtrl'
    });

    // if none of the above states are matched, use this as the fallback
    $urlRouterProvider.otherwise('/login');
});