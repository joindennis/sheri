<?php
/**
 * Template Name: About Us
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



<div id="banner" style="background-image: url(<? echo $featured[0]; ?>);"> 
	<div class="banner_inner">
 
	</div>
</div>

<div class="about_us">
		<section>
		
		<h1><? echo $title;  ?></h1>
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

<div class="members">
	
<?
	
$get_pageId = 93;
$pages = get_pages( array('child_of' => $get_pageId, 'parent' => $get_pageId, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC' ));

for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)

$featured = wp_get_attachment_image_src(get_post_thumbnail_id($pages[$x]->ID), full, false, '');
$email = get_field( "email", $pages[$x]->ID );  
$occupation = get_field( "occupation", $pages[$x]->ID ); 
//echo "<p><a href='?page_id=" . $pages[$x]->ID . "&catId=$get_pageId&highlight=Events'>" . $pages[$x]->post_title . "</a><br>".$pages[$x]->post_content."</p>";

echo '<div class="member_box">';
echo '<div class="header"><h1>'. $pages[$x]->post_title .'</h1><hr style="background-color: #e9baa9;height: 1px;width: 80%;border: none;"><span>'.$occupation.'</span></div>';
echo '<div class="photo"><a href="#" class="open_modal" data-idmodal="'.$pages[$x]->ID.'"><img src="'.$featured[0].'"></a></div>';
echo '<div class="email"><a href="mailto:'.$email.'"><img src="http://www.shfamilylaw.ca/wp-content/themes/sheri/images/icons/mail_icon.png"></a></div>';
echo '</div>';


?>


<div class="member_pop_up_<? echo $pages[$x]->ID; ?>">
	
	<div class="member">
		
		
		
		<div class="members_popup">
	
<div class="member_inner_page">

<?php $postid = $pages[$x]->ID; 

$id_page = $postid;

$featured = wp_get_attachment_image_src(get_post_thumbnail_id($id_page), full, false, ''); 


$page_data = get_page( $id_page ); 
$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);

$photo = get_field( "photo", $pages[$x]->ID );
$email = get_field( "email", $id_page );  
$occupation = get_field( "occupation", $id_page ); 

?> 


	
	<div class="member_inner_photo">
	<img src="<? echo $photo; ?>">
		
	
	</div>
	
	<div class="member_info">
			<a href="#"><img class="close_modal" data-idmodalclose="<? echo $id_page; ?>" src="http://mykarrots.ca/sheri/wp-content/themes/sheri/images/icons/close_modal.png"></a>
		<h1><? echo $title; ?> | <span><? echo $occupation; ?></span></h1> 
		
		<? echo $content; ?>
		<a href="mailto:<? echo $email; ?>"><img src="http://mykarrots.ca/sheri/wp-content/themes/sheri/images/icons/mail_icon.png" /></a>
		
	</div>
	
	<div class="clear"></div>
	
</div>

	
	

	

	
</div></div>	
	
	
	
</div>














<?
}
			
?>


	
</div>



<?php get_footer(); ?>