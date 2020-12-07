<div class="row">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title"><?php if(!isset($_GET['item'])){echo 'SOLICITUD DE CERTIFICADO DE DISPONIBILIDAD PRESUPUESTAL';}else{echo 'Meta Producto # 1.A.1.1.1';}?></h2>
        </header>
		<div class="panel-body">
            <?php if(!isset($_GET['item'])){?>
            <div class="form-group mt-xl">
                <p align=right><button type="button" class=" btn btn-primary" data-toggle="modal" data-target="#modal-solicitud-cdp"><i class="fa fa-plus"></i> Solicitar</button></p>
		    </div>
            <hr>
            <div class="panel-body table-responsive">
            	<div id="datatable-default_filter" class="dataTables_filter">
            		<label><input type="search" class="form-control" placeholder="Search" aria-controls="datatable-default">
            		</label>
            	</div>
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
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="" data-toggle="tooltip" data-placement="top" title="Agregar"><i class="fa fa-plus"></i></a><a class="mb-xs mt-xs mr-xs modal-sizes" href="" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a><a class="mb-xs mt-xs mr-xs modal-sizes" href="" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fa fa-trash-o"></i></a></td>
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
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="" data-toggle="tooltip" data-placement="top" title="Agregar"><i class="fa fa-plus"></i></a><a class="mb-xs mt-xs mr-xs modal-sizes" href="" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a><a class="mb-xs mt-xs mr-xs modal-sizes" href="" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fa fa-trash-o"></i></a></td>
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
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="" data-toggle="tooltip" data-placement="top" title="Agregar"><i class="fa fa-plus"></i></a><a class="mb-xs mt-xs mr-xs modal-sizes" href="" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a><a class="mb-xs mt-xs mr-xs modal-sizes" href="" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fa fa-trash-o"></i></a></td>
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
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" href="" data-toggle="tooltip" data-placement="top" title="Agregar"><i class="fa fa-plus"></i></a><a class="mb-xs mt-xs mr-xs modal-sizes" href="" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a><a class="mb-xs mt-xs mr-xs modal-sizes" href="" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fa fa-trash-o"></i></a></td>
                     </tr>                     					
                    </tbody>
                </table>
            </div>
            <hr>
			<p align=right><button type="button" class="mr-xs btn btn-sm btn-primary"><i class="fa fa-print"></i> Imprimir</button></p>
            <?php }else{?>
            <?php }?>
		</div>
	</section>
</div>
<!-- Modal 1 Agregar -->
<div class="modal fade " id="modal-solicitud-cdp"  role="dialog" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLongTitle">Agregar solicitud CDP</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputV">Vigencia:</label>
                                            <label for="recipient-name" class="col-form-label">2020</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="message-text" class="col-form-label">Tipo de disponibilidad: </label>
                                        <select class="custom-select custom-select-sm">
                                                <option selected>Seleccionar</option>
                                                <option value="1">Contrato de prestación de servicio</option>
                                                <option value="2">Contrato de arrendamiento</option>
                                                <option value="3">Contrato de Suministro</option>
                                                <option value="4">Serivicios públicos</option>
                                                <option value="5">Contrato de obra o consultoria</option>
                                                <option value="6">Nomina</option>
                                                <option value="6">Transferencias</option>
                                                <option value="6">Pagos varios</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputM">Unidad ejecutora :</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="recipient-name" class="col-form-label">Alcaldía</label>
                                        </div>
                                    </div>
<div class="col-sm-9">
        Level 1: .col-sm-9
        <div class="row">
          <div class="col-8 col-sm-6">
            Level 2: .col-8 .col-sm-6
          </div>
          <div class="col-4 col-sm-6">
            Level 2: .col-4 .col-sm-6
          </div>
        </div>
</div>                                    
                                </form>
                                </div>
							</div>	
						</div>
					</div>
</div>					