
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
  $a_schema=get_tax_meta($type,'_tmeta_schema');
?>

<?php
  global $gview;

  $ap['rom'] = $a_rom.'-roms';
  $ap['garasje'] = (get_post_meta( $post->ID, '_meta_garasje', true )!='no')?'Ja':'-';
  $ap['floor'] = get_post_meta( $post->ID, '_meta_floor', true );
  $ap['bra'] = $a_bra.' m<sup>2</sup>';
  $ap['prom'] = $a_prom.' m<sup>2</sup>';
  $ap['bod'] = get_post_meta( $post->ID, '_meta_bod', true ).' m<sup>2</sup>';
  $ap['pris'] = number_format(get_post_meta( $post->ID, '_meta_pris', true ), 0, ',', ' ').',-';
  $ap['state'] = get_post_meta( $post->ID, '_meta_state', true );
  $ap['svgdata1'] = get_post_meta( $post->ID, '_meta_svgdata1', true );
  $ap['svgdata2'] = get_post_meta( $post->ID, '_meta_svgdata1', true );
  
  switch ($gview) {
    case 1:
      $ap['svgdata'] = get_post_meta( $post->ID, '_meta_svgdata1', true );
      break;
    case 2:
      $ap['svgdata'] = get_post_meta( $post->ID, '_meta_svgdata2', true );
      break;
    
    default:
      $ap['svgdata'] = get_post_meta( $post->ID, '_meta_svgdata1', true );
      break;
  }



?>

<p class="datarow">
  <a id="ap-<?= get_the_ID();  ?>" class="datarow--link state-<?= $ap['state']; ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" 
  data-name="<?php the_title(); ?>"
  data-rom="<?= $ap['rom']; ?>"
  data-floor="<?= $ap['floor']; ?>"
  data-bra="<?= $ap['bra']; ?>"
  data-prom="<?= $ap['prom']; ?>"
  data-bod="<?= $ap['bod']; ?>"
  data-pris="<?= $ap['pris']; ?>"
  data-state="<?= $ap['state']; ?>"
  data-svgdata="<?= $ap['svgdata']; ?>"
  data-svgdata1="<?= $ap['svgdata1']; ?>"
  data-svgdata2="<?= $ap['svgdata2']; ?>"
  data-url="<?php the_permalink(); ?>"
  >
    <span class="datarow--cell"><?php the_title(); ?></span>
    <span class="datarow--cell"><?= $ap['rom']; ?></span>
    <span class="datarow--cell"><?= $ap['floor']; ?></span>
    <span class="datarow--cell"><?= $ap['bra']; ?></span>
    <span class="datarow--cell"><?= $ap['garasje']; ?></span>
    <?php if ( $ap['state'] == 'fri' ) : ?>
      <span class="datarow--cell"><i class="<?= $ap['state'] ?>"></i><?= $ap['pris'] ; ?></span>
    <?php else : ?>
      <span class="datarow--cell"><i class="<?= $ap['state'] ?>"></i><?= $ap['state'] ?></span>
    <?php endif; ?>
  </a>
</p>
