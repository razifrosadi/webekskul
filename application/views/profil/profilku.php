<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <?= form_open('profil/profilku/' . $profil['id_profil']); ?>
        <div class="form-group">
            <label for="judul_informasi">pilih ekskul</label>
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
                                    <option value="MARAWIS">KASUNDAAN</option>
                                    Select Menu</option>
            </select>
            <?= form_error('judul_informasi', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="isi_informasi">isi informasi</label>
            <input type="text" class="form-control" id="isi_informasi" name="isi_informasi" value="<?= $profil['isi_informasi']; ?>">
            <?= form_error('isi_informasi', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/basca.jpg/') . $profil['image']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" name="image" id="image" class="custom-file-input">
                                <label class="custom-file-label" for="image">Choose File</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="<?= $profil['is_active']; ?>" id="is_active" name="is_active" <?= active_check($profil['is_active'], $profil['id']); ?>>
                <label class="form-check-label" for="is_active">
                    Active?
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-warning">Edit Submenu</button>
    </div>
    <button type="submit" class="btn btn-warning">Edit Submenu</button>
    </form>
</div>