/*
 * FetchTumblrPostsCtrl
 *
 */
'use strict';

/* controler */
appTumblr.controller('TumblrCtrl', function($scope, FetchDataFromServer) {
  //$scope.data = null;
  console.log('............controllers............');
  $scope.data = {};
  // FetchDataFromServer.getDatafromAPI()  ;
  // console.dir($scope.data);
  $scope.greeting = 'Hola!';

  $scope.data = FetchDataFromServer.getDatafromAPI($scope);
  // $scope.data = data;
  console.dir($scope);

    //  console.dir($scope.data);
    //  $scope.posts = $scope.data;
    //  $scope.body = $scope.posts;
    //  $scope.posts = data.response.posts;
});

/* service */
appTumblr.factory('FetchDataFromServer', function($http, $q) {

  return {
      getDatafromAPI:function($scope) {
        console.log('................ Services getDatafromAPI...................');

       $http.get('/tumblr-fetch-blog-data.php').success(function(data, status, headers, config) {
          //  console.log(data);
          return data;
         });
      }
  };

});
