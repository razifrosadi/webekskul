<div class="container mt-5">
    <?php foreach ($coach as $c) { ?>
        <?= form_open_multipart('coach/update/'); ?>
        <input type="hidden" name="id" value="<?php echo $c->id ?>">
        <div class="form-group">
            <input type="text" class="form-control" id="judul_coach" name="judul_coach" placeholder="judul" value="<?php echo $c->judul_coach ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="isi_coach" name="isi_coach" placeholder="isi" value="<?php echo $c->isi_coach ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="deskripsi_coach" name="deskripsi_coach" placeholder="deskripsi" value="<?php echo $c->deskripsi_coach ?>">
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
</form>
<?php } ?>
</div>