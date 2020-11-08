<section class="module" id="team">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-sm-offset-3">
        <h2 class="module-title font-alt"><?php
			if (get_locale() == 'en_GB'):
        $page = get_page_by_title( 'Who we are' );
			elseif (get_locale() == 'el'):
		$page = get_page_by_title( 'Ποιοι είμαστε' );
			endif;
        $title = apply_filters('the_content', $page->post_title);
        echo $title;
        ?></h2>
        <div class="module-subtitle font-serif">
          <?php
			if (get_locale() == 'en_GB'):
          $page = get_page_by_title( 'Who we are' );
			elseif (get_locale() == 'el'):
		  $page = get_page_by_title( 'Ποιοι είμαστε' );
			endif;
          $excerpt = apply_filters('the_content', $page->post_excerpt);
          echo $excerpt;
          ?>
        </div>
      </div>
    </div>


    <div class="row">
      <?php $loop = new WP_Query( array( 'post_type' => 'team', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
      <?php
    //  $postNumber = 1;
      while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="mb-5 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
        <div class="team-item">
			<a href="" data-toggle="modal" data-target="#<?php the_ID() ?>">
          		<div class="team-image rounded-circle">
           		 <?php         if ( has_post_thumbnail() ) :
                      the_post_thumbnail();

                   endif; ?>
            	<div class="team-detail">

           	 </div>

        	</div>
			</a>

      <div class="team-descr font-alt">
		  <a href="" data-toggle="modal" data-target="#<?php the_ID() ?>"><div class="team-name"><?php the_title(); ?></div></a>
        <div class="team-role"><?php the_excerpt(); ?> </div>
		
		  <ul class="nav justify-content-center" style="margin-top:-20px">
   
      <?php if( get_field('facebook') ): ?>
     <li class="nav-item"><a class="nav-link" href="<?php echo the_field('facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
   <?php endif; ?>
   <?php if( get_field('twitter') ): ?>
     <li class="nav-item"><a class="nav-link" href="<?php echo the_field('twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
   <?php endif; ?>
   <?php if( get_field('linkedin') ): ?>
     <li class="nav-item"><a class="nav-link" href="<?php echo the_field('linkedin'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
   <?php endif; ?>
   <?php if( get_field('mail') ): ?>
           <li class="nav-item"><a class="nav-link" href="mailto:<?php echo the_field('mail'); ?>"><i class="fa fa-envelope"></i></a></li>
   <?php endif; ?>

      
     </ul>
		  		  
		  
      </div>
        <?php edit_post_link(); ?>
      </div>
      </div>
      <?php endwhile; wp_reset_query();?>

    </div>
  </div>
</section>
