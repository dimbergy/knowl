<?php
/**
 * Template Name: owl
 */
?>

 <?php while (have_posts()) : the_post(); ?>

<?php if (get_the_ID() == 3080 || get_the_ID() == 3084): ?>

<article <?php post_class(); ?> style="color:black">

<div class="modal-content mb-5">
  <div id="countdown">


        <?php
        if (get_locale() == 'el'):

        echo do_shortcode( '[wpcdt-countdown id="2537"]' );

        elseif (get_locale() == 'en_GB'):

        echo do_shortcode( '[wpcdt-countdown id="2539"]' );

        endif;
        ?>

    </div>

    <div id="popup" class="modal-header pt-0 pb-0 mt-0">
        <ul class="navbar-nav registration-nav">
          <li class="nav-item">
        <img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/04/PTI-menu-final.png" width="75"/>
          </li>

          <li class="nav-item">
        <?php if (get_locale() == 'en_GB'): ?>
        <img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/03/bodossaki-logo-menu-en.jpg" width="80"/>
        <?php elseif (get_locale() == 'el'): ?>
        <img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/03/bodossaki-logo-menu-gr.jpg" width="80"/>

          <?php endif; ?>
          </li>

          <li class="nav-item">
        <img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/03/knowl-logo-menu.jpg" />
          </li>

        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">

<h5 class="modal-title" id="registration-GR"><?php the_excerpt(); ?></h5>

</li>
</ul>
             
  </div>

  <div class="modal-body">
    <?php the_content();  ?>
  </div>

</div>
</article>

<?php else: ?>


<article <?php post_class(); ?> style="color:black">

	<?php

    $expDate = get_field('exp_date');

	 date_default_timezone_set('Europe/Athens') ;
	  $date_now = date('Y-m-d H:i:s');
//	  $date_exp = date('2018-11-11 23:59:59');
      $date_exp = $expDate;

	  ?>

  <div class="modal-content mb-5">

	  <?php if($date_now < $date_exp): ?>

	  <div id="countdown">


					<?php
					if (get_locale() == 'el'):

					echo do_shortcode( '[wpcdt-countdown id="2537"]' );

					elseif (get_locale() == 'en_GB'):

					echo do_shortcode( '[wpcdt-countdown id="2539"]' );

					endif;
					?>

		  </div>

	  <?php endif; ?>

	  <div id="popup" class="modal-header pt-0 pb-0 mt-0">
				<ul class="navbar-nav registration-nav">
					<li class="nav-item">
				<img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/04/PTI-menu-final.png" width="75"/>
					</li>

					<li class="nav-item">
				<?php if (get_locale() == 'en_GB'): ?>
				<img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/03/bodossaki-logo-menu-en.jpg" width="80"/>
				<?php elseif (get_locale() == 'el'): ?>
				<img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/03/bodossaki-logo-menu-gr.jpg" width="80"/>

					<?php endif; ?>
					</li>

					<li class="nav-item">
				<img src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/03/knowl-logo-menu.jpg" />
					</li>

				</ul>


				<ul class="navbar-nav ml-auto">
					<li class="nav-item">

						<?php if($date_now < $date_exp): ?>

				<h5 class="modal-title" id="registration-GR"><?php the_title(); ?></h5>
						<?php else: ?>

						<?php if (get_locale() == 'en_GB'): ?>
				<h5 class="modal-title" id="registration-GR">Applications are now closed!</h5>
						<?php elseif (get_locale() == 'el'): ?>
				<h5 class="modal-title" id="registration-GR">Η διαδικασία υποβολής αιτήσεων ολοκληρώθηκε!</h5>
						<?php endif; ?>

						<?php endif; ?>

					</li>
				</ul>
              



            </div>



	<?php if($date_now < $date_exp): ?>
  <div class="modal-body">
    <?php the_content();  ?>
  </div>

	 <?php else: ?>

	  <div class="modal-body">

		  <?php if (get_locale() == 'en_GB'): ?>
		  <h5 class="text-center">
			  New programmes will be announced shortly.
		  </h5>
		  <?php elseif (get_locale() == 'el'): ?>
		  <h5 class="text-center">
			  Σύντομα θα ανακοινωθούν νέα προγράμματα.
		  </h5>
		  <?php endif; ?>

  </div>

	  <?php endif; ?>

	  </div>
</article>

<?php endif; ?>

<?php endwhile; ?>


<div class="scroll-up">
<a href="#totop">
<i class="fa fa-angle-double-up"></i>
</a>
</div>
