<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/dist/css/bootstrap.css">
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/dist/img/favicon.ico" type="image/x-icon">
    <script src="<?= get_template_directory_uri(); ?>/dist/js/bootstrap.bundle.js" defer></script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">
                <a href="<?= get_site_url(); ?>" class="navbar-brand">
                    <span class="header-title">CI</span>
                    <span>COVID19 Indonesia</span>
                </a>

                <button class="navbar-toggler" data-bs-target="#navbar-toggle" data-bs-toggle="collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar-toggle">
                    <div class="navbar-nav d-flex ms-auto">
                        <a href="<?= get_site_url(); ?>" class="nav-link active">Home</a>
                        <a href="<?= get_site_url(); ?>/news/pembaruan-berita" class="nav-link active">Berita</a>
                        <a href="<?= get_site_url(); ?>/news/acara-covid-19" class="nav-link active">Acara</a>
                        <a href="<?= get_site_url(); ?>/news/setiap-editor-yang-dipilih" class="nav-link active">Pilihan</a>
                        <a href="<?= get_site_url(); ?>/contact" class="nav-link active">Kontak</a>
                    </div>
                </div>
            </div>
        </nav>
        <div id="container">
            <main id="content" role="main">