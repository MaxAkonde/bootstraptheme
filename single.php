<?php
    get_header();
?>

<?php
    if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>
            <!-- Page Header -->
            <header class="masthead" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto">
                            <div class="site-heading">
                                <h1><?php the_title(); ?></h1>
                                <span class="subheading">A Blog Theme by Start Bootstrap</span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Post Content -->
            <article>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </article>

    <?php endwhile;
    endif;
?>

<?php
    get_footer();
?>