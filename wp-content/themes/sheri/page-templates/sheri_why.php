<?

$id_page = 48;
$featured = wp_get_attachment_image_src(get_post_thumbnail_id($id_page), full, false, ''); 
$page_data = get_page( $id_page ); 
$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);

?>


<div id="sheri_why" style="background-image: url(<? echo $featured[0]; ?>); background-size: cover;">
<section>	
<h2>
<? echo $title; ?>
</h2>
<hr style="background-color: #696a6c;height: 1px;width: 80%;border: none;">

<? echo $content;?>	
</section> 	
</div>