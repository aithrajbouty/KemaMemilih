<html>
	<head>
		<title>Home - Kema Memilih</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!-- Google fonts NUNITO -->
		<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

	<style>
        body{
            background-color:#9D4141;
            margin:0;
            padding:0;
        }
        .carousel{
            margin-bottom:0;
        }
        .slide1{
            background-image: url('pancake5.jpg');
            height: 500px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .slide2{
            background-image: url('cake3.jpg');
            height: 500px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .slide3{
            background-image: url('toast1.jpg');
            height: 500px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .item h1{
            font-size: 70px;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
            padding-bottom: 2em;
            color: #E5CECE;  
        }
        .cont-bawah{
            background-color: #E5CECE;
        }
        .glyphicon-menu-down{
            color: #f2f2f2;
        }
        .jumbo-home{
            background-color: #E5CECE;
        }
        .container p{
            color: #452E2E;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
            font-size: 36px
        }
        .btn{
            width: 285px;
            height: 63px;
            color: #E5CECE;
            background: #452E2E;
            border-radius: 50px;

            font-family: 'Nunito', sans-serif;
            font-size: 24px;
            font-weight: 900;
        }
	</style>
	</head>
	
	<body>
        <div id="theCarousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
            <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#theCarousel" data-slide-to="1"></li>
            <li data-target="#theCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner text-center">
                <div class="item active">
                    <div class="slide1"></div>
                    <div class="carousel-caption">
                        <h1>Kema Memilih</h1>
                    </div>
                </div>
                
                <div class="item">
                    <div class="slide2"></div>
                </div>
                
                <div class="item">
                    <div class="slide3"></div>
                </div>
            </div>

            <a class="left carousel-control" href="#theCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

            <a class="right carousel-control" href="#theCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        
        <div class="jumbotron jumbotron-fluid jumbo-home">
            <div class="container">
                <div class="row">   
                    <div class="col-sm-6">
                        <p>Kamu Kema Unpad?</p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <button class="btn" onclick="location.href='Login/index'">Login Disini</button>
                    </div>
                </div> 
            </div>
        </div>

	    <script src="js/bootstrap.min.js"></script>
	</body>
</html>

