<!-- Contacto -->
	<section class="bg-light pt-5 pb-4" id="contacto">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-9" id="informacion">
					<h3 class="mb-3 scrollflow -slide-left -opacity">Contacto</h3>
					<p class="mb-3 scrollflow -slide-right -opacity">Escríbeme un mensaje desde mi formulario de contacto.</p>
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="enviarForm" class="mb-3 scrollflow -slide-top -opacity">
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

						<button type="submit" name="enviar" class="btn btn-secondary btn-lg btn-block" id="btnenviarmensaje" data-toggle="modal" data-target="#enviar">
							Enviar mensaje
						</button>
					</form>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-8 redes text-center">
					<a href="https://github.com/EliasDevelopments" target="_blank"><img src="images/redes/github.png" alt="Icono github" class="img-fluid"></a>
					<a href="https://www.linkedin.com/in/evelasquezdev/" target="_blank"><img src="images/redes/linkedin.png" alt="Icono linkedin" class="img-fluid"></a>
				</div>
			</div>
		</div>
	</section>