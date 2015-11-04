<?php
/**
 * Template Name: Services
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

<div class="services_intro">
	<?
	
	$page_id = $post->ID; // Enter your post, page or custom post type id here
 
$page_data = get_page( $page_id );  //gets all page data
 
$content = apply_filters('the_content', $page_data->post_content);  //filters just the post content
 

	?>
	<section>
		<h1>Services</h1> 
		<? echo $content;  ?>
		
		</section>
	
</div>



 <div id="services_inner">
 	
 	
 	<?
// display subpages of Main Page
$page_id = $post->ID;




$get_pageId = $page_id;
$pages = get_pages( array('child_of' => $get_pageId, 'parent' => $get_pageId, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC'));
 

for ($x = 0; $x < count($pages); $x++) {
	 
	
	
	$image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $pages[$x]->ID ), "full" );
	$image_height = $image_data[2]; 
	
	
	$trimmedfield = get_extended( $pages[$x]->post_content );
	
	
	$date=date_create($pages[$x]->post_date);
	$new_date = date_format($date,"l jS \of F Y");
	
 $user_firstname = get_the_author_meta('first_name', $pages[$x]->post_author); 
  $user_lastname = get_the_author_meta('last_name', $pages[$x]->post_author); 
	 
 
 //$field = $pages[$x]->post_content;
//$trimmedfield = wp_trim_words( $field, $num_words = 135, $more = '… ' );
	
	if ($x != -1)
	 if($x % 2 == 0){
    

 
 // echo 'left';
 echo '<div class="services_item_red">';
 echo '<div class="services_header_red">';
 
  echo '<a href="/services/'.$pages[$x]->post_name.'"><h1>'.$pages[$x]->post_title.'</h1></a>';
 
 echo '</div>';

 
	
 echo '<div class="services_content_red">';
echo "<p>".$trimmedfield['main']."</p>";

echo "<a class='services_read_more_button_red' href='/services/".$pages[$x]->post_name."' target='_blank'>READ MORE</a>";
 echo '</div>';
 echo '</div>';
	 
	
	

	  
	 }
 
 else {
  echo '<div class="services_item_white">';
 echo '<div class="services_header_white">';
 
  echo '<a href="/services/'.$pages[$x]->post_name.'"><h1>'.$pages[$x]->post_title.'</h1></a>';
 
 echo '</div>';

 
 echo '<div class="services_content_white">';	
 
echo "<p>".$trimmedfield['main']."</p>";

echo "<a class='services_read_more_button_white' href='/services/".$pages[$x]->post_name."' target='_blank'>READ MORE</a>";
 echo '</div>';
 echo '</div>';
	 
 }
	
	
	
	
	


}

?>
 	
 	
 	
 	
 	
 </div>
 
 <? include 'sheri_testimonials.php'; ?>

<? include 'sheri_contactus.php'; ?>

<?php get_footer(); ?>