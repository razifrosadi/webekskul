<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">
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
                            <td>

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