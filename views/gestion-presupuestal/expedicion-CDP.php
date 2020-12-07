<div class="row">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title"><?php if(!isset($_GET['item'])){echo 'DISPONIBILIDADES AUTORIZADAS';}else{echo 'Meta Producto # 1.A.1.1.1';}?></h2>
        </header>
		<div class="panel-body">
            <?php if(!isset($_GET['item'])){?>
            
            <div class="panel-body table-responsive">
            	<div id="datatable-default_filter" class="dataTables_filter">
            		<label><input type="search" class="form-control" placeholder="Search" aria-controls="datatable-default">
            		</label>
            	</div>
            	<hr>
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
					<tr class="text-center" role="row">
	                 <td class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 203px;">Estado
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Browser: activate to sort column ascending" style="width: 269px;">Número de 
					 solicitud
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Fecha de 
					 expedición
					 </td>
	                 <td class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 203px;">Vigencia
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Browser: activate to sort column ascending" style="width: 269px;">Unidad Ejecutora
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Tipo de 
					 Disponibilidad
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Nit Beneficiario
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Nombre
					 Beneficiario
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Objeto
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Solicitante
					 </td>
                     <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Acciones
	                 </td>
					</tr>
                    </thead>
                    <tbody>                     
                     <tr class="text-nowrap">
                      <td>Autorizado</td>
                      <td>01</td>
                      <td>17/10/2020</td>
                      <td>2020</td>
                      <td>Alcaldía</td>
					  <td>Contrato por
					  prestación de servicios</td>
					  <td>899999990</td>
					  <td>Alcaldía Sopó</td>
					  <td>Lograr que las Instituciones...</td>
                      <td>Talento Humano</td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="" data-toggle="tooltip" data-placement="top" title="Agregar"><i class="fa fa-eye"></i></a><a class="mb-xs mt-xs mr-xs modal-sizes" href="" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil"></i></a></td>
                     </tr>
                     <tr class="text-nowrap">
                      <td>Autorizado</td>
                      <td>02</td>
                      <td>17/10/2020</td>
                      <td>2020</td>
                      <td>Alcaldía</td>
					  <td>Contrato por
					  prestación de servicios</td>
					  <td>899999990</td>
					  <td>Alcaldía Sopó</td>
					  <td>Lograr que las Instituciones...</td>
                      <td>Talento Humano</td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="" data-toggle="tooltip" data-placement="top" title="Agregar"><i class="fa fa-eye"></i></a><a class="mb-xs mt-xs mr-xs modal-sizes" href="" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil"></i></a></td>
                     </tr>
                     <tr class="text-nowrap">
                      <td>Autorizado</td>
                      <td>03</td>
                      <td>17/10/2020</td>
                      <td>2020</td>
                      <td>Alcaldía</td>
					  <td>Contrato por
					  prestación de servicios</td>
					  <td>899999990</td>
					  <td>Alcaldía Sopó</td>
					  <td>Lograr que las Instituciones...</td>
                      <td>Talento Humano</td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="" data-toggle="tooltip" data-placement="top" title="Agregar"><i class="fa fa-eye"></i></a><a class="mb-xs mt-xs mr-xs modal-sizes" href="" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil"></i></a></td>
                     </tr>
                     <tr class="text-nowrap">
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
                    </tbody>
                </table>
            </div>
            <?php }else{?>
            <?php }?>
		</div>
	</section>
</div>