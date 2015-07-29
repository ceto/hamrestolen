<?php use Roots\Sage\Titles; ?>
<header id="top" class="small-section bg-dark parallax-2 bg-dark-alfa-30" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/exterior1.jpg">
  <div class="js-height-parent container">
    <div class="home-content">
      <div class="home-text">
        
        <div class="row">
    
          <div class="col-md-12 align-left">
              <h1 class="hs-line-11 font-alt mt-50 mb-0"><?= Titles\title(); ?></h1>
              <div class="mod-breadcrumbs font-alt">
                  <a href="<?= esc_url(home_url('/')); ?>">Home</a>&nbsp;/&nbsp;
                  <span><?php the_title(); ?></span>
              </div>
          </div>

        </div>
          
      </div>
    </div>         
              

              
  </div>
</header>
