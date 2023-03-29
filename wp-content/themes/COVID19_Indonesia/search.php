<?php get_header(); ?>
<div class="container mt-3">

    <?php if (have_posts()) : ?>
        <header class="header">
            <h2 class="entry-title text-center" itemprop="name"><?php printf(esc_html__('Hasil Pencarian Untuk: %s', 'blankslate'), get_search_query()); ?></h2>
        </header>
        <div class="row justify-content-center mt-3">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-4">
                    <a href="<?= the_permalink(); ?>">
                        <img src="<?= the_post_thumbnail_url(); ?>" alt="<?= the_title('', '', false); ?>" class="post-thumbnail">
                    </a>
                    <a href="<?= the_permalink(); ?>" class="post-url">
                        <h6 class="mt-1"><?= the_title('', '', false); ?></h5>
                    </a>
                    <p>Diterbitkan pada <?= get_the_date(); ?></p>
                    <p><?= the_category(" | "); ?></p>
                </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <article id="post-0" class="post no-results not-found">
        <header class="header">
            <h2 class="entry-title text-center" itemprop="name"><?php esc_html_e('404 | Not Found', 'blankslate'); ?></h2>
        </header>
        <div class="entry-content d-flex flex-column align-items-center" itemprop="mainContentOfPage">
            <p><?php esc_html_e('Pencarian tidak ditemukan, silahkan ulangi dengan kata kunci lainnya!', 'blankslate'); ?></p>
            <?php get_search_form(); ?>
        </div>
    </article>
<?php endif; ?>
</div>
<?php get_footer(); ?>