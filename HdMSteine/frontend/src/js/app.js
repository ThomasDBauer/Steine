angular.module('steine', ['ng', 'ngResource', 'ui.router', 'steine.controllers', 'steine.services'])

    .run(function () {

        // add run config here

    })

    .config(function ($stateProvider, $urlRouterProvider) {

        // add general config here

        // routing and different states

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
            })

            .state('overview', {
                url: '/overview',
                templateUrl: '../../src/www/overview.html',
                controller: 'OverviewCtrl',
                resolve: {
                    'posts': function (PostsService) {
                        console.log('app.js ping');
                        return PostsService.posts();
                    }
                }
            });

        // if none of the above states are matched, use this as the fallback
    $urlRouterProvider.otherwise('/login');

    });