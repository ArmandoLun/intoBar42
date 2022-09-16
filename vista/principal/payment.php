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
						<form id="choclo">
							<div class="col-md-12 form-group">
								<input id="card_number" type="tel" class="form-control" name="numero" minlength="19" maxlength="19" oninput="controlar4();" placeholder="Número de tarjeta" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" name="nombre" placeholder="Nombre y apellido del titular" required>
							</div>

							<div style="display: flex;">
								<div class="col-md-6 form-group">
									<div class="input-group date" id="datepicker4" data-target-input="nearest">
										<input type="date" id="nearest" name="expiracion" class="form-control datepicker-input" data-target="#datepicker4" placeholder="Fecha de expiración" required />
									</div>
								</div>
								<div class="col-md-6 form-group">
									<input type="tel" minlenght="3" maxlength="4" class="form-control" name="codigo" placeholder="Código de seguridad" required>
								</div>
							</div>

							<div class="col-md-12 form-group">
								<input type="number" class="form-control" name="dni" placeholder="DNI del titular" required>
							</div>
							<div class="col-md-12 text-center">
								<input class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit" value="Pagar" onclick="pagar();">
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
<script>
	function controlar4() {
		var card = document.getElementById("card_number");
		if ((card.value.length + 1) % 5 == 0 && card.value.length < 19) {
			card.value += " ";
		}
	}
	var fecha = new Date();
	document.getElementById("nearest").min = fecha.toISOString().split("T")[0];
	fecha.setDate(fecha.getDate() + 365 * 5);
	document.getElementById("nearest").max = fecha.toISOString().split("T")[0];

	function pagar(){
		event.preventDefault();
		let datitos = new FormData(document.getElementById("choclo"));
		var daate = new Date();
		var fecha_mesa ="<?php echo($_GET["fecha_reservacion"]); ?>";
		alert(fecha_mesa);
	}
</script>

</html>