<?php include("header.php") ?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<center><h1>Bienvenido empleado</h1></center>
			</div>

			<div class="articulo">
				<article>
					<p> Ingrese los datos que se le pide. <br><br><br></p>
						
					<form action="#" method="post">
                        <p>Nombre completo: <input type="text" name="nombre" size="20"/></p><br>
                        <p>Edad: <select name="edad">
							<option>18-25</option>
							<option>26-35</option>
							<option>36-50</option>
							<option>50+</option>
						</select></p><br>
						<p>Identificacion de trabajo: <input type="text" name="credito" size="20"/></p><br>
                        <p>Código de seguridad: <input type="text" name="cod" size="20"/></p><br>
						<p>Turno en el que trabaja: <select name="selecciones">
						<option>Matutino</option>
                        <option>Vespertino</option></p><br></select>
						<p>Número de telefono: <input type="text" name="no" size="20"/></p><br>
						<p>Sucursal en la que se encuentra: <select name="selecciones">
                           <option>Panamericana</option>
                           <option>Oasis</option>
                           <option>Torres</option>
                           <option>Jilotepec</option>
                           <option>La cuesta</option>
                           </select></p><br>
						<p>Domicilio: <input type="text" name="dom" size="20"/></p><br>
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