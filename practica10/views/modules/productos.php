<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:index.php?action=ingresar");

	exit();

}

?>



<div class="modal-dialog">
	<div class="loginmodal-container">
		<h1>REGISTRO DE PRODUCTOS</h1>
		<form method="post">
			
			<input type="text" placeholder="Product" name="productName" required>

			<input type="text" placeholder="Description" name="ProductDesription" required>
			<input type="number" placeholder="Buy price" name="ProductBuyPrice" required>
				<input type="number" placeholder="Sale price" name="ProductSalePrice" required>



			<input type="number" placeholder="Price" name="ProductPrice" required>

			<input type="submit" class="login loginmodal-submit" value="Enviar">
		</form>
	</div>
</div>

<?php
//Enviar los datos al controlador MvcController (es la clase principal de controller.php)
$registro = new MvcController();
//se invoca la función registroProductosController de la clase MvcController:
$registro -> registroProductosController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>
