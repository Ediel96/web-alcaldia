<!-- start: modal filter poai -->
<div id="filter" class="modal-block modal-block-lg mfp-hide">
	<section class="panel">
		<header class="panel-heading">
			<h2 class="panel-title">Filtro avanzado</h2>
		</header>
		<div class="panel-body">
			<div class="modal-wrapper">
				<div class="modal-text">
					<div class="form-group">
						<label class="col-md-1 control-label">Vigencia: </label>
						<div class="col-md-3">
							<select class="form-control" multiple="multiple" data-plugin-multiselect id="vigencia">
								<option value="2020">2020</option>
								<option value="2021">2021</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
							</select>
						</div>
						<label class="col-md-1 control-label">BPIN: </label>
						<div class="col-md-3">
							<select class="form-control" multiple="multiple" data-plugin-multiselect id="bpin">
								<option value="2020257580001">2020257580001</option>
								<option value="2020257580002">2020257580002</option>
								<option value="2020257580003">2020257580003</option>
								<option value="2020257580004">2020257580004</option>
								<option value="2020257580005">2020257580005</option>
								<option value="2020257580006">2020257580006</option>
							</select>
						</div>
						<label class="col-md-1 control-label">MP: </label>
						<div class="col-md-3">
							<select class="form-control" multiple="multiple" data-plugin-multiselect id="mp">
								<option value="1.A.1.1.1">1.A.1.1.1</option>
								<option value="1.A.1.1.2">1.A.1.1.2</option>
								<option value="1.A.1.1.3">1.A.1.1.3</option>
								<option value="1.A.1.1.4">1.A.1.1.4</option>
								<option value="1.A.1.1.5">1.A.1.1.5</option>
								<option value="1.A.1.1.6">1.A.1.1.6</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="panel-footer">
			<div class="row">
				<div class="col-md-12 text-right">
					<button class="btn btn-primary modal-confirm">Filtrar</button>
					<button class="btn btn-default modal-dismiss">Cancelar</button>
				</div>
			</div>
		</footer>
	</section>
</div>
<!-- end: modal filter poai -->

<!-- start: modal new activity poai -->
<div id="activities" class="modal-block modal-block-lg mfp-hide">
	<section class="panel">
		<header class="panel-heading">
			<h2 class="panel-title">Agregar actividad al proyecto # 1.A.1.1.1</h2>
		</header>
		<div class="panel-body">
			<div class="modal-wrapper">
				<div class="modal-text">
					<div class="form-group">
						<label class="col-md-offset-1 col-md-3 control-label" for="textareaDefault">Descripción actividad programada</label>
						<div class="col-md-7">
							<textarea class="form-control" rows="3" id="textareaDefault"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-offset-1 col-md-3 control-label" for="textareaAutosize">Objeto contractual plan de adquisiciones</label>
						<div class="col-md-7">
							<textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-offset-1 col-md-3 control-label" for="textareaAutosize">Modalidad de selección requerida</label>
						<div class="col-md-7">
							<select class="form-control col-md-12">
								<option value="Licitación pública">Licitación pública</option>
								<option value="Selección abreviada">Selección abreviada</option>
								<option value="Concurso de meritos">Concurso de meritos</option>
								<option value="Contratación directa">Contratación directa</option>
								<option value="Mínima cuantía">Mínima cuantía</option>
							</select>
						</div>
					</div>
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
<!-- end: modal new activity poai -->

<!-- start: modal list activities poai -->
<div id="activities-poai" class="modal-block modal-block-lg mfp-hide">
	<section class="panel">
		<header class="panel-heading">
			<h2 class="panel-title">Actividades proyecto # 1.A.1.1.1</h2>
		</header>
		<div class="panel-body">
			<div class="modal-wrapper">
				<div class="modal-text">
					<a class="mr-xs btn btn-sm btn-success modal-sizes" style="margin-bottom: 1rem;" href="#activities" role="button"><i class="fa fa-plus-square"></i> Agregar actividad</a>
					<table class="table table-bordered table-striped mb-none" id="datatable-default">
						<tbody>
							<tr class="text-nowrap">
								<td colspan="4" class="text-center"><strong>Actividades programadas</strong></td>
							</tr> 
							<tr class="text-nowrap">
								<td><strong>Descripción</strong></td>
								<td><strong>Objeto Contractual</strong></td>
								<td><strong>Modalidad de selección</strong></td>
								<td class="text-center"><strong>Acciones</strong></td>
							</tr>
							<tr class="text-nowrap">
								<td>Capacitar el 100% de la población</td>
								<td>Se requieren 50 canchas</td>
								<td>Licitacíon Publica</td>
								<td class="text-center"><a class="mb-xs mt-xs mr-xs modal-sizes" href="#edit-activity" data-toggle="tooltip" data-placement="top" title="Editar actividad"><i class="fa fa-pencil-square"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#delete-activity" data-toggle="tooltip" data-placement="top" title="Eliminar actividad"><i class="fa fa-trash-o"></i></a></td>
							</tr>
							<tr class="text-nowrap">
								<td>Capacitar el 100% de la población</td>
								<td>Se requieren 50 canchas</td>
								<td>Licitacíon Publica</td>
								<td class="text-center"><a class="mb-xs mt-xs mr-xs modal-sizes" href="#edit-activity" data-toggle="tooltip" data-placement="top" title="Editar actividad"><i class="fa fa-pencil-square"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#delete-activity" data-toggle="tooltip" data-placement="top" title="Eliminar actividad"><i class="fa fa-trash-o"></i></a></td>
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
<!-- end: modal list activities poai -->

