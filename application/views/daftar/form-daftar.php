<div class="container-fluid" style=" background-color: #eff2f4">
    <div class="panel-heading" style="margin-top: 6%; text-align: center; ">
        <h1>Form Pendaftaran Ekstrakurikuler</h1>
        <h4>Tahun Ajaran 2022/2024</h4>
    </div>

    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Nama Lengkap">Nama Lengkap</label>
                <input type="name" class="form-control" id="name" placeholder="Nama Lengkap">
            </div>

        <!-- <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div> -->
        <!-- <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div> -->
        <div class="form-group col-md-4">
            <label for="inputState">Pilih Ekstrakurikuler Olahraga</label>
            <select id="inputState" class="form-control">
                <option selected>--Pilih Ekstrakurikuler--</option>
                <!-- <option>...</option> -->
                <option value="BASKET">BASKET</option>
                <option value="FUTSAL">FUTSAL</option>
                <option value="VOLI">VOLI</option>
                <option value="SILAT">SILAT</option>
                <option value="KARATE">KARATE</option>
                <option value="TAEKWONDO">TAEKWONDO</option>
                <option value="BADMINTON">BADMINTON</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Pilih Ekstrakurikuler Kesenian dan Kebudayaan</label>
            <select id="inputState" class="form-control">
                <option selected>--Pilih Ekstrakurikuler--</option>
                <option value="SENI">SENI</option>
                <option value="ENGLISH CLUB">ENGLISH CLUB</option>
                <option value="JAPANESE CLUB">JAPANESE CLUB</option>
                <option value="MARAWIS">MARAWIS</option>
                <option value="MARAWIS">KASUNDAAN</option>
            </select>
        </div>

        <!-- <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
</div> -->
</div>
<div class="form-group">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
            Check me out
        </label>
    </div>
</div>
<button type="submit" class="btn btn-info">Sign in</button>
</form>