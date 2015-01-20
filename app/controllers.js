/*
 * FetchTumblrPostsCtrl
 *
 */
'use strict';

/* controler */
appTumblr.controller('TumblrCtrl', ['$scope', '$http', '$sce', function($scope, $http, $sce) {

  $http.get('/tumblr-api-test.php').success(function(data, status, headers, config, $sce) {
    // console.log(data.posts);
    $scope.status = status;
    $scope.data = data;
    $scope.posts = data.posts;
    $scope.body = $sce.trustAsHtml($scope.posts);
    $scope.tags = $scope.posts.tags;
  });
}]);


/* service */
// appTumblr.factory('FetchDataFromServer', ['$http', function($http, $q) {
//
//   return {
//     getDatafromAPI: function($scope) {
//       $http.get('/tumblr-api-test.php').success(function(data, status, headers, config) {
//         //console.log(data);
//         // $scope.data = data;
//         return data;
//       });
//     }
//   };
//
// }]);
