<?

$id_page = 45;
$featured = wp_get_attachment_image_src(get_post_thumbnail_id($id_page), full, false, ''); 


$page_data = get_page( $id_page ); 

$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);





?>

<div id="sheri_intro" style="background-image: url(<? echo $featured[0]; ?>);">
	
	<div class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo/into_logo.png" /></div>
	
	<section>
		
	<?
	
	echo $content;
	
	
	
	?>
	
	
	<h2>Our promises to our clients:</h2>
	

	
	
	
		
	</section>
	
<?
$id_page = 58;
$page_data = get_page( $id_page ); 
$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);
?>
	
	
		<div class="rules rule_1">
		
		<div class="number">1</div>
		<div class="title"><? echo $title; ?>
			<hr style="background-color: #e9baa9;height: 2px;width: 80%;border: none;" />
		</div>
		<div class="body"><? echo $content; ?></div>
		
		
	</div>
	
<?
$id_page = 57;
$page_data = get_page( $id_page ); 
$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);
?>	
		<div class="rules">
		
		<div class="number">2</div>
		<div class="title"><? echo $title; ?>
			<hr style="background-color: #e9baa9;height: 2px;width: 80%;border: none;" />
		</div>
		<div class="body"><? echo $content; ?></div>
		
		
	</div>
<?
$id_page = 56;
$page_data = get_page( $id_page ); 
$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);
?>		
			<div class="rules">
		
		<div class="number">3</div>
	<div class="title"><? echo $title; ?>
		
		<hr style="background-color: #e9baa9;height: 2px;width: 80%;border: none;" />
	</div>
		<div class="body"><? echo $content; ?></div>
		
		
	</div>
	
	<?
$id_page = 55;
$page_data = get_page( $id_page ); 
$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);
?>	
			<div class="rules">
		
		<div class="number">4</div>
		<div class="title"><? echo $title; ?>
			<hr style="background-color: #e9baa9;height: 2px;width: 80%;border: none;" />
			
		</div>
		<div class="body"><? echo $content; ?></div>
		
		
	</div>
	
	
	
	<div class="clear"></div>
	
</div>