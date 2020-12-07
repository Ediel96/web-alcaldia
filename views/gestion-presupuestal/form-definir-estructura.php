<div class="row">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title"><?php if(!isset($_GET['item'])){echo 'GESTIÓN PRESUPUESTAL / DEFINIR ESTRUCTURA';}else{echo 'Meta Producto # 1.A.1.1.1';}?></h2>
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
		    		</select>	    		
		    	</div>
			    <label class="col-md-1 control-label" for="inputSuccess">Tipo: </label>
		    	<div class="col-md-2">
                    <select class="form-control input-sm mb-md">
		    			<option>A</option>
		    			<option>C</option>
		    		</select>	    		
		    	</div>
                <label class="col-md-1 control-label" for="inputSuccess">Nivel: </label>
		    	<div class="col-md-2">
                    <select class="form-control input-sm mb-md">
		    			<option>1</option>
		    			<option>2</option>
		    			<option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
		    		</select>	    		
		    	</div>
                <button type="button" class="mr-xs btn btn-sm btn-primary"><i class="fa fa-filter"></i> Filtrar</button>
                <button type="button" class="mr-xs btn btn-sm btn-primary"><i class="fas fa-file-download"></i></i> Exportar archivo XLS</button>
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
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Nivel
					 </td>
	                 <td class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 203px;">Tipo
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Browser: activate to sort column ascending" style="width: 269px;">Descripción
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Equivalente POAI
					 </td>					 
                     <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">ICLD
	                 </td>
                     <td class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 203px;">%ICLD
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Browser: activate to sort column ascending" style="width: 269px;">Sector destinación 1
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">% Destinación específica
					</td>
                    <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Browser: activate to sort column ascending" style="width: 269px;">Sector destinación 2
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Tipo acto administrativo destinación
					 </td>					 
                     <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Acto administrativo destinación
	                 </td>
                     <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Consultas
	                 </td>
					</tr>
                    </thead>
                    <tbody>
                     <tr class="text-nowrap">
                      <td></td>
                      <td>1</td>
                      <td>1</td>
                      <td>A</td>
                      <td>Ingresos</td>
					  <td></td>
					  <td></td>
				      <td></td>
					  <td></td>
                      <td></td>
				      <td></td>
					  <td></td>
					  <td></td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-presupuestal/presupuesto-ingresos" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                     </tr>
                     <tr class="text-nowrap">
                      <td></td>
                      <td>1.0</td>
                      <td>2</td>
                      <td>A</td>
                      <td>Disponibilidad inicial</td>
					  <td></td>
					  <td></td>
				      <td></td>
					  <td></td>
                      <td></td>
				      <td></td>
					  <td></td>
					  <td></td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-presupuestal/presupuesto-ingresos" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                     </tr>
                     <tr class="text-nowrap">
                      <td></td>
                      <td>1.0.01</td>
                      <td>3</td>
                      <td>c</td>
                      <td>Caja</td>
					  <td></td>
					  <td></td>
				      <td></td>
					  <td></td>
                      <td></td>
				      <td></td>
					  <td></td>
					  <td></td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-presupuestal/presupuesto-ingresos" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                     </tr>
                     <tr class="text-nowrap">
                      <td></td>
                      <td>1.0.02</td>
                      <td>3</td>
                      <td>C</td>
                      <td>Bancos</td>
					  <td></td>
					  <td></td>
				      <td></td>
					  <td></td>
                      <td></td>
				      <td></td>
					  <td></td>
					  <td></td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-presupuestal/presupuesto-ingresos" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                     </tr>
                     <tr class="text-nowrap">
                      <td></td>
                      <td>1.0.03</td>
                      <td>3</td>
                      <td>c</td>
                      <td>Inversiones temporales</td>
					  <td></td>
					  <td></td>
				      <td></td>
					  <td></td>
                      <td></td>
				      <td></td>
					  <td></td>
					  <td></td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-presupuestal/presupuesto-ingresos" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                     </tr>
                     <tr class="text-nowrap">
                      <td></td>
                      <td>1.1</td>
                      <td>2</td>
                      <td>A</td>
                      <td>Ingresos Corrientes</td>
					  <td></td>
					  <td></td>
				      <td></td>
					  <td></td>
                      <td></td>
				      <td></td>
					  <td></td>
					  <td></td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-presupuestal/presupuesto-ingresos" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                     </tr><tr class="text-nowrap">
                      <td></td>
                      <td>1.1.01</td>
                      <td>3</td>
                      <td>A</td>
                      <td>Ingresos tributarios</td>
					  <td></td>
					  <td></td>
				      <td></td>
					  <td></td>
                      <td></td>
				      <td></td>
					  <td></td>
					  <td></td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-presupuestal/presupuesto-ingresos" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                     </tr>
                     <tr class="text-nowrap">
                      <td></td>
                      <td>1.1.01.01</td>
                      <td>4</td>
                      <td>A</td>
                      <td>Impuestos directos</td>
					  <td></td>
					  <td></td>
				      <td></td>
					  <td></td>
                      <td></td>
				      <td></td>
					  <td></td>
					  <td></td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-presupuestal/presupuesto-ingresos" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                     </tr>
                     <tr class="text-nowrap">
                      <td></td>
                      <td>1.1.01.014</td>
                      <td>5</td>
                      <td>A</td>
                      <td>Sobre tasa ambiental - Corporaciones</td>
					  <td></td>
					  <td></td>
				      <td></td>
					  <td></td>
                      <td></td>
				      <td></td>
					  <td></td>
					  <td></td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="<?php echo $host;?>gestion-presupuestal/presupuesto-ingresos" data-toggle="tooltip" data-placement="top" title="Ver proyecto en detalle"><i class="fa fa-eye"></i></a> <a class="mb-xs mt-xs mr-xs modal-sizes" href="#activities-poai" data-toggle="tooltip" data-placement="top" title="Ver listado de actividades"><i class="fa fa-file-text"></i></a></td>
                     </tr>						
                    </tbody>
                </table>
            </div>
			<button type="button" class="mr-xs btn btn-sm btn-primary"><i class="fa fa-save"></i> Guardar Consolidado</button>
            <?php }else{?>
            <?php }?>
		</div>
	</section>
</div>