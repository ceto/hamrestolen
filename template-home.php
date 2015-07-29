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
		<h2 class="section-title font-alt align-center mb-70 mb-sm-40">Beskrivelse</h2>
		<div class="section-text mb-50 mb-sm-20">
		  <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="lead">
            <p> Nytt flott boligprosjekt med flott beliggenhet i naturskjønt område. Prosjektet er bestående av velproporsjonerte enheter med fine uteområder/terrasser. 48 boliger fordelt på 3 bygg, alle med garasjeplass. </p>
          </div>
        </div>
		  </div>
	 </div>
  </div>
</section>

<!-- End About Section -->
<section class="small-section bg-gray pt-30 pb-30">
  <div class="relative container">

    <div class="row">            
      <div class="col-md-10 col-md-offset-1">
          <h1 class="hs-line-8 font-alt mb-0 align-center">Finn din Bolig</h1>
          <div class="hs-line-4 font-alt align-center black">Dra musepekeren over bygget for å velge leilighet</div>
      </div>
    </div>

  </div>
</section>

<section class="page-section home__choserblock align-center fixed-height-small" id="finndinbolig" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/exterior1.jpg">
  <div class="js-height-parent"></div>
</section>


<section class="page-section" id="beliggenhet">
  <div class="container relative">
    <h2 class="section-title font-alt align-center mb-70 mb-sm-40">Beliggenhet</h2>
    <div class="section-text mb-50 mb-sm-20">   
      <div class="row">
        <div class="col-md-5 col-md-offset-1">
          <p>Prosjektet i Hamrestølen er bestående av 3 bolighus med tilsammen 48 leiligheter. Det er 16 leiligheter i hvert bolighus hvorav en av leilighetene er beliggende for seg selv på toppen av hvert bygg.</p>
          <p>Prosjektet ligger i naturskjønne omgivelser med mye sol, og med fantastisk utsikt over Kalandsvannet og områdene rundt.</p>
        </div>
        <div class="col-md-5">
          <p>Alle leilighetene er gjennomgående og har usjenerte og skjermede terrasser med utsikt. Byggene  har garasjekjeller og 5 plan med boliger. De 3 nederste etasjene har lik planløsning fordelt på 4 leiligheter i hver etasje.</p>
          <p>I 4.etasje er det 3 leiligheter og på toppen ligger det en toppleilighet.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="mt-50 mt-sm-20 align-center">
            <p><a href="<?php echo get_permalink(85); ?>" class="btn btn-mod btn-border btn-medium btn-round">Read full description</a></p>
          </div>
        </div>
      </div>

    </div>      
  </div>
</section>


<?php get_template_part('templates/home','bilder'); ?>

<?php get_template_part('templates/contact','form'); ?>

<?php get_template_part('templates/google','map'); ?>

<?php endwhile; ?>
