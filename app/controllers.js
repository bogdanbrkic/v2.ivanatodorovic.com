/*
* FetchTumblrPostsCtrl
*
*/
'use strict';

appTumblr.controller('TumblrCtrl', function ($scope, FetchDataFromServer) {
            //$scope.data = null;
            console.log('controllers...Go............');
              $scope.test = "test 123";
              $scope.data = FetchDataFromServer.getDatafromAPI();
              // $scope.posts = $scope.data;
              // $scope.body = $scope.posts;
              // console.log($scope.data);
              // $scope.posts = data.response.posts;
});


appTumblr.factory('FetchDataFromServer', function($http, $q) {

                console.log('.. Services js Go...................');
                 //this.getDatafromAPI = function() {
                       console.log('.. Services getDatafromAPI Go...................');
                      // url = 'tumblr-fetch-blog-data';
                    //  $http.get(url)
                    //  .success(function(data,status,headers,config) {
                    //    console.log(response.data);
                    //   return response.data;
                    //  });

                // };


});
