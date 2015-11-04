<?php
// Our include
define('WP_USE_THEMES', false);
require_once('../../../wp-load.php');
 
// Our variables
$numPosts = (isset($_GET['numPosts'])) ? $_GET['numPosts'] : 0;
$page = (isset($_GET['pageNumber'])) ? $_GET['pageNumber'] : 0;
 
query_posts(array(
       'posts_per_page' => $numPosts,
       'paged'          => $page
));
 

$array_ids[]='';
$get_pageId = 30;
$pages = get_pages( array('child_of' => $get_pageId, 'parent' => $get_pageId, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC' ));
for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)
$array_ids[$x] = $pages[$x]->ID;
//echo $array_ids[$x];
}





//print_r($array_ids);
$result = count($array_ids); 

$from = ($page*4);

for ($i = $from; $i <= $result-1; $i++) {


 if($x % 2 == 0){
   
 	
 $page_id = $array_ids[$i]; // Enter your post, page or custom post type id here
 
$page_data = get_page( $page_id );  //gets all page data

//print_r($page_data);
 
$content = $page_data->post_content;  //filters just the post content
 
$title = $page_data->post_title;  // Get title
 
 $src_featured = wp_get_attachment_image_src(get_post_thumbnail_id($array_ids[$i]), 'full', false, '');
	
	
	$image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $array_ids[$i] ), "full" );
	$image_height = $image_data[2]; 
	
	
	$trimmedfield = get_extended( $content );
	
	
	$date=date_create($page_data->post_date);
	$new_date = date_format($date,"l jS \of F Y");
	
 $user_firstname = get_the_author_meta('first_name', $page_data->post_author); 
  $user_lastname = get_the_author_meta('last_name', $page_data->post_author); 

 echo '<div class="blog_post" style="height:'.$image_height.'px;">';

 echo '<img class="blog_right_align_image"  src="'.$src_featured[0].' ">';
 // echo 'left';
 
 echo '<a href="'.$pages[$x]->ID.'"><h1>'.$title.'</h1></a>';
 
 echo '<span class="blog_post_date">'.$new_date.' | '.$user_firstname.' '.$user_lastname.'</span>'; 	
 
echo "<p>".$trimmedfield['main']."</p>";
echo "<a class='read_more_button' href='".$page_data->guid."'>READ MORE</a>";
 
	 echo '</div>';
	 echo '<img src="http://www.shfamilylaw.ca/wp-content/themes/sheri/images/background/blog_dotted_line_bg.png">';
	





 }
 
 else {
 
 $page_id = $array_ids[$i]; // Enter your post, page or custom post type id here
 
$page_data = get_page( $page_id );  //gets all page data

//print_r($page_data);
 
$content = $page_data->post_content;  //filters just the post content
 
$title = $page_data->post_title;  // Get title
 
 $src_featured = wp_get_attachment_image_src(get_post_thumbnail_id($array_ids[$i]), 'full', false, '');
	
	
	$image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $array_ids[$i] ), "full" );
	$image_height = $image_data[2]; 
	
	
	$trimmedfield = get_extended( $content );
	
	
	$date=date_create($page_data->post_date);
	$new_date = date_format($date,"l jS \of F Y");
	
 $user_firstname = get_the_author_meta('first_name', $page_data->post_author); 
  $user_lastname = get_the_author_meta('last_name', $page_data->post_author); 

 echo '<div class="blog_post" style="height:'.$image_height.'px;">';

 echo '<img class="blog_left_align_image"  src="'.$src_featured[0].' ">';
 // echo 'left';
 
 echo '<a href="'.$pages[$x]->ID.'"><h1>'.$title.'</h1></a>';
 
 echo '<span class="blog_post_date">'.$new_date.' | '.$user_firstname.' '.$user_lastname.'</span>'; 	
 
echo "<p>".$trimmedfield['main']."</p>";
echo "<a class='read_more_button' href='".$page_data->guid."'>READ MORE</a>";
 
	 echo '</div>';
	 echo '<img src="http://www.shfamilylaw.ca/wp-content/themes/sheri/images/background/blog_dotted_line_bg.png">';
	
 }



  
}


?>

