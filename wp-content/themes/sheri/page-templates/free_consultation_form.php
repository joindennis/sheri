<?

$id_page = 118;
 
$page_data = get_page( $id_page ); 
$title = $page_data->post_title; 
$content = apply_filters('the_content', $page_data->post_content);

?>

 <div class="free_consultation_form">
	<div id="sheri_contactus">
	<section>	
<a name="form"></a>
<h2>
Contact Us For a Free Consultation
</h2>
<hr style="background-color: #f3745d;height: 1px;width: 80%;border: none; margin: 0 auto;">

<? echo $content; ?>
</section>


<div class="contactus_form">
	
	<form action="/status/consultation-form/send/" method="post" id="home_contact_form" name="home_contact_form">
	
	<input placeholder="Name:" type="text" id="fname" name="fname"/>
	<input placeholder="Email:" type="email" id="email" name="email"/>
	
	
	
	<input placeholder="Phone number:" type="text" id="phone" name="phone" />
	
	<select required="" name="leave_message" class="leave_message">
    <option selected="selected" disabled="disabled" value="none">May we leave you a message?</option>
<option value="Yes">Yes</option>
<option value="No">No</option>


    
</select>
	 
		<select required="" name="reason" id="reason" class="reason">
    <option selected="selected" disabled="disabled" value="none">Reason of Inquiry:</option>
<option value="Reason of Inquiry: Divorce">Divorce</option>
<option value="Reason of Inquiry: Custody & Access">Custody & Access</option>
<option value="Reason of Inquiry: Child Support">Child Support</option>
<option value="Reason of Inquiry: Spousal Support">Spousal Support</option>
<option value="Reason of Inquiry: Marriage Contract">Marriage Contract</option>
<option value="Reason of Inquiry: Division of Property">Division of Property</option>
<option value="Reason of Inquiry: Child Protection">Child Protection</option>
<option value="Reason of Inquiry: Parenting Contract">Parenting Contract</option>
<option value="Reason of Inquiry: Separation Agreement">Separation Agreement</option>
<option value="Reason of Inquiry: Cohabitation Agreement">Cohabitation Agreement</option>
<option value="Reason of Inquiry: Other">Other</option>


    
</select>


<select class="hear" name="hear" required="">
    <option value="none" disabled="disabled" selected="selected">How did you hear about us?</option>
<option value="How did you hear about us? Lawyer">Lawyer</option>
<option value="How did you hear about us? Family">Family</option>
<option value="How did you hear about us? Friend">Friend</option>
<option value="How did you hear about us? Internet">Internet</option>
<option value="How did you hear about us? Search">Search</option>
<option value="How did you hear about us? Other">Other</option>


    
</select>
	
	
	
	<textarea placeholder="Additional Comments:" name="message" id="message"></textarea>
	
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
</div>