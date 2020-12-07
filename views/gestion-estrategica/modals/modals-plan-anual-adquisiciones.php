<!-- start: modal actualizar plan adquisiciones -->
<div id="actualizar" class="modal-block modal-block-lg mfp-hide">
	<section class="panel">
		<header class="panel-heading">
			<h2 class="panel-title">Actualizar plan anual de adquisiciones</h2>
		</header>
		<div class="panel-body">
			<div class="modal-wrapper">
				<div class="modal-text">
					<table class="table table-bordered table-striped mb-none" id="datatable-default">
						<tbody>
							<tr class="text-nowrap">
								<td><strong>MP: </strong> 1.A.1.1.1</td>
                                <td>
                                    <strong>Código UNSPSC: </strong>
                                    <input list="unspsc" class="form-control input-sm">
									<datalist id="unspsc">
										<option value="Internet Explorer">
										<option value="Firefox">
										<option value="Chrome">
										<option value="Opera">
										<option value="Safari">
									</datalist> 
                                </td>
							</tr> 
							<tr class="text-nowrap">
								<td colspan="2"><strong>Descripción: </strong> Capacitar al 100% de la población</td>
							</tr>
							<tr class="text-nowrap">
								<td><strong>Fecha estimada de inicio de proceso de selección: </strong> <input type="date" class="form-control input-sm" id="inputDefault"></td>
								<td><strong>Duración estimada del contrato: </strong> <input type="text" class="form-control input-sm" id="inputDefault"></td>
							</tr>
							<tr class="text-nowrap">
								<td><strong>Modalidad de Selección:</strong> Licitación pública</td>
								<td><strong>Fuente de los recursos:</strong> Prog rec prop</td>
							</tr>
                            <tr class="text-nowrap">
								<td><strong>Valor total estimado:</strong> $ 35.000.000</td>
								<td>
                                    <strong>¿Se requieren vigencias futuras?:</strong> 
                                    <select class="form-control input-sm mb-md">
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>
                                </td>
							</tr> 
                            <tr class="text-nowrap">
								<td><strong>Valor estimado de la vigencia actual:</strong> $ 35.000.000</td>
								<td><strong>Estado de solicitud de vigencias futuras:</strong> <input type="text" class="form-control input-sm" id="inputDefault"></td>
							</tr>    
                            <tr class="text-nowrap">
								<td colspan="2"><strong>Datos contacto responsable: </strong> <input type="text" class="form-control input-sm" id="inputDefault"></td>
							</tr>               
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<footer class="panel-footer">
			<div class="row">
				<div class="col-md-12 text-right">
					<button class="btn btn-primary modal-confirm"><i class="fa fa-save"></i> Guardar</button>
					<button class="btn btn-default modal-dismiss">Cancelar</button>
				</div>
			</div>
		</footer>
	</section>
</div>
<!-- end: modal actualizar plan adquisiciones -->

<!-- start: modal aprobar plan adquisiciones -->
<div id="aprobar-plan" class="modal-block modal-block-lg mfp-hide">
	<section class="panel">
		<header class="panel-heading">
			<h2 class="panel-title">Actualizar plan anual de adquisiciones</h2>
		</header>
		<div class="panel-body">
			<div class="modal-wrapper">
				<div class="modal-text">
                    <form class="form-horizontal form-bordered" method="get">
						<div class="form-group">
							<label class="col-md-3 control-label" for="inputDefault">Acto administrativo:</label>
							<div class="col-md-3">
                                <select class="form-control">
									<option>Seleccione</option>
									<option>Resolución</option>
									<option>Decreto</option>
									<option>Acuerdo</option>
								</select>
							</div>
                            <label class="col-md-3 control-label" for="inputDefault">Fecha acto administrativo:</label>
							<div class="col-md-3">
								<input type="date" class="form-control" id="inputDefault">
							</div>
						</div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textareaDefault">Fecha de registro:</label>
                            <div class="col-md-3">
								<input type="date" class="form-control" id="inputDefault">
							</div>
						</div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textareaDefault">Descripción actividad programada:</label>
                            <div class="col-md-9">
                                <textarea class="form-control" rows="3" id="textareaDefault">Capacitar el 100% de la población</textarea>
                            </div>
						</div>
                    </form>
				</div>
			</div>
		</div>
		<footer class="panel-footer">
			<div class="row">
				<div class="col-md-12 text-right">
					<button class="btn btn-primary modal-confirm"><i class="fa fa-save"></i> Aprobar</button>
					<button class="btn btn-default modal-dismiss">Cancelar</button>
				</div>
			</div>
		</footer>
	</section>
</div>
<!-- end: modal aprobar plan adquisiciones -->