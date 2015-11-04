<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<div class="clear"></div>
	<footer>
	<div class="footer_left">
<?
$page_id = 39; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id );  //gets all page data
$content = apply_filters('the_content', $page_data->post_content);
$title = apply_filters('the_content', $page_data->post_title);   //filters just the post content

$footer_address = get_field( "footer_address", 39 );
$footer_direction_link = get_field( "footer_direction_link", 39 );
$footer_phone = get_field( "footer_phone", 39 );
$footer_fax = get_field( "footer_fax", 39 );
$footer_email = get_field( "footer_email", 39 );

?>
		
	 <? echo $title; 
		
	 echo '
	 <div class="footer_contacts">
	 <div class="footer_icon"><img src="';  bloginfo('template_directory');  echo '/images/footer/home.png"></div>
	 <div class="footer_content color_grey">'.$footer_address.'</div>
	 </div>
	 ';
	 
	 
	  echo '<div class="clear"></div>
	 <div class="footer_contacts">
	 <div class="footer_icon"><img src="';  bloginfo('template_directory');  echo '/images/footer/earth.png"></div>
	  <div class="footer_content color_grey"><a href="/contact-us/">'.$footer_direction_link.'</a></div>
	 </div>
	 ';
	 	 
	 
	  echo '<div class="clear"></div>
	 <div class="footer_contacts">
	 <div class="footer_icon"><img src="';  bloginfo('template_directory');  echo '/images/footer/phone.png"></div>
	  <div class="footer_content color_grey">'.$footer_phone.'</div>
	 </div>
	 ';
	 	 
	 
	  echo '<div class="clear"></div>
	 <div class="footer_contacts">
	 <div class="footer_icon"><img src="';  bloginfo('template_directory');  echo '/images/footer/fax.png"></div>
	  <div class="footer_content color_grey">'.$footer_fax.'</div>
	 </div>
	 ';
	 	 
	 
	  echo '<div class="clear"></div>
	 <div class="footer_contacts">
	 <div class="footer_icon"><img src="';  bloginfo('template_directory');  echo '/images/footer/email.png"></div>
	  <div class="footer_content color_grey"><a href="mailto:'.$footer_email.'">'.$footer_email.'</a></div>
	 </div>
	 ';
		
		
		 ?>
		
		 </div>
		 
		 
		 <div class="footer_center">
		
		<h1 id="footer_latest_posts">LATEST BLOG POSTS</h1> 
		
		<?
		
		$get_pageId = 30;
		
		echo '<div id="last_4_posts_blog">';
		
		$pages = get_pages( array('child_of' => $get_pageId, 'parent' => $get_pageId, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC', 'number' => 3));

		//print_r($pages);
		
		for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)
$date=date_create($pages[$x]->post_date);
	$new_date = date_format($date,"l jS \of F Y");
	
	 $user_firstname = get_the_author_meta('first_name', $pages[$x]->post_author); 
  $user_lastname = get_the_author_meta('last_name', $pages[$x]->post_author); 
	
	//print_r($pages[$x]->guid);
echo '<h3><a href="/blog/'.$pages[$x]->post_name.'">'.$pages[$x]->post_title.'</a></h3>';
echo '<span class="date_posted">'.$new_date.' | '. $user_firstname.' '.$user_lastname.'</span>';




//echo "<p><a href='?page_id=" . $pages[$x]->ID . "&catId=$get_pageId&highlight=Events'>" . $pages[$x]->post_title . "</a><br>".$pages[$x]->post_content."</p>";
}
	
	
		echo '</div>';
echo '<a class="go_to_blog" href="/blog/">VIEW MORE POSTS</a>';	
		
		
		?>
		 </div>
		 
		 <div class="footer_right">
		
<?

footer_right_menu('QUICK LINKS');


?>
		
		 </div>
		 <div class="clear"></div>
		 
		 <div class="footer_copyright">
		
<?
$page_id = 37; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id );  //gets all page data
$content = apply_filters('the_content', $page_data->post_content);  //filters just the post content
echo $content;  // Output Content
?>

<div id="footer_bottom_social">
	<a href='https://plus.google.com/116164670493666929673/about?hl=en' class="footer_img_bottom_social" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/header/social/bottom/googleplus.png"></a>
	 
		 </div>
		 
	 
	</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- <script src="<?php bloginfo('template_directory'); ?>/js/drop_down_menu.js"></script> -->
<script src="<?php bloginfo('template_directory'); ?>/js/doubletaptogo.js"></script>


<script>
	$( function()
	{
		$( '#nav li:has(ul)' ).doubleTapToGo();

	});
</script>


<script>
			var glide = $('.testimonials_slider').glide().data('api_glide');

			$(window).on('keyup', function (key) {
				if (key.keyCode === 13) {
					glide.jump(3, console.log('Wooo!'));
				};
			});

			$('.slider__arrows-item').on('click', function() {
				console.log(glide.current());
			});
		</script>



<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}

function refreshCaptcha0()
{
	var img = document.images['captchaimg0'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}

</script>  

<script>
jQuery(document).ready(function() {	
	$('#google_map').hover(function(){
	$('#google_map_opacity').fadeOut('slow');
	$('#google_map_logo').fadeOut('slow');
	
}).mouseleave(function() {
	$('#google_map_opacity').fadeIn('slow');
	$('#google_map_logo').fadeIn('slow');
});

});

</script>

<script>
jQuery(document).ready(function() {	
$('.close_modal').click(function(event){
	event.preventDefault();
	 var get_id_close = $(this).data('idmodalclose');
	 console.log(get_id_close);
	 $('div.member_pop_up_'+get_id_close).css("display",'none'); 
});


$('.open_modal').click(function(event){
	//$('div.member_pop_up').css('display','none');
	  event.preventDefault();
	  var get_id = $(this).data('idmodal');
	  
	  var search_string = 'div.member_pop_up_'+get_id;
	  $('div.member_pop_up_'+get_id).css("display",'block'); 
	//console.log(search_string);
});
 	
}); 

</script>



</body>
</html>