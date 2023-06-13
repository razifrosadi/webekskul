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
            <a href="<?= base_url('kegiatan/tambah') ?>" class="btn btn-info mb-3">Tambahkan Gambar</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Image</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $s = 1;
                    foreach ($kegiatan as $k) : ?>
                        <tr>
                            <th scope="row"><?= $s; ?></th>
                            <td><?= $k['judul'] ?></td>
                            <td><?= $k['isi'] ?></td>
                            <td><?= $k['image'] ?></td>
                            <td><?= $k['is_active'] ?></td>
                            <td>
                                <a href="<?= base_url('kegiatan/edit/' . $k['id_kegiatan']) ?>" class="badge badge-info">Edit</a>
                                <a href="<?= base_url('kegiatan/delete/' . $k['id_kegiatan']) ?>" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                        <?php $s++; ?>
                    <?php endforeach;?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->