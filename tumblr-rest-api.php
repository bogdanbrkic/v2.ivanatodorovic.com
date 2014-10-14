<html ng-app="appTumblr">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <script src="http://code.angularjs.org/1.2.4/angular.min.js"></script>
 <script src="http://code.angularjs.org/1.2.9/angular-route.js"></script>
 <script src="http://code.angularjs.org/1.2.9/angular-resource.js"></script>
 <script src="http://code.angularjs.org/1.2.6/angular-sanitize.min.js"></script>

</head>
<body>

 <section >

   <!-- json data [ -->
   <div ng-controller="FetchTumblrPostsCtrl">

  <h1>{{test}}</h1>

    <article ng-repeat="post in posts">

     <h2>{{$index}}</h2>

     <!-- text blog post -->
     <h3>{{post.title}}</h3>
     <div ng-bind-html="post.date"></div>
     <div ng-bind-html="post.body"></div>

     <!-- iterate through phots array and take 500px size of img -->
     <ul>

      <li ng-repeat="photo in post.photos">
       <h4>{{$index}}</h4>
       <img ng-src="{{photo['alt_sizes'][1]['url']}}">
      </li>

     </ul>

    </article>

   </div>
   <!-- ] end json data -->

 </section>

<script type="text/html" src="app/app.js"></script> <!-- use type text/html for json return -->
<script type="text/html" src="app/controllers.js"></script>
<script type="text/html" src="app/services.js"></script>
</body>
</html>
