<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->

	 <?php

     $args = array(
         'posts_per_page'         => 1,
         'post_type'              => array( 'cycles' ),
         'post_status'            => array( 'publish' ),
         'order' 	               => 'DESC',
     );

     // The Query
     $query = new WP_Query( $args );
     $query->the_post();
     $expDate = get_field('exp_date');


	 date_default_timezone_set('Europe/Athens') ;
	  $date_now = date('Y-m-d H:i:s');
//	  $date_exp = date('2018-11-11 23:59:59');
     $date_exp = $expDate;
	  ?>

	      <div id="registration-form" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="registration-GR" aria-hidden="true">



        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content p-3">



            <div class="modal-header">
				<ul class="navbar-nav registration-nav">
					<li class="nav-item">
				<img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/04/PTI-menu-final.png" width="75"/>
					</li>

					<li class="nav-item">
					<?php	if (get_locale() == 'el'): ?>
				<img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/03/bodossaki-logo-menu-gr.jpg" width="80"/>
						<?php	elseif (get_locale() == 'en_GB'): ?>
				<img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/03/bodossaki-logo-menu-en.jpg" width="80"/>
						<?php	endif; ?>
					</li>

					<li class="nav-item">
				<img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/03/knowl-logo-menu.jpg" />
					</li>

				</ul>

				<ul class="navbar-nav ml-auto">
					<li class="nav-item">



						<?php if(($date_now < $date_exp) ) : ?>
				<h5 class="modal-title" id="registration-GR">
				<?php
				if (get_locale() == 'el'):
				echo 'Δήλωσε συμμετοχή!';
				elseif (get_locale() == 'en_GB'):
				echo 'Apply now!';
				endif;
				?>
				</h5>

						<?php else: ?>

				<h5 class="modal-title" id="registration-GR">
				<?php
				if (get_locale() == 'el'):
				echo 'H διαδικασία υποβολής αιτήσεων ολοκληρώθηκε!';
				elseif (get_locale() == 'en_GB'):
				echo 'Applications are now closed!';
				endif;
				?>
				</h5>

						<?php endif; ?>

					</li>
				</ul>
              


              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

            </div>

				<?php if($date_now < $date_exp): ?>

            <div class="modal-body">

				<?php
				if (get_locale() == 'el'):
				echo do_shortcode( '[contact-form-7 id="3144" title="AEGEAN Form GR"]' );
				elseif (get_locale() == 'en_GB'):
				echo do_shortcode( '[contact-form-7 id="3145" title="AEGEAN Form EN"]' );
				endif;
				?>
            
			  </div>

			  	<?php else: ?>


            <div class="modal-body">

				<?php if (get_locale() == 'el'): ?>
			<h5 class="text-center pt-4">
				Σύντομα θα ανακοινωθούν νέα προγράμματα.
				</h5>
				<?php elseif (get_locale() == 'en_GB'): ?>
			<h5 class="text-center pt-4">
				New programmes will be announced shortly.
				</h5>

				<?php endif; ?>
            
			  </div>

			  	<?php endif; ?>


			  <div class="modal-footer">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<?php if (get_locale() == 'el'): ?>
			 <span style="font-size:1rem">Κλείσιμο</span>
			 <?php elseif (get_locale() == 'en_GB'): ?>
			 <span style="font-size:1rem">Close</span>
			 <?php endif; ?>

              </button>
      </div>
          </div>
        </div>

      </div>







    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <!--<?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
       <!-- <?php endif; ?>-->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
