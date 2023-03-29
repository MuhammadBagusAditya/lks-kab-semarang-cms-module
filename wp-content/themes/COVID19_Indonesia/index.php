<?php
get_header();
$posts = new WP_Query(array(
    "post_type" => "post",
    "post_status" => "publish",
    "posts_per_page" => 6,
    "category__not_in" => [1],
    "orderBy" => "date",
    "order" => "DESC"
));

$recommend = new WP_Query(array(
    "post_type" => "post",
    "post_status" => "publish",
    "posts_per_page" => 3,
    "category_name" => "setiap-editor-yang-dipilih",
    "orderBy" => "date",
    "order" => "DESC"
));
?>

<div class="jumbotron" style="background-image: url('<?= get_template_directory_uri() ?>/dist/img/2.jpg');">
    <div class="container pt-5 d-flex flex-column align-items-center">
        <h1 class=" text-light mt-5">COVID19 Indonesia</h1>
        <p class=" text-light mt-2 mb-4">Terapkan Protokol Kesehatan, Menuju Indonesia Bebas COVID19</p>
        <a href="<?= get_site_url(); ?>/news">
            <button class="btn btn-warning">Lebih Banyak</button>
        </a>
    </div>
</div>

<div class="container">
    <h2 class="text-center mt-3">Tentang Kami</h2>
    <div class="row">
        <p class="text-center about">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error possimus rerum repellat, mollitia iusto id necessitatibus amet sapiente culpa repellendus odio saepe soluta sequi tempora maiores libero debitis dolores dolor exercitationem autem sit blanditiis! Culpa debitis eius aperiam reiciendis exercitationem iusto animi qui, magni fuga officiis error labore libero voluptates fugiat id corrupti perspiciatis asperiores iste, laudantium nostrum explicabo voluptatem rerum. Aliquam, id. Ex pariatur consectetur quod aliquam amet, quia illum voluptates atque asperiores totam omnis distinctio nisi quasi doloribus!</p>
    </div>
    <h2 class="text-center mt-3">Berita Terbaru</h2>
    <section class="row gap-3 justify-content-center mt-3">
        <?php if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post() ?>

                <article class="col-md-4 post">
                    <a href="<?= the_permalink(); ?>">
                        <img src="<?= the_post_thumbnail_url(); ?>" alt="<?= the_title('', '', false); ?>" class="post-thumbnail">
                    </a>
                    <a href="<?= the_permalink(); ?>" class="post-url">
                        <h6 class="mt-1"><?= the_title('', '', false); ?></h6>
                    </a>
                    <p>Diterbitkan pada <?= get_the_date(); ?></p>
                    <p class="mb-1"><?= the_category(" | "); ?></p>
                </article>

        <?php endwhile;
        endif; ?>
    </section>

</div>

<?php
get_footer();
?>