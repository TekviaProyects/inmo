<div class="col-xs-12">
	<div class="footer-widget">
		<h6>Agregar propiedad</h6>
		<div>
			<form  id="form_data" onsubmit="event.preventDefault(); validate()" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<label>Titulo</label>
						<input class="form-control" type="text" id="title" required="1" />
					</div>
					<div class="col-sm-12 col-md-6">
						<label>Numero de cuartos</label>
						<input class="form-control" type="number" id="num_room" required="1" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<label>Numero de baños</label>
						<input class="form-control" type="number" id="num_bathroom" required="1" />
					</div>
					<div class="col-sm-12 col-md-6">
						<label>Niveles</label>
						<input class="form-control" type="number" id="levels" required="1" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<label>Estacionamientos</label>
						<input class="form-control" type="number" id="parking" required="1" />
					</div>
					<div class="col-sm-12 col-md-6">
						<label>Superficie en m<sup>2</sup></label>
						<input class="form-control" type="number" id="surface" required="1" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<label>Precio</label>
						<input class="form-control" type="number" id="price" required="1" />
					</div>
					<div class="col-sm-12 col-md-6">
						<label>Dirección</label>
						<input class="form-control" type="text" id="address" required="1" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<label>Construcción en m<sup>2</sup></label>
						<input class="form-control" type="number" id="construction" required="1" />
					</div>
					<div class="col-sm-12 col-md-6">
						<label>Descripción</label>
						<textarea id="description" class="form-control" required="1"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<label>Imagen</label>
						<input class="form-control" type="file" id="image" name="image" required="1" accept="image/*" />
					</div>
					<div class="col-sm-12 col-md-6">
						<label>PDF</label>
						<input class="form-control" type="file" id="pdf" name="pdf" required="1" accept="application/pdf" />
					</div>
				</div><br />
				<button type="submit" class="btn btn-success" style="padding-bottom: 30px !important" id="btnSubir">
					Guardar
				</button>
			</form>
			<p class="form-messege"></p>
		</div>
	</div>
</div>
<script>
	function validate(){
		var data = {},
			$required = [],
			message = 'Debes llenar los siguientes campos: \n',
			error = 0, 
			count = 0;
		
		$("#form_data").find(':input').each(function(key, value){
			var required = $(this).attr('required'),
				valor = $(this).val(),
				id = this.id;
			
		// Validate that the required input not are empty
			if (required === '1' && valor.length <= 0) {
				error = 1;

				$required.push(id);
			}
			
			if(id){
				data[id] = $(this).val();
			}
		});
		
	// Build the error message
		if ($required.length > 0) {
			$.each($required, function(index, value) {
				message += '-->' + this + ' \n';
			});
		}
		
	// Error
		if (error === 1) {
			swal({
				title : 'Campos no validos',
				text : message,
				timer : 5000,
				showConfirmButton : true,
				type : 'warning'
			});
			
			return;
		}
		var form = $('#form_data')[0];
		var formData = new FormData(form);
		formData.append("construction", data.construction);
		formData.append("description", data.description);
		formData.append("levels", data.levels);
		formData.append("num_bathroom", data.num_bathroom);
		formData.append("num_room", data.num_room);
		formData.append("parking", data.parking);
		formData.append("surface", data.surface);
		formData.append("title", data.title);
		formData.append("price", data.price);
		formData.append("address", data.address);
		
		console.log('==========> DATA', data);
		
		console.log('==========> formData', formData);
		
		$("#btnSubir").prop('disabled', true);
		$("#btnSubir").html('Cargando...');
		
		$.ajax({
			type : "POST",
			enctype : 'multipart/form-data',
			url : "add_estate.php",
			data : formData,
			processData : false,
			contentType : false,
			cache : false,
			timeout : 600000,
			dataType : 'json'
		}).done(function(resp) {
			console.log('==========> done add_estate', resp);
			
			swal({
				title : 'Datos guardados',
				text : 'Los datos se han guardado con exito',
				timer : 5000,
				showConfirmButton : true,
				type : 'success'
			});
			
			$("#btnSubir").prop('disabled', false);
			$("#btnSubir").html('Guardar');
		}).fail(function(resp) {
			console.log('==========> fail !!! save', resp);
			
			$("#btnSubir").prop('disabled', false);
			$("#btnSubir").html('Guardar');
			swal({
				title : 'Error',
				text : 'A ocurrido un problema al guardar los datos',
				timer : 5000,
				showConfirmButton : true,
				type : 'error'
			});
		});
	}
</script>