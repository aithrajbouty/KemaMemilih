<body class="vote-body">
    <div class="jumbotron main-jumbotron">
        <div class="container text-center">
            <div class="profile-card" style="background-color:#E5CECE;">
                <div class="row">
                    <div class="col-sm-4 text-center">
                    <br>
                        <img src="<?= base_url('assets')?> /profile.png" width="250" height="250" class="img-profile" >
                    </div>
                    <div class="col-sm-8">
                        <div class="container">
                            <h2 style="font-weight:900; font-size:35px" >Halaman Profile</h2>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="nama" class="col-sm-2 control-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="nama" type="text" placeholder="Hana & Shena" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fakultas" class="col-sm-2 control-label">Fakultas</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="fakultas" type="text" placeholder="Fakultas Matematika dan Ilmu Pengetahuan Alam" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="npm" class="col-sm-2 control-label">NPM</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="npm" type="text" placeholder="140810180012" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="email" type="text" placeholder="kemamemilihsaddam@gmail.com" disabled>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-sm-2 control-label" for="pw">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="pw">
                                        <span class="form-control-feedback"></span>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-sm-2 control-label" for="newpw">New Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="newpw">
                                        <span class="form-control-feedback"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 text-right">
                        <button class="btn ubahpass-btn" onclick="location.href=">Ubah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>