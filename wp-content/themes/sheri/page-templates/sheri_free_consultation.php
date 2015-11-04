<?php
/**
 * Template Name: Free Consultation
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
<div id="contact_us">
<div id="google_map" style="position: relative;">
	<div style="display: block; opacity: 0.527584;" id="google_map_opacity"></div>
	<div style="display: block; opacity: 0.65948;" id="google_map_logo"><img  src="http://www.shfamilylaw.ca/wp-content/themes/sheri/images/logo/google_map_logo.png"></div>
	
<iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2886.85062335629!2d-79.3818447!3d43.6512761!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34cd21a68013%3A0xd33eaa0404bc4b06!2s390+Bay+St+%23910%2C+Toronto%2C+ON+M5H!5e0!3m2!1sen!2sca!4v1415910757260"></iframe>

</div>

<? include 'free_consultation_form.php'; ?>

<? include 'sheri_testimonials.php'; ?>


</div>
<?php get_footer(); ?>