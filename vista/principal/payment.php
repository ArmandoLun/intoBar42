<!DOCTYPE html>
<html lang="en">

<!--instancia de head.php-->
<?php include('vista/principal/head.php'); ?>

<body data-spy="scroll" data-target="#navbar">
	<div class="boxed-page">
		<!-- NAVBAR -->
		<?php include('vista/principal/navbar.php'); ?>
		<!-- Reservation Section -->
		<section id="gtco-reservation" class="bg-fixed bg-white section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-6">
						<div class="heading-section text-center">
							<h2>
								Pagar Reservación
							</h2>
						</div>

						<form action="">
							<div class="col-md-12 form-group">
								<input type="number" class="form-control" name="numero" placeholder="Número de tarjeta">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" name="nombre" placeholder="Nombre y apellido del titular">
							</div>

							<div style="display: flex;">
								<div class="col-md-6 form-group">
									<div class="input-group date" id="datepicker4" data-target-input="nearest">
										<input type="text" id="nearest" name="expiracion" class="form-control datepicker-input" data-target="#datepicker4" placeholder="Fecha de expiración" />
										<div class="input-group-append" data-target="#datepicker4" data-toggle="datetimepicker">
											<div class="input-group-text">
												<span class="lnr lnr-calendar-full"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 form-group">
									<input type="number" class="form-control" name="codigo" placeholder="Código de seguridad">
								</div>
							</div>

							<div class="col-md-12 form-group">
								<input type="number" class="form-control" name="dni" placeholder="DNI del titular">
							</div>
							<div class="col-md-12 text-center">
								<input class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit" value="Pagar">
							</div>
						</form>
					</div>
					<div class="col-lg-3"></div>
				</div>

			</div>
		</section>
		<!-- End of Reservation Section -->
		<?php include('vista/principal/talon.php'); ?>
	</div>
</body>

<!--js Utilities-->
<?php include('vista/principal/jsUtilities.php'); ?>

</html>