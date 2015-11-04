<?php
/**
 * Template Name: Blog
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
<div id="blog_main">
<?php 
$postid = 30; 
$id_page = $postid;
$featured = wp_get_attachment_image_src(get_post_thumbnail_id($id_page), full, false, ''); 
?> 


<div id="banner" style="background-image: url(<? echo $featured[0]; ?>);"> 
	<div class="banner_inner">
	 
	</div>
</div>

<div class="blog_inner">
	
	<section>
		<h1>Welcome to our Blog</h1>
		
	
		</section>

<?
// display subpages of Main Page
$page_id = $post->ID;




$get_pageId = $page_id;
$pages = get_pages( array('child_of' => $get_pageId, 'parent' => $get_pageId, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC','number' =>4 ));
 
 
for ($x = 0; $x < count($pages); $x++) {
	$src_featured = wp_get_attachment_image_src(get_post_thumbnail_id($pages[$x]->ID), 'full', false, '');
	
	
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
   echo '<div class="blog_post" style="height:'.$image_height.'px;">';

 echo '<img class="blog_left_align_image"  src="'.$src_featured[0].' ">';
 // echo 'left';
 
 echo '<a href="/blog/'.$pages[$x]->post_name.'"><h1>'.$pages[$x]->post_title.'</h1></a>';
 
 echo '<span class="blog_post_date">'.$new_date.' | '.$user_firstname.' '.$user_lastname.'</span>'; 	
 
echo "<p>".$trimmedfield['main']."</p>";

echo "<a class='read_more_button' href='/blog/".$pages[$x]->post_name."'>READ MORE</a>";

 
	 echo '</div>';
	 echo '<img src="http://www.shfamilylaw.ca/wp-content/themes/sheri/images/background/blog_dotted_line_bg.png">';
	

	  
	 }
 
 else {
 	   echo '<div class="blog_post" style="height:'.$image_height.'px;">';

 echo '<img class="blog_right_align_image"  src="'.$src_featured[0].' ">';
 // echo 'left';
 
 echo '<a href="/blog/'.$pages[$x]->post_name.'"><h1>'.$pages[$x]->post_title.'</h1></a>';
 
 echo '<span class="blog_post_date">'.$new_date.' | '.$user_firstname.' '.$user_lastname.'</span>'; 	
 
echo "<p>".$trimmedfield['main']."</p>";
echo "<a class='read_more_button' href='/blog/".$pages[$x]->post_name."'>READ MORE</a>";
	 echo '</div>';
	  echo '<img src="http://mykarrots.ca/sheri/wp-content/themes/sheri/images/background/blog_dotted_line_bg.png">';
 }
	
	
	
	
	


}


?>
	
</div>


 </div>
 <button id="load_more_articles">LOAD MORE POSTS</button>

<?php get_footer(); ?>