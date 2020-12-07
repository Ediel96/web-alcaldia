<div class="row">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title"><?php if(!isset($_GET['item'])){echo 'GESTIÓN PRESUPUESTAL / PRESUPUESTO DE GASTOS / APROPIACIÓN INICIAL';}else{echo 'Meta Producto # 1.A.1.1.1';}?></h2>
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
		    		</select>	    		
		    	</div>
                <button type="button" class="mr-xs btn btn-sm btn-primary"><i class="fa fa-filter"></i> Filtrar</button>
                <button type="button" class="mr-xs btn btn-sm btn-primary"><i class="fas fa-file-export"></i></i> Exportar archivo XLS</button>
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
	                 <td class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 203px;">Tipo de Vigencia
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Browser: activate to sort column ascending" style="width: 269px;">Identificación presupuestal
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Nivel
					 </td>
	                 <td class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 203px;">Tipo
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Browser: activate to sort column ascending" style="width: 269px;">Descripción
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Fuente de Financiamiento
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Presupuesto inicial
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Sector
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Programa
					 </td>
					 <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">SubPrograma
					 </td>
                     <td class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="3" aria-label="Platform(s): activate to sort column ascending" style="width: 243px;">Acciones
	                 </td>
					</tr>
                    </thead>
                    <tbody>                     
                     <tr class="text-nowrap">
                      <td></td>
                      <td>2</td>
                      <td>1</td>
                      <td>A</td>
                      <td>GASTOS</td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                      <td></td>
                      <td></td>
                     </tr>
                     <tr class="text-nowrap">
                      <td></td>
                      <td>2.1</td>
                      <td>2</td>
                      <td>A</td>
                      <td>&nbsp;Funcionamiento</td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                      <td></td>
                      <td></td>
                     </tr>
                     <tr class="text-nowrap">
                      <td></td>
                      <td>2.1.1</td>
                      <td>3</td>
                      <td>A</td>
                      <td>&nbsp;Gastos de personal</td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                      <td></td>
                      <td></td>
                     </tr>
                     <tr class="text-nowrap">
                      <td></td>
                      <td>2.1.1.01</td>
                      <td>4</td>
                      <td>A</td>
                      <td>&nbsp;Planta de personal permanente</td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                      <td></td>
                      <td></td>
                     </tr>
                     <tr class="text-nowrap">
                      <td></td>
                      <td>2.1.1.01.01</td>
                      <td>5</td>
                      <td>A</td>
                      <td>&nbsp;Factores constitutivos de salario</td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                      <td></td>
                      <td></td>
                     </tr>
                     <tr class="text-nowrap">
                      <td></td>
                      <td>2.1.1.01.01.001</td>
                      <td>6</td>
                      <td>A</td>
                      <td>&nbsp;Factores salariales comunes</td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                      <td></td>
                      <td></td>
                     </tr>
                     <tr class="text-nowrap">
                      <td>1.Vig Act</td>
                      <td>2.1.1.01.01.001.01</td>
                      <td>7</td>
                      <td>C</td>
                      <td>&nbsp;&nbsp;Sueldo básico</td>
					  <td>1.1.01.01.014.01</td>
					  <td>$1.000.000</td>
					  <td>01</td>
					  <td>0001</td>
                      <td>0001</td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" data-toggle="modal" data-target="#Modal-Agregar" data-placement="top" title="Agregar"><i class="fa fa-plus"></i></a><a class="mb-xs mt-xs mr-xs" data-toggle="modal" data-target="#Modal-Modificar" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a><a class="mb-xs mt-xs mr-xs" data-toggle="modal" data-target="#Modal-Borrar" data-placement="top" title="Eliminar"><i class="fa fa-trash-o"></i></a></td>
                     </tr>
                     <tr class="text-nowrap">
                      <td>2.Reservas pres</td>
                      <td>2.1.1.01.01.001.02</td>
                      <td>7</td>
                      <td>C</td>
                      <td>&nbsp;&nbsp;Horas extras.dominicales.festivos y recargos...</td>
					  <td>1.1.01.01.014.02</td>
					  <td>$1.000.000</td>
					  <td>01</td>
					  <td>0001</td>
                      <td>0001</td>
                      <td class="f-2"><a class="mb-xs mt-xs mr-xs" data-toggle="modal" data-target="#Modal-Agregar" data-placement="top" title="Agregar"><i class="fa fa-plus"></i></a><a class="mb-xs mt-xs mr-xs" data-toggle="modal" data-target="#Modal-Modificar" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a><a class="mb-xs mt-xs mr-xs" data-toggle="modal" data-target="#Modal-Borrar" data-placement="top" title="Eliminar"><i class="fa fa-trash-o"></i></a></td>
                     </tr>                     					
                    </tbody>
                </table>
            </div>
			<p align=center>
			<button type="button" class="mr-xs btn btn-sm btn-primary" data-toggle="modal" data-target="#Modal-GC"><i class="fa fa-save"></i> Guardar consolidado</button>	
			</p>
			</div>
            <?php }else{?>
            <?php }?>
		</div>
	</section>
