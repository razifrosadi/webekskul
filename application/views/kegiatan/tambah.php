<div class="container mt-5">
    <?= form_open_multipart('kegiatan/tambah_aksi'); ?>
    <div class="form-group">
            <input type="text" class="form-control" id="judul" name="judul" placeholder="judul">
        </div>
    <div class="form-group">
            <input type="text" class="form-control" id="isi" name="isi" placeholder="Isi">
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
                    <input type="file" name="image">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-warning">Tambah</button>
    </div>
</div>
<?= form_close() ?>
</div>