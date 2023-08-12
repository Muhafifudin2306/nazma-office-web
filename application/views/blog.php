<div class="container">
    <div class="spacer navbar-space-lg"></div>
    <section id="blog">
        <h4 class="title-section"> Blog </h4>
        <div class="spacer" style="margin-top: 2vw;"></div>
        <div class="row verse">
            <div class="col-lg-1"></div>
            <div class="col-lg-12">
                <div class="spacer spacer-sm"></div>
                <small id="filter-count"></small>
            </div>
            <div class="col-lg-12">
                <form class="input-box" id="live-search" action="" method="post">
                    <input type="text" class="form-control" id="filter" placeholder="search" />
                </form>
            </div>
            <div class="col-lg-1"></div>
        </div>
        <div class="spacer spacer-md"></div>
        <div class="row">
            <?php foreach ($frontdatablog as $data) { ?>
            
            <div class="col-md-4 card-blog content mb-3">
                    <div class="bg-white border rounded p-3">
                        <div class="image-blog">
                            <img class="bg-zoom wd-100" height="200"
                            src="<?= base_url() ?>assets/images/admin/blog/<?= $data['photo'] ?>">
                        </div>
                        <div class="content-blog">
                            <div class="time">
                                <small class="font-sm">
                                    <?= date('d M Y', strtotime($data['date'])) ?>
                                </small>
                            </div>
                            <div class="title-blog">
                                <h6 style="font-weight:600">
                                    <?= $data['title'] ?>
                                </h6>
                            </div>
                            <div class="title-blog">
                                <span class="font-md">
                                    <?php echo character_limiter(strip_tags($data['content']), 100); ?>
                                </span>
                            </div>
                            <br>
                            <a href="<?= site_url() ?>front/detail_blog/<?= $data['slug'] ?>" class="btn btn-basic bg-pure"
                                role="button">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            
                <!--<div class="card-blog content">-->
                <!--    <div class="image-blog">-->
                <!--        <img class="bg-zoom wd-100" height="200"-->
                <!--            src="<?= base_url() ?>assets/images/admin/blog/<?= $data['photo'] ?>">-->
                <!--    </div>-->
                <!--    <div class="content-blog">-->
                <!--        <div class="time">-->
                <!--            <small class="font-sm">-->
                <!--                <?= date('d M Y', strtotime($data['date'])) ?>-->
                <!--            </small>-->
                <!--        </div>-->
                <!--        <div class="title-blog">-->
                <!--            <h6 style="font-weight:600">-->
                <!--                <?= $data['title'] ?>-->
                <!--            </h6>-->
                <!--        </div>-->
                <!--        <div class="title-blog">-->
                <!--            <span class="font-md">-->
                <!--                <?php echo character_limiter(strip_tags($data['content']), 100); ?>-->
                <!--            </span>-->
                <!--        </div>-->
                <!--        <br>-->
                <!--        <a href="<?= site_url() ?>front/detail_blog/<?= $data['slug'] ?>" class="btn btn-basic bg-pure"-->
                <!--            role="button">Selengkapnya</a>-->
                <!--    </div>-->
                <!--</div>-->
            <?php } ?>
        </div>
        <div class="spacer spacer-md"></div>
        <div class="load">
            <a href="#" class="btn btn-primary bg-primary" id="loadMore">Lebih Banyak</a>
        </div>
        <div class="spacer spacer-lg"></div>
    </section>
</div>