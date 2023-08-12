<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add New Blog and Gallery</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <form method="POST" action="<?= site_url('admin/blog/addBlog') ?>" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <a href="<?= site_url('admin/blog') ?>" class="btn btn-primary">Back</a>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Photo</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="photo" class="form-control-file">
                                        <?= form_error('photo', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="date" class="form-control"
                                            value="<?= set_value('date') ?>" placeholder="Input Date">
                                        <?= form_error('date', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" class="form-control"
                                            value="<?= set_value('title') ?>" placeholder="Input Title">
                                        <?= form_error('title', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tag</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tag" class="form-control"
                                            value="<?= set_value('tag') ?>" placeholder="Input Tag">
                                        <?= form_error('tag', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Content</label>
                                    <div class="col-sm-9">
                                        <textarea name="content" class="form-control"
                                            value="<?= set_value('content') ?>" placeholder="Input Content" rows="30"
                                            cols="70" id="editor"></textarea>
                                        <?= form_error('content', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary w-100">Save</button>
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