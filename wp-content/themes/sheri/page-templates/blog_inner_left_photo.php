<?php
/**
 * Template Name: Blog Left Align Image
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
// display subpages of Main Page
$page_id = $post->ID;
$get_pageId = $page_id;
$pages = get_pages( array('child_of' => $get_pageId, 'parent' => $get_pageId, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'DESC' ));
for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)
echo "<p><a href='?page_id=" . $pages[$x]->ID . "&catId=$get_pageId&highlight=Events'>" . $pages[$x]->post_title . "</a><br>".$pages[$x]->post_content."</p>";
}
?>



	
</div>



<?php get_footer(); ?>