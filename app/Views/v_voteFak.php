<body class="vote-body">
<div class="container text-center" style="width:1450px;">
    <div class="jumbotron vote-jumb text-center">
        <h1>Pemilihan Umum Kema Unpad 2020</h1>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="card vote-card">
                Nomor 1 
                <br><br>
                <img src="<?= base_url('assets')?> /calon.png" class="card-img-top voteF-img">
                <br><br>
                <button class="btn voteF-btn" data-toggle="modal" data-target="#modalYakin">Pilih</button>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card vote-card">
                Nomor 2 
                <br><br>
                <img src="<?= base_url('assets')?> /calon.png" class="card-img-top voteF-img">
                <br><br>
                <button class="btn voteF-btn" data-toggle="modal" data-target="#modalYakin">Pilih</button>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card vote-card">
                Nomor 3 
                <br><br>
                <img src="<?= base_url('assets')?> /calon.png" class="card-img-top voteF-img">
                <br><br>
                <button class="btn voteF-btn" data-toggle="modal" data-target="#modalYakin">Pilih</button>
            </div>
        </div>
    </div>


    <!--MODAL-->
    <div class="modal fade" id="modalYakin" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" align="center">
                    <button typle="button" class="close" data-dismiss="modal">&times;</button>
                    <br><br>
                    <p class="modal-title">Apakah Anda yakin dengan pilihan Anda?</p>
                    <br>
                    <button type="button" class="btn modal-btn" data-dismiss="modal">Yakin</button>
                    <br><br>
                </div>
            </div>
        </div>
    </div>


    <br><br><br>
</div>
</body>