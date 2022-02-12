<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">


	<title>Ecomerce project</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	{{View::make('header')}}
	@yield('content')
	{{View::make('footer')}}

</body>
<style >
	.custom-login{
		height: 500px;
		padding-top: 100px;
	}

	.img.slider-img{
		height: 400px ;
	}
	.custome-product{
		height: 600px !important;
	}
	.slider-text{
		background-color: #35443585;
	}
	.trending-img{
		height: 100px;
	}
	.trending-item{
		float: left;
		width: 20%;
	}
	.trending-wrapper{
		margin: 30px;

	}
	.detail-img{
		height: 200px;
	}
</style>

</html>