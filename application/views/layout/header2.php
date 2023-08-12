<!DOCTYPE html>
<html lang="en">

<head>
      <!-- Metadata Section -->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="keyword" content="<?= $page_keyword ?>">
      <meta name="description"
            content="NaZMa Office, konsultan IT dan manajemen berpengalaman selama 12 tahun, hadir untuk memberikan solusi terbaik bagi klien-klien di era digital.">

      <!-- icon page -->
      <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/NaZMa_Logo_Transparent.png">

      <!-- title page -->
      <title>
            <?= $page_title ?>
      </title>

      <!-- bootstrap v5.2 CDN -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>

      <!-- bootstrap icon v5.2 CDN -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

      <!-- font awesome CDN -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
            integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

      <!-- external CSS & JS -->
      <link href="<?= base_url('assets/css/front.css') ?>" rel="stylesheet">
      <link href="<?= base_url('assets/css/loader.css') ?>" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="<?= base_url('assets/js/script.js') ?>"></script>
      <script src="<?= base_url('assets/js/blog.js') ?>"></script>
      <script src="<?= base_url('assets/js/event.js') ?>"></script>
      <script src="<?= base_url('assets/js/loader.js') ?>"></script>
</head>

<style>

</style>

<body class="bg-light overflow-hidden" id="body">
      <div id="loader" class="cover-loader w-100 vh-100 bg-light d-flex justify-content-center align-items-center">
            <div class="loader"></div>
      </div>
      <!-- Navbar -->
      <header>
            <nav class="navbar fixed-top navbar-expand-lg nav-bg">
                  <div class="container">
                        <a class="navbar-brand" href="<?php echo site_url('front') ?>">
                              <img src="<?= base_url("assets/img/nazmaofficewithlower.png") ?>" alt="nazma office brand"
                                    width="120">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                              aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                              <ul class="navbar-nav mb-2 mb-lg-0">
                                    <li class="nav-item">
                                          <a class="nav-link ft-light"
                                                href="<?php echo site_url('front') ?>">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link ft-light"
                                                href="<?php echo site_url('front') ?>/#about">Tentang Kami</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link ft-light"
                                                href="<?php echo site_url('front') ?>/#service">Layanan</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link ft-light"
                                                href="<?php echo site_url('front/blog') ?>">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link ft-light"
                                                href="<?php echo site_url('front/gallery') ?>">Galeri</a>
                                    </li>
                                    <li class="nav-item">
                                          <a type="button" class="btn btn-outline-warning mb-event"
                                                href="<?php echo site_url('front/event') ?>">Acara</a>
                                    </li>
                              </ul>
                        </div>
                  </div>
            </nav>
      </header>