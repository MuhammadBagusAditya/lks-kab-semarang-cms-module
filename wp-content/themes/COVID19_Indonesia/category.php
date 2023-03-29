<?php get_header(); ?>
<div class="container mt-3">
    <h2 class="text-center"><?php single_term_title() ?></h2>
    <section class="row gap-3 justify-content-center mt-3">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="col-md-7 post">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="<?= the_permalink(); ?>">
                                <img src="<?= the_post_thumbnail_url(); ?>" alt="<?= the_title('', '', false); ?>" class="home-post-thumbnail">
                            </a>
                        </div>
                        <div class="col-md">
                            <div class="d-flex flex-column h-100 justify-content-between">
                                <div>
                                    <a href="<?= the_permalink(); ?>" class="post-url">
                                        <h5 class="mt-1"><?= the_title('', '', false); ?></h5>
                                    </a>
                                    <p>Diterbitkan pada <?= get_the_date(); ?></p>
                                </div>
                                <p class="mb-1"><?= the_category(" | "); ?></p>
                            </div>
                        </div>
                    </div>
                </article>
        <?php endwhile;
        endif; ?>
    </section>
</div>
<?php get_footer(); ?>