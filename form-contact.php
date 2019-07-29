<!-- Contacto -->
	<section class="bg-light py-5" id="contacto">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-9" id="informacion">
					<h3>Contacto</h3>
					<p>Escríbeme un mensaje desde mi formulario de contacto.</p>
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="enviarForm">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<i class="fas fa-exclamation input-group-text"></i>
							</div>
							<input type="text" name="asunto" class="form-control" placeholder="Asunto" required>
						</div>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<i class="fas fa-user input-group-text"></i>
							</div>
							<input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
						</div>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<i class="fas fa-envelope input-group-text"></i>
							</div>
							<input type="text" name="correo" class="form-control" placeholder="Correo" required>
						</div>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<i class="fas fa-pencil-alt input-group-text"></i>
							</div>
							<textarea name="mensaje" placeholder="Escribe tu mensaje!" class="form-control" cols="30" rows="10" required></textarea>
						</div>

						<button type="submit" name="enviar" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#enviar">
							Enviar mensaje
						</button>
						<div id="informacion"></div>
					</form>
				</div>
<!--
				<div class="col-lg-3 col-sm-4 align-self-center d-lg-block redes">
					<img src="images/redes/github.png" alt="" class="img-fluid d-lg-block mb-1 mt-1">
					<img src="images/redes/linkedin.png" alt="" class="img-fluid d-lg-block mb-1 mt-1">
				</div>
-->
				<div class="col-lg-4 col-md-6 col-sm-8 redes text-center py-2">
					<a href="https://github.com/EliasDevelopments" target="_blank"><img src="images/redes/github.png" alt="Icono github" class="img-fluid"></a>
					<a href="https://www.linkedin.com/in/evelasquezdev/" target="_blank"><img src="images/redes/linkedin.png" alt="Icono linkedin" class="img-fluid"></a>
				</div>
			</div>
		</div>
	</section>