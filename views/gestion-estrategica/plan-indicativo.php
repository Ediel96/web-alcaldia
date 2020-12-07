<!-- start: page -->
<div class="row">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Plan indicativo 2020-2023</h2>
        </header>
		<div class="panel-body">
            <div class="form-group mt-xl">
		    	<label class="col-md-1 control-label" for="inputSuccess">Año</label>
		    	<div class="col-md-3">
                    <select class="form-control input-sm mb-md">
		    			<option>2020</option>
		    			<option>2021</option>
		    			<option>2022</option>
                        <option>2023</option>
		    		</select>		    		
		    	</div>
                <button type="button" class="mr-xs btn btn-sm btn-primary">Consultar</button>
		    </div>
            <hr>            
            <div class="col-md-12 text-right">
                <a class="mb-xs mt-xs mr-xs modal-sizes btn btn-success" href="#new-plan"><i class="fa fa-plus"></i> Agregar plan</a>
            </div>
            <div class="panel-body table-responsive">                                
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                        <tr class="text-nowrap">
                            <th class="no-sort"></th>
                            <th>MP</th>
                            <th>Escenario de Cambio</th>
                            <th>Prospectiva</th>
                            <th>Escenario de apuesta</th>
                            <th>Código FUT</th>
                            <th>Sector (Manual de clasificación)</th>
                            <th>Código Sector</th>
                            <th>Meta de Bienestar</th>
                            <th>Indicador Bienestar priorizado ( medible)</th>
                            <th>Código BPIN</th>
                            <th>Programa  presupuestal   (Campo de alfanumérico)</th>
                            <th>Código del Programa Presupuestal</th>
                            <th>Indicador Producto PDM</th>
                            <th>ID Producto MGA</th>
                            <th>Producto MGA</th>
                            <th>Código del indicador MGA</th>
                            <th>Indicador del producto MGA</th>
                            <th>Meta de Producto PDM</th>
                            <th>Línea Base Producto</th>
                            <th>Meta Producto Cuatrienio</th>
                            <th>Orientación de la meta de producto  (Campo de texto)</th>
                            <th>Responsable</th>
                            <th>Valor Esperado</th>
                            <th>Valor Ejecutado </th>
                            <th>Prog Cof Dpto</th>
                            <th>Prog Cof Nación</th>
                            <th>Prog Crédito</th>
                            <th>Prog Otros</th>
                            <th>Prog Recursos Propios</th>
                            <th>Prog SGP ( Sistema General de participaciones) Alim Escolar</th>
                            <th>Prog SGP APSB</th>
                            <th>Prog SGP Cultura</th>
                            <th>Prog SGP Deporte</th>
                            <th>Prog SGP Educación</th>
                            <th>Prog SGP Libre Dest</th>
                            <th>Prog SGP Libre Inv</th>
                            <th>Prog SGP Rio Magdalena</th>
                            <th>Prog SGP Primer Infancia</th>
                            <th>Prog SGP Salud</th>
                            <th>Prog Regalías</th>
                            <th>Prog funcionamiento</th>
                            <th>Prog Gestionados</th>
                            <th>Prog Total</th>
                            <th>Ejec Cof Dpto</th>
                            <th>Ejec Cof Nación</th>
                            <th>Ejec Crédito</th>
                            <th>Ejec Otros</th>
                            <th>Ejec Recursos Propios</th>
                            <th>Ejec SGP Alim Escolar</th>
                            <th>Ejec SGP APSB</th>
                            <th>Ejec SGP Cultura</th>
                            <th>Ejec SGP Deporte</th>
                            <th>Ejec SGP Educación</th>
                            <th>Ejec SGP Libre Dest</th>
                            <th>Ejec SGP Libre Inv</th>
                            <th>Ejec SGP Rio Magdalena</th>
                            <th>Ejec SGP Primera Infancia</th>
                            <th>Ejec SGP Salud</th>
                            <th>Ejec Regalías</th>
                            <th>Ejec Funcionamiento</th>
                            <th>Ejec Gestionados</th>
                            <th>Ejec Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0;$i<count($data_plan_indicativo);$i++){?>
                        <tr class="text-nowrap">
                            <td><a class="mb-xs mt-xs mr-xs modal-sizes" href="#view-plan"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#edit-plan"><i class="fa fa-pencil"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#modal-delete"><i class="fa fa-trash-o"></i></a></td>
                            <td><?php echo $data_plan_indicativo[$i]['cod_mp'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['escenario_cambio'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['prospective'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['escenario_apuesta'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['code_fut'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['sector'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['cod_sector'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['meta_bienestar'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['indicador_bienestar'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['bpin'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['programa_presupuestal'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['cod_program_presupuestal'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['pdm_indicator'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['id_mga'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['producto_mga'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['cod_ind_mga'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['indicador_mga'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['meta_pdm'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['linea_base'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['meta_cuatrienio'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['meta_vigencia'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['secretarie'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['valor_esperado'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['valor_ejecutado'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['cof_dept'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['cof_nacion'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['cof_credito'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['cof_otros'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['rec_propios'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['alimentacion_escolar'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['apsb'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['cultura'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['deporte'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['educacion'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['libre_destinacion'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['libre_inversion'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['rio_magdalena'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['pri_infancia'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['salud'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['regalias'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['funcionamiento'];?></td>
                            <td><?php echo $data_plan_indicativo[$i]['gestionados'];?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php }?>                  
                    </tbody>
                </table>
            </div>
		</div>
	</section>
</div>
<!-- end: page -->
<?php include 'modals/modals-plan-indicativo.php';?>