<?php get_header(); ?>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php
          if(have_posts()) :
            while(have_posts()) : the_post(); ?>
              <div class="post-preview">
                <a href="post.html">
                  <h2 class="post-title">
                    <?php the_title(); ?>
                  </h2>
                  <h3 class="post-subtitle">
                    <?php the_excerpt(); ?>
                  </h3>
                </a>
                <p class="post-meta">Posted by
                  <a href="#">Start Bootstrap</a>
                  on <?php the_time('M d, Y'); ?></p>
              </div>
              <hr>
          <?php endwhile;
          endif;
        ?>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>