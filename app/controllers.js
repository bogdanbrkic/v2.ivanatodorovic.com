/*
* FetchTumblrPostsCtrl
*
*/

angular.module('appTumblr.controllers', ['ngSanitize'])
app.controller('FetchTumblrPostsCtrl',
  function ($scope, $sce, FetchDataFromServer) {
             //$scope.data = null;
              $scope.data = FetchDataFromServer.getDatafromAPI();
              $scope.posts = $scope.data;
              $scope.body = $scope.posts;
              console.log('controllers...Go...');
              console.log($scope.data);
              $scope.posts = data.response.posts;
});
