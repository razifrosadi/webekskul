<div class="container mt-5">
    <?= form_open_multipart('coach/tambah_aksi'); ?>
    <div class="form-group">
            <input type="text" class="form-control" id="judul_coach" name="judul_coach" placeholder="Judul">
        </div>
    <div class="form-group">
            <input type="text" class="form-control" id="isi_coach" name="isi_coach" placeholder="Isi">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="deskripsi_coach" name="deskripsi_coach" placeholder="Deskripsi">
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
                    <input type="file" name="image_coach">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Tambah</button>
    </div>
</div>
<?= form_close() ?>
</div>