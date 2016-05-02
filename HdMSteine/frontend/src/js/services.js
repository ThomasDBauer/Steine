angular.module('steine.services', [])
    .factory('PostsService', function ($http, $q) {
        return {
            posts: function () {
                var deferred = $q.defer();

                // be careful here! just test routes
                // TODO: after production, remove test

                return $http.get('http://localhost/steine/Steine/HdMSteine/backend/public/post')
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
            }
        }
    });