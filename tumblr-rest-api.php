<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" ng-app="appTumblr">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <title>Ivana Todorovic</title>
 <meta name="description" content="Ivana Todorovic - documentary filmmaker">
 <meta name="keywords" content="Ivana Todorovic documentary filmmaker, Ivana Todorovic, documentary filmmaker, documentary, filmmaker" />
 <meta name="author" content="" />
 <meta name="copyright" content="Ivana Todorovic" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet" href="css/normalize.css">
 <link rel="stylesheet" href="css/foundation.css">
 <script src="js/vendor/custom.modernizr.js"></script>

 <script src="http://code.angularjs.org/1.2.4/angular.min.js"></script>
 <script src="http://code.angularjs.org/1.2.9/angular-route.js"></script>
 <script src="http://code.angularjs.org/1.2.9/angular-resource.js"></script>
 <script src="http://code.angularjs.org/1.2.6/angular-sanitize.min.js"></script>

 <script type="text/javascript" src="app/app.js"></script>
 <script type="text/javascript" src="app/controllers.js"></script>
 <script type="text/javascript" src="app/services.js"></script>


</head>
<body>
 <section class="top-padding-40 row">
  <div class="large-12 columns">		
   <ul class="inline-list main-menu">
    <li><a href="#" title="" class="curent">HOME</a></li>
    <li><a href="#" title="">ABOUT</a></li>
    <li><a href="films.htm" title="">FILMS</a></li>
    <li><a href="#" title="">TEACHING</a></li>
    <li><a href="#" title="">BIO</a></li>
    <li><a href="#" title="">NEWS</a></li>
    <li><a href="#" title="">FRIENDS</a></li>
    <li><a href="#" title="">CONTACT</a></li>

    <li><a href="#!text" title="">FRIENDS</a></li>
    <li><a href="#!photo" title="">CONTACT</a></li>
   </ul>
  </div>
 </section>

 <section class="row">
  <div class="large-12 columns">

   <!-- json data [ -->
   <div ng-controller="FetchTumblrPostsCtrl">

    <article ng-repeat="post in posts">
     <h2>{{$index}}</h2>
     
     <!-- text blog post -->
     <h3>{{post.title}}</h3>
     <div ng-bind-html="post.date"></div>
     <div ng-bind-html="post.body"></div> 

     <!-- iterate through phots array and take 500px size of img -->
     <ul class="large-block-grid-3">

      <li ng-repeat="photo in post.photos">
       <h4>{{$index}}</h4>
       <img ng-src="{{photo['alt_sizes'][1]['url']}}">
      </li>

     </ul>
    </article> 

   </div>
   <!-- ] end json data -->


  </div>
 </section>

 <section class="row">
  <div class="large-12 columns">
   <div class="top-border footer">
    <span>© 2014. All rights reserved.</span>
   </div>
  </div>
 </section>

 <script>
 var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src='//www.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
 </script>
</body>
</html>