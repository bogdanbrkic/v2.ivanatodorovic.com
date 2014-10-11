<?php

$includeDir = dirname(__FILE__).'/tumblr-php-api/lib/Tumblr/API/';
require_once (dirname(__FILE__) . '/vendor/autoload.php');

require_once($includeDir . 'RequestHandler.php');
require_once($includeDir . 'RequestException.php');
require_once($includeDir . 'Client.php');

// Authenticate via OAuth
$client = new Tumblr\API\Client(
	'fURuMb8kCwSsIsDOxj7tsfuV9U6zzXRkF07mARqJqIetoJAlt4',
	'6TwkMGNwwLFb2cPRL1XYmFBQgMy40JM3RTnBgBCWXJCdbTNHNc',
	'RxWEWboCq4QCvU7IU7bcG2P01G0kNHiLhNL9MLsBvhoAglrIAs',
	'K4TqEwdn7LYA5G3looXW4rc0QSOvxWL85TzkzOZz4xqBJqPM1S'
	);

// Make API request
$tmp = $client->getBlogPosts('bogdanbrkic.tumblr.com', array('type' => 'text'));

foreach ($tmp->posts as $item) {
	echo $item->slug . "\n";
}

/*
	get JSON data
	format :: filter=row | text | html
*/
$rest_json = file_get_contents("http://api.tumblr.com/v2/blog/bogdanbrkic.tumblr.com/posts/text?filter=row&api_key=fURuMb8kCwSsIsDOxj7tsfuV9U6zzXRkF07mARqJqIetoJAlt4&notes_info=true");
$rest_vars = json_decode($rest_json, true);  
print_r($rest_vars);

?>
