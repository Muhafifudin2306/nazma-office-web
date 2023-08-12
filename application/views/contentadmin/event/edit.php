<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit New Event</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="<?= site_url() ?>admin/event/editEvent/<?= $eventDetail->id ?>"
                        enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <a href="<?= site_url('admin/event') ?>" class="btn btn-primary">Back</a>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Photo</label>
                                    <div class="col-sm-9">
                                        <?php if ($eventDetail->photo) { ?>
                                            <span>
                                                <a href="<?= base_url() ?>admin/event/getFile/photo/<?= $eventDetail->id ?>"
                                                    style="color: #0000FF;">See File Photo</a>
                                            </span>
                                        <?php } else { ?>
                                            <span>
                                                <a style="color: #FF0000;">File Not Found</a>
                                            </span>
                                        <?php } ?>
                                        <br>
                                        <input type="file" name="photo" class="form-control-file">
                                        <?= form_error('photo', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" class="form-control"
                                            value="<?= $eventDetail->title ?>" placeholder="Input title">
                                        <?= form_error('title', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Time</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="time" class="form-control"
                                            value="<?= $eventDetail->time ?>" placeholder="Input Time">
                                        <?= form_error('time', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Location</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="location" class="form-control"
                                            value="<?= $eventDetail->location ?>" placeholder="Input Location">
                                        <?= form_error('location', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Price</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="price" class="form-control"
                                            value="<?= $eventDetail->price ?>" placeholder="Input Price">
                                        <?= form_error('price', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Contributor</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="contributor" class="form-control"
                                            value="<?= $eventDetail->contributor ?>" placeholder="Input Contributor">
                                        <?= form_error('contributor', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="link" class="form-control"
                                            value="<?= $eventDetail->link ?>" placeholder="Input Link">
                                        <?= form_error('link', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>