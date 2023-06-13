<div class="container mt-5">
    <?php foreach ($prestasi as $r) { ?>
        <?= form_open_multipart('prestasi/update/'); ?>
        <input type="hidden" name="id" value="<?php echo $r->id ?>">
        <div class="form-group">
            <input type="text" class="form-control" id="judul_prestasi" name="judul_prestasi" placeholder="judul" value="<?php echo $r->judul_prestasi ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="deskripsi_prestasi" name="deskripsi_prestasi" placeholder="deskripsi" value="<?php echo $r->deskripsi_prestasi ?>">
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
                        <input type="file" name="image_prestasi">
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