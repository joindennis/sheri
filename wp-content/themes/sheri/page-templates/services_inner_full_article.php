<?php
/**
 * Template Name: Services Full Article
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
$postid = 79; 
$id_page = $postid;
$featured = wp_get_attachment_image_src(get_post_thumbnail_id($id_page), full, false, ''); 
?> 


<div id="banner" style="background-image: url(<? echo $featured[0]; ?>);"> 
	<div class="banner_inner">
	
	</div>
</div>

<div class="blog_inner">

<?

$page_id = $post->ID; // Enter your post, page or custom post type id here
 
$page_data = get_page( $page_id );  //gets all page data
 
$content = apply_filters('the_content', $page_data->post_content);  //filters just the post content
 
$title = $page_data->post_title;  // Get title
$src_featured = wp_get_attachment_image_src(get_post_thumbnail_id($page_data->ID), 'full', false, '');

$image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $page_data->ID ), "full" );
	$image_height = $image_data[2]; 
	
$date=date_create($page_data->post_date);
	$new_date = date_format($date,"l jS \of F Y");
	
 $user_firstname = get_the_author_meta('first_name', $page_data->post_author); 
  $user_lastname = get_the_author_meta('last_name', $page_data->post_author); 	 

//echo $content;  
echo '<h1 class="h1_title">Services</h1>';
echo '<h1 class="blog_full_h1">'.$title.'</h1>';
//echo '<span class="blog_post_date">'.$new_date.' | '.$user_firstname.' '.$user_lastname.'</span>'; 
echo '<div class="blog_full_post" style="min-height:'.$image_height.'px;">';

echo $content;

echo '</div>';

?>



	
</div>



<?php get_footer(); ?>