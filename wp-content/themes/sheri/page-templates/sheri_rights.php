<?

$id_page = 47;
$featured = wp_get_attachment_image_src(get_post_thumbnail_id($id_page), full, false, ''); 
$page_data = get_page( $id_page ); 
$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);

?>


<div id="sheri_right" style="background-image: url(<? echo $featured[0]; ?>);">
<section>	
<h2>
<? echo $title; ?>
</h2>

<? echo $content;?>	
<button class="consultation"  onclick="window.location.href='/contact-us/free-consultation/#form'">Contact us for a free initial consultation</button>

</section> 	
</div>