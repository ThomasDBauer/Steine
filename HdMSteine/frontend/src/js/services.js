angular.module('steine.services', [])
    .factory('PostsService', function ($http, $q) {
        //return
        //{
            //posts: function () {
                var deferred = $q.defer();

                console.log('services.js ping');

                // be careful here! just test routes
                // TODO: after production, remove test

                return $http.get('http://localhost/steine/Steine/HdMSteine/backend/public/api/post')
                    .then(function (response) {
                        // promise is fulfilled
                        deferred.resolve(response.data);
                        console.log('services.js promise success ping');
                        console.log(response.data);
                        // promise is returned
                        return deferred.promise;

                    }, function (response) {
                        // the following line rejects the promise
                        deferred.reject(response);
                        // promise is returned
                        return deferred.promise;
                    });
            //}
        //}
    });