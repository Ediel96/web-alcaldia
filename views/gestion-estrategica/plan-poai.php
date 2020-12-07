<div class="row">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title"><?php if(!isset($_GET['item'])){echo 'Plan operativo POAI';}else{echo 'Meta Producto # 1.A.1.1.1';}?></h2>
        </header>
		<div class="panel-body">
            <?php if(!isset($_GET['item'])){?>
            <div class="form-group mt-xl">
		    	<label class="col-md-1 control-label" for="inputSuccess">Vigencia: </label>
		    	<div class="col-md-2">
                    <select class="form-control input-sm mb-md">
		    			<option>2020</option>
		    			<option>2021</option>
		    			<option>2022</option>
                        <option>2023</option>
		    		</select>		    		
		    	</div>
                <label class="col-md-1 control-label" for="inputSuccess">BPIN: </label>
		    	<div class="col-md-2">
                    <select class="form-control input-sm mb-md">
                        <option value="2020257580001">2020257580001</option>
						<option value="2020257580002">2020257580002</option>
						<option value="2020257580003">2020257580003</option>
						<option value="2020257580004">2020257580004</option>
						<option value="2020257580005">2020257580005</option>
						<option value="2020257580006">2020257580006</option>
		    		</select>		    		
		    	</div>
                <label class="col-md-1 control-label" for="inputSuccess">MP: </label>
		    	<div class="col-md-2">
                    <select class="form-control input-sm mb-md">
                        <option value="1.A.1.1.1">1.A.1.1.1</option>
						<option value="1.A.1.1.2">1.A.1.1.2</option>
						<option value="1.A.1.1.3">1.A.1.1.3</option>
						<option value="1.A.1.1.4">1.A.1.1.4</option>
						<option value="1.A.1.1.5">1.A.1.1.5</option>
						<option value="1.A.1.1.6">1.A.1.1.6</option>
		    		</select>		    		
		    	</div>
                <button type="button" class="mr-xs btn btn-sm btn-primary"><i class="fa fa-filter"></i> Filtrar</button>
                <a class="mr-xs btn btn-sm btn-success modal-sizes" href="#filter" role="button"><i class="fa fa-filter"></i> Filtro avanzado</a>
		    </div>
            <hr>
            <div class="panel-body table-responsive">                                
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                        <tr class="text-nowrap">
                            <th>MP</th>
                            <th>Código BPIN</th>
                            <th>Descripción MP</th>
                            <th>Código FUT</th>
                            <th>Código producto MGA</th>
                            <th class="no-sort"></th>
                        </tr>
                    </thead>
                    <tbody>
						<?php for($i=0;$i<count($data_plan_indicativo);$i++){?>
                        <tr class="text-nowrap">
                            <td><?php echo $data_plan_indicativo[$i]['cod_mp'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['bpin'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['meta_pdm'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['code_fut'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['id_mga'];?></td>
                            <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-estrategica/plan-poai/<?php echo $data_plan_indicativo[$i]['id'];?>" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                        </tr>
						<?php }?>                     
                    </tbody>
                </table>
            </div>
            <?php }else{?>
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
										<td class="text-center"><strong>Acciones</strong></td>
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
            <div class="row">
				<div class="col-md-12 text-right">
					<button class="btn btn-primary modal-confirm"> <i class="fa fa-download"></i> Descargar datos</button>
                    <a class="btn btn-default" href="javascript:history.go(-1)"><i class="fa fa-reply"></i> Volver</a>
				</div>
			</div>
            <?php }?>
		</div>
	</section>
</div>
<!-- end: page -->
<?php include 'modals/modals-plan-poai.php';?>