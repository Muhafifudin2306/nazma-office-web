<style>
      .content-3 {
            display: none;
      }
</style>
<div class="container col-10">
      <div class="spacer navbar-space-lg"></div>
      <section id="event">
            <h4 class="title-section"> Event </h4>
            <div class="spacer spacer-lg"></div>
            <div class="row verse">
                  <div class="col-lg-1"></div>
                  <div class="col-lg-6">
                        <div class="spacer spacer-sm"></div>
                        <small id="filter-count"></small>
                  </div>
                  <div class="col-lg-4">
                        <form class="input-box" id="live-search" action="" method="post">
                              <input type="text" class="form-control" id="filter" placeholder="search" /><i
                                    class="fa fa-search"></i>
                        </form>
                  </div>
                  <div class="col-lg-1"></div>
            </div>
            <div class="spacer spacer-md"></div>
            <div class="flex">
                  <?php foreach ($frontdataevent as $data) { ?>
                        <div class="content-3 card-event">
                              <div class="row">
                                    <div class="col-lg-4">
                                          <img class="center w-100 p-2"
                                                src="<?= base_url() ?>assets/images/admin/event/<?= $data['photo'] ?>" alt="">
                                    </div>
                                    <div class="col-lg-8">
                                          <div class="spacer spacer-sm"></div>
                                          <h6 class="event-title">
                                                <?= $data['title'] ?>
                                          </h6>
                                          <p class="event-time">
                                                <?= $data['time'] ?>
                                          </p>
                                          <div class="spacer spacer-md"></div>
                                          <p class="event-desc">
                                                <?= $data['location'] ?>
                                          </p>
                                          <p class="event-price">
                                                <?= $data['price'] ?>
                                          </p>
                                          <p class="event-contributor">
                                                <?= $data['contributor'] ?>
                                          </p>
                                          <a class="link-web" target="_blank" href="<?= $data['link'] ?>">
                                                <bottom class="btn btn-outline-secondary bg-pure ft-13">info selengkapnya
                                                </bottom>
                                          </a>
                                    </div>
                              </div>
                        </div>
                  <?php } ?>
            </div>
            <div class="spacer spacer-sm"></div>
            <div class="load">
                  <a href="#" class="btn btn-primary bg-primary" id="loadMore">Load More</a>
            </div>
            <div class="spacer spacer-lg"></div>
      </section>
</div>