<!-- start: modal delete activity poai -->
<div id="delete-activity" class="modal-block modal-block-primary mfp-hide">
	<section class="panel">
		<header class="panel-heading">
			<h2 class="panel-title">Seguro desea eliminar la actividad?</h2>
		</header>
		<div class="panel-body">
			<div class="modal-wrapper">
				<div class="modal-icon">
					<i class="fa fa-question-circle"></i>
				</div>
				<div class="modal-text">
					<h4>La actividad del proyecto # <strong>1.A.1.1.1</strong> se borrara por completo</h4>
					<p>Seguro desea eliminar la actividad?</p>
				</div>
			</div>
		</div>
		<footer class="panel-footer">
			<div class="row">
				<div class="col-md-12 text-right">
					<button class="btn btn-primary modal-confirm">Confirmar</button>
					<button class="btn btn-default modal-dismiss">Cancelar</button>
				</div>
			</div>
		</footer>
	</section>
</div>
<!-- end: modal delete activity poai -->

<!-- start: modal edit activity poai -->
<div id="edit-activity" class="modal-block modal-block-lg mfp-hide">
	<section class="panel">
		<header class="panel-heading">
			<h2 class="panel-title">Editar actividad proyecto # 1.A.1.1.1</h2>
		</header>
		<div class="panel-body">
			<div class="modal-wrapper">
				<div class="modal-text">
					<div class="form-group">
						<label class="col-md-offset-1 col-md-3 control-label" for="textareaDefault">Descripción actividad programada</label>
						<div class="col-md-7">
							<textarea class="form-control" rows="3" id="textareaDefault">Capacitar el 100% de la población</textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-offset-1 col-md-3 control-label" for="textareaAutosize">Objeto contractual plan de adquisiciones</label>
						<div class="col-md-7">
							<textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize>Se requieren 50 canchas</textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-offset-1 col-md-3 control-label" for="textareaAutosize">Modalidad de selección requerida</label>
						<div class="col-md-7">
							<select class="form-control col-md-12">
								<option value="Licitación pública" selected>Licitación pública</option>
								<option value="Selección abreviada">Selección abreviada</option>
								<option value="Concurso de meritos">Concurso de meritos</option>
								<option value="Contratación directa">Contratación directa</option>
								<option value="Mínima cuantía">Mínima cuantía</option>
							</select>
						</div>
					</div>
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
<!-- end: modal edit activity poai -->

