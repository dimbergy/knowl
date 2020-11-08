<section class="module" id="companies">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-sm-offset-3">
        <h2 class="module-title font-alt"><?php
			if (get_locale() == 'en_GB'):

      $page = get_post( 1242 );
			elseif (get_locale() == 'el'):

    $page = get_post( 1240 );
			endif;
        $title = apply_filters('the_content', $page->post_title);
        echo $title;
        ?></h2>
        <div class="module-subtitle">
          <?php

          $content = apply_filters('the_content', $page->post_content);
          echo $content;
          ?>
        </div>
      </div>
    </div>


    <div class="row">
    <?php
    // WP_Query arguments
    $args = array(
      'post_type'              => array( 'companies' ),
    //  'terms'                  => array( 'Εκπαιδεύσεις' ),
      'post_status'            => array( 'publish' ),
      'order' 	               => 'DESC',
    );

    // The Query
    $query = new WP_Query( $args );

    // The Loop
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post();
        // do something
        echo '<div class="col-md-4 col-sm-6 col-xs-12 services-box"><div class="text-center">';
//the_title( '<span class="text-center"><h3>', '</h3></span>' );
        
		$my_id = get_the_ID();
		$my_content = get_the_content();
		$my_ecxerpt = get_the_excerpt();
        $my_title = get_the_title();
        $my_url = get_field('url');
		$my_collapse = get_field('body');
		  
        if ( '' != $my_content ) {
            // Some string manipulation performed
        }
        if ( has_post_thumbnail() ) :
          the_post_thumbnail();
					
		  			echo '</div>';
                    echo '<div class="mt-3">';
                    echo $my_content; // Outputs the processed value to the page
		  
		  			echo '<div class="collapse" id="';
					echo $my_id;
					echo '">';
		  			echo $my_collapse;
		  			echo '</div>';
		  
		  			echo '<div class="mt-4 text-center"><a ';
				if ($my_collapse != ''):				
					echo 'class= "viewMore" ';
		  		endif;
					echo 'data-toggle="collapse" href="#'; 
					echo $my_id;
					echo '" role="button" aria-expanded="false" aria-controls="coordinator"> </a></div>';
		  		
                    echo '<div class="mt-4 text-center ml-auto mr-auto">';
                    echo '<a href="';
                    echo $my_url;
                    echo '" target="_blank">';
                    echo '<button type="button" class="btn btn-outline-dark"><i class="fa fa-link"></i>&emsp;';
                    echo $my_title;
                    echo '</button></a></div>';
		  			echo '<div class="mt-3 text-center">';
		  			edit_post_link();
		  			echo '</div>';
                    echo '</div>';

                    echo '</div>';
      //  echo '<div class="col-9">';
       endif;




        //    echo '</div>';
                }
        } else {
          // no posts found
        }

        // Restore original Post Data
        wp_reset_postdata();
          ?>
          </div>


  </div>
</section>
