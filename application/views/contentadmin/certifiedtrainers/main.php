<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Certified Trainers Management</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?= site_url('admin/certifiedtrainers/addCertifiedtrainers') ?>"
                                class="btn btn-primary">Add New Certified Trainers</a>
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
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($datacertifiedtrainers as $data) { ?>
                                            <tr>
                                                <td><img src="<?= base_url() ?>assets/images/admin/certifiedtrainers/<?= $data['photo'] ?>"
                                                        height="30px" width="30px"></td>
                                                <td>
                                                    <?= $data['name'] ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm"
                                                        href="<?= site_url() ?>admin/certifiedtrainers/editCertifiedtrainers/<?= $data['id'] ?>">
                                                        Edit </a>
                                                    <a class="btn btn-danger btn-sm"
                                                        href="<?= site_url() ?>admin/certifiedtrainers/deleteCertifiedtrainers/<?= $data['id'] ?>"
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