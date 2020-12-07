<div class="row">
	<div class="col-md-12">
		<div class="tabs tabs-primary">
			<ul class="nav nav-tabs nav-justified">
				<li class="active">
					<a href="#informacion-general" data-toggle="tab" class="text-center">Información general</a>
				</li>
				<li>
					<a href="#plan-anual" data-toggle="tab" class="text-center">Plan anual de adquisiciones</a>
				</li>
                <li>
					<a href="#adquisiciones-planeadas" data-toggle="tab" class="text-center">Adquisiciones planeadas</a>
				</li>
			</ul>
			<div class="tab-content">
				<div id="informacion-general" class="tab-pane active table-responsive">
                    <table class="mt-xl table table-bordered table-striped mb-none" id="datatable-default">
                        <tbody>
                            <tr>
                                <td><strong><?php echo $data[0]['nombre'];?></strong></td>
                            </tr>
                            <tr>
                                <td><strong>Dirección:</strong> <?php echo $data[0]['direccion'];?></td>
                            </tr>
                            <tr>
                                <td><strong>Teléfonos:</strong> <?php echo $data[0]['telefono'];?></td>
                            </tr>
                            <tr>
                                <td><strong>Página Web:</strong> <?php echo $data[0]['web'];?></td>
                            </tr>
                            <tr>
                                <td><strong>Misión: </strong> <?php echo $data[0]['mision'];?></td>
                            </tr>
                            <tr>
                                <td><strong>Visión: </strong> <?php echo $data[0]['vision'];?>​</td>
                            </tr>
                            <tr>
                                <td><strong>Perspectiva estratégica:</strong> <?php echo $data[0]['perspectiva_estrategica'];?></td>
                            </tr>
                            <tr>
                                <td><strong>Información de contacto:</strong> <?php echo $data[0]['contacto'];?></td>
                            </tr>
                            <tr>
                                <td><strong>Valor total del PAA:</strong> <?php echo $data[0]['valor_paa'];?></td>
                            </tr>
                            <tr>
                                <td><strong>Límite de contratación menor cuantía:</strong> <?php echo $data[0]['limite_contratacion_menor_cuantia'];?></td>
                            </tr>
                            <tr>
                                <td><strong>Límite de contratación mínima cuantía:</strong> <?php echo $data[0]['limite_contratacion_minima_cuantia'];?></td>
                            </tr>
                            <tr>
                                <td><strong>Fecha de última actualización del PAA:</strong>  <?php echo $data[0]['fecha_ultima_actualizacion_del_paa'];?></td>
                            </tr>                    
                        </tbody>
                    </table>
				</div>
				<div id="plan-anual" class="tab-pane">
                    <table class="mt-xl table table-bordered table-striped mb-none" id="datatable-default">
                        <tbody>
                            <tr>
                                <td><?php echo $data[0]['descripcion'];?></td>
                            </tr>
                            <tr>
                                <td><?php echo $data[0]['objetivo'];?></td>
                            </tr>                                               
                        </tbody>
                    </table>
				</div>
                <div id="adquisiciones-planeadas" class="tab-pane table-responsive">
                    <table class="mt-xl mb-xl table table-bordered table-striped mb-none" id="datatable-default">
                        <thead>
                            <tr class="text-nowrap">
                                <th>Estado</th>
                                <th>MP</th>
                                <th>Códigos UNSPSC</th>
                                <th>Descripción</th>
                                <th>Fecha estimada de inicio de proceso de selección</th>
                                <th>Duración estimada del contrato</th>
                                <!--<th>Modalidad de selección</th>
                                <th>Fuente de los recursos</th>-->
                                <th>Valor total estimado</th>
                                <th>¿Se requieren vigencias futuras?</th>
                                <th>Valor estimado en la vigencia actual</th>
                                <th>Estado de solicitud de vigencias futuras</th>
                                <th>Datos del responsable</th>
                                <th>Usuario aprobador</th>
                                <th>Hora y fecha</th>
                                <th class="no-sort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=0;$i<count($data_plan_anual);$i++){?>
                            <tr class="text-nowrap">
                                <td><button type="button" class="mb-xs mt-xs mr-xs btn btn-xs btn-danger">Actualizar</button></td>
                                <td><?php echo $data_plan_anual[$i]['cod_mp'];?></td>
                                <td><?php echo $data_plan_anual[$i]['unspsc'];?></td>
                                <td><?php echo $data_plan_anual[$i]['descripcion'];?></td>
                                <td><?php echo $data_plan_anual[$i]['fecha_estimada_inicio'];?></td>
                                <td><?php echo $data_plan_anual[$i]['duracion_contrato'];?></td>
                                <!--<td></td>
                                <td></td>-->
                                <td></td>
                                <td><?php echo $data_plan_anual[$i]['vigencias_futuras'];?></td>
                                <td></td>
                                <td><?php echo $data_plan_anual[$i]['estado_solicitud'];?></td>
                                <td><?php echo $data_plan_anual[$i]['responsable'];?></td>
                                <td></td>
                                <td><?php echo $data_plan_anual[$i]['date_creation'];?></td>
                                <td class="f-2"><a class="mb-xs mt-xs mr-xs modal-sizes" href="#actualizar" data-toggle="tooltip" data-placement="top" title="Actualizar plan"><i class="fa fa-pencil-square-o"></i></a></td>
                            </tr>  
                            <?php }?>                   
                        </tbody>
                    </table>
                    <a class="mt-xl mr-xs btn btn-sm btn-primary" style="margin-bottom: 1rem;" href="#activities" role="button"><i class="fa fa-download"></i> Descargar reporte xls</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end: page -->
<?php include 'modals/modals-plan-anual-adquisiciones.php';?>