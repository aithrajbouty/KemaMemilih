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
                    <li><a href="<?= base_url('AdminUniv')?>">Administrator</a></li>
                    <li><a href="<?= base_url('Profile')?>">Halaman Profil</a></li>
                    <li><a href="<?php echo base_url('Login/logout'); ?>">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>