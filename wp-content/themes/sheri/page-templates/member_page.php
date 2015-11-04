<?php
/**
 * Template Name: Member Page
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

<?php $postid = 26; 

$id_page = $postid;

$featured = wp_get_attachment_image_src(get_post_thumbnail_id($id_page), full, false, ''); 


$page_data = get_page( $id_page ); 
$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);

?> 



<div id="banner" style="background-image: url(<? echo $featured[0]; ?>);"> 
	<div class="banner_inner">
	<h1>ABOUT US</h1>
	</div>
</div>

 
	
	<div class="about_us">
		<section>
		<? echo $content;  ?>
		
		</section>
	</div>


<?php $postid = 93; 

$id_page = $postid;

$featured = wp_get_attachment_image_src(get_post_thumbnail_id($id_page), full, false, ''); 


$page_data = get_page( $id_page ); 
$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);

?>


	
 <div class="our_team">
 	<section>
 	<h1><? echo $title; ?></h1>
 	<hr style="background-color: #e48c71;height: 1px;width: 40%;border: none;">
 	
 	<? echo $content; ?>
 	</section>
 	
 </div>

<div class="members" style="padding-top: 0px !important;">
	
<div class="member_inner_page">

<?php $postid = get_the_ID(); 

$id_page = $postid;

$featured = wp_get_attachment_image_src(get_post_thumbnail_id($id_page), full, false, ''); 


$page_data = get_page( $id_page ); 
$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);

$photo = get_field( "photo", $id_page );
$email = get_field( "email", $id_page );  
$occupation = get_field( "occupation", $id_page ); 

?> 


	
	<div class="member_inner_photo">
	<img src="<? echo $photo; ?>">
		
	
	</div>
	
	<div class="member_info">
		
		<h1><? echo $title; ?> | <span><? echo $occupation; ?></span></h1> 
		
		<? echo $content; ?>
		<a href="mailto:<? echo $email; ?>"><img src="http://www.shfamilylaw.ca/wp-content/themes/sheri/images/icons/mail_icon.png" /></a>
		
	</div>
	
	<div class="clear"></div>
	
</div>

	
	

	

	
	
	
	
	
</div>

<?php get_footer(); ?>