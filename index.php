<?php require('funciones.php') ?>
<?php include('header.php') ?>

	<!--- Cabecera --->
	<?php include('banner.php') ?>

	<!-- Información Personal -->
	<section class="container text-center p-5 scrollflow -slide-top -opacity" id="datospersonales">
		<div class="row">
			<div id="datos-personales">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Datos Personales
							</button>
						</h5>
					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#datos-personales">
						<div class="card-body">
							<p><span class="negrita">Edad: </span> <span>20 años.</span></p>
							<p><span class="negrita">Fecha de Nacimiento: </span> <span>22 de Noviembre de 1998.</span></p>
							<p><span class="negrita">Lugar de Nacimiento: </span> <span>Caracas, Venezuela.</span></p>
							<p><span class="negrita">Correo: </span> <span>evelasquezdevelopments@gmail.com</span></p>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
								Educación
							</button>
						</h5>
					</div>

					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#datos-personales">
						<div class="card-body">
							<p><span class="negrita">Primaria: </span> <span>U. E. Niño Jesús de Praga. (2003-2010)</span></p>
							<p><span class="negrita">Bachillerato: </span> <span>U. E. P. Fuente de Jacob. (2010-2015)</span></p>
							<p><span class="negrita">TSU: </span> <span>Instituto Universitario de Tecnología Venezuela. (2016-2019)</span></p>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="headingThree">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
								Experiencia Laboral
							</button>
						</h5>
					</div>

					<div id="collapseThree" class="collapse " aria-labelledby="headingThree" data-parent="#datos-personales">
						<div class="card-body">
							<p><span class="negrita"> Desarrollador de Sistemas: </span> <span> E SERVICIOS AT C.A. </span></p>
							<p> Mi responsabilidad principal fue realizar mejoras al sistema de control de estudios que ofrece la empresa, migrar de PHP al framework cakephp; corregir errores y realizar mejoras a otro sistema desarrollado en Visual Fox Pro. </p>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="headingFour">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
								Objetivos y Hobbies
							</button>
						</h5>
					</div>

					<div id="collapseFour" class="collapse " aria-labelledby="headingFour" data-parent="#datos-personales">
						<div class="card-body">
							<p><span class="negrita"> Objetivos: </span> <span> Superarme, seguir aprendiendo constantemente y cumplir todos los objetivos que estén a mi disposición. </span></p>
							<p><span class="negrita"> Hobbies: </span> <span> SpeedCubing, Ciclismo, Programar. </span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Conocimientos Básicos -->
	<section class="bg-light py-5" id="conocimientos">
		<div class="container scrollflow -pop -opacity">
			<h3 class="text-center mb-3 scrollflow -slide-bottom -opacity">Conocimientos Básicos</h3>
			<div class="row justify-content-center">
				<div class="col-lg-3 col-md-4 col-sm-6 col-8 mb-2">
					<div class="card text-center border-primary">
						<div class="card-body">
							<img src="images/html5.png" alt="Logo HTML5" class="img-fluid animation-cards">
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-8 mb-2">
					<div class="card text-center border-primary">
						<div class="card-body">
							<img src="images/css3.png" alt="Logo HTML5" class="img-fluid animation-cards">
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-8 mb-2">
					<div class="card text-center border-primary">
						<div class="card-body">
							<img src="images/javascript.png" alt="Logo HTML5" class="img-fluid animation-cards">
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-8 mb-2">
					<div class="card text-center border-primary">
						<div class="card-body">
							<img src="images/php.png" alt="Logo HTML5" class="img-fluid animation-cards">
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-8 mb-2">
					<div class="card text-center border-primary">
						<div class="card-body">
							<img src="images/c++.png" alt="Logo HTML5" class="img-fluid animation-cards">
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-8 mb-2">
					<div class="card text-center border-primary">
						<div class="card-body">
							<img src="images/java.png" alt="Logo HTML5" class="img-fluid animation-cards">
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-8 mb-2">
					<div class="card text-center border-primary">
						<div class="card-body">
							<img src="images/vfp.png" alt="Logo HTML5" class="img-fluid animation-cards">
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-8 mb-2">
					<div class="card text-center border-primary">
						<div class="card-body">
							<img src="images/sql.png" alt="Logo HTML5" class="img-fluid animation-cards">
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Algo más -->
	<section>
		<div class="container scrollflow -slide-bottom -opacity">
			<div class="col">
				<div class="row">
					<div class="m-5 text-center">
						<h3>¿Algo más sobre mi persona?</h3>
						<p>Tengo conocimientos básicos en varios lenguajes, joven con ganas de seguír aprendiendo, obtener experiencia e ir mejorando constantemente.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Proyectos -->
	<?php include('proyectos.php') ?>

	<!-- Contacto -->
	<?php include('form-contact.php') ?>

	<?php if (isset($_POST['enviar'])): ?>
		<script> alert('Su mensaje fue enviado exitosamente. Muschísimas gracias por contactarme, te responderé lo antes posible!'); </script>
	<?php endif ?>

<?php include('footer.php') ?>