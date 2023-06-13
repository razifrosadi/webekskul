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
            <a href="<?= base_url('berita/tambah') ?>" class="btn btn-info mb-3">Tambahkan Gambar</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Created</th>
                        <th scope="col">Image</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $o = 1;
                    foreach ($berita as $b) : ?>
                        <tr>
                            <th scope="row"><?= $o; ?></th>
                            <td><?= $b['judul'] ?></td>
                            <td><?= $b['deskripsi'] ?></td>
                            <td><?= $b['created_at']?></td>
                          <td><?= $b['image'] ?></td>
                            <td><?= $b['is_active'] ?></td>
                            <td>
                                <a href="<?= base_url('berita/edit/' . $b['id']) ?>" class="badge badge-info">Edit</a>
                                <a href="<?= base_url('berita/delete/' . $b['id']) ?>" class="badge badge-danger">Delete</a>
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