</div>
<!-- Modal 1 Agregar -->
<div class="modal fade " id="Modal-Agregar"  role="dialog" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLongTitle">2 / 1 / A / GASTOS/Presupuesto Inicial/Sueldo Básico</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="message-text" class="col-form-label">Ingresar presupuesto Inicial:</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <input type="text" class="form-control" id="inputNSS" placeholder="$">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="message-text" class="col-form-label">Sector:</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <select class="custom-select custom-select-sm">
                                                <option selected>Seleccionar</option>
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="2">03</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="message-text" class="col-form-label">Programa:</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <select class="custom-select custom-select-sm">
                                                <option selected>Seleccionar</option>
                                                <option value="1">0001</option>
                                                <option value="2">0401</option>
                                                <option value="2">0402</option>                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="message-text" class="col-form-label">Subprograma</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <select class="custom-select custom-select-sm">
                                                <option selected>Seleccionar</option>
                                                <option value="1">0001</option>
                                                <option value="2">1003</option>
                                                <option value="2">0800</option>                                                
                                            </select>
                                        </div>
                                    </div>
                                    
                                </form>
                                </div>
                                </div>
                            <div class="modal-footer">
                            	<button type="button" class="btn btn-primary"data-toggle="modal" data-target="#bd-modal1-lg" data-dismiss="modal"> Guardar <i class="fa fa-save"></i>
                            	</button>
                            </div>
                        </div>        
                    </div>   
</div>
<!-- Modal Guardar consolidado-->
<div class="modal fade" id="Modal-GC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p align=center>¡¡¡Recuerde!!!</p>
      </div>
      <div class="modal-body">
        <p align=center>Esta información solo podra ser almacenada por única vez</p>
      </div>
      <div class="modal-footer">
        <p align=center><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Modal-Guardado" data-dismiss="modal">Aceptar</button></p>
      </div>
    </div>
  </div>
</div>
<!-- Modal Guardado-->
<div class="modal fade" id="Modal-Guardado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p align=center>¡¡Datos guardados exitosamente!!</p>
      </div>
      <div class="modal-footer">
        <p align=center><button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button></p>
      </div>
    </div>
  </div>
</div>
<!-- Modal Modificar -->
<div class="modal fade " id="Modal-Modificar"  role="dialog" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLongTitle">2 / 1 / A / GASTOS/Presupuesto Inicial/Sueldo Básico</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="message-text" class="col-form-label">Ingresar presupuesto Inicial:</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <input type="text" class="form-control" id="inputNSS" placeholder="$ 1.000.000">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="message-text" class="col-form-label">Sector:</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <select class="custom-select custom-select-sm">
                                                <option selected>01</option>
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="2">03</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="message-text" class="col-form-label">Programa:</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <select class="custom-select custom-select-sm">
                                                <option selected>0001</option>
                                                <option value="1">0001</option>
                                                <option value="2">0401</option>
                                                <option value="2">0402</option>                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="message-text" class="col-form-label">Subprograma</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <select class="custom-select custom-select-sm">
                                                <option selected>0001</option>
                                                <option value="1">0001</option>
                                                <option value="2">1003</option>
                                                <option value="2">0800</option>                                                
                                            </select>
                                        </div>
                                    </div>
                                    
                                </form>
                                </div>
                                </div>
                            <div class="modal-footer">
                            	<button type="button" class="btn btn-primary"data-toggle="modal" data-target="#Modal-Editado" data-dismiss="modal"> Guardar <i class="fa fa-save"></i>
                            	</button>
                            </div>
                        </div>        
                    </div>   
</div>
<!-- Modal Editado-->
<div class="modal fade" id="Modal-Editado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p align=center>¡¡Datos editados exitosamente!!</p>
      </div>
      <div class="modal-footer">
        <p align=center><button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button></p>
      </div>
    </div>
  </div>
</div>
<!-- Modal Borrar-->
<div class="modal fade" id="Modal-Borrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p align=center>¡¡¡Alerta!!!</p>
      </div>
      <div class="modal-body">
        <p align=center>¿Desea borrar los datos del rubro presupuestal 2.1.1.01.01.001.01 ?</p>
      </div>
      <div class="modal-footer">
        <p align=center>
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Si</button>
        </p>
      </div>
    </div>
  </div>
</div>