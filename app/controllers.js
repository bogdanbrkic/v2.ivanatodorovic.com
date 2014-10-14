/*
* FetchTumblrPostsCtrl
*
*/

angular.module('appTumblr.controllers', ['ngSanitize'])

app.controller('FetchTumblrPostsCtrl',
  function ($scope, $sce, FetchDataFromServer) {
             //$scope.data = null;
             console.log('controllers...Go............');
              $scope.test = "test 123";
              //$scope.data = FetchDataFromServer.getDatafromAPI();
              // $scope.posts = $scope.data;
              // $scope.body = $scope.posts;
              // console.log($scope.data);
              // $scope.posts = data.response.posts;
});
