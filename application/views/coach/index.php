<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>
            <a href="<?= base_url('coach/tambah') ?>" class="btn btn-info mb-3">Tambahkan Gambar</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Image</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $o = 1;
                    foreach ($coach as $c) : ?>
                        <tr>
                            <th scope="row"><?= $o; ?></th>
                            <td><?= $c['judul_coach'] ?></td>
                            <td><?= $c['isi_coach'] ?></td>
                            <td><?= $c['deskripsi_coach'] ?></td>
                            <td><?= $c['image_coach'] ?></td>
                            <td><?= $c['is_active'] ?></td>
                            <td>
                                <a href="<?= base_url('coach/edit/' . $c['id']) ?>" class="badge badge-info">Edit</a>
                                <a href="<?= base_url('coach/delete/' . $c['id']) ?>" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                        <?php $o++; ?>
                    <?php endforeach;?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->