<?php

	  $post = get_the_ID();

switch($post) {

  case 193:
  case 1337:
  $post_type = 'services';
  break;

  case 69:
  case 759:
  $post_type = 'profile';
  break;

  case 1068:
  case 1070:
  $post_type = 'programs';
  break;

  case 264:
  case 756:
  $post_type = 'courses';
  break;

  case 313:
  case 762:
  $post_type = 'europians';
  break;

  case 67:
  case 765:
  $post_type = 'portfolio';
  break;

  case 265:
  case 768:
  $post_type = 'team';
  break;

  case 963:
  case 1403:
  $post_type = 'news';
  break;

  case 1236:
  case 1238:
  $post_type = 'coordinators';
  break;

  case 1240:
  case 1242:
  $post_type = 'companies';
  break;

  default:
  $post_type = '';
	break;
}
?>






<div class="container">
<div class="row ">

<?php
// WP_Query arguments
$args = array(
  'post_type'              => array( $post_type ),
  'post_status'            => array( 'publish' ),
  'order'                 => 'DESC',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();
    // do something
    echo '<div class="col-md-4 col-sm-6 col-xs-12 services-box"><a href="' .get_the_permalink($query->ID). '">';
the_title( '<span class="text-center"><h3>', '</h3></span>' );
    $my_excerpt = get_the_excerpt();
    if ( '' != $my_excerpt ) {
        // Some string manipulation performed
    }
    if ( has_post_thumbnail() ) :
      the_post_thumbnail();

                echo '<h4>';
                echo $my_excerpt; // Outputs the processed value to the page
                echo '</h4>';
            echo '</a>';
        edit_post_link();
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
