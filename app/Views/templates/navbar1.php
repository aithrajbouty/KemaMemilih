<body>
<nav class="navbar navbar1" role="navigation">
    <a class="navbar-brand" href="<?= base_url('MainpageUniv')?>" style="text-align: center">Kema Memilih</a>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="#" ><span class="glyphicon glyphicon-arrow-left"></span></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a href="#" data-toggle="dropdown"><span class="dropdown-toggle glyphicon glyphicon-user"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?= base_url('Profile')?>">Halaman Profil</a></li>
                    <li><a data-toggle="modal" data-target="#modalLogOut">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


<!--MODAL-->
<div class="modal fade" id="modalLogOut" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" align="center">
                    <button typle="button" class="close" data-dismiss="modal">&times;</button>
                    <br><br>
                    <p class="modal-title">Apakah Snda yakin ingin log out?</p>
                    <br>
                    <a href="<?php echo base_url('Login/logout'); ?>" type="button" class="btn modal-btn">Ok</a>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>