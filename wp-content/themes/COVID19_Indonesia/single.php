<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="container mt-4">
            <img src="<?= the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="single-thumbnail">
            <h2 class="mt-2"><?php the_title() ?></h2>
            <p><?= the_content(); ?></p>
            <p><?= the_category(" | "); ?></p>
            <a href="<?= get_site_url(); ?>">
                <button class="btn btn-warning">Kembali Ke Home</button>
            </a>
        </article>

<?php endwhile;
endif; ?>
<?php get_footer(); ?>