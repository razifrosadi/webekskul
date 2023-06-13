<div class="container mt-5">
    <?= form_open_multipart('profil/tambah_aksi'); ?>
        <div class="form-group">
            <select name="judul_informasi" id="judul_informasi" class="form-control">
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
            <input type="text" class="form-control" id="isi_informasi" name="isi_informasi" placeholder="Isi Informasi">
        </div>
        <div class="col-sm-2">Picture</div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-3">
                        <!--    -->
                    </div>
                    <div class="col-sm-9">
                        <div class="custom-file">
                            <label >Choose File</label>
					        <input  type="file" name="imagep">
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