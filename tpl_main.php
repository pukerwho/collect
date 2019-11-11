<?php
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>

<section id="welcome">
	<?php get_template_part('blocks/welcome') ?>
</section>

<section id="about">
	<?php get_template_part('blocks/about') ?>
</section>

<section id="uslugi">
	<?php get_template_part('blocks/uslugi') ?>
</section>

<section id="info">
	<?php get_template_part('blocks/info') ?>
</section>

<section id="contact">
	<?php get_template_part('blocks/contact') ?>
</section>

<?php get_footer(); ?>