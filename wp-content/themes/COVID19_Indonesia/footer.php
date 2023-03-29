<?php
$posts = new WP_Query(array(
    "post_type" => "post",
    "post_status" => "publish",
    "posts_per_page" => 3,
    "category__not_in" => [1],
    "orderBy" => "date",
    "order" => "DESC"
));
?>

</main>
</div>
</div>
<footer id="footer" role="contentinfo" class="w-100 bg-dark text-light py-2 mt-5">
    <div class="container">
        <section class="row">
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <a href="<?= get_site_url(); ?>">
                    <h4>COVID19 Indonesia</h4>
                </a>
            </div>
            <div class="col">
                <div class="row gap-2">
                    <div class="col-md-4">
                        <h6>Kategori</h6>
                        <ul>
                            <li>
                                <a href="<?= get_site_url(); ?>/news/pembaruan-berita">Pembaruan Berita</a>
                            </li>
                            <li>
                                <a href="<?= get_site_url(); ?>/news/acara-covid-19">Acara COVID-19</a>
                            </li>
                            <li>
                                <a href="<?= get_site_url(); ?>/news/setiap-editor-yang-dipilih">Setiap Editor Yang Dipilih</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6>Berita Terbaru</h6>
                        <ul>
                            <?php if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post() ?>
                                    <li>
                                        <a href="<?= the_permalink(); ?>"><?php the_title() ?></a>
                                    </li>
                            <?php endwhile;
                            endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <hr>
    <div id="copyright" class="text-center">
        &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>