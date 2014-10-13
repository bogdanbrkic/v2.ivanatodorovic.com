/*
* FetchDataFromServer
*
*/

angular.module('appTumblr.services', ['ngResource', 'ngSanitize'])
    .factory('FetchDataFromServer', function($http, $q) {

                this.getDatafromAPI = function() {
                      url = 'http://v2.ivanatodorovic:5035/tumblr-fetch-blog-data';
                      $http.get(url)
                      .success(function(data,status,headers,config) {
                        console.log(response.data);
                        return response.data;
                      });

                };

               console.log('.. Services js Go................... /n ');
});
