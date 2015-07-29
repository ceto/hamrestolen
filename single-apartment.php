<?php while (have_posts()) : the_post(); ?>
<?php $buildlist = wp_get_post_terms($post->ID, 'building'); ?>
<?php get_template_part('templates/apartment', 'header'); ?>
<section class="page-section">
  <div class="container relative">
    <div class="section-text">   
      <div class="row">
        <div class="col-md-8">    
          <div class="single--apartment__alaprajz">
            <?php
              $floormap = wp_get_attachment_image_src( get_post_meta($post->ID, '_meta_floormap_id', true), '', FALSE);
              ?>
            <a class="popup-zoom" href="<?php echo $floormap[0]; ?>">
              <img src="<?php echo $floormap[0]; ?>" alt="<?php the_title(); ?>"/>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1">  
          <div class="single--apartment__adatok">
            <?php $buildlist = wp_get_post_terms($post->ID, 'building'); ?>
            <div class="work-detail mt-50">
                <h1 class="font-alt hs-line-8 mt-0 mb-20">Leilighets nr. <?php the_title(); ?></h1>
                <div class="work-full-detail">
                    <p><strong>Bygg</strong><?php echo $buildlist[0]->name; ?></p>
                    <p><strong>Rom</strong><?php echo get_post_meta( $post->ID, '_meta_rom', true ); ?>-roms</p>
                    <p><strong>Etg</strong><?php echo get_post_meta( $post->ID, '_meta_floor', true ); ?></p>
                    <p><strong>BRA</strong><?php echo get_post_meta( $post->ID, '_meta_bra', true ); ?> m<sup>2</sup></p>
                    <p><strong>P-rom</strong><?php echo get_post_meta( $post->ID, '_meta_prom', true ); ?> m<sup>2</sup></p>
                    <?php if (get_post_meta( $post->ID, '_meta_balkong', true )!='') : ?>
                    <p><strong>Balkong</strong><?php echo get_post_meta( $post->ID, '_meta_balkong', true ); ?> m<sup>2</sup></p>
                    <?php endif; ?>
                    <?php if (get_post_meta( $post->ID, '_meta_markterasse', true )!='') : ?>
                    <p><strong>Markterasse</strong><?php echo get_post_meta( $post->ID, '_meta_markterasse', true ); ?> m<sup>2</sup></p>
                    <?php endif; ?>
                    <?php if (get_post_meta( $post->ID, '_meta_state', true )=='fri') : ?>
                    <p><strong>Pris</strong><?php echo number_format(get_post_meta( $post->ID, '_meta_pris', true ), 0, ',', ' '); ?>,-</p>
                    <?php else : ?>
                    <p><strong>Status</strong> <?php echo get_post_meta( $post->ID, '_meta_state', true ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
<!--             <div class="single--apartment__schema">
              <?php
                $schema = wp_get_attachment_image_src( get_post_meta($post->ID, '_meta_schema_id', true), '', FALSE);
                ?>
              <a class="popup-zoom" href="<?php echo $schema[0]; ?>">
                <img src="<?php echo $schema[0]; ?>" alt="Schema"/>
              </a>
            </div> -->
          </div>
        </div>
  

        </div>
      </div>    
    </div>
  </div>
</section>

<!-- Divider -->
<hr class="mt-0 mb-0 "/>
<!-- End Divider -->

<div class="work-navigation clearfix">
    <?php previous_post_link('%link','<span><i class="fa fa-chevron-left"></i>&nbsp;%title</span>'); ?>
    <a href="<?= esc_url(home_url('/')); ?>#finndinbolig" class="work-all"><span><i class="fa fa-times"></i>&nbsp;Finn din bolig</span></a>
    <?php next_post_link('%link','<span>%title&nbsp;<i class="fa fa-chevron-right"></i></span>'); ?>
</div>

<!-- Divider -->
<hr class="mt-0 mb-0 "/>
<!-- End Divider -->

<?php endwhile; ?>


<?php //get_template_part('templates/contact','form'); ?>
