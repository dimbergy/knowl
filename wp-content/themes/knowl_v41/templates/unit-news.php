<section class="module pb-0" id="news">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-sm-offset-3">
        <h2 class="module-title font-alt"><?php
			
			if (get_locale() == 'en_GB'):

      $page = get_post( 1403 );
			elseif (get_locale() == 'el'):

    $page = get_post( 963 );
			endif;
			
        $title = apply_filters('the_content', $page->post_title);
					
        $link = get_permalink( $page );
			

        echo '<a href="'.$link.'">';
        echo $title;
        echo '</a>';
        ?></h2>
        <div class="module-subtitle font-serif"><?php
			
			if (get_locale() == 'en_GB'):
        $page = get_page_by_title( 'News' );
			elseif (get_locale() == 'en_GB'):
		$page = get_page_by_title( 'Νέα' );
			endif;
			
        $content = apply_filters('the_content', $page->post_content);

        echo $content;
        ?></div>
      </div>
    </div>


    <div id="news-carousel" class="carousel slide col pb-5" data-ride="carousel">

      

      

      <!-- Wrapper for slides -->
      <div class="row">
      <div class="carousel-inner" role="listbox">

        <?php
        // Item size (set here the number of posts for each group)
        $i = 3;

        // Set the arguments for the query
        global $loop;
        $args = array(
          'posts_per_page'   => -1, // -1 is for all
          'post_type'     => 'news', // or 'post', 'page'
        //  'orderby'       => 'title', // or 'date', 'rand'
          'order' 	      => 'DESC', // or 'DESC'
        );

        // Get the posts
        $myposts = get_posts($args);

        // If there are posts
        if($myposts):

          // Groups the posts in groups of $i
          $chunks = array_chunk($myposts, $i);
          $html = '<div class="test"></div>';
          //echo = 'test';




          /*
           * Item
           * For each group (chunk) it generates an item
           */
		  
          foreach($chunks as $chunk):
		  
            // Sets as 'active' the first item
            ($chunk === reset($chunks)) ? $active = "active" : $active = "";
            $html .= '<div class="carousel-item '.$active.'"><div class="container"><div class="row">';

            /*
             * Posts inside the current Item
             * For each item it generates the posts HTML
             */
		  		
            foreach($chunk as $loop):
		  		
              $html .= '<div class="col-lg-4 col-md-6 single-post mt-5">';
              $html .= '<div class="post-thumbnail">';
              $html .= get_the_post_thumbnail($loop->ID);
              $html .= '</div>';
              $html .= '<div class="mt-5">';
              $html .= '<h3 class="post-title">';
              $html .= get_the_title($loop->ID);
              $html .= '</h3>';
              $html .= '</div>';
              $html .= '<div class="post-entry">';
              $html .=  $loop->post_excerpt;
              $html .= '</div>';
              $html .=  '<div class="btn-arrange mt-4 text-center ml-auto mr-auto">';
              $html .=  '<a href="';
            if (get_field('file', $loop->ID) != ''):
              $html .=  get_field('file', $loop->ID);
		  	  $html .=  '" target="_blank">';
            else:
              $html .= get_the_permalink($loop->ID);
		  	  $html .=  '">';
            endif;
              
              $html .=  '<button type="button" class="btn btn-outline-dark">';
		  if (get_field('file', $loop->ID) != ''):  
			  $html .=	'<i class="fa fa-link"></i>&emsp;';
          endif;
		 
		  if (get_locale() == 'el'):
              $html .=  'Περισσότερα';
            elseif (get_locale() == 'en_GB'):
              $html .=  'Read More';
            endif;
              $html .=  '</button></a></div>';
            
              $html .= '</div>';
		
            endforeach;
		
		  
            $html .= '</div>';  	
		  $html .= '</div>';
		  	$html .= '</div>';
			
          endforeach;

          // Prints the HTML
          echo $html;
		  
        endif;
        ?>
      </div>
      </div> <!-- carousel inner -->


    </div> <!-- /carousel -->
	
  <?php  wp_reset_query();?>
  

  <!-- Controls -->

	    
      <div class="row pb-5">
		  
        <div class="col-12 text-center">
        <a class="left fawesome-control" href="#news-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="right fawesome-control" href="#news-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
        </div>
	


  </div>
</section>

