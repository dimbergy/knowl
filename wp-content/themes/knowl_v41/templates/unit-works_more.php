<section class="module" id="cycles">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-sm-offset-3">
        <h2 class="module-title font-alt"><?php


      	if (get_locale() == 'en_GB'):
      $page = get_post( 2628 );
			elseif (get_locale() == 'el'):

    $page = get_post( 2625 );
			endif;

		$title = apply_filters('the_content', $page->post_title);
        echo $title;
        ?></h2>
        <div class="module-subtitle">
          <?php

          $content = apply_filters('the_content', $page->post_content);
          echo $content;
          ?>
			<div class="text-center mt-2">

		  </div>

        </div>
      </div>
    </div>


    <div class="row">
    <?php
    // WP_Query arguments
    $args = array(
      'post_type'              => array( 'cycles_archive' ),
    //  'terms'                  => array( 'Εκπαιδεύσεις' ),
      'post_status'            => array( 'publish' ),
      'order' 	               => 'DESC',
    );

    // The Query
    $query = new WP_Query( $args );

    // The Loop
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post(); ?>
<div class="col-md-4">

	
	<?php if( get_field('status' ) == "current" ): ?>
	<button class="btn-current btn btn-success d-block mr-auto ml-auto"> </button>
	<?php elseif( get_field('status' ) == "closed" ): ?>
	<button class="btn-closed btn btn-danger d-block mr-auto ml-auto"> </button>
	<?php endif; ?>
<div class="mb-4"><a href="<?= the_permalink(); ?>">
      <?php
      if ( has_post_thumbnail() ) :
        the_post_thumbnail();
      endif;
      ?>
  </a>  </div>

          <a href="<?= the_permalink(); ?>">
            <?= the_title('<h5 class="font-weight-bold pb-2">', '</h5>'); ?>
          </a>
            <?= the_excerpt('<div class="mt-4">', '</div>'); ?>

            <a href="<?= the_permalink(); ?>"><button class="btn btn-readmore btn-outline-dark ml-auto mr-auto d-block"></button></a>
</div>

<?php                }
        } else {
          // no posts found
        }

        // Restore original Post Data
        wp_reset_postdata();
          ?>

          </div>


  </div>
</section>

