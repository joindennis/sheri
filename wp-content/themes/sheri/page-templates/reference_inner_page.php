<?php
/**
 * Template Name: Reference Single Page
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
$postid = 28; 
$id_page = $postid;
$featured = wp_get_attachment_image_src(get_post_thumbnail_id($id_page), full, false, ''); 
?> 

<?php 

$postid = get_the_ID();
$id_page = $postid;
$page_data = get_page( $id_page ); 
$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);
$featured_icon = wp_get_attachment_image_src(get_post_thumbnail_id($id_page), full, false, ''); 

?> 

<div id="banner" style="background-image: url(<? echo $featured[0]; ?>);"> 
	<div class="banner_inner">
	
	</div>
</div>

 <div class="resources_single_page">
 	
 	<section>
		<h1><? echo $title;  ?></h1>
		<? echo $content; ?>
		
		</section>
 	
 	
 	<?
 	
 	$get_pageId = get_the_ID();
$pages = get_pages( array('child_of' => $get_pageId, 'parent' => $get_pageId, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC' ));
for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)

$subtitle = get_field( "sub_title", $pages[$x]->ID );


if(($x+1) % 1 == 0) {
echo '<div class="resources_media_icon">'; 

echo '<div class="header"><a href="'.$subtitle.'" target="_blank"><img src="'.$featured_icon[0].'"></div>';
echo '<div class="title">'. $pages[$x]->post_title .'</div>';
echo '<div class="sub_title">'.$subtitle.'</a></div>';
echo '<div class="body">'.$pages[$x]->post_content.'</div>';



echo '</div>';
echo '<div class="clear"></div><hr style="background-color: #e9e9ea;height: 1px;width: 86%;border: none; margin: 0 auto; display:block;margin-bottom:40px;">';
}

else {
echo '<div class="resources_media_icon">';

echo '<div class="header"><img src="'.$featured_icon[0].'"></div>';
echo '<div class="title">'. $pages[$x]->post_title .'</div>';
echo '<div class="sub_title">'.$subtitle.'</div>';


echo '</div>';
} 



}
 	
 	
 	?>
 	<div class="clear"></div>
 	

 	
 </div>
 
 
 <? include 'resources_catalogue.php'; ?>
 <? include 'sheri_contactus.php'; ?>
 <? include 'sheri_testimonials.php'; ?>


<?php get_footer(); ?>