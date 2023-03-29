<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>

    <div class="container mt-3">
        <?php if (the_title('', '', false) == "Contact") : ?>
            <h2 class="text-center">Kontak Kami</h2>

            <form method="POST">
                <input type="hidden" name="post" value="true">

                <div class="row mt-3 align-items-center flex-column">

                    <?php if (isset($_POST["post"])) : ?>
                        <div class="col-md-4">
                            <div class="alert alert-success" role="alert">
                                Pesan Telah Dikirim
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="mb-3 col-md-4">
                        <input type="text" class="form-control" placeholder="Nama Anda">
                    </div>
                    <div class="mb-3 col-md-4">
                        <input type="email" class="form-control" placeholder="Email Anda">
                    </div>
                    <div class="mb-3 col-md-4">
                        <textarea class="form-control" cols="30" rows="10" placeholder="Pesan Anda"></textarea>
                    </div>
                    <div class="mb-3 col-md-4">
                        <button class="btn btn-primary me-2" type="submit">Kirim</button>
                        <button class="btn btn-danger" type="reset">Bersihkan</button>
                    </div>
                </div>
            </form>

        <?php elseif (the_title('', '', false) == "Pembaruan Berita") : ?>
            <h1 class="text-center">Pembaruan Berita</h1>
            <?php $posts = new WP_Query(array(
                "post_type" => "post",
                "post_status" => "publish",
                "category_name" => "pembaruan-berita"
            )) ?>

        <?php elseif (the_title('', '', false) == "Acara COVID-19") : ?>
            <h1 class="text-center">Acara COVID-19</h1>
            <?php $posts = new WP_Query(array(
                "post_type" => "post",
                "post_status" => "publish",
                "category_name" => "acara-covid-19"
            )) ?>

        <?php elseif (the_title('', '', false) == "Setiap Editor Yang Dipilih") : ?>
            <h1 class="text-center">Setiap Editor Yang Dipilih</h1>
            <?php $posts = new WP_Query(array(
                "post_type" => "post",
                "post_status" => "publish",
                "category_name" => "setiap-editor-yang-dipilih"
            )) ?>

        <?php elseif (the_title('', '', false) == "News") : ?>
            <h1 class="text-center">Semua Berita</h1>
            <?php $posts = new WP_Query(array(
                "post_type" => "post",
                "post_status" => "publish"
            )) ?>

        <?php endif; ?>
        <?php if (the_title('', '', false) != "Contact") : ?>
            <div class="row gap-3 justify-content-center mt-3">
                <?php if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post() ?>

                        <div class="col-md-7">
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
                        </div>

                <?php endwhile;
                endif; ?>
            </div>
        <?php endif; ?>
    </div>

<?php endif; ?>
<?php get_footer(); ?>