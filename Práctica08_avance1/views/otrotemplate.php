<!--Es la plantilla que vera el usuario al ejecutar la aplicación -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template</title>

	<style>

		nav{
			position:relative;
			margin:auto;
			width:100%;
			height:auto;
			background: -webkit-linear-gradient(45deg, rgba(213,0,125,0.8), rgba(229,57,53,0.8));
			font-family: 'Century Gothic';
		}


		nav ul{
			position:relative;
			margin:auto;
			width:50%;
			text-align: center;
		}

		nav ul li{
			display:inline-block;
			width:24%;
			line-height: 50px;
			list-style: none;
		}

		nav ul li a{
			color:white;
			text-decoration: none;
		}

		section{
			position: relative;
			margin: auto;
			width:400px;
		}

		section h1{
			position: relative;
			margin: auto;
			padding:10px;
			text-align: center;
		}

		section form{
			position:relative;
			margin:auto;
			width:400px;
		}

		section form input{
			display:inline-block;
			padding:10px;
			width:95%;
			margin:5px;
		}

		section form input[type="submit"]{
			position:relative;
			margin:20px auto;
			left:4.5%;

		}
		input.input2 {
  height: 45px;
}

input.input2 + .focus-input2::after {
  top: 16px;
  left: 0;
}

textarea.input2 {
  min-height: 115px;
  padding-top: 13px;
  padding-bottom: 13px;
}

textarea.input2 + .focus-input2::after {
  top: 16px;
  left: 0;
}

.input2:focus + .focus-input2::after {
  top: -13px;
}

.input2:focus + .focus-input2::before {
  width: 100%;
}

.has-val.input2 + .focus-input2::after {
  top: -13px;
}

.has-val.input2 + .focus-input2::before {
  width: 100%;
}
		.wrap-input2 {
  width: 100%;
  position: relative;
  border-bottom: 2px solid #adadad;
  margin-bottom: 37px;
}

.input2 {
  display: block;
  width: 100%;

  font-family: Poppins-Regular;
  font-size: 15px;
  color: #555555;
  line-height: 1.2;
}

		table{
			position:relative;
			margin:auto;
			width:100%;
			left:-10%;
		}

		table thead tr th{
			padding:10px;
		}

		table tbody tr td{
			padding:10px;
		}
		input {
		 
		  width: 100%;
		   width: 100%;
  position: relative;
  border-bottom: 2px solid #adadad;
  margin-bottom: 37px;
	}

	</style>

</head>

<body>

<?php include "modules/navegacion.php"; ?>


<section>

<?php 

$mvc = new MvcController();
$mvc -> enlacesPaginasController();

 ?>

</section>
	
</body>

</html>