<!-- start: modal view poai -->
<div id="view-poai" class="modal-block modal-block-full mfp-hide">
	<section class="panel">
		<header class="panel-heading">
			<h2 class="panel-title">Meta Producto # 1.A.1.1.1</h2>
		</header>
		<div class="panel-body">
			<div class="modal-wrapper">
				<div class="modal-text table-responsive">
					<table class="table table-bordered table-striped mb-none" id="datatable-default">
						<tbody>
							<tr class="text-nowrap">
								<td><strong>MP: </strong> 1.A.1.1.1</td>
								<td><strong>Código FUT: </strong> A.1.7.2 APLICACIÓN DE PROYECTOS EDUCATIVOS.. </td>
								<td><strong>Cód programa presupuestal: </strong> 2201</td>
							</tr>
							<tr class="text-nowrap">
								<td><strong>Código BPIN:</strong> 2020257580001</td>
								<td><strong>Código producto MGA:</strong> 2201049</td>
								<td><strong>Programa presupuestal:</strong> Salud Pública</td>
							</tr>
							<tr class="text-nowrap">
								<td colspan="3"><strong>Descripción meta producto:</strong> Realizar acompañamiento a las 4 instituciones educativas ofciales en el seguimiento y evaluación de los manuales y comités de convivencia escolar</td>
							</tr>  
							<tr class="text-nowrap">
								<td colspan="3">
									<a class="mr-xs btn btn-sm btn-success modal-sizes" style="margin-bottom: 1rem;" href="#activities" role="button"><i class="fa fa-plus-square"></i> Agregar actividad</a>
									<table class="table table-bordered table-striped mb-none" id="datatable-default">
										<tbody>
											<tr class="text-nowrap">
												<td colspan="4" class="text-center"><strong>Actividades programadas</strong></td>
											</tr> 
											<tr class="text-nowrap">
												<td><strong>Descripción</strong></td>
												<td><strong>Objeto Contractual</strong></td>
												<td><strong>Modalidad de selección</strong></td>
												<td class="text-center f-2"><strong>Acciones</strong></td>
											</tr>
											<tr class="text-nowrap">
												<td>Capacitar el 100% de la población</td>
												<td>Se requieren 50 canchas</td>
												<td>Licitacíon Publica</td>
												<td class="text-center f-2"><a class="mb-xs mt-xs mr-xs modal-sizes" href="#edit-activity" data-toggle="tooltip" data-placement="top" title="Editar actividad"><i class="fa fa-pencil-square"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#delete-activity" data-toggle="tooltip" data-placement="top" title="Eliminar actividad"><i class="fa fa-trash-o"></i></a></td>
											</tr>
											<tr class="text-nowrap">
												<td>Capacitar el 100% de la población</td>
												<td>Se requieren 50 canchas</td>
												<td>Licitacíon Publica</td>
												<td class="text-center f-2"><a class="mb-xs mt-xs mr-xs modal-sizes" href="#edit-activity" data-toggle="tooltip" data-placement="top" title="Editar actividad"><i class="fa fa-pencil-square"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#delete-activity" data-toggle="tooltip" data-placement="top" title="Eliminar actividad"><i class="fa fa-trash-o"></i></a></td>
											</tr>                   
										</tbody>
									</table>
								</td>
							</tr> 
							<tr class="text-nowrap">
								<td><strong>Valor total estimado:</strong> $ 60.000.000</td>
								<td colspan="2"><strong>Valor plan plurianual de inversiones:</strong> $ 35.000.000</td>
							</tr>                     
						</tbody>
					</table>
					<div class="mt-xl mb-xs col-md-12 text-center">
						<h4>COMPONENTE PRESUPUESTAL</h4>					
					</div>
					<table class="mb-xs table table-bordered table-striped mb-none" id="datatable-default">
						<thead>
							<tr class="text-nowrap">
								<th><strong>Fuentes</strong></th>
								<th colspan="2" class="text-center"><strong>2020</strong></th>
							</tr>
						</thead>
						<tbody>
							<tr class="text-nowrap">
								<td></td>
								<td class="text-center"><strong>Programación</strong></td>
								<td class="text-center"><strong>Ejecución</strong></td>
							</tr>
							<tr class="text-nowrap">
								<td>Cofinanciación departamento</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>Cofinanciación Nación</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>Recurso crédito</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>Otros recursos</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>Recursos propios</td>
								<td>$ 35.000.000</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>SGP Alimentación escolar</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>SGP APSB</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>SGP Cultura</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>SGP Deporte</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>SGP Educación</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>SGP Libre destinación</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>SGP Libre inversión</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>SGP Rio Magdalena</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>SGP Primera infancia</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>SGP Salud</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>Regalias</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>Funcionamiento</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td>Gestionados</td>
								<td>$ -</td>
								<td>$ -</td>
							</tr>
							<tr class="text-nowrap">
								<td><strong>Total</strong></td>
								<td><strong>$ 35.000.000</strong></td>
								<td><strong>$ -</strong></td>
							</tr>                        
						</tbody>
					</table>
					<p><small>* Cifras refejadas en pesos</small></p>
				</div>
			</div>
		</div>
		<footer class="panel-footer">
			<div class="row">
				<div class="col-md-12 text-right">
					<button class="btn btn-primary modal-confirm"> <i class="fa fa-download"></i> Descargar datos</button>
					<button class="btn btn-default modal-dismiss">Cerrar</button>
				</div>
			</div>
		</footer>
	</section>
</div>
<!-- end: modal view poai -->