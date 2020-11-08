<section class="module mt-0 pt-0" id="intro">
  <div class="container pl-0 pr-0">
    <div id="getinto-container" class="row">
      <div class="col-sm-12 col-sm-offset-3">
        <?php

        $post = get_page(pll_get_post(1101)); ?>

		<a href="" data-toggle="modal" data-target="#registration-form">

        <?php echo get_the_post_thumbnail($post); ?>

			</a>
<div class="row mt-2">

	<div class="col-md-7">

	</div>

	<div class="col-md-5 social-sharing mb-2">
		<?php echo do_shortcode('[apss_share]'); ?>
	</div>


      <div id="getinto" class="col-md-7 pt-4 pr-5 mr-2 module-subtitle text-left">




		  <!-- START -->

			  	<?php

$args = array(
  'posts_per_page'         => 1,
  'post_type'              => array( 'cycles' ),
  'post_status'            => array( 'publish' ),
  'order' 	               => 'DESC',
);

// The Query
$query = new WP_Query( $args );


 // The Loop
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post(); ?>


        <?= the_title('<h3 class="font-weight-bold">', '</h3>'); ?>
        <?= the_content('<div class="mt-4">', '</div>');

            }
    } else {
      // no posts found
    }

    // Restore original Post Data
    wp_reset_postdata();
      ?>




		  <div class="text-center mt-2">


		<?php

			  if (get_locale() == 'el' ):

			 $keys = array(
      		'post_type'    => 'page',
    		'p'            => 1244,
    		);
			  elseif (get_locale() == 'en_GB'):

			  $keys = array(
      		'post_type'    => 'page',
    		'p'            => 1246,
    		);


			  endif;

			  $loop = new WP_Query( $keys );

			  if ( $loop->have_posts() ) {
      while ( $loop->have_posts() ) {
        $loop->the_post();


		  edit_post_link();
	  }
		  }

		?>

		  </div>

		  <!-- END -->

      </div>

	  <div id="getintosales" class="col-md-5 p-4 module-subtitle text-left">

		  <!-- START -->

<h3 class="font-weight-bold">

	<?php $post = get_page(pll_get_post(1101)); ?>

			<?= $post->post_title; ?>
		  </h3>

		  <div class="mt-4">
			<?= $post->post_content; ?>

		  </div>


		  <div class="text-center mt-2">
		<?php edit_post_link(); ?>
		  </div>



	<!-- END -->
      </div>



</div>

      </div>
    </div>

<div id="regform" style="height:40px">

	  </div>

	   <?php

       $query->the_post();
       $expDate = get_field('exp_date');
       $field = get_field('registration_form');
       $form = do_shortcode($field);

	 date_default_timezone_set('Europe/Athens') ;
	  $date_now = date('Y-m-d H:i:s');
//	  $date_exp = date('2018-11-11 23:59:59');
       $date_exp = $expDate;
	  ?>


    <div class="text-center">

    <?php if (get_locale() == 'en_GB'): ?>
            <a  data-toggle="collapse" href="#register" role="button" aria-expanded="false" aria-controls="register">

			<?php if($date_now < $date_exp): ?>
				<button id="register-btn" type="button" class="btn btn-outline-danger">Apply now!</button>
			<?php else: ?>
				<button id="register-btn" type="button" class="btn btn-outline-danger">Applications are now closed!</button>
			<?php endif; ?>

			</a>


			<?php if($date_now < $date_exp): ?>
				<div class="mt-5">

			<?= do_shortcode( '[wpcdt-countdown id="2539"]' ); ?>

				</div>
			<?php endif; ?>

        <?php elseif (get_locale() == 'el'): ?>
      <a  data-toggle="collapse" href="#register" role="button" aria-expanded="false" aria-controls="register">

		  <?php if($date_now < $date_exp): ?>
		  		<button id="register-btn" type="button" class="btn btn-outline-danger">Δηλωσε συμμετοχη!</button>
		  <?php else: ?>
		  		<button id="register-btn" type="button" class="btn btn-outline-danger">Η διαδικασια υποβολης αιτησεων ολοκληρωθηκε!</button>
		  <?php endif; ?>

		</a>

		 <?php if($date_now < $date_exp): ?>

				<div class="mt-5">

			<?= do_shortcode( '[wpcdt-countdown id="2537"]' ); ?>

				</div>
		<?php endif; ?>

      <?php endif; ?>
    </div>



    <div class="mt-3">

     <div class="collapse" id="register">
   <div class="card card-body">

      <?php if (get_locale() == 'en_GB'): ?>

	       <div class="modal-header pt-0">
				<ul class="navbar-nav registration-nav">
					<li class="nav-item">
				<img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/04/PTI-menu-final.png" width="75"/>
					</li>

					<li class="nav-item">

				<img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/03/bodossaki-logo-menu-en.jpg" width="80"/>
										</li>

					<li class="nav-item">
				<img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/03/knowl-logo-menu.jpg" />
					</li>

				</ul>

				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
					<?php if($date_now < $date_exp): ?>
				<h5 class="modal-title" id="registration-GR">Apply now!</h5>
					<?php else: ?>
				<h5 class="modal-title" id="registration-GR">Applications are now closed!</h5>
					<?php endif; ?>
					</li>
				</ul>
              

            </div>

	   <?php if($date_now < $date_exp):
              echo $form;
		 else: ?>
	   <h5 class="text-center pt-4">
		   New programmes will be announced shortly.
	   </h5>
	   <?php endif; ?>

      <?php elseif (get_locale() == 'el'): ?>

	  <div class="modal-header pt-0">
				<ul class="navbar-nav registration-nav">
					<li class="nav-item">
				<img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/04/PTI-menu-final.png" width="75"/>
					</li>

					<li class="nav-item">

				<img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/03/bodossaki-logo-menu-gr.jpg" width="80"/>

					</li>

					<li class="nav-item">
				<img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/03/knowl-logo-menu.jpg" />
					</li>

				</ul>

				<ul class="navbar-nav ml-auto">
					<li class="nav-item">

				<?php if($date_now < $date_exp): ?>
				<h5 class="modal-title" id="registration-GR">
					Δήλωσε συμμετοχή!
				</h5>
				<?php else: ?>
					<h5 class="modal-title" id="registration-GR">
					Η διαδικασία υποβολής αιτήσεων ολοκληρώθηκε!
				</h5>
				<?php endif; ?>
					</li>
				</ul>
        </div>      

	    <?php if($date_now < $date_exp):

              echo $form;

	          else: ?>
	   <h5 class="text-center pt-1">
		   Σύντομα θα ανακοινωθούν νέα προγράμματα.
	   </h5>
	   <?php endif; ?>

	   <?php endif; ?>
       </div>
      </div>
    </div>


  </div>
</section>
