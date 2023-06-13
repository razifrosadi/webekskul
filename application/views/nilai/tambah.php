<div class="container mt-5">
    <?= form_open_multipart('nilai/tambah_aksi'); ?>

    <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
        </div>

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
            <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="aktif" name="aktif" placeholder="Keaktifan">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="tanggung_jawab" name="tanggung_jawab" placeholder="Tanggung Jawab">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="skill" name="skill" placeholder="Skill">
        </div>

        

        <div class="form-group">
                <button type="submit" class="btn btn-info">Tambah</button>
            </div>
        </div>
    <?= form_close() ?>
</div>