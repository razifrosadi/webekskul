<div class="container mt-5">
    <?= form_open_multipart('jadwal/tambah_aksi'); ?>
    <div class="form-group">
        <input type="text" class="form-control" id="nama_ekskul" name="nama_ekskul" placeholder="nama ekskul" >
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="jadwal_latihan" name="jadwal_latihan" placeholder="jadwal latihan">
    </div>
    <div class="form-group">
                <button type="submit" class="btn btn-info">Tambah</button>
            </div>
        </div>
    <?= form_close() ?>
</div>