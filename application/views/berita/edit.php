<div class="container mt-5">
    <?php foreach ($berita as $b) { ?>
        <?= form_open_multipart('berita/update/'); ?>
        <input type="hidden" name="id" value="<?php echo $b->id ?>">
        <div class="form-group">
            <input type="text" class="form-control" id="judul" name="judul" placeholder="judul" value="<?php echo $b->judul ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="deskripsi" value="<?php echo $b->deskripsi ?>">
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