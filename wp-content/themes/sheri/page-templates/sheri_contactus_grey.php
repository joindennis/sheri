<?

$id_page = 16;
 
$page_data = get_page( $id_page ); 
$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);

?>

 
	<div id="sheri_contactus">
	<section>	
<h2>
<? echo $title; ?>
</h2>
<hr style="background-color: #f3745d;height: 1px;width: 80%;border: none; margin: 0 auto;">
</section>


<div class="contactus_form">
	
	<form action="/status/general-inquiry-form/send/" method="post" id="home_contact_form" name="home_contact_form">
	
	<input placeholder="Name:" type="text" id="fname" name="fname"/>
	<input placeholder="Email:" type="email" id="email" name="email"/>
	<textarea placeholder="Your Inquiry:" name="message" id="message" maxlength="750"></textarea>
	
		<div class="captcha_left">
					
					<div class="captcha_code"><img id="captchaimg" name="captchaimg" src="<?php bloginfo('template_directory'); ?>/captcha_code_file_grey.php?rand=387223787&quot;"></div>
					<div class="captcha_enter_code_title">Enter the code above here:</div>
					<div class="input_code_here"><input type="text" class="clear" placeholder="" name="letters_code" id="letters_code"></div>
					<div class="cant_see"><small>
Can't read the image? Click <a href="javascript: refreshCaptcha();" style="color:#eee;">here</a> to refresh.</small></div>
					
					
					
					
				</div>
	

	<input type="submit" value="SUBMIT"/>
	
	</form>
	
</div>


</div>