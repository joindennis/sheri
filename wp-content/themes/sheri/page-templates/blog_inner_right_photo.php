<?php
/**
 * Template Name: Blog Right Align Image
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<?php 
$postid = 30; 
$id_page = $postid;
$featured = wp_get_attachment_image_src(get_post_thumbnail_id($id_page), full, false, ''); 
?> 


<div id="banner" style="background-image: url(<? echo $featured[0]; ?>);"> 
	<div class="banner_inner">
	<h1>BLOG</h1>
	</div>
</div>

<div class="blog_inner">
 <?
 // $page_id = $post->ID;
 $page_id = 191;
 
  
 
$page_data = get_page( $page_id );  //gets all page data
 
$content = apply_filters('the_content', $page_data->post_content);  //filters just the post content
 
$title = $page_data->post_title;  // Get title
 
echo $content;  // Output Content
 
 ?>
	
</div>



<?php get_footer(); ?>