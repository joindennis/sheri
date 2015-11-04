<?php
/**
 * Template Name: Resources
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

<?php $postid = get_the_ID(); 

$id_page = $postid;

$featured = wp_get_attachment_image_src(get_post_thumbnail_id($id_page), full, false, ''); 


$page_data = get_page( $id_page ); 
$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);

?> 
<div id="resources_page">
<div id="banner" style="background-image: url(<? echo $featured[0]; ?>);"> 
<div class="banner_inner">
	
	</div>
</div>

<div class="about_resources">
	<section>
		<h1><? echo $title;  ?></h1>
		
		<? echo  $content; ?>
		
		</section>
	
	<? include 'resources_catalogue.php'; ?>
	
<? include 'sheri_contactus.php'; ?>

<? include 'sheri_testimonials.php'; ?>
	
</div>



</div>
<?php get_footer(); ?>