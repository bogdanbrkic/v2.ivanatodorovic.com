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
$blogPosts = $client->getBlogPosts('ivanadocumentaryfilmmaker.tumblr.com', array('tag' => 'news', 'filter' => 'html'));
echo json_encode($blogPosts);
?>
