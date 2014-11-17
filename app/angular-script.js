function appTumblr($scope, $sce,  $http, $templateCache) {
  $scope.method = 'GET';
  $scope.url = 'fetch-blog-data.php';

  $scope.fetch = function() {
    $scope.code = null;
    $scope.response = null;
    $scope.data = null;
    $scope.posts = null;
    $scope.body = null;


    $http({method: $scope.method, url: $scope.url, cache: $templateCache}).
      success(function(data, status) {
        $scope.status = status;
        $scope.data = data;
        $scope.posts = data.response.posts;
        $scope.body = $sce.trustAsHtml($scope.posts);
        //$scope.body = $sce.trustAsHtml(data.response.posts[1]['body']);

        //dirty-debug
        console.log($scope.posts);
        console.log(data.response.posts); //[1]['body']
      }).
      error(function(data, status) {
        $scope.data = data || "Request failed";
        $scope.status = status;
    });
  };

  $scope.updateModel = function(method, url) {
    $scope.method = method;
    $scope.url = url;
  };


}
