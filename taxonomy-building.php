<?php
/**
 * Template Name: Chooser Template
 */
?>

<?php $actbuilding = get_term_by( 'slug', get_query_var(term ), 'building'); ?>

<header id="top" class="small-section bg-dark parallax-2 bg-dark-alfa-50" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/exterior2.jpg">
  <div class="js-height-parent container">
    <div class="home-content">
      <div class="home-text">
        
        <div class="row">
          <div class="col-md-12 align-left">
              <h1 class="hs-line-11 font-alt mt-50 mb-0"><?= $actbuilding->name; ?></h1>
              <div class="mod-breadcrumbs font-alt">
                  <a href="<?= esc_url(home_url('/')); ?>">Home</a>&nbsp;/&nbsp;
                  <a href="<?= esc_url(home_url('/')); ?>/#finndinbolig">Byggs</a>&nbsp;/&nbsp;
                  <span><?= $actbuilding->name; ?></span>
              </div>
          </div>
          
          <div class="col-md-4">

              
          </div>
        </div>
          
      </div>
    </div>
       
  </div>
</header>


  <?php
    $ima = get_tax_meta($actbuilding,'_meta_image');
    $imcifull = wp_get_attachment_image_src( $ima['id'], 'full');
    $imcilarge = wp_get_attachment_image_src( $ima['id'], 'large');
    $imcimedium = wp_get_attachment_image_src( $ima['id'], 'medium');
  ?>



<div class="thechooser container">

  <div id="visualchooser" class="visualchooser visualchooser--1" data-width="<?= $imcifull[1]; ?>" data-height="<?= $imcifull[2]; ?>">
      <img src="<?= $imcifull[0]; ?>" alt="Fin din bolig">
  </div>


  <div id="detailswrapper" class="row">
    <div class="datatable datatable-apartments">
      <p class="datarow datatable--head">
        <span class="datarow--cell de">Leilnr</span>
        <span class="datarow--cell de">Roms</span>
        <span class="datarow--cell">Etg</span>
        <span class="datarow--cell">BRA</span>
        <span class="datarow--cell">P-rom</span>
        <span class="datarow--cell">Pris / Status</span>
      </p>
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/apartment','datarow'); ?>
      <?php endwhile; ?>
    </div>
  </div>

</div>


