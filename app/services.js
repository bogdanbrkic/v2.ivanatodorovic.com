/*
* FetchDataFromServer
*
*/

angular.module('appTumblr.services', ['ngResource', 'ngSanitize'])
    .factory('FetchDataFromServer', function($http, $q) {

                console.log('.. Services js Go...................');
                this.getDatafromAPI = function() {
                      console.log('.. Services getDatafromAPI Go...................');
                      url = 'tumblr-fetch-blog-data';
                      $http.get(url)
                      .success(function(data,status,headers,config) {
                        console.log(response.data);
                        return response.data;
                      });

                };


});
