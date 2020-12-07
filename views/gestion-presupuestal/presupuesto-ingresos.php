<div class="row">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title"><?php if(!isset($_GET['item'])){echo 'GESTIÓN PRESUPUESTAL / REPORTE ACUMULATIVO';}else{echo 'Meta Producto # 1.A.1.1.1';}?></h2>
        </header>
		<div class="panel-body">
            <?php if(!isset($_GET['item'])){?>
            <div class="form-group mt-xl">
		    	<label class="col-md-1 control-label" for="inputSuccess">Tipo de Vigencia: </label>
		    	<div class="col-md-2">
                    <select class="form-control input-sm mb-md">
		    			<option>1.Vigencia Actual</option>
		    			<option>2.Reservas presupuestales</option>
		    			<option>3.Pasivos exigibles</option>
                        <option>4.Cuentas por pagar</option>
						<option>5.Vigencias futuras</option>
						<option>6.SGR</option>
		    		</select>		    		
		    	</div>
                <button type="button" class="mr-xs btn btn-sm btn-primary"><i class="fa fa-filter"></i> Filtrar</button>
                <a class="mr-xs btn btn-sm btn-success modal-sizes" href="#filter" role="button"><i class="fa fa-filter"></i> Filtro avanzado</a>
		    </div>
            <hr>
            <div class="panel-body table-responsive">                                
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
					<tr class="text-center" role="row">
	                 <td class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 203px;">Tipo de Vigencia
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Browser: activate to sort column ascending" style="width: 269px;">Identificación Presupuestal
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Descripción
					 </td>
					 <td class="sorting_disabled" colspan="4" aria-label="Actions" style="width: 99px;">MOMENTO PRESUPUESTAL
					 </td>
					 <td class="sorting_disabled" colspan="6" aria-label="Actions" style="width: 99px;">RECAUDOS
					 </td>		
					 <td class="sorting_disabled" colspan="2" aria-label="Actions" style="width: 99px;">DESTINACIÓN
					 </td>
					 <td class="sorting_disabled" rowspan="3" aria-label="Actions" style="width: 99px;">CONSULTAS
					 </td>
					</tr>
					<tr role="row">
					 <td class="sorting_disabled" rowspan="2" colspan="1" aria-label="Actions" style="width: 99px;">PRESUPUESTO INICIAL 1
					 </td>
					 <td class="sorting_disabled" rowspan="2" colspan="1" aria-label="Actions" style="width: 99px;">ADICIONES 2
					 </td>
					 <td class="sorting_disabled" rowspan="2" colspan="1" aria-label="Actions" style="width: 99px;">REDUCCIONES 3
					 </td>
					 <td class="sorting_disabled" rowspan="2" colspan="1" aria-label="Actions" style="width: 99px;">PRESUPUESTO DEFINITIVO 4
					 </td>	   
					 <th alig="center" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 99px;">CSF
					 </th>
					 <td class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 99px;">CSF
					 </td>
					 <td class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 99px;">CSF
					 </td>
					 <td class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 99px;">CSF
					 </td>
					 <td class="sorting_disabled" rowspan="2" colspan="1" aria-label="Actions" style="width: 99px;">TOTAL RECAUDO
					 </td>
					 <td class="sorting_disabled" rowspan="2" colspan="1" aria-label="Actions" style="width: 99px;">SALDO POR RECAUDAR
					 </td>
					 <td class="sorting_disabled" rowspan="2" colspan="1" aria-label="Actions" style="width: 99px;">Libre destinación
					 </td>
					 <td class="sorting_disabled" rowspan="2" colspan="1" aria-label="Actions" style="width: 99px;">Destinación específica
					 </td>	
					</tr>
					<tr role="row">
					 <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 99px;">VIG. ACTUAL
					 </th>
					 <td class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 99px;"> VIG. ANTERIOR
					 </td>
					 <td class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 99px;">VIG. ACTUAL
					 </td>
					 <td class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 99px;">VIG. ANTERIOR
					 </td>
					 </tr>
                    </thead>
                    <tbody>
                     <tr class="text-nowrap">
                      <td></td>
                      <td>1.</td>
                      <td>Ingresos</td>
                      <td>$</td>
                      <td>$</td>
					  <td>$</td>
					  <td>$</td>
				      <td>$</td>
					  <td>$</td>
                      <td>$</td>
				      <td>$</td>
					  <td>$</td>
					  <td>$</td>
				      <td>$</td>
					  <td>$</td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-presupuestal/presupuesto-ingresos" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                     </tr>
                     <tr class="text-nowrap">
					  <td></td>
                      <td>1.0</td>
                      <td>Disponibilidad inicial</td>
                      <td>$</td>
                      <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
				      <td>$</td>
                      <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-presupuestal/presupuesto-ingresos" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                     </tr>
                     <tr class="text-nowrap">
					  <td>Vigencia actual</td>
                      <td>1.0.01</td>
                      <td>Caja</td>
                      <td>$</td>
                      <td>$</td>
					  <td>$</td>
				      <td>$</td>
					  <td>$</td>
					  <td>$</td>
                      <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
				      <td>$</td>
					  <td>$</td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-presupuestal/presupuesto-ingresos" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                     </tr>
                     <tr class="text-nowrap">
					  <td>SGR</td>
                      <td>1.0.02</td>
                      <td>Bancos</td>
                      <td>$</td>
                      <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
                      <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-presupuestal/presupuesto-ingresos" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                     </tr>
                     <tr class="text-nowrap">
					  <td>Pagos exigibles</td>
                      <td>1.0.03</td>
                      <td>Inversiones temporales</td>
                      <td>$</td>
                      <td>$</td>
					  <td>$</td>
					  <td>$</td>
				      <td>$</td>
					  <td>$</td>
                      <td>$</td>
					  <td>$</td>
				      <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-presupuestal/presupuesto-ingresos" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                     </tr>
					 <tr class="text-nowrap">
					  <td></td>
                      <td>1.1</td>
                      <td>inversiones temporales</td>
                      <td>$</td>
                      <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
                      <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-presupuestal/presupuesto-ingresos" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                     </tr>
                     <tr class="text-nowrap">
					  <td></td>
                      <td>1.1.01</td>
                      <td>Ingresos corrientes</td>
                      <td>$</td>
                      <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
                      <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
					  <td>$</td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-presupuestal/presupuesto-ingresos" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                     </tr>						
                    </tbody>
                </table>
            </div>
			<button type="button" class="mr-xs btn btn-sm btn-primary"><i class="fas fa-file-export"></i></i> Exportar archivo XLS</button>
			<button type="button" class="mr-xs btn btn-sm btn-primary"><i class="fa fa-print"></i> Imprimir</button>
            <?php }else{?>
            <?php }?>
		</div>
	</section>
</div>