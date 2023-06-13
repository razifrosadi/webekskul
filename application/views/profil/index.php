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
            <a href="<?= base_url('profil/tambah') ?>" class="btn btn-info mb-3">Tambahkan Ekskul</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Informasi</th>
                        <th scope="col">Image</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $o = 1;
                    foreach ($profil as $p) : ?>
                        <tr>
                            <th scope="row"><?= $o; ?></th>
                            <td><?= $p['judul_informasi'] ?></td>
                            <td><?= $p['isi_informasi'] ?></td>
                            <td><?= $p['imagep'] ?></td>
                            <td><?= $p['is_active'] ?></td>
                            <td>
                                <a href="<?= base_url('profil/edit/' . $p['id_profil']) ?>" class="badge badge-info">Edit</a>
                                <a href="<?= base_url('profil/delete/' . $p['id_profil']) ?>" class="badge badge-danger">Delete</a>
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