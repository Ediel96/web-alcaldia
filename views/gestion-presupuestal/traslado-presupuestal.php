<div class="row">
    <section class="panel">
        <header class="panel-heading">
            <div align='center'>
                <h2 class="panel-title">TRASLADO PRESUPUESTAL</h2>
            </div>
        </header>
        <div class="panel-body">
        <button type="button" class=" btn btn-primary" data-toggle="modal" data-target="#bd-modal-lg">
            <i class="fa fa-plus"></i>
            Agregar</button>
            <!-- Modal 1 Agregar -->
            <div class="modal fade " id="bd-modal-lg"  role="dialog" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLongTitle">Agregar Traslado</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputV">Vigencia:</label>
                                            <label for="recipient-name" class="col-form-label">2020</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Unidad ejecutora:</label>
                                        <label for="message-text" class="col-form-label">Personeria</label>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputM">Número de modificación:</label>
                                            <label for="recipient-name" class="col-form-label">1</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label for="message-text" class="col-form-label">Fecha de registro:</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="container">
                                            <div class="row">
                                                <div class='col-md-4'>
                                                    <div class='input-group date' id='datetimepicker1'>
                                                        <input type='date' class="form-control" />
                                                    </div>
                                                </div>
                                                <script type="text/javascript">
                                                    $(function() {
                                                        $('#datetimepicker1').datetimepicker();
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Tipo de documento soporte:</label>
                                        <div class="btn-group ">
                                            <select class="custom-select custom-select-sm">
                                                <option selected>Seleccionar</option>
                                                <option value="1">Lista</option>
                                                <option value="2">Acuerdo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label for="message-text" class="col-form-label">Fecha de expedición:</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="container">
                                            <div class="row">
                                                <div class='col-md-4'>
                                                    <div class='input-group date' id='datetimepicker1'>
                                                        <input type='date' class="form-control" />
                                                    </div>
                                                </div>
                                                <script type="text/javascript">
                                                    $(function() {
                                                        $('#datetimepicker1').datetimepicker();
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="message-text" class="col-form-label">Número de soporte:</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <input type="text" class="form-control" id="inputNSS" placeholder="Número de soporte">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="message-text" class="col-form-label">Descripción:</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <textarea class="form-control" id="Descripción" rows="3"></textarea>
                                        </div>
                                    </div>
                                     <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body"></div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-body">CONTRACRÉDITOS(-)</div>
                                    </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Código:</label>
                                        <div class="btn-group ">
                                            <select class="custom-select custom-select-sm">
                                                <option selected>Seleccionar</option>
                                                <option value="1">2.1.1.01./Sueldo basi</option>
                                                <option value="2">2.1.1.02./Sueldo basi</option>
                                            </select>
                                        </div>
                                    </div>                                
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputF">Fuente:</label>
                                            <label for="recipient-name" class="col-form-label">1.0.01 Caja</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Nombre rubro:</label>
                                        <label for="message-text" class="col-form-label">2.1.1.01./Sueldo Básico</label>
                                    </div>
                                    <div class="form-group col-md-12">                                                                            
                                    </div>                                                                                                 
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputSE">Sector:</label>
                                            <label for="recipient-name" class="col-form-label">Información estadistica</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputPg">Programa:</label>
                                            <label for="recipient-name" class="col-form-label">Levantamiento y actua.. </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputSPg">Subprograma:</label>
                                            <label for="recipient-name" class="col-form-label">Planificación y esta...</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="message-text" class="col-form-label">Valor reducción Gasto:</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="inputVAG" placeholder="Valor adición Gasto">
                                        </div>
                                    </div>

                                    <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body"></div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-body">CRÉDITOS(+)</div>
                                    </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Código:</label>
                                        <div class="btn-group ">
                                            <select class="custom-select custom-select-sm">
                                                <option selected>Seleccionar</option>
                                                <option value="1">2.1.1.01./Sueldo basi</option>
                                                <option value="2">2.1.1.02./Sueldo basi</option>
                                            </select>
                                        </div>
                                    </div>                                
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputF">Fuente:</label>
                                            <label for="recipient-name" class="col-form-label">1.0.01 Caja</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Nombre rubro:</label>
                                        <label for="message-text" class="col-form-label">2.1.1.01./Sueldo Básico</label>
                                    </div>
                                    <div class="form-group col-md-12">                                                                            
                                    </div>                                                                                                 
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputSE">Sector:</label>
                                            <label for="recipient-name" class="col-form-label">Información estadistica</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputPg">Programa:</label>
                                            <label for="recipient-name" class="col-form-label">Levantamiento y actua.. </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputSPg">Subprograma:</label>
                                            <label for="recipient-name" class="col-form-label">Planificación y esta...</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="message-text" class="col-form-label">Valor reducción Gasto:</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="inputVAG" placeholder="Valor adición Gasto">
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>                                                                                   
                        <div class="modal-footer">
                                <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#bd-modal2-lg">
                                   <i class="fa fa-save"></i>
                                    Grabar</button>
                                <!-- Modal 2 Save-->
                                 <div class="modal fade " id="bd-modal2-lg"  role="dialog" >
                                 <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                 <div class="modal-header">
                                 <div align='left'>                    
                                 <h5 class="modal-title" id="ModalLongTitle">Información detallada Tralados</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <div align='left'>
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputVI">Vigencia:</label>
                                            <label for="recipient-name" class="col-form-label">2020</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Unidad ejecutora:</label>
                                        <label for="message-text" class="col-form-label">Personeria</label>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputMI">Número de modificación:</label>
                                            <label for="recipient-name" class="col-form-label">1</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Fecha de registro:</label>
                                            <label for="recipient-name" class="col-form-label">18/10/2020</label>
                                        </div>
                                    </div>                                    
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Tipo de documento soporte:</label>
                                        <label for="recipient-name" class="col-form-label">Acuerdo</label>                                        
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Fecha de expedición:</label>
                                            <label for="recipient-name" class="col-form-label">18/10/2020</label>
                                        </div>
                                    </div>                                   
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="message-text" class="col-form-label">Número de soporte:</label>
                                            <label for="recipient-name" class="col-form-label">01</label>
                                        </div>
                                    </div>                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="message-text" class="col-form-label">Descripción:</label>
                                            <label for="recipient-name" class="col-form-label">Justificación de la Descripción</label>
                                        </div>
                                    </div>                                   
                                     <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body"></div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-body">CONTRACRÉDITOS(-)</div>
                                    </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Código:</label>
                                        <label for="message-text" class="col-form-label">2.1.1.01./Sueldo básico/1.0.01</label>
                                    </div>                                
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputFI">Fuente:</label>
                                            <label for="recipient-name" class="col-form-label">1.0.01 Caja</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Nombre rubro:</label>
                                        <label for="message-text" class="col-form-label">2.1.1.01./Sueldo Básico</label>
                                    </div>
                                    <div class="form-group col-md-12">                                                                            
                                    </div>                                                                                                 
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputSIE">Sector:</label>
                                            <label for="recipient-name" class="col-form-label">Información estadistica</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputPIg">Programa:</label>
                                            <label for="recipient-name" class="col-form-label">Levantamiento y actua.. </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputSIPg">Subprograma:</label>
                                            <label for="recipient-name" class="col-form-label">Planificación y esta...</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputISPg">Valor adición Gasto:</label>
                                            <label for="recipient-name" class="col-form-label">$ 0.000.000</label>
                                        </div>
                                    </div>                          
                                    <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body"></div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-body">CRÉDITOS(+)</div>
                                    </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Código:</label>
                                        <label for="message-text" class="col-form-label">2.1.1.01./Sueldo básico/1.0.01</label>
                                    </div>                                
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputIF">Fuente:</label>
                                            <label for="recipient-name" class="col-form-label">1.0.01 Caja</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Nombre rubro:</label>
                                        <label for="message-text" class="col-form-label">2.1.1.01./Sueldo Básico</label>
                                    </div>
                                    <div class="form-group col-md-12">                                                                            
                                    </div>                                                                                                 
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputISE">Sector:</label>
                                            <label for="recipient-name" class="col-form-label">Información estadistica</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputIPg">Programa:</label>
                                            <label for="recipient-name" class="col-form-label">Levantamiento y actua.. </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputISPg">Subprograma:</label>
                                            <label for="recipient-name" class="col-form-label">Planificación y esta...</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputIADG">Valor adición Gasto:</label>
                                            <label for="recipient-name" class="col-form-label">$ 0.000.000</label>
                                        </div>
                                    </div>   
                                </form>
                                </div>                            
                            </div>                            
                                <div class="modal-footer">
                                <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#bd-modal2-lg">
                                   <i class="fa fa-print"> </i>
                                    Imprimir</button>
                                    <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#bd-modal2-lg">                                                                                                   
                                    <a href="https://pruebas.appalcaldia.website/gestion-presupuestal/traslado-presupuestal">Cerrar</a>
                                    <i class="fa fa-remove"> </i>   
                                    </button>
                                    
                                    </div>       
                            </div>
                    </div>
             </div>
          </div>
        </div>
     </div>
  </div>
</div>
</div>        
             
        <div class="table-responsive">
            <div class="panel-body table-responsive">
                <div align='center'>
                    <h2 class="panel-title">PRESUPUESTO DE INGRESOS</h2>
                    <h2> </h2>
                </div>
                <table class="table table-bordered table-striped mb-none datatable-default">
                    <thead>
                        <tr class="text-nowrap">
                            <th>Vigencia</th>
                            <th>Número de modificaciones</th>
                            <th>Fecha de registro</th>
                            <th>Fecha de expedición</th>
                            <th>Tipo de Documentos Soporte</th>
                            <th>Número del Soporte</th>
                            <th>Descripción</th>
                            <th>Unidad Ejecutora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6">TOTAL ADICIÓN INGRESOS</td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td colspan="2">$</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="table-responsive">
            <div class="panel-body table-responsive">
                <div align='center'>
                    <h2 class="panel-title">PRESUPUESTO DE GASTOS</h2>
                    <h2> </h2>
                </div>
                <table class="table table-bordered table-striped mb-none datatable-default">
                    <thead>
                        <tr class="text-nowrap">
                            <th>Vigencia</th>
                            <th>Número de modificaciones</th>
                            <th>Fecha de registro</th>
                            <th>Fecha de expedición</th>
                            <th>Tipo de Documentos Soporte</th>
                            <th>Número del Soporte</th>
                            <th>Descripción</th>
                            <th>Unidad Ejecutora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6">TOTAL ADICIÓN GASTOS</td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td colspan="2">$</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>

        <div class="table-responsive">
            <div class="panel-body table-responsive">
                <table class="table table-bordered table-striped mb-none datatable-default">

                    <tbody>
                        <tr>
                            <td colspan="6">VALOR TOTAL ADICIÓN</td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td colspan="2">$</td>
                        </tr>
                        <tr>
                            <td colspan="6">DIFERENCIA</td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td colspan="2">$</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div>

            <div class="panel-body table-responsive">
                <div align='right'>
                <button type="button" class="mr-xs btn btn-md btn-primary"data-toggle="modal" data-target="#bd-modal-lg">
                <i class="fa fa-print"></i>
                Imprimir</button>
                </div>
            </div>