 <div id="app" class="container">

	 <?php if (( is_page(1101) ) ||  ( is_page(1103) ) || ( is_page(2055) ) || ( is_page(2060) ) ) : ?>

	 <nav id="pti-navbar" class="navbar container-fluid navbar-expand-lg navbar-light bg-white navbar-custom fixed-top">
		 <div class="container">
			 <a class="navbar-brand" href="">
                <img class="logo-white" src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/04/PTI-navbar.png" alt="PrincessTrust">
         </a>

			 <?php if (get_locale() == 'el'): ?>

			 <a class="navbar-brand" href="">
                <img class="logo-white" src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/03/bodossaki-logo-menu-gr.jpg" alt="BodossakiFoundation">
         </a>
			 <?php elseif (get_locale() == 'en_GB'): ?>

			 <a class="navbar-brand" href="">
                <img class="logo-white" src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/03/bodossaki-logo-menu-en.jpg" alt="BodossakiFoundation">
                 </a>

			 <?php endif; ?>

			 <a class="navbar-brand" href="">
                <img class="logo-white" src="http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/03/knowl-logo-menu.jpg" alt="PrincessTrust">
         </a>


			 <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

			 <div id="navbarNavDropdown" class="navbar-collapse collapse">
				 <ul class="navbar-nav ml-auto core-nav">

				<?php	 if ( ( is_page(1101) ) || ( is_page(1103) ) ) :
					 wp_nav_menu([
               'menu'            => 'temporary',
               'theme_location'  => 'temporary',
               'container'       => '',
               'container_id'    => '',
               'container_class' => '',
               'menu_id'         => false,
               'menu_class'      => 'navbar-nav nav-icons',
               'depth'           => 2,
               'fallback_cb'     => 'bs4navwalker::fallback',
               'walker'          => new bs4navwalker()
             ]);

					 elseif ( ( is_page(2055) ) || ( is_page(2060) ) ) :


			 wp_nav_menu([
               'menu'            => 'registration',
               'theme_location'  => 'registration',
               'container'       => '',
               'container_id'    => '',
               'container_class' => '',
               'menu_id'         => false,
               'menu_class'      => 'navbar-nav nav-icons',
               'depth'           => 2,
               'fallback_cb'     => 'bs4navwalker::fallback',
               'walker'          => new bs4navwalker()
             ]);

					endif; ?>



				 </ul>

				  <ul class="navbar-nav reg-nav">

				 <li id="reg-link" class="nav-item">
           <a class="nav-link" href="" data-toggle="modal" data-target="#registration-form"> </a>
        		</li>

				 </ul>

				 <ul class="navbar-nav ml-4 nav-home-lang">
				  <li class="nav-item">
           <a class="nav-link home-link" href="<?php echo get_home_url(); ?>"> </a>
        		</li>

				  <li id="lang-white" class="nav-item">

                   <?php pll_the_languages(array('show_flags'=>1,'show_names'=>0, 'hide_current'=>1 ));?>

                 </li>

             </ul>

			 </div>


		 </div>

		  <ul class="nav flex-column social-side">
                 <li class="nav-item active">
                   <a class="nav-link" href="https://www.facebook.com/knowl.gr/" target="_blank">
                     <img class="ico rounded-circle" src="<?= get_template_directory_uri(); ?>/dist/images/ico_fb.svg">

                   </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="https://www.linkedin.com/company/5005379" target="_blank">
                        <img class="ico rounded-circle" src="<?= get_template_directory_uri(); ?>/dist/images/ico_linkedin.svg">
                     </a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="https://www.youtube.com/channel/UCfm_5iKrrBiuWhXLwt8oHwA?" target="_blank">

                     <img class="ico rounded-circle" src="<?= get_template_directory_uri(); ?>/dist/images/ico_youtube.svg">
                   </a>
                 </li>

                 <li class="nav-item">
                   <a class="nav-link" href="https://www.flickr.com/photos/126041650@N04/" target="_blank">
                     <img class="ico rounded-circle" src="<?= get_template_directory_uri(); ?>/dist/images/ico_flickr.svg">
                   </a>
                 </li>

             </ul>



	 </nav>




	 <?php else: ?>
     <nav class="navbar container-fluid navbar-expand-lg navbar-dark bg-faded navbar-custom fixed-top">
       <div class="container">
         <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                <img class="logo" src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
			 <img class="logo-sm" src='http://<?= $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/02/cropped-knowl_icon.png' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' width='80'>
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div id="navbarNavDropdown" class="navbar-collapse collapse">
             <ul class="navbar-nav mr-auto">

             </ul>
             <?php if ( is_front_page() ) :

             wp_nav_menu([
               'menu'            => 'top',
               'theme_location'  => 'top',
               'container'       => '',
               'container_id'    => '',
               'container_class' => '',
               'menu_id'         => false,
               'menu_class'      => 'navbar-nav nav-icons',
               'depth'           => 2,
               'fallback_cb'     => 'bs4navwalker::fallback',
               'walker'          => new bs4navwalker()
             ]);



			 else:

			  wp_nav_menu([
               'menu'            => 'secondary',
               'theme_location'  => 'secondary',
               'container'       => '',
               'container_id'    => '',
               'container_class' => '',
               'menu_id'         => false,
               'menu_class'      => 'navbar-nav nav-icons',
               'depth'           => 2,
               'fallback_cb'     => 'bs4navwalker::fallback',
               'walker'          => new bs4navwalker()
             ]);

			 endif;

			 ?>
             <ul class="navbar-nav">



				  <li class="nav-item">

                   <?php pll_the_languages(array('show_flags'=>1,'show_names'=>0, 'hide_current'=>1 ));?>

                 </li>

             </ul>
         </div>
         </div>

		 <ul class="nav flex-column social-side">
                 <li class="nav-item active">
                   <a class="nav-link" href="https://www.facebook.com/knowl.gr/" target="_blank">
                     <img class="ico rounded-circle" src="<?= get_template_directory_uri(); ?>/dist/images/ico_fb.svg">
                   </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="https://www.linkedin.com/company/5005379" target="_blank">
                        <img class="ico rounded-circle" src="<?= get_template_directory_uri(); ?>/dist/images/ico_linkedin.svg">
                     </a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="https://www.youtube.com/channel/UCfm_5iKrrBiuWhXLwt8oHwA?" target="_blank">
                     <img class="ico rounded-circle" src="<?= get_template_directory_uri(); ?>/dist/images/ico_youtube.svg">
                   </a>
                 </li>

                 <li class="nav-item">
                   <a class="nav-link" href="https://www.flickr.com/photos/126041650@N04/" target="_blank">
                     <img class="ico rounded-circle" src="<?= get_template_directory_uri(); ?>/dist/images/ico_flickr.svg">
                   </a>
                 </li>

             </ul>


     </nav>



	 <?php endif; ?>


 </div>
