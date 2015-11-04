<?php
/**
 * Template Name: Testimonials
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
$postid = 10; 
$id_page = $postid;
$page_data = get_page( $id_page ); 
$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);
$featured = get_field( "background", $postid);
?> 


<div id="banner" style="background-image: url(<? echo $featured; ?>);"> 
	<div class="banner_inner multiply">

	</div>
</div>

<div id="testimonials">
	
	<section>
		
		<h1><? echo $title;  ?></h1>
		<? echo  $content; ?>
		
		</section>
		
		<?
		
		$get_pageId = 10;
$pages = get_pages( array('child_of' => $get_pageId, 'parent' => $get_pageId, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'DESC' ));
for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)

echo '<img class="divider_testimonials" src="http://www.shfamilylaw.ca/wp-content/themes/sheri/images/background/blog_dotted_line_bg.png">';

echo "<p><span class='testimonial'>".$pages[$x]->post_content."</span>";

echo '<hr style="background-color: #d5d5d6;height: 1px;width: 136px;border: none;">';

echo "<h2>" . $pages[$x]->post_title . "</h2></p>";
}
		
		
		?>
	
</div>




<?php get_footer(); ?>