/*
*
* appTumblr
*
*/
angular.module('appTumblr', [
	'appTumblr.controllers',
	'appTumblr.services',
 'ngRoute'
	]).

config(['$routeProvider',
	function($routeProvider) {
		$routeProvider.
		when('/posts', {
			templateUrl: 'tumblr-rest-api.php',
			controller: 'FetchTumblrPostsCtrl'
		}).
		when(':text', {
			templateUrl: 'tumblr-rest-api.php',
			controller: 'FetchTumblrPostsCtrl'
		}).
		when(':photo', {
			templateUrl: 'tumblr-rest-api.php',
			controller: 'FetchTumblrPostsCtrl'
		}).
		otherwise({
			redirectTo: '/404'
		});

	}]);
