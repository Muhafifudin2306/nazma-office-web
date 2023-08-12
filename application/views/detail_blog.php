<style>
      .date-publish-text {
            color: darkgrey;
            font-weight: 500;
            font-size: 13px;
            text-align: center;
      }

      @media (max-width: 991px) {
            .blog-title {
                  font-size: 20px !important;
            }

            .date-publish-text,
            .tag-block {
                  font-size: 12px !important;
            }

            .image-cover {
                  height: 200px !important;
            }
      }

      .blog-title {
            color: #000;
            font-weight: 700;
            font-size: 30px;
            text-align: center;
      }

      .tag-group {
            display: flex;
            gap: 20px;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
      }


      .tag-block {
            background-color: #F2F2F2;
            color: #000;
            font-size: 13px;
            text-align: center;
            padding: 5px 15px;
      }

      .image-cover {
            width: 100%;
            height: 400px;
            background-size: cover;
            object-fit: cover;
      }


      .card-footer {
            background-color: #fff;
            width: 50%;
            display: block;
            margin-left: auto;
            margin-right: auto;
      }

      .footer-content-desc {
            color: #fff;
            font-size: 13px;
            line-height: 25px;
      }

      @media (max-width: 991px) {
            .card-footer {
                  display: none;
            }
      }

      .circle-icon {
            border: 1px solid darkgray;
            border-radius: 50%;
            padding: 2px;
            margin: 5px;
      }

      .bg-pure {
            color: #2c2f75;
            border-color: #2c2f75;
            font-size: 13px;
      }

      .bg-pure:hover {
            border-color: #2c2f75;
            color: #FFF;
            background-color: #2c2f75;
      }

      .card-blog {
            width: 100% !important;
      }
</style>

<div class="spacer" style="margin-top:60px"></div>
<div class="spacer" style="margin-top: 100px;"></div>


<div class="container">
      <div class="date-publish-text">
            Published
            <?= date('d M Y', strtotime($blogDetail->date)) ?>
      </div>
      <div class="spacer" style="margin-top:10px"></div>
      <div class="blog-title">
            <?= $blogDetail->title ?>
      </div>
      <div class="spacer" style="margin-top:10px"></div>
      <div class="tag-group">
            <div class="tag-block">
                  <?= $blogDetail->tag ?>
            </div>
      </div>
      <div class="spacer" style="margin-top:20px"></div>
      <div class="container col-10">
            <img class="image-cover" src="<?= base_url() ?>assets/images/admin/blog/<?= $blogDetail->photo ?>" alt="">

            <div class="spacer" style="margin-top:10px"></div>
            <div class="d-flex justify-content-between">
                  <div class="blog-content" align="justify">
                        <?= $blogDetail->content ?>
                  </div>
            </div>
            <div class="spacer" style="margin-top:30px"></div>
            <div class="blog-title">
                  Artikel Lainnya
            </div>
            <hr>
            <div class="spacer" style="margin-top:20px"></div>
            <div class="row">
                  <?php foreach ($frontotherdatablog as $data) { ?>
                        <div class="col-lg-4">

                              <div class="card-blog">
                                    <div class="image-blog">
                                          <img class="object-fit-cover" style="width:100%;height:200px"
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
                                          <br>
                                          <a href="<?= site_url() ?>front/detail_blog/<?= $data['slug'] ?>"
                                                class="btn btn-basic bg-pure" role="button">Selengkapnya</a>
                                    </div>
                              </div>

                              <div class="spacer" style="margin-top: 20px;"></div>
                        </div>
                  <?php } ?>
            </div>
      </div>

</div>