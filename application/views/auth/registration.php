<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Daftar dan Registrasi Akun!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('index.php/Auth/registration'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                                <?= form_error(
                                    'name',
                                    '<small class="text-danger pl-3">',
                                    '</small>'
                                ); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                                <?= form_error(
                                    'email',
                                    '<small class="text-danger pl-3">',
                                    '</small>'
                                ); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Nama Pengguna" value="<?= set_value('username'); ?>">
                                <?= form_error(
                                    'username',
                                    '<small class="text-danger pl-3">',
                                    '</small>'
                                ); ?>
                            </div>
                            <div class="form-group">
                                <label for="ekskul">Pilih Ekstrakurikuler</label>
                                <select class="form-control form-control-user" id="ekskul" name="ekskul" placeholder="Ekskul" value="<?= set_value('ekskul'); ?>">
                                    <option selected>--Pilih Ekstrakurikuler--</option>
                                    <!-- <option>...</option> -->
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
                                </select>
                                <?= form_error(
                                    'ekskul',
                                    '<small class="text-danger pl-3">',
                                    '</small>'
                                ); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error(
                                        'password1',
                                        '<small class="text-danger pl-3">',
                                        '</small>'
                                    ); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth/forgotpass'); ?>">Forgot Password?</a>
                    </div>
                    <div class=" text-center">
                                <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>