<?php
/**
 * Template Name: Front Page Template
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

<? include 'sheri_slider.php'; ?>

<? include 'sheri_intro.php'; ?>

<? include 'sheri_why.php'; ?>

<? include 'sheri_rights.php'; ?>


<? include 'sheri_testimonials.php'; ?>

<? include 'sheri_contactus.php'; ?>



<?php get_footer(); ?>