<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header class="mt-5 pt-5">
		<div class="mt-4">

		<?php         if ( has_post_thumbnail() ) :
                the_post_thumbnail();

             endif; ?>




		</div>
          </header>
	  <div class="row pt-5 mb-5">

      <?php

      $args = array(
        'post_type'              => array( get_post_type() ),
        'post_status'            => array( 'publish' ),
      'post__not_in'           => array( get_the_ID() ),
      );

      $query = new WP_Query( $args );
      if ( $query->have_posts() || (get_post_type() == 'programs') ):?>


	  	<div class="col-md-9 pr-5">

      <?php else: ?>

<div class="col-md-12">

    <?php endif; ?>

   <h3 class="entry-title"><?php the_title(); ?></h3>
		  <div class="entry-content mt-3 mb-5">
      <?php the_content(); ?>

    </div>

<?php  if (get_post_type() == 'cycles_archive'):
          if( have_rows('slider') ): ?>


    <div class="testimon card col-md-12 mt-2">
          <div id="testimonials" class="carousel slide" data-ride="carousel" data-interval="100000">
            <div class="w-100 carousel-inner" role="listbox">

    <?php

  $count=0;
    while ( have_rows('slider') ) : the_row();
    $count++;
        $image = get_sub_field('image');
        // display a sub field value
         ?>



    <div class="carousel-item <?php if($count==1) {echo 'active';} ?>">
      <div class="bg"></div>
      <div class="carousel-caption">
        <div class="row">
          <div class="col-sm-12">
            <img src="<?= $image['url']; ?>" alt="<?= $image['alt'] ?>" class="rounded-circle" width="120" height="120">
          </div>
          <div class="col-sm-12 mt-4">
            <h5><?php the_sub_field('name'); ?></h5>

            <p><?php the_sub_field('message'); ?></p>
          </div>
        </div>
      </div>
    </div>

<?php

    endwhile;

?>


</div>
<a class="carousel-control-prev" href="#testimonials" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#testimonials" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
</div>

<?php endif; ?>

	<?php if (get_locale() == 'el'): ?>
	<a href="/knowl/getintogreece/"><button class="btn btn-outline-dark d-block mr-auto ml-auto">
		ΕΠΙΣΤΡΟΦΗ
	</button></a>
	<?php elseif (get_locale() == 'en_GB'): ?>
	<a href="/knowl/en/getintogreece-en/"><button class="btn btn-outline-dark d-block mr-auto ml-auto">
		BACK
	</button></a>

	<?php endif; ?>

  <?php        endif; ?>

		  </div>





<?php      if ( $query->have_posts() || (get_post_type() == 'programs') ): ?>

        <div class="col-md-3">
        <ul class="navbar-nav">
        <li class="nav-item pb-4">
        <?php if (get_locale() == 'el'): ?>
        <h3 class="text-center">Σχετικά άρθρα</h3>
        <?php elseif (get_locale() == 'en_GB'): ?>
        <h3 class="text-center">Related posts</h3>
        <?php endif; ?>
        </li>

  <?php	endif;

    if (get_post_type() == 'programs'):


  $keys = array(
      'post_type'  	=> 'page',
    'post_status'	=> 'publish',
      'meta_query' 	=> array(
          array(
            'key'   => '_wp_page_template',
            'value' => 'template-custom.php'
        )
    )
  );

    $loop = new WP_Query ($keys);

    if ($loop->have_posts()):
      while ($loop->have_posts()) :
        $loop->the_post();

  $image = get_field( "pic" );

  ?>


  <li class="nav-item"><a class="nav-link" href="<?php the_permalink(); ?>"><img src="<?= $image['url']; ?>" title="<?= $image['title']; ?>" alt="<?= $image['alt']; ?>" /></a></li>
  <li class="nav-item"><a class="nav-link" href="<?php the_permalink(); ?>"><h4 class="text-center"><?= get_field('link_page'); ?></h4></a></li>

  <?php	endwhile;

    endif;

    endif;



      $query = new WP_Query( $args );

      if ( $query->have_posts() ):
        while ( $query->have_posts() ) :
          $query->the_post(); ?>
          <li class="nav-item"><a class="nav-link" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></li>
  <li class="nav-item"><a class="nav-link" href="<?php the_permalink(); ?>"><h4 class="text-center"><?php the_title(); ?></h4></a></li>
        <?php endwhile;
      endif;


      ?>
  </ul>
    </div>


    </div>

    <div class="scroll-up">
  <a href="#totop">
  <i class="fa fa-angle-double-up"></i>
  </a>
  </div>

    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
  <?php endwhile; ?>
