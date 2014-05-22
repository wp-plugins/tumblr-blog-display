<?php
/**
 * @package tumblr-blog-display
*/
/*
Plugin Name: Tumblr Blog Display
Plugin URI: http://www.ramit-designs.com
Description: Tumblr Blog Display, Tumblr on Website, Tumblr Display, Tumblr Blogs, Tumblr Blog Shortcode, Tumblr, Tumblr Wordpress
Version: 1.0
Author: Matt Armstrong
Author URI: http://www.ramit-designs.com
*/
// style sheets
add_action( 'wp_enqueue_scripts', 'register_plugin_styles_tumblr_blog_display_shortcode' );
add_shortcode('tumblr_blog', 'tumblr_blog_display_shortcode');

function tumblr_blog_display_shortcode($atts){
    $atts = shortcode_atts(array(
 		'blog_url' => '',
 		'api_key' => '',
                'width' => '450',
                'limit' => '6',
                'text_limit' => '5',
                'read_more' => 'true'
 	), $atts);
    extract($atts);
    $tumblrFeed = "http://api.tumblr.com/v2/blog/$blog_url/posts/text?api_key=$api_key&notes_info=true";
    $tumblrFeedGrab = json_decode(file_get_contents($tumblrFeed),true);
    $postItem[] = $tumblrFeedGrab['response']['posts'];
    $data = "";
    if($blog_url == '' && $api_key == ''){
        $data .= "blog_url &amp; api_key are require field to display tumblr blog in wordpress";
    }
    else{
    $data .= "
        <div class='tumblr_blog_display' style='width: $width";
    $data .= "px;'>
            <div class='blogWarp'>
";
    for($i=0;$i<$limit;$i++){
        foreach($postItem as $value){
            $data .= "<div class='postWarp'>";
                $data .= "<div class='tumblrTitle'>";
                    $t_post_url = $value[$i]['post_url'];
                    $t_post_title = $value[$i]['title'];
                    $data .= "<a href='$t_post_url' target='_blank'>$t_post_title</a>";
                $data .= "</div>";
                $data .= "<div class='tumblrDescription'>";
                    $t_post_desc = trimWords(strip_tags($value[$i]['body']),$text_limit);
                    $data .= "$t_post_desc";
                    if($read_more == "true"){
                        $data .= "<div class='display:block'>";
                            $data .= "<a href='$t_post_url' target='_blank'>read more..</a>";
                        $data .= "</div>";
                    }
                $data .= "</div>";
            $data .= "</div>";

        }
    }
    $data .= "</div>
        </div>";
    }
    return $data;
    }
function trimWords($string, $limit)
{
    $words = explode(' ', $string);
    return implode(' ', array_slice($words, 0, $limit));
}
 function register_plugin_styles_tumblr_blog_display_shortcode() {
     wp_register_style( 'tumblr_blog_display_shortcode', plugins_url( 'assets/style.css' , __FILE__ ) );
     wp_enqueue_style('tumblr_blog_display_shortcode');
 }