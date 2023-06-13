<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">    
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pelatih</th>
                        <th scope="col">Ekskul</th>
                        <th scope="col">Barang yang diajukan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">QTY</th>
                        <th scope="col">Total Harga</th>
                    </tr>
                </thead>               
                <tbody>
                    <?php
                    $o = 1;
                    foreach ($pengajuan as $e) : ?>
                        <tr>
                            <th scope="row"><?= $o; ?></th>
                            <td><?= $e['namap'] ?></td>                           
                            <td><?= $e['ekskul'] ?></td>
                            <td><?= $e['barang'] ?></td>
                            <td><?= $e['harga'] ?></td>
                            <td><?= $e['qty'] ?></td>
                            <td><?= $e['total_harga'] ?></td>
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