<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Project Management</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?= site_url('admin/project/addProject') ?>" class="btn btn-primary">Add New
                                Project</a>
                        </div>
                        <?php if ($this->session->flashdata('message')) { ?>
                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                        <?php } ?>
                        <div class="card-body">
                            <div class="table">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Loc</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($dataproject as $data) { ?>
                                            <tr>
                                                <td>
                                                    <?= $data['title'] ?>
                                                </td>
                                                <td>
                                                    <?= $data['location'] ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm"
                                                        href="<?= site_url() ?>admin/project/editProject/<?= $data['id'] ?>">
                                                        Edit </a>
                                                    <a class="btn btn-danger btn-sm"
                                                        href="<?= site_url() ?>admin/project/deleteProject/<?= $data['id'] ?>"
                                                        onclick="return confirm ('Are You Sure Delete This Data ?')">
                                                        Delete </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>