<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit New Testimony</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <form method="POST"
                        action="<?= site_url() ?>admin/testimony/editTestimony/<?= $testimonyDetail->id ?>"
                        enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <a href="<?= site_url('admin/testimony') ?>" class="btn btn-primary">Back</a>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Photo</label>
                                    <div class="col-sm-9">
                                        <?php if ($testimonyDetail->photo) { ?>
                                        <span>
                                            <a href="<?= base_url() ?>admin/testimony/getFile/photo/<?= $testimonyDetail->id ?>"
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
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control"
                                            value="<?= $testimonyDetail->name ?>" placeholder="Input Name">
                                        <?= form_error('name', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea name="description" class="form-control"
                                            placeholder="Input Description" rows="4"
                                            cols="50"><?= $testimonyDetail->description ?></textarea>
                                        <?= form_error('description', '<small class="text-danger">', '</small>') ?>
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