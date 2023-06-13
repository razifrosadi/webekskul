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
            <a href="<?= base_url('nilai/tambah') ?>" class="btn btn-info mb-3">Penilaian</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Ekskul</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Keaktifan</th>
                        <th scope="col">Tanggung Jawab</th>
                        <th scope="col">Skill</th>
                        <th scope="col">Nilai Akhir</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>               
                <tbody>
                    <?php
                    $o = 1;
                    foreach ($nilai as $n) : ?>
                        <tr>
                            <th scope="row"><?= $o; ?></th>
                            <td><?= $n['nama'] ?></td>                           
                            <td><?= $n['ekskul'] ?></td>
                            <td><?= $n['kelas'] ?></td>
                            <td><?= $n['aktif'] ?></td>
                            <td><?= $n['tanggung_jawab'] ?></td>
                            <td><?= $n['skill'] ?></td>
                            <td><?= $n['nilai_akhir'] ?></td>
                            <td><?= $n['grade'] ?></td>
                            <td><?= $n['is_active'] ?></td>
                            <td>

                      


                                <a href="<?= base_url('nilai/edit/' . $n['id']) ?>" class="badge badge-info">Edit</a>
                                <a href="<?= base_url('nilai/delete/' . $n['id']) ?>" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                        <?php $o++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->