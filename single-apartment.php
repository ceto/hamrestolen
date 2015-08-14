<?php while (have_posts()) : the_post(); ?>
<?php $buildlist = wp_get_post_terms($post->ID, 'building'); ?>

      <?php 
        $types = get_the_terms( $post->ID, 'apartment-type' );
        foreach ($types as $key => $value) { $type = $value; }
        $the_sameaps = new WP_Query(array(
            'post_type'   => array('apartment'),
            'ignore_sticky_posts' => true,
            'posts_per_page'         => -1,
            'orderby' => 'title',
            'order' => 'ASC',
            'tax_query' => array(
              array(
                'taxonomy' => 'apartment-type',
                'field'    => 'id',
                'terms'    => array( $type->term_id ),
              ),
            )
          )
        );

        $a_rom=get_tax_meta($type,'_tmeta_rom');
        $a_bra=get_tax_meta($type,'_tmeta_bra');
        $a_prom=get_tax_meta($type,'_tmeta_prom');
        $a_balkong=get_tax_meta($type,'_tmeta_balkong');
        $a_markterasse=get_tax_meta($type,'_tmeta_markterasse');
        $a_view=get_tax_meta($type,'_tmeta_view');
        $a_2d=get_tax_meta($type,'_tmeta_2d');
        $a_schema=get_tax_meta($type,'_tmeta_schema');
      ?>
      <?php $samelist=''; while ($the_sameaps->have_posts()) : $the_sameaps->the_post(); ?>
        <?php $samelist .= '<a href="'.get_permalink().'">'.get_the_title().'</a> | '; ?>
      <?php endwhile; $samelist=substr($samelist, 0, -3); ?>
      <?php wp_reset_query(); ?>




<?php get_template_part('templates/apartment', 'header'); ?>
<section class="small-section">
  <div class="container relative">
    <div class="section-text">   
      <div class="row">
        <div class="col-md-6">    
          <div class="single--apartment__alaprajz">
            <?php
              $floormap = wp_get_attachment_image_src( $a_view['id'], '', FALSE);
              $d2d = wp_get_attachment_image_src( $a_2d['id'], '', FALSE);
            ?>
            <a class="popup-zoom" href="<?php echo $floormap[0]; ?>">
              <img src="<?php echo $floormap[0]; ?>" alt="<?php the_title(); ?>"/>
            </a>
          </div>
        </div>
        <div class="col-md-4 col-md-offset-2"> 
          <div class="single--apartment__adatok">
            <?php $buildlist = wp_get_post_terms($post->ID, 'building'); ?>
            <div class="work-detail mt-50">
                <h1 class="font-alt hs-line-8 mt-0 mb-20">Leilighets nr. <?php the_title(); ?></h1>
                <div class="work-full-detail">
                    <p><strong>Bygg</strong><?php echo $buildlist[0]->name; ?></p>
                    <p><strong>Rom</strong><?php echo $a_rom; ?>-roms</p>
                    <p><strong>Etg</strong><?php echo get_post_meta( $post->ID, '_meta_floor', true ); ?></p>
                    <p><strong>BRA</strong><?php echo $a_bra; ?> m<sup>2</sup></p>
                    <?php if ($a_balkong!='') : ?>
                    <p><strong>Balkong</strong><?php echo $a_balkong; ?> m<sup>2</sup></p>
                    <?php endif; ?>
                    <?php if ($a_markterasse!='') : ?>
                    <p><strong>Markterasse</strong><?php echo $a_markterasse; ?> m<sup>2</sup></p>
                    <?php endif; ?>
                    <p><strong>garasje</strong><?php echo $ap['garasje'] = (get_post_meta( $post->ID, '_meta_garasje', true )!='no')?'Ja':'-'; ?></p>
                    <?php if (get_post_meta( $post->ID, '_meta_state', true )=='fri') : ?>
                    <p><strong>Pris</strong><?php echo number_format(get_post_meta( $post->ID, '_meta_pris', true ), 0, ',', ' '); ?>,-</p>
                    <?php else : ?>
                    <p><strong>Status</strong> <?php echo get_post_meta( $post->ID, '_meta_state', true ); ?></p>
                    <?php endif; ?>
                    <p><strong>Samme typen</strong> <?php echo $samelist; ?></p>
                </div>
            </div>
             
          </div>
          <div class="single--apartment__schema">
              
<!--               <div class="col-sm-4 col-sm-offset-4">
                <a class="popup-zoom" href="<?php echo $d2d[0]; ?>">
                  <img src="<?php echo $d2d[0]; ?>" alt="<?php the_title(); ?>"/>
                </a>
              </div> -->
              <a class="btn btn-mod btn-border btn-medium btn-round" href="<?= $a_schema[url]; ?>">Last ned PDF</a>
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
