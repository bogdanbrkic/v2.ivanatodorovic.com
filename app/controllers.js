/*
 * FetchTumblrPostsCtrl
 *
 */
'use strict';

/* controler */
appTumblr.controller('TumblrCtrl', ['$scope', '$http', function($scope, $http) {

  $http.get('/tumblr-fetch-blog-data.php').success(function(data, status, headers, config) {
    console.log(data);
    $scope.status = status;
    $scope.data = data;
    $scope.posts = data.response.posts;
    $scope.body = $sce.trustAsHtml($scope.posts);
  });
}]);


/* service */
appTumblr.factory('FetchDataFromServer', ['$http', function($http, $q) {

  return {
    getDatafromAPI: function($scope) {
      $http.get('/tumblr-fetch-blog-data.php').success(function(data, status, headers, config) {
        console.log(data);
        // $scope.data = data;
        return data;
      });
    }
  };

}]);
