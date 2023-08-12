<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit New Project</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="<?= site_url() ?>admin/project/editProject/<?= $projectDetail->id ?>"
                        enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <a href="<?= site_url('admin/project') ?>" class="btn btn-primary">Back</a>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Photo</label>
                                    <div class="col-sm-9">
                                        <?php if ($projectDetail->photo) { ?>
                                            <span>
                                                <a href="<?= base_url() ?>admin/project/getFile/photo/<?= $projectDetail->id ?>"
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
                                            value="<?= $projectDetail->title ?>" placeholder="Input title">
                                        <?= form_error('title', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="date" class="form-control"
                                            value="<?= $projectDetail->date ?>">
                                        <?= form_error('date', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Location</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="location" class="form-control"
                                            value="<?= $projectDetail->location ?>" placeholder="Input Location">
                                        <?= form_error('location', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea id="editor" name="description" class="form-control"
                                            placeholder="Input Description" rows="4"
                                            cols="50"><?= $projectDetail->description ?></textarea>
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

<script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>