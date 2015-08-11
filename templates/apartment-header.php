<?php use Roots\Sage\Titles; ?>
<?php 
global $buildlist;
?>
<header id="top" class="small-section bg-dark parallax-2 bg-dark-alfa-50" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/interiornarrow.jpg">
  <div class="js-height-parent container">
    <div class="home-content">
      <div class="home-text">
        
        <div class="row">
    
          <div class="col-md-12 align-left">
              <h3 class="hs-line-11 font-alt mt-50 mb-0"><?php echo $buildlist[0]->name; ?></h3>
              <div class="mod-breadcrumbs font-alt">
                  <a href="<?= esc_url(home_url('/')); ?>/#finndinbolig">Hamrestolen</a>&nbsp;/&nbsp;
                  <a href="<?php echo get_term_link( $buildlist[0] ); ?>"><?php echo $buildlist[0]->name; ?></a>&nbsp;/&nbsp;
                  <span><?php the_title(); ?></span>
              </div>
          </div>
        </div>
          
      </div>
    </div>
       
  </div>
</header>
