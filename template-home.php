<?php
/**
 * Template Name: Homepage Template
 */
?>

<?php get_template_part('templates/home','headerslider'); ?>

<?php while (have_posts()) : the_post(); ?>
<!-- About Section -->
<section class="page-section" id="about">
	<div class="container relative">
		<h2 class="section-title font-alt align-center mb-70 mb-sm-40"> Beskrivelse </h2>
		<div class="section-text mb-50 mb-sm-20">
		  <div class="row">
        <div class="col-xs-12">
          <p class="larger text-center"> Nytt flott boligprosjekt med flott beliggenhet i naturskjønt område. Prosjektet er bestående av velproporsjonerte enheter med fine uteområder/terrasser. 48 boliger fordelt på 3 bygg, alle med garasjeplass. </p>
        </div>
		  </div>
	 </div>
  </div>
</section>
<!-- End About Section -->


<!-- Divider -->
<hr class="mt-0 mb-0 "/>
<!-- End Divider -->

<?php get_template_part('templates/contact','form'); ?>
<?php get_template_part('templates/google','map'); ?>

<?php endwhile; ?>
