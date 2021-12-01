<?php include("header.php") ?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<center><h1>Bienvenido al portal de ventas</h1></center>
			</div>

			<div class="articulo">
				<article>
				<p> Ingrese los datos que se le pide. <br><br><br></p>
						
						<form action="#" method="post">
							<p>Litros que necesita recargar: <select name="modelo">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>10</option>
								<option>20</option>
							</select></p><br>
							<p>Forma de pago habitual del combustible: <select name="traccion">
							     <option>Credito</option>
								<option>Efectivo</option>
								<option>Tarjeta Combustible</option>
								<option>Vales Combustible</option>
							
							</select></p><br>
							<p>¿Cuánto gasta en combustible al mes? <select name="credito">
								<option>0-15,000</option>
								<option>16,000-49,000</option>
								<option>50,000-69,000</option>
								<option>70,000-89,000</option>
								
							</select></p><br>
							<p>Tipo de Gasolina Requerida:<br> Magna <input type="radio" name="cuero" value="si"> Diesel <input type="radio" name="cuero" value="no"></p> Premium <input type="radio" name="cuero" value="no"></p><br>

							<p>Quejas de alguna de nuestras sucursales(opcional): <textarea name="detalles" cols="50" rows="4"></textarea></p><br>
							<p><input type="reset" name="reset" value="Enviar"></p>
							</form>
				</article>
			</div>

			<?php include("sidebar.php") ?>
		</div>
	</section>
	
    <?php include("footer.php") ?>
</body>
</html>