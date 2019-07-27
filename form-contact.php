<!-- Contacto -->
	<section class="bg-light py-5" id="contacto">
		<div class="container">
			<div class="row">
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
							Enviar mi Mensaje
						</button>
						<div id="informacion"></div>
					</form>
				</div>

				<div class="col-lg-3 align-self-center d-none d-lg-block">
					<img src="images/logo.png" alt="">
				</div>
			</div>
		</div>
	</section>