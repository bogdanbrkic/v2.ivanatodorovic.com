<?php
//JSON
// $rest_json = file_get_contents("http://api.tumblr.com/v2/blog/bogdanbrkic.tumblr.com/posts/text?limit=inclusive&notes_info=false&api_key=fURuMb8kCwSsIsDOxj7tsfuV9U6zzXRkF07mARqJqIetoJAlt4");
$rest_json = file_get_contents("http://api.tumblr.com/v2/blog/ivanadocumentaryfilmmaker.tumblr.com/posts/text?limit=inclusive&notes_info=false&api_key=fURuMb8kCwSsIsDOxj7tsfuV9U6zzXRkF07mARqJqIetoJAlt4");

$rest_vars = json_decode($rest_json, true);
// $client->getBlogPosts($blogName, $options = null);
// echo json_encode($rest_vars);
?>