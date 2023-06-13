<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-6">
            <?= form_error('prestasi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#exampleModal">Add New Prestasi</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Image</th>
                        <th scope="col">Created</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $t = 1;
                    foreach ($prestasi as $r) : ?>
                        <tr>
                            <th scope="row"><?= $t; ?></th>
                            <td><?= $r['judul_prestasi'] ?></td>
                            <td><?= $r['deskripsi_prestasi'] ?></td>
                            <td><?= $r['image_prestasi'] ?></td>
                            <td><?= $r['created_at']?></td>
                            <td><?= $r['is_active'] ?></td>
                            <td>
                                <a href="<?= base_url('prestasi/edit/' . $r['id']); ?>" class="badge badge-info">Edit</a>
                                <a href="<?= base_url('prestasi/delete/' . $r['id']); ?>" class="badge badge-danger" data-toggle="modal" data-target="#deleteprestasi">Delete</a>
                            </td>
                        </tr>
                        <?php $t++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New prestasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('prestasi/tambah_aksi'); ?>
            <form action="<?= base_url('prestasi'); ?>" method="post">
                <div class="modal-body">
                <div class="form-group">
            <input type="text" class="form-control" id="judul_prestasi" name="judul_prestasi" placeholder="judul">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="deskripsi_prestasi" name="deskripsi_prestasi" placeholder="Deskripsi">
        </div>
        
    <div class="col-sm-2">Picture</div>
    <div class="col-sm-10">
        <div class="row">
            <div class="col-sm-3">
                <!--    -->
            </div>
            <div class="col-sm-9">
                <div class="custom-file">
                    <label>Choose File</label>
                    <input type="file" name="image_prestasi">
                </div>
            </div>
        </div>
    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Add prestasi</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteprestasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete prestasi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Are you sure want to delete <?= $r['id']; ?> prestasi?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-info" href="<?= base_url('prestasi/delete/') . $r['id']; ?>">Delete</a>
            </div>
        </div>
    </div>
</div>