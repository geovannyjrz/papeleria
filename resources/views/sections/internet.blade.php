<div class="row">
	@foreach($computers as $computer)
	<div class="col-md-3" style="margin-top: 20px;">
		<div style="padding: 20px 25px 20px 25px;" class="contador-equipo">
			<form id="form{{$computer->id}}">
				<h3 class="text-center">{{$computer->computer}}</h3>
				<hr>
				<button type="button" class="btn btn-outline-light btn-lg btn-block btn-iniciar" id="btn-iniciar{{$computer->id}}" style="margin-bottom: 16px">Iniciar tiempo</button>
				
				<div class="row">
					<div class="form-group col-md-6">
						<label for="txt-inicio{{$computer->id}}">Inicio</label>
						<input type="text" class="form-control-plaintext" placeholder="00:00 AM" id="txt-inicio{{$computer->id}}" readonly>
					</div>
					<div class="form-group col-md-6">
						<label for="txt-tiempo{{$computer->id}}">Tiempo</label>
						<input type="text" class="form-control-plaintext" placeholder="00:00" id="txt-tiempo{{$computer->id}}">
						<small id="lblTime{{$computer->id}}" class="form-text text-muted">&nbsp;</small>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-6">
						<label for="txt-extras{{$computer->id}}">Extras</label>
						<input type="number" class="form-control frm-personal" id="txt-extras{{$computer->id}}">
					</div>
					<div class="form-group col-md-6">
						<label for="txt-impre{{$computer->id}}">Impresiones</label>
						<input type="number" class="form-control frm-personal" id="txt-impresiones{{$computer->id}}">
					</div>
				</div>
				
				<div class="row" style="display: none;">
					<div class="form-group col-md-6">
						<input type="text" class="form-control" id="txt-mintotal{{$computer->id}}" value="0">
					</div>
					<div class="form-group col-md-6">
						<input type="text" class="form-control" id="txt-Extra{{$computer->id}}" value="0">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<button type="button" class="btn btn-link btn-Extra" id="btn-Extra{{$computer->id}}" data-id="{{$computer->id}}">Tiempo</button>
					</div>
					<div class="col-md-8">
						<button type="button" class="btn btn-outline-danger btn-lg btn-block btn-terminar" id="btn-terminar{{$computer->id}}">Finalizar</button>
					</div>
				</div>

			</form>
		</div>
	</div>
	@endforeach

	<!-- Modal -->
	<div class="modal fade" id="ModalTotal" tabindex="-1" role="dialog" aria-labelledby="Modaltitulo" aria-hidden="true">
		<div class="modal-dialog" role="document">

			<div class="modal-content">
				<div class="modal-header">

				</div>
				<div class="modal-body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Continuar</button>
					<button type="button" class="btn btn-primary" id="finalizarModel">Finalizar tiempo</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="ModalExtra" tabindex="-1" role="dialog" aria-labelledby="Modaltitulo" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Agregar tiempo (minutos)</h3>
				</div>
				<div class="modal-body">

					<div class="row justify-content-center">
						<div class="form-group col-8">
							<label for="tiempoExtra">Minutos extra</label>
							<input type="number" class="form-control" id="tiempoExtra" aria-describedby="emailHelp">
							<small id="emailHelp" class="form-text text-muted">Ingresar cantidad en minutos.</small>
						</div>
					</div>

					<input type="text" id="txtId" style="display: none;">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="button" class="btn btn-primary" id="closeModalTiempo">Agregar tiempo</button>
				</div>
			</div>
		</div>
	</div>
</div>