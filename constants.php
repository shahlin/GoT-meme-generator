<?php

// Smarty directory path
define("SMARTY_PATH", 'lib/smarty-3.1.33/libs');

// Templates directory path
define("TEMPLATES_PATH", 'templates');

// Subreddit to fetch data from
define("SUBREDDIT", 'freefolk');

// Top posts past day/month/year/all
define("TOP_PERIOD", 'day');

// Number of posts to fetch in a request
// Max limit is 100
// To fetch more than 100, use the after query parameter with the name of the last
// post. This will get 100 posts after the last one. However you will have to 
// run the request twice.
define("POSTS_LIMIT", 100);

// Reddit URL to get data from
define("DATA_URL", 'https://www.reddit.com/r/'.SUBREDDIT.'/top.json?t='.TOP_PERIOD.'&limit='.POSTS_LIMIT);
?>