<div class="container mt-5">
<?= form_open_multipart('pengajuan/tambah_aksi'); ?>
<div class="form-group">
            <input type="text" class="form-control" id="namap" name="namap" placeholder="Nama Pelatih">
        </div>
    <?php foreach ($pengajuan as $e) { ?>
        <?= form_open_multipart('pengajuan/update/'); ?>
        <input type="hidden" name="id" value="<?php echo $e->id ?>">
        <div class="form-group">
            <select name="ekskul" id="ekskul" class="form-control">
                <option value="BASKET">BASKET</option>
                <option value="FUTSAL">FUTSAL</option>
                <option value="VOLI">VOLI</option>
                <option value="SILAT">SILAT</option>
                <option value="KARATE">KARATE</option>
                <option value="TAEKWONDO">TAEKWONDO</option>
                <option value="BADMINTON">BADMINTON</option>
                <option value="SENI">SENI</option>
                <option value="ENGLISH CLUB">ENGLISH CLUB</option>
                <option value="JAPANESE CLUB">JAPANESE CLUB</option>
                <option value="MARAWIS">MARAWIS</option>
                <option value="MARAWIS">KASUNDAAN</option>Select Menu</option>">Select Menu</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="barang" name="barang" placeholder="Barang">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="qty" name="qty" placeholder="QTY">
        </div>
        

        <div class="form-group">
            <button type="submit" class="btn btn-info">Tambah</button>
        </div>
</div>
</form>
<?php } ?>
</div>