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

  FetchDataFromServer.getDatafromAPI($scope);
  //$scope.posts = $scope.data;
  // $scope.body = $scope.posts;
   console.dir($scope);
   //$scope.posts = data.response.posts;
});




/* service */
appTumblr.factory('FetchDataFromServer', function($http, $q) {

  return {
      getDatafromAPI:function($scope) {
        console.log('................ Services getDatafromAPI...................');

       $http.get('/tumblr-fetch-blog-data.php').success(function(data, status, headers, config) {
           console.log(data);
           //return response.data;
           $scope.data = data;
           return data;
         });
      }
  };

});


//***********
 // app.factory('registerService', function ($http) {
 //        return {
 //         getYears:function (scope) {// scopes comes from your controller
 //        $http({method : "GET",url : "interface.php"})
 //        .success(function(data){
 //                scope.data = data;!!!!!!
 //             })
 //             }
 //          }
 //       });
