<div class="container mt-5">
    <?php foreach ($kegiatan as $k) { ?>
        <?= form_open_multipart('kegiatan/update/'); ?>
        <input type="hidden" name="id_kegiatan" value="<?php echo $k->id_kegiatan ?>">
        <div class="form-group">
            <input type="text" class="form-control" id="judul" name="judul" placeholder="judul" value="<?php echo $k->judul ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="isi" name="isi" placeholder="isi" value="<?php echo $k->isi ?>">
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
            <button type="submit" class="btn btn-info">Tambah</button>
        </div>
</div>
</form>
<?php } ?>
</div>