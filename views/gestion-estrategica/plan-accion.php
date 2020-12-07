<div class="row">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title"><?php if(!isset($_GET['item'])){echo 'Plan de acción';}else{echo 'Plan de acción # '.$detalle_plan_accion[0]['cod_mp'];}?></h2>
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
						<?php for($i=0;$i<count($data_plan_accion);$i++){?>
                        <tr class="text-nowrap">
                            <td><?php echo $data_plan_accion[$i]['cod_mp'];?></td>
                            <td><?php echo $data_plan_accion[$i]['bpin'];?></td>
                            <td><?php echo $data_plan_accion[$i]['meta_pdm'];?></td>
                            <td><?php echo $data_plan_accion[$i]['code_fut'];?></td>
                            <td><?php echo $data_plan_accion[$i]['id_mga'];?></td>
                            <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-estrategica/plan-accion/<?php echo $data_plan_accion[$i]['id'];?>" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a></td>
                        </tr>    
						<?php }?>                   
                    </tbody>
                </table>
            </div>
            <?php }else{?>
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
				<tbody>
					<tr class="text-nowrap">
						<td colspan="3" class="text-center">
                            <strong>PLAN DE DESARROLLO 2020 - 2023 "SOPÓ ES NUESTRO TIEMPO" COMPONENTE DE EFICACIA - PLAN DE ACCIÓN - VIGENCIA 2020</strong>
                        </td>                        
					</tr>
					<tr class="text-nowrap">
						<td><strong>MP:</strong> <?php echo $detalle_plan_accion[0]['cod_mp'];?></td>
						<td><strong>Código BPIN:</strong> <?php echo $detalle_plan_accion[0]['bpin'];?></td>
						<td><strong>Codigo del programa presupuestal:</strong> <?php echo $detalle_plan_accion[0]['cod_program_presupuestal'];?></td>
					</tr>
                    <tr class="text-nowrap">
						<td colspan="2"><strong>Sector FUT:</strong> <?php echo $detalle_plan_accion[0]['code_fut'];?></td>
						<td><strong>Fecha de programación:</strong> </td>
					</tr>
                    <tr class="text-nowrap">
						<td><strong>Fecha de informe de ejecución:</strong> </td>
						<td><strong>Fecha de corte de ejecución:</strong> </td>
						<td><strong></strong></td>
					</tr>
                    <tr>
						<td><strong>Código MGA producto:</strong> <?php echo $detalle_plan_accion[0]['id_mga'];?></td>
						<td colspan="2"><strong>Producto de la MGA:</strong> <?php echo $detalle_plan_accion[0]['producto_mga'];?></td>
					</tr>
                    <tr class="text-nowrap">
						<td colspan="3"><strong>Meta de producto asociada al programa:</strong> <?php echo $detalle_plan_accion[0]['meta_pdm'];?></td>
					</tr> 
                    <tr>
						<td><strong>Indicador:</strong> <?php echo $detalle_plan_accion[0]['indicador_mga'];?></td>
						<td><strong>Unidad de medida:</strong> </td>
						<td><strong></strong></td>
					</tr>
                    <tr class="text-nowrap">
						<td><strong>Línea base:</strong> <?php echo $detalle_plan_accion[0]['linea_base'];?>%</td>
						<td><strong>Meta cuatrienio:</strong> <?php echo $detalle_plan_accion[0]['meta_cuatrienio'];?>%</td>
						<td><strong>Meta vigencia:</strong> <?php echo $detalle_plan_accion[0]['meta_vigencia'];?>%</td>
					</tr> 
                    <tr class="text-nowrap">
						<td colspan="3"><strong>Escenario de Cambio:</strong> <?php echo $detalle_plan_accion[0]['escenario_cambio'];?></td>
					</tr> 
                    <tr class="text-nowrap">
						<td colspan="3"><strong>Objetivo del escenario:</strong> </td>
					</tr> 
                    <tr class="text-nowrap">
						<td colspan="3"><strong>Componente estratégico:</strong> <?php echo $detalle_plan_accion[0]['prospective'];?></td>
					</tr> 
                    <tr class="text-nowrap">
						<td colspan="3"><strong>Escenario apuesta:</strong> <?php echo $detalle_plan_accion[0]['escenario_apuesta'];?></td>
					</tr> 
                    <tr class="text-nowrap">
						<td colspan="3"><strong>Meta de Bienestar:</strong> <?php echo $detalle_plan_accion[0]['meta_bienestar'];?></td>
					</tr> 
                    <tr class="text-nowrap">
						<td colspan="3"><strong>Indicador bienestar:</strong> <?php echo $detalle_plan_accion[0]['indicador_bienestar'];?></td>
					</tr> 
                    <tr class="text-nowrap">
						<td colspan="3"><strong>Responsable:</strong> <?php echo $detalle_plan_accion[0]['secretarie'];?></td>
					</tr>                  
				</tbody>
			</table>
            <table class="mt-xl table table-bordered table-striped mb-none" id="datatable-default">
				<tbody>
					<tr class="text-nowrap">
						<td colspan="5" class="text-center">
                            <strong>ACTIVIDADES ESTRATEGICAS A DESARROLLAR PARA DAR CUMPLIMIENTO A LA META DE PRODUCTO</strong>
                        </td>                        
					</tr>
					<tr class="text-nowrap">
						<td><strong>Nº</strong></td>
						<td><strong>Actividad o estrategia</strong></td>
						<td><strong>Costo estimado</strong></td>
                        <td><strong>Cuando (mes)</strong></td>
						<td><strong>Responsable</strong></td>
					</tr>
					<?php for($i=0;$i<count($activities_plan_accion);$i++){?>
                    <tr>
						<td><?php echo $i+1;?></td>
						<td><?php echo $activities_plan_accion[$i]['description'];?></td>
						<td></td>
                        <td></td>
						<td><?php echo $detalle_plan_accion[0]['secretarie'];?></td>
					</tr>  
					<?php }?>              
				</tbody>
			</table>
            <table class="mt-xl table table-bordered table-striped mb-none" id="datatable-default">
				<tbody>
					<tr class="text-nowrap">
						<td colspan="4" class="text-center">
                            <strong>ACTIVIDAD CONTRACTUAL</strong>
                        </td>                        
					</tr>
					<tr class="text-nowrap">
						<td><strong>Nº contrato</strong></td>
						<td><strong>Valor</strong></td>
						<td><strong>Objeto del contrato</strong></td>
                        <td><strong>Contratista</strong></td>
					</tr>
                    <tr class="text-nowrap">
						<td>1</td>
						<td></td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>2</td>
						<td></td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>3</td>
						<td></td>
						<td></td>
                        <td></td>
					</tr>              
				</tbody>
			</table>
            <table class="mt-xl table table-bordered table-striped mb-none" id="datatable-default">
				<tbody>
					<tr class="text-nowrap">
						<td colspan="3" class="text-center">
                            <strong>RECURSOS FINANCIEROS (PESOS)</strong>
                        </td>
                        <td colspan="3" class="text-center">
                            <strong>FUENTES DE FINANCIACIÓN</strong>
                        </td>                        
					</tr>
					<tr class="text-nowrap text-center">
						<td><strong>Fuentes</strong></td>
						<td><strong>Programación</strong></td>
						<td><strong>Ejecución</strong></td>
                        <td><strong>Fuentes</strong></td>
                        <td><strong>Programación</strong></td>
                        <td><strong>Ejecución</strong></td>
					</tr>
                    <tr class="text-nowrap">
						<td>Cofinanciación departamento</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['cof_dept']);?></td>
						<td></td>
                        <td>Cofinanciación departamento</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>Cofinanciación Nación</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['cof_nacion']);?></td>
						<td></td>
                        <td>Cofinanciación Nación</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>Recurso crédito</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['cof_credito']);?></td>
						<td></td>
                        <td>Recurso crédito</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>Otros recursos</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['otros']);?></td>
						<td></td>
                        <td>Otros recursos</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>Recursos propios</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['rec_propios']);?></td>
						<td></td>
                        <td>Recursos propios</td>
						<td></td>
                        <td></td>
					</tr> 
                    <tr class="text-nowrap">
						<td>SGP Alimentación escolar</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['alimentacion_escolar']);?></td>
						<td></td>
                        <td>SGP Alimentación escolar</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>SGP APSB</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['apsb']);?></td>
						<td></td>
                        <td>SGP APSB</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>SGP Cultura</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['cultura']);?></td>
						<td></td>
                        <td>SGP Cultura</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>SGP Deporte</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['deporte']);?></td>
						<td></td>
                        <td>SGP Deporte</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>SGP Educación</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['educacion']);?></td>
						<td></td>
                        <td>SGP Educación</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>SGP Libre destinación</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['libre_destinacion']);?></td>
						<td></td>
                        <td>SGP Libre destinación</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>SGP Libre inversión</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['libre_inversion']);?></td>
						<td></td>
                        <td>SGP Libre inversión</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>SGP Río Magdalena</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['rio_magdalena']);?></td>
						<td></td>
                        <td>SGP Río Magdalena</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>SGP Primera infancia</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['pri_infancia']);?></td>
						<td></td>
                        <td>SGP Primera infancia</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>SGP Salud</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['salud']);?></td>
						<td></td>
                        <td>SGP Salud</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>Regalias</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['regalias']);?></td>
						<td></td>
                        <td>Regalias</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>Funcionamiento</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['funcionamiento']);?></td>
						<td></td>
                        <td>Funcionamiento</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td>Gestionados</td>
						<td class="text-right">$ <?php echo number_format($detalle_plan_accion[0]['gestionados']);?></td>
						<td></td>
                        <td>Gestionados</td>
						<td></td>
                        <td></td>
					</tr>
                    <tr class="text-nowrap">
						<td><strong>Total</strong></td>
						<td class="text-right"><strong>$ <?php echo number_format($total);?></strong></td>
						<td><strong></strong></td>
                        <td><strong>Total</strong></td>
						<td><strong></strong></td>
                        <td><strong></strong></td>
					</tr>                
				</tbody>
			</table>
            <div class="row mt-xl">
				<div class="col-md-12 text-right">
					<button class="btn btn-primary modal-confirm"> <i class="fa fa-download"></i> Descargar datos a xls</button>
                    <a class="btn btn-default" href="javascript:history.go(-1)"><i class="fa fa-reply"></i> Volver</a>
				</div>
			</div>
            <?php }?>
		</div>
	</section>
</div>
<!-- end: page -->
<?php include 'modals/modals-plan-accion.php';?>