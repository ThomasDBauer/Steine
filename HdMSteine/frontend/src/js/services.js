angular.module('steine.services', [])
    .factory('PostsService', function ($http, $q) {

        var deferred = $q.defer();

        // TODO: add link here
        return $http.get(data)
            .then(function (response) {
                // promise is fulfilled
                deferred.resolve(response);
                // promise is returned
                return deferred.promise;

            }, function (response) {
                // the following line rejects the promise
                deferred.reject(response);
                // promise is returned
                return deferred.promise;
            });
    });