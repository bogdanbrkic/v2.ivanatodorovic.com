/*
* FetchDataFromServer
*
*/

angular.module('appTumblr.services', ['ngResource', 'ngSanitize'])
.factory('FetchDataFromServer', function($http, $q) {

 this.getDatafromAPI = function() {
  url = 'http://ivanatodorovic:5021/fetch-blog-data.php';

  $http.get(url)
  .success(function(data,status,headers,config) {
   console.log(response.data); 
   return response.data;
  });

 };

 console.log('.. Services js Go');
});