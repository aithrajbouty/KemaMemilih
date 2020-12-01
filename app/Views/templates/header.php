<!DOCTYPE html>
<html>
	<head>
		<title><?= $title ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!-- Google fonts NUNITO -->
		<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

	<style>
    /*FOOTER*/
        .panel-footer{
            color: #E5CECE;
            text-align:center;
            background: #9D4141;
            border-top: none;
            
            font-family: 'Nunito', sans-serif;
            font-size: 18px;
        }
        .footer-container-sm{
            width: 150px;
        }
    /*HOME*/
        .home-body{
            background-color:#9D4141;
            margin:0;
            padding:0;
        }
        .home-carousel{
            margin-bottom:0;
        }
        .slide1{
            background-image: url("");
            height: 500px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding-top:87px;
            padding-bottom:87px;
        }
        .slide2{
            background-image: url('');
            height: 500px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .slide3{
            background-image: url('');
            height: 500px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .carousel-caption{
            font-size: 70px;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
            padding-bottom: 2.5em;
            color: #E5CECE;  
        }
        .cont-bawah{
            background-color: #E5CECE;
        }
        .jumbo-home{
            background-color: #E5CECE;
        }
        .home-caption p{
            color: #452E2E;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
            font-size: 36px
        }
        .home-btn{
            width: 285px;
            height: 63px;
            color: #E5CECE;
            background: #452E2E;
            border-radius: 50px;

            font-family: 'Nunito', sans-serif;
            font-size: 24px;
            font-weight: 900;
        }
    /*MAINPAGE*/
        .main-body{
            background-color:#9D4141;
            margin:0;
            padding:0;
        }
        .main-jumbotron{
            margin:100px;
            padding:0px;
            border-radius:1px;
            background: #9D4141;
        }
        .main-card{
            padding:10%;
            border-radius:30px;
            margin-right:10px;
            margin-left:5px;
        }
        .main-container p{
            color: #FFFFFF;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
            font-size: 36px
        }
        .main-btn{
            width: 285px;
            height: 63px;
            color: #452E2E;
            background: #FFFFFF;
            border-radius: 50px;

            font-family: 'Nunito', sans-serif;
            font-size: 24px;
            font-weight: 900;
            margin-top:30px;
        }
        /* aku kalo pake ini malah berantakan
        .main-container img{
            position: absolute;
            width: 251px;
            height: 347px;
            left: 239px;
            top: 329px; 
        }*/
    /*NAVBAR ALL*/
        .navbar-nav.navbar-center {
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }
        .navbar {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }
        .glyphicon {
            font-size: 23px;
        }
    /*NAVBAR1*/
        .navbar1{
            background: #E6CECE;
            margin:0;
        }
        .navbar1 a{
            font-family: 'Nunito', sans-serif;
            color: #452E2E;
            letter-spacing: 0.05em;
            font-size: 18px;
            line-height: 25px;
            font-weight: 900;
            
            float: left;
            padding: 12px;
        }
        .navbar1 .dropdown-menu a{
            font-family: 'Nunito', sans-serif;
            font-size: 14px;
            line-height: 19px;
            align-items: center;
            text-align: center;
            color: #452E2E;
        }
        .navbar-brand
        {
            position: absolute;
            width: 100%;
            left: 0;
            text-align: center;
            margin:0 auto;
        }
        .navbar-toggle {
            z-index:3;
        }
    /*NAVBAR2*/
        .navbar2{
            background: #452E2E;
            padding:0px;
            margin:0;
        }
        .navbar2 a{
            font-family: 'Nunito', sans-serif;
            color: #E6CECE;
            letter-spacing: 0.05em;
            font-size: 18px;
            line-height: 25px;
            font-weight: 900;
            text-align: center;
            width: 50%;
            
            float: left;
            padding: 12px;
        }
        .navbar2 .active{
            background: #5C4444;
        }
        .navbar2 a:hover{
            background: #886666;
            transition:0.4s;
            display: block;
        }
    /*VOTE*/
        .vote-body{
            background-color:#9D4141;
        }
        .vote-jumb{
            background-color:#9D4141;
        }
        .vote-jumb h1{
            font-size: 48px;
            color: #E5CECE;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
        }
        .vote-card{
            text-align: center;
            background: #E5CECE;
            border-radius: 50px;
            padding: 45px;

            font-size: 36px;
            color: #452E2E;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
        }
    /*VOTE UNIV*/
        .voteU-img{
            width: 427px;
        }
        .voteU-btn{
            background: #452E2E;
            border-radius: 20px;
            width: 335px;
            height: 59px;

            text-align: center;
            color: #E5CECE;
            font-size: 24px;
            line-height: 33px;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
        }
    /*VOTE FAKULTAS*/
        .voteF-img{
            width: 362px;
        }
        .voteF-btn{
            background: #452E2E;
            border-radius: 20px;
            width: 284px;
            height: 50px;

            text-align: center;
            color: #E5CECE;
            font-size: 24px;
            line-height: 33px;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
        }
    /*MAINPAGE UNIV*/
        .mainuniv-card{
            text-align: center;
            background: #E5CECE;
            border-radius: 50px;
            padding: 45px;

            font-size: 18px;
            color: #452E2E;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
        }

    /*MAINPAGE FAKULTAS*/
        .mainfak-card{
            text-align: center;
            background: #E5CECE;
            border-radius: 50px;
            padding: 45px;

            font-size: 18px;
            color: #452E2E;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
        }

        /*PROFILE*/
        .profile-card{
            text-align: left;
            background: #E5CECE;
            border-radius: 50px;
            padding: 45px;

            font-size: 18px;
            color: #9D4141;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
        }
        .img-profile{
            position: center;
        }
        .ubahpass-btn{
                background: #9D4141;
                border-radius: 20px;
                width: 300px;
                height: 40px;

                text-align: center;
                color: #E5CECE;
                font-size: 15px;
                line-height: 33px;
                font-family: 'Nunito', sans-serif;
                font-weight: 900;
                position: center;
            }
        
    /*STATISTIKA*/
        .statistik-card{
            text-align: center;
            background: #E5CECE;
            border-radius: 50px;
            padding: 45px;

            font-size: 30px;
            color: #452E2E;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
        }
        .disclaimer-card{
            text-align: center;
            background: #E5CECE;
            border-radius: 50px;
            padding: 45px;
            padding-top: 15px;

            font-size: 16px;
            color: #452E2E;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
            line-height: 22px;
        }
    /*MODAL*/
        .modal {
            text-align: center;
        }
        .modal-dialog{
            width: 500px;
            display: inline-block;
            text-align: left;
            vertical-align: middle;
        }
        .modal-dialog p{
            width: 385px;
            height: 41px;
            text-align: center;

            font-family: 'Nunito', sans-serif;
            font-size: 18px;
            line-height: 25px;
            color: #452E2E;
        }
        .modal-content  {
            -webkit-border-radius: 20px !important;
            -moz-border-radius: 20px !important;
            border-radius: 20px !important; 
        }
        .modal-btn{
            width: 284px;
            height: 50px;
            background: #452E2E;
            border-radius: 20px;

            font-family: 'Nunito', sans-serif;
            font-size: 24px;
            line-height: 33px;
            color: #E5CECE;
        }
        @media screen and (min-width: 768px) { 
            .modal:before {
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
            }
        }
    
	</style>
    <script>
        window.onload = function() {
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title: {
                text: "Hasil Presentase yang Sudah Memilih"
            },
            data: [{
                type: "pie",
                startAngle: 240,
                yValueFormatString: "##0.00\"%\"",
                indexLabel: "{label} {y}",
                dataPoints: [
                    {y: 79.45, label: "Belum Memilih"},
                    {y: 7.31, label: "Teknik Informatika"},
                    {y: 7.06, label: "Fisika"},
                    {y: 4.91, label: "Biologi"},
                    {y: 1.26, label: "Teknik Elektro"}
                ]
            }]
        });
        chart.render();
        }
    </script>
</head>