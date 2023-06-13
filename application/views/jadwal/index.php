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
            <!-- <?= $this->session->flashdata('message'); ?> -->
            <a href="<?= base_url('jadwal/tambah') ?>" class="btn btn-info mb-3">Tambahkan Ekskul</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Ekskul</th>
                        <th scope="col">Jadwal Latihan</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $o = 1;
                    foreach ($jadwal as $j) : ?>
                        <tr>
                            <th scope="row"><?= $o; ?></th>
                            <td><?= $j['nama_ekskul'] ?></td>
                            <td><?= $j['jadwal_latihan'] ?></td>
                            <td><?= $j['is_active'] ?></td>
                            <td>
                                <a href="<?= base_url('jadwal/edit/' . $j['id']) ?>" class="badge badge-info">Edit</a>
                                <a href="<?= base_url('jadwal/delete/' . $j['id']) ?>" class="badge badge-danger">Delete</a>
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