<section class="module" id="alt-features">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-sm-offset-3">
        <h2 class="module-title font-alt"><?php
			
			if (get_locale() == 'en_GB'):
        $page = get_page_by_title( 'Profile' );
			elseif (get_locale() == 'el'):
        $page = get_page_by_title( 'Προφίλ' );			
			endif;
			
        $title = apply_filters('the_content', $page->post_title);
			
			if (get_locale() == 'en_GB'):			
        $link = get_permalink( get_page_by_title( 'Profile' ) );
        	elseif (get_locale() == 'el'):
		$link = get_permalink( get_page_by_title( 'Προφίλ' ) );
			endif;
		echo $title;
        ?></h2>
        <div class="module-subtitle font-serif"><?php
			
			if (get_locale() == 'en_GB'):
        $page = get_page_by_title( 'Profile' );
			elseif (get_locale() == 'el'):
		$page = get_page_by_title( 'Προφίλ' );	
			endif;
			
        $excerpt = apply_filters('the_content', $page->post_excerpt);
        echo $excerpt;
        ?></div>
      </div>
    </div>
    <div class="row">

      <div class="col-sm-6 col-md-3 col-lg-3">
        <?php $loop = new WP_Query( array( 'post_type' => 'profile', 'posts_per_page' => 2 ) ); ?>
        <?php

        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="alt-features-item">
        <h3 class="alt-features-title font-alt"><?php the_title(); ?></h3>
        <div class="post-content"><?php the_excerpt(); ?> </div>
        <?php edit_post_link(); ?>
        </div>
        <?php endwhile; wp_reset_query();?>
      </div>
      <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
        <div class="alt-services-image align-center">
          <?php
  if ( has_post_thumbnail() ) {
  the_post_thumbnail();
  }  ?>
  <button type="button" class="btn btn-lg btn-warning" >
    <div style="text-align:center;"><i class="fa fa-download"></i></div>
	  
	  <?php if (get_locale() == 'en_GB'): ?>
    <a href="http://knowl.gr/wp-content/uploads/2018/03/Knowl_Presentation_en_FEB18.pdf" target="_blank">a brief presentation of knowl</a>
	  <?php elseif (get_locale() == 'el'): ?>
	<a href="http://knowl.gr/wp-content/uploads/2018/02/Knowl_Presentation_Jan2018.pdf" target="_blank">συντομη παρουσιαση της knowl</a>
	  <?php endif; ?>
	  
  </button>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3">
        <?php $loop = new WP_Query( array( 'post_type' => 'profile','offset' => '-2', 'posts_per_page' => 2 ) ); ?>
        <?php

        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="alt-features-item">
        <h3 class="alt-features-title font-alt"><?php the_title(); ?></h3>
        <div class="post-content"><?php the_excerpt(); ?> </div>
        <?php edit_post_link(); ?>
        </div>
        <?php endwhile; wp_reset_query();?>
      </div>
  </div>



</section>
