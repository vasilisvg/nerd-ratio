<?php
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
function mytheme_comment($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>
<li id="comment-<?php comment_ID() ?>">
	<article itemprop="UserComment" role="article">
		<footer>
			<ul class="details">
				<li><cite><?php echo get_clean_comment_author_link(); ?></cite></li>
				<li><time itemprop="commentTime" datetime="<?php echo get_comment_date('Y-m-d'); ?>"><?php echo get_comment_date(); ?></time></li>
				<li><a href="#comment-<?php comment_ID() ?>" class="commentlink">#</a></li>
			</ul>
		</footer>
		<div itemprop="commentText">
<?php comment_text() ?>
		</div>
	</article>
<?php
}

function get_clean_comment_author_link() {
	$url    = get_comment_author_url();
	$author = get_comment_author();
if ( empty( $url ) || 'http://' == $url )
		$return = '<span itemprop="creator">'.$author.'</span>';
	else
		$return = "<a href=\"$url\" itemprop=\"creator\">$author</a>";
	return apply_filters('get_comment_author_link', $return);
}


function strip_tags_attributes($string,$allowtags=NULL,$allowattributes=NULL){
    $string = strip_tags($string,$allowtags);
    if (!is_null($allowattributes)) {
        if(!is_array($allowattributes))
            $allowattributes = explode(",",$allowattributes);
        if(is_array($allowattributes))
            $allowattributes = implode(")(?<!",$allowattributes);
        if (strlen($allowattributes) > 0)
            $allowattributes = "(?<!".$allowattributes.")";
        $string = preg_replace_callback("/<[^>]*>/i",create_function(
            '$matches',
            'return preg_replace("/ [^ =]*'.$allowattributes.'=(\"[^\"]*\"|\'[^\']*\')/i", "", $matches[0]);'
        ),$string);
    }
    return $string;
}
function new_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

//create bit.ly url
function bitly()
{
	//login information
	$url = get_permalink();  //generates wordpress' permalink
	$login = 'vasilisvg';	//your bit.ly login
	$apikey = 'R_f510e892d990ee8996b3acfdc864ee5f'; //bit.ly apikey
	$format = 'json';	//choose between json or xml
	$version = '2.0.1';

	//create the URL
	$bitly = 'http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url).'&login='.$login.'&apiKey='.$apikey.'&format='.$format;

	//get the url
	//could also use cURL here
	$response = file_get_contents($bitly);

	//parse depending on desired format
	if(strtolower($format) == 'json')
	{
		$json = @json_decode($response,true);
		echo $json['results'][$url]['shortUrl'];
	}
	else //xml
	{
		$xml = simplexml_load_string($response);
		echo 'http://bit.ly/'.$xml->results->nodeKeyVal->hash;
	}
}

function twentyten_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'twentyten_remove_recent_comments_style' );

function getLessn($key,$id){
if (get_post_meta($id, $key, false)){
	$meta = get_post_meta($id, $key, false);
	$i=count($meta);
	foreach($meta as $meta) {
		$via.=$meta;
	}
	return $via;
}
}

function change_wp_search_size($query) {
	if ( $query->is_search ) // Make sure it is a search page
		$query->query_vars['posts_per_page'] = 20; // Change 10 to the number of posts you would like to show

	return $query; // Return our modified query variables
}
add_filter('pre_get_posts', 'change_wp_search_size'); // Hook our custom function onto the request filter

function getNerdLanguage() {
	if (strtotime(get_the_date('Y-m-d')) >= strtotime('2011-11-01')) {
		return 'en';
	} else {
		return 'nl';
	}
}

?>
