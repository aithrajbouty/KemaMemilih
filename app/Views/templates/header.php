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
            background-image: url('');
            height: 500px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
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
            padding-bottom: 2em;
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
            height: 51px;
            padding:0px;
            margin:0;
        }
        .navbar1 a{
            font-family: 'Nunito', sans-serif;
            color: #452E2E;
            letter-spacing: 0.05em;
            font-size: 18px;
            line-height: 25px;
            font-weight: 900;
        }
        .navbar1 ul li a:hover{
            background: #F2E6E6;
            transition:0.4s;
            display: block;
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
            width: 705px;
        }
        .navbar2 .active{
            background: #5C4444;
        }
        .navbar2 ul li a:hover{
            background: #5C4444;
            transition:0.4s;
            display: block;
        }
	</style>
	</head>