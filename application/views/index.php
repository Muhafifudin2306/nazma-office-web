<div class="container">
      <div class="spacer navbar-space"></div>
      <!-- Hero Section -->
      <section id="hero">
            <div class="row">
                  <div class="left-content col-lg-6 col-md-6">
                        <div class="hero-image">
                              <img class="wd-100" src="<?= base_url('assets/img/largeScreenjpg.jpg') ?>"
                                    title="Kantor NaZMa Office" alt="nazma office">
                        </div>
                  </div>
                  <div class="right-content col-lg-6 col-md-6">
                        <div class="hero-title">
                              <div class="spacer right-title"></div>
                              <h3 class="hero-title">
                                    "We'll Finish It With Excellence"
                              </h3>
                              <div class="spacer right-title"></div>
                        </div>
                  </div>
            </div>
      </section>
      <!-- Section About -->
      <section id="about">
            <div class="spacer spacer-lg"></div>
            <h4 class="title-section">
                  Tentang Kami
            </h4>
            <div class="spacer spacer-md"></div>
            <p class="section-desc">
                  Nabila Zafira Mahalia atau yang biasa disebut sebagai NaZMa Office berdiri pada tahun 2007. NaZMa
                  Office telah memiliki pengalaman kurang lebih sekitar 12 tahun dalam bidang Konsultan IT dan
                  Manajemen. Dalam bidang Konsultan IT, NaZMa memiliki beberapa produk unggulan di antaranya : penjualan
                  hardware, pembuatan dan pengembangan perangkat lunak (software), pelatihan IT, pembuatan video profil,
                  dan pengembangan website. Di bidang Konsultan Manajemen, NaZMa juga memiliki produk unggulan seperti :
                  pelatihan InHouse, public course, sertifikasi, event organisasi, dan kajian-kajian. Beberapa kali
                  bekerja sama dengan instansi-instansi pemerintahan, komunitas perusahaan, dan lembaga-lembaga
                  pendidikan. Produk yang NaZMa berikan menghasilkan nilai- nilai tambah atau value dengan prinsip
                  "We'll Finish It With Excellence" dengan target kepuasan pelanggan.
            </p>
            <div class="spacer spacer-lg"></div>
      </section>
      <!-- Section Layanan -->
      <section id="service">
            <div class="spacer spacer-lg"></div>
            <h4 class="title-section">
                  Layanan
            </h4>
            <div class="spacer spacer-md"></div>
            <div class="row center-flex">
                  <div class="left-card col-lg-4 col-md-6">
                        <a href="<?php echo site_url('front/it_service') ?>">
                              <div class="card-set pd-2">
                                    <div class="spacer spacer-lg"></div>
                                    <img class="center-card" src="<?= base_url('assets/img/technology.png') ?>"
                                          alt="technology" width="95">
                                    <div class="spacer spacer-md"></div>
                                    <div class="title-card">
                                          Produk Teknologi Informasi
                                    </div>
                                    <div class="spacer spacer-lg"></div>
                              </div>
                              <div class="spacer spacer-md"></div>
                        </a>
                  </div>
                  <div class="right-card col-lg-4 col-md-6">
                        <a href="<?php echo site_url('front/management_service') ?>">
                              <div class="card-set pd-2">
                                    <div class="spacer spacer-lg"></div>
                                    <img class="center-card" src="<?= base_url('assets/img/accounting.png') ?>"
                                          alt="management" width="95">
                                    <div class="spacer spacer-md"></div>
                                    <div class="title-card">
                                          Produk Konsultan Manajemen
                                    </div>
                                    <div class="spacer spacer-lg"></div>
                              </div>
                              <div class="spacer spacer-md"></div>
                        </a>
                  </div>
            </div>
      </section>
      <!-- Section Proyek -->
      <section id="project">
            <div class="spacer spacer-lg"></div>
            <h4 class="title-section">
                  Proyek
            </h4>
            <div class="spacer spacer-md"></div>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                        <?php
                        foreach ($frontdataproject as $key => $value) {
                              $active = ($key == 0) ? 'active' : '';
                              for ($x = 0; $x <= 200; $x++) {
                                    echo '<li data-target="#carouselExampleDark" data-slide-to="' . $key . '" class="' . $active . '"></li>';
                              }
                        }
                        ?>
                  </div>
                  <div class="carousel-inner">
                        <?php
                        foreach ($frontdataproject as $key => $value) {
                              $active = ($key == 0) ? 'active' : '';
                              echo '<div class="carousel-item ' . $active . '" data-bs-interval="7000">
                              <div class="container col-12 col-lg-10">
                                    <div class="card-project">
                                          <div class="row">
                                                <div class="left-content col-lg-6 ">
                                                      <div class="spacer mt-1"></div>
                                                      <img class="project-img bg-zoom"
                                                            src="' . base_url('assets/images/admin/project/') . $value['photo'] . '" alt="…">
                                                      <div class="spacer mt-1"></div>
                                                </div>
                                                <div class="right-content col-lg-6">
                                                      <div class="spacer mt-1"></div>
                                                      <div class="title-card-bold ft-20">
                                                            <p>' . $value['title'] . '</p>
                                                      </div>
                                                      <div class="title-card-sm">
                                                            <p>' . $value['description'] . '</p>
                                                      </div>
                                                      <div class="d-flex space-flex">
                                                            <i class="bi bi-calendar-event clr-primary"></i>
                                                            <p class="date-format"> Tanggal :
                                                                  ' . date('d M Y', strtotime($value['date'])) . '</p>
                                                      </div>
                                                      <div class="d-flex space-flex">
                                                            <i class="bi bi-geo-alt clr-primary"></i>
                                                            <p class="date-format"> Lokasi : ' . $value['location'] . '
                                                            </p>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>';
                        }
                        ?>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">
                              Previous
                        </span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">
                              Next
                        </span>
                  </button>
            </div>
            <div class="spacer spacer-lg"></div>
      </section>
      <!-- Section Testimoni -->
      <section id="testimoni">
            <div class="spacer spacer-lg"></div>
            <h4 class="title-section">
                  Testimoni
            </h4>
            <div class="spacer spacer-md"></div>
            <div id="carouselDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                        <?php
                        foreach ($frontdatatestimony as $key => $value) {
                              $active = ($key == 0) ? 'active' : '';
                              for ($x = 0; $x <= 200; $x++) {
                                    echo '<li data-target="#carouselDark" data-slide-to="' . $key . '" class="' . $active . '"></li>';
                              }
                        }
                        ?>
                  </div>
                  <div class="carousel-inner">
                        <?php
                        foreach ($frontdatatestimony as $key => $value) {
                              $active = ($key == 0) ? 'active' : '';
                              echo '<div class="carousel-item ' . $active . '" data-bs-interval="7000">
                              <img class="center-item bg-zoom" height="200" width="200" src="' . base_url('assets/images/admin/testimony/') . $value['photo'] . '" alt="…">
                              <div class="spacer mt-4"></div>
                              <div class="testimoni-title">
                              ' . $value['name'] . '
                              </div>
                              <div class="spacer mt-2"></div>
                              <div class="row center-flex">
                                    <div class="col-lg-6">
                                          <div class="testimoni-desc">
                                          ' . $value['description'] . '
                                          </div>
                                    </div>
                              </div>
                              <div class="spacer spacer-lg"></div>
                        </div>';
                        }
                        ?>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">
                              Previous
                        </span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">
                              Next
                        </span>
                  </button>
            </div>
            <div class="spacer spacer-lg"></div>
      </section>
      <!-- Section Staff -->
      <section id="staff">
            <div class="spacer spacer-lg"></div>
            <h4 class="title-section">
                  Pelatih Tersertifikasi
            </h4>
            <div class="spacer spacer-md"></div>
            <div class="row">
                  <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"
                        data-interval="1000">
                        <div class="MultiCarousel-inner">
                              <?php foreach ($frontdatacertifiedtrainers as $data) { ?>
                                    <div class="item">
                                          <div class="pad15 border rounded">
                                                <img class="bg-zoom center-item px-2 pt-3" width="200" height="200"
                                                      src="<?= base_url() ?>assets/images/admin/certifiedtrainers/<?= $data['photo'] ?>">
                                                <div class="spacer mt-2"></div>
                                                <h6>
                                                      <?= $data['name'] ?>
                                                </h6>
                                                <h6 class="pb-3 fw-bold">
                                                      <?= $data['departement'] ?>
                                                </h6>
                                          </div>
                                    </div>
                              <?php } ?>
                        </div>
                        <div class="spacer" style="margin-top: 140px;"></div>
                        <button class="btn bg-purple leftLst">
                              <span class="prev-icon">
                                    <i class="bi bi-arrow-left-short"></i>
                              </span>
                        </button>
                        <button class="btn rightLst bg-purple">
                              <span class="prev-icon">
                                    <i class="bi bi-arrow-right-short"></i>
                              </span>
                        </button>
                  </div>
            </div>

            <div class="spacer spacer-lg"></div>
            <h4 class="title-section">
                  Tim Kreatif
            </h4>
            <div class="spacer spacer-md"></div>
            <div class="row">
                  <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"
                        data-interval="1000">
                        <div class="MultiCarousel-inner">
                              <?php foreach ($frontdatacreativecrew as $data) { ?>
                                    <div class="item">
                                          <div class="pad15 border rounded">
                                                <img class="bg-zoom center-item px-2 pt-3" width="200" height="200"
                                                      src="<?= base_url() ?>assets/images/admin/creativecrew/<?= $data['photo'] ?>">
                                                <div class="spacer mt-2"></div>
                                                <h6>
                                                      <?= $data['name'] ?>
                                                </h6>
                                                <h6 class="pb-3 fw-bold">
                                                      <?= $data['departement'] ?>
                                                </h6>
                                          </div>
                                    </div>
                              <?php } ?>
                        </div>
                        <div class="spacer" style="margin-top: 140px;"></div>

                        <button class="btn bg-purple leftLst">
                              <i class="bi bi-arrow-left-short"></i>
                        </button>
                        <button class="btn rightLst bg-purple">
                              <i class="bi bi-arrow-right-short"></i>
                        </button>
                  </div>
            </div>
      </section>
      <!-- Section Partner  -->
      <section id="partner">
            <div class="spacer spacer-lg"></div>
            <h4 class="title-section">
                  Mitra Kami
            </h4>
            <div class="spacer spacer-md"></div>
            <div class="card-group mb-10">
                  <div class="responsive-card">
                        <?php foreach ($frontdatapartnership as $data) { ?>
                              <img src="<?= base_url() ?>assets/images/admin/partnership/<?= $data['photo'] ?>" alt="..."
                                    width="150" class="pd-2" />
                        <?php } ?>
                  </div>
            </div>
            <div class="spacer spacer-lg"></div>
      </section>
</div>