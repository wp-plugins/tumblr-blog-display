=== Tumblr Blog Display ===

Contributors: ramitdesigns
Tags: tumblr, tumblr blogs, tumblr blog display, tumblr blog list, tumblr blog display plugin, tumblr plugin, tumblr for wordpress, tumblr shortcode plugin
Requires at least: 3.0.1
Tested up to: 4.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Tumblr is a popular free blogging platform. Using tumblr you can post anywhere of your blogs. Use tumblr to showcase your ideas.

== Description ==

Tumblr is a popular free blogging platform. Using tumblr you can post anywhere of your blogs. Use tumblr to showcase your ideas.
Tumblr is a micro blogging platform. Tumblr is also a social networking platform. Using Tumblr Blog Display Shortcode you will able to display the list of latest tumblr blogs on your website. You can put the shortcode anywhere in your wordpress theme position. Using Tumblr Blog Display Shortcode is quite easy but you must have to create Tumblr API on Tumblr Official Website.
Tumblr Blog Display Shortcode – So everyone your ideas and what you’ve posted on your tumblr blog site. Tumblr Blog Display Shortcode is very useful for displaying latest blogs from tumblr in your website. And what I might haven’t mentioned yet – Tumblr Blogs will be link as well. Tumblr care about your privacy so do we. You will able to show your tumblr blog post on your website only. No mercy with your tumblr blogs privacy.

By Using our Tumblr Blog Display, you will able to show latest blogs of tumblr on your wordpress websites

Tumblr Blog Display is compatible with latest Wordpress Versions and Responsive.

We're active for any support issues. So hope you will love it.

== Installation ==

Installing this plugin is same like other wordpress plugins

1. Upload 'tumblr-blog-display-shortcode' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place <?php echo do_shortcode("[tumblr_blog]"); ?> in your themes

You can install the zip file as well - tumblr-blog-display-shortcode.zip

Available Shortcode
example: [tumblr_blog]

that is the shortcode but it won't display cause you have to pass the require attributes on the plugin
After installing the plugin you have to get the tumblr API Key as this is required field.
Another require field is the tumblr blog site url

API Key: To obtain a tumblr api key

http://www.tumblr.com/oauth/apps ->> go here. Register Application - Use oAuth Consumer Key as your API key

Tumblr Blog URL: Absolute URL of your tumblr blog page.

So minimum shortcode will be something like this

[tumblr_blog blog_url="YOUR_TUMBLR_BLOG_URL" api_key="YOUR_TUMBLR_API_KEY"]

Other available attributes are:

width, limit, text_limit, read_more

Width: Width of the module in pixel.
example: [tumblr_blog blog_url="YOUR_TUMBLR_BLOG_URL" api_key="YOUR_TUMBLR_API_KEY" width="YOUR_WIDTH"]

Post Limit: How many blog post you want to show.

example: [tumblr_blog blog_url="YOUR_TUMBLR_BLOG_URL" api_key="YOUR_TUMBLR_API_KEY" limit="YOUR_POST_LIMIT"]

limit="6" -> default

Description Text Limit: Text limit of description

[tumblr_blog blog_url="YOUR_TUMBLR_BLOG_URL" api_key="YOUR_TUMBLR_API_KEY" text_limit="No_Of_Words"]

Show Read More : true or false

[tumblr_blog blog_url="YOUR_TUMBLR_BLOG_URL" api_key="YOUR_TUMBLR_API_KEY" read_more="true"]

true is default

"false" for not showing read more link

More info -> http://ramit-designs.com/wordpress/

== Frequently Asked Questions ==

Is it free?
Yap it is :)


== Screenshots ==

Demo available here - http://ramit-designs.com/wordpress/

== Changelog ==

= 1.0 =
stable version release