<section class="module" id="news">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-sm-offset-3">
        <h2 class="module-title font-alt"><?php
        $page = get_page_by_title( 'Νέα απο το Blog' );

        $title = apply_filters('the_content', $page->post_title);
        $link = get_permalink( get_page_by_title( 'Νέα απο το Blog' ) );
        echo '<a href="'.$link.'">';
        echo $title;
        echo '</a>';
        ?></h2>
        <div class="module-subtitle font-serif"><?php
        $page = get_page_by_title( 'Νέα απο το Blog' );
        $content = apply_filters('the_content', $page->post_excerpt);

        echo $content;
        ?></div>
      </div>
    </div>
    <div class="row multi-columns-row post-columns">
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="post mb-20">
          <div class="post-thumbnail"><a href="#"><img src="assets/images/post-1.jpg" alt="Blog-post Thumbnail"/></a></div>
          <div class="post-header font-alt">
            <h2 class="post-title"><a href="#">Our trip to the Alps</a></h2>
            <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>&nbsp;| 23 November | 3 Comments
            </div>
          </div>
          <div class="post-entry">
            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
          </div>
          <div class="post-more"><a class="more-link" href="#">Read more</a></div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="post mb-20">
          <div class="post-thumbnail"><a href="#"><img src="assets/images/post-2.jpg" alt="Blog-post Thumbnail"/></a></div>
          <div class="post-header font-alt">
            <h2 class="post-title"><a href="#">Shore after the tide</a></h2>
            <div class="post-meta">By&nbsp;<a href="#">Andy River</a>&nbsp;| 11 November | 4 Comments
            </div>
          </div>
          <div class="post-entry">
            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
          </div>
          <div class="post-more"><a class="more-link" href="#">Read more</a></div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="post mb-20">
          <div class="post-thumbnail"><a href="#"><img src="assets/images/post-3.jpg" alt="Blog-post Thumbnail"/></a></div>
          <div class="post-header font-alt">
            <h2 class="post-title"><a href="#">We in New Zealand</a></h2>
            <div class="post-meta">By&nbsp;<a href="#">Dylan Woods</a>&nbsp;| 5 November | 15 Comments
            </div>
          </div>
          <div class="post-entry">
            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
          </div>
          <div class="post-more"><a class="more-link" href="#">Read more</a></div>
        </div>
      </div>
    </div>
  </div>
</section>
