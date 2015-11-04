<?

$id_page = 10;
$featured = wp_get_attachment_image_src(get_post_thumbnail_id($id_page), full, false, ''); 
$page_data = get_page( $id_page ); 

$title = $page_data->post_title; 

?>




<div id="sheri_testimonials" style="background-image: url(<? echo $featured[0]; ?>);">
	
<section>	
<h2>
<? echo $title; ?>
</h2>
</section>

 <div class="testimonials_slider">
	
	
<ul class="slider__wrapper">
       
<?

$pages = get_pages( array('child_of' => 10, 'parent' => 10, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC') );

for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)
 

echo '<li class="slider__item"><div class="testimonials_width_box"><p><a href="/sheri/testimonials/">'.$pages[$x]->post_content.'</p><span class="testimonials_person">'.$pages[$x]->post_title.'</a></span></div></li>';

}

?> 
          
	</ul>
	
	</div>	
	
	
	
</div>

