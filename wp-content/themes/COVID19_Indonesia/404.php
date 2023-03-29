<?php get_header(); ?>
<article id="post-0" class="post not-found">
    <div class="container mt-3">

        <header class="header">
            <h2 class="entry-title text-center" itemprop="name"><?php esc_html_e('404 | Not Found', 'blankslate'); ?></h2>
        </header>
        <div class="entry-content d-flex flex-column align-items-center" itemprop="mainContentOfPage">
            <p><?php esc_html_e('Pencarian tidak ditemukan, silahkan ulangi dengan kata kunci lainnya!', 'blankslate'); ?></p>
            <?php get_search_form(); ?>
        </div>
    </div>
</article>
<?php get_footer(); ?>