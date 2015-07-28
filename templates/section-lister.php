<?php wp_reset_query(); ?>

<?php 
if ( get_post_meta( get_the_ID(), 'sections', true ) ) {

$sections = get_post_meta( get_the_ID(), 'sections', true );

foreach ( (array) $sections as $key => $entry ) { ?>
  <section class="small-section" id="subcontent--<?= $key ?>">
    <div class="container relative">
      <div class="section-text">   
        <div class="row">
          <div class="col-md-10 col-md-offset-1">

            <h2 class="hs-line-11 font-alt align-center mt-20">
              <?php echo $entry['title']; ?>
            </h2>
      
            <?php if ($entry['lead']!='') : ?>
              <div class="lead">
                <?php echo wpautop( $entry['lead'] ); ?>
              </div>
            <?php endif; ?>

          </div>
        </div>


      <?php if ( $entry['contentleft']!='' || $entry['contentright']!='' ) : ?>
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
              <?php echo wpautop( $entry['contentleft'] ); ?>
            </div>
            <div class="col-md-5"> 
              <?php echo wpautop( $entry['contentright'] ); ?>
            </div>
        </div>
      <?php endif; ?>

      </div>
    </div>

  </section>
  
  <!-- Divider -->
  <hr class="mt-0 mb-0 "/>
  <!-- End Divider -->


<?php } 

}
?>

<?php wp_reset_query(); ?>
