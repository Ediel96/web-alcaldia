<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

<div>
    <div class="row">
        
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Agregando periodos contables
        </button>

        <table class="table ">
            <thead>
                <tr>
                    <th>Acciones</th>
                    <th colspan="2">Periodo contable general</th>
                    <th colspan="2">Fecha de contabilidad</th>
                </tr>
                <tr>
                    <th> </th>
                    <th>Nombre del periodo</th>
                    <th>Estado del periodo</th>
                    <th>Desde</th>
                    <th>Hasta</th>
                </tr>
            </thead>
            <tbody id="tasks"></tbody>
        </table>
    </div>

    <!-- Modal Agregar  -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">Agregar periodos Contable</h2>
                    </header>
                    <div class="panel-body">
                        <form action=""  id="elemen-form" class="form-horizontal mb-lg" novalidate="novalidate">
                            <input type="hidden" id="idp">
                            <div class="form-group mt-lg">
                                <label class="col-sm-3 control-label">Nombre del periodo</label>
                                <div class="col-sm-9">
                                    <input type="text" id="actiond"  class="form-control" placeholder="Nombre del periodo.." required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Subperiodos</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="subperiod">
                                        <option>Anual</option>
                                        <option>Semestral</option>
                                        <option>Trimestral</option>
                                        <option>Mesual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Cantidad de periodos</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="amountOfPeriod">
                                        <option>Anual</option>
                                        <option>Semestral</option>
                                        <option>Trimestral</option>
                                        <option>Mesual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Estado del periodo</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="periodtatus">
                                        <option>Bloqueado</option>
                                        <option>Desbloqueado</option>
                                        <option>Cierre del periodo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Fecha</label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Fecha de contabilidad</label>
                                <div class="col-sm-3">
                                    <input type="text" name="datapicker" class="form-control selector"  id="datepickerOne">
                                </div>
                                <label class="col-sm-2 control-label">Hasta</label>
                                <div class="col-sm-4">
                                    <input type="text" name="datapicker" class="form-control selector"  id="datepickerTwo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Periodo </label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm">
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                    </select>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button  type="submit" class="btn btn-secondary submitButtonAdd" data-dismiss="modal" id="submitButtonAdd">Crear</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
                
            </div>
        </div>
    </div>

    <!-- Modal  Editar -->
    <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="ModalUpdate" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">Editar periodos Contable</h2>
                    </header>
                    <div class="panel-body">
                        <form action=""  id="elemen-form" class="form-horizontal mb-lg" novalidate="novalidate">
                            <input type="hidden" id="idpE">
                            <div class="form-group mt-lg">
                                <label class="col-sm-3 control-label">Nombre del periodo</label>
                                <div class="col-sm-9">
                                    <input type="text" id="actiondE"  class="form-control"  value="" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Subperiodos</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="subperiodE">
                                        <option value="Anual">Anual</option>
                                        <option value="Semestral">Semestral</option>
                                        <option value="Trimestral">Trimestral</option>
                                        <option value="Mesual">Mesual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Cantidad de periodos</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="amountOfPeriodE">
                                        <option value="Anual">Anual</option>
                                        <option value="Semestral">Semestral</option>
                                        <option value="Trimestral">Trimestral</option>
                                        <option value="Mesual">Mesual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Estado del periodo</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="periodtatusE">
                                        <option value="Bloqueado">Bloqueado</option>
                                        <option value="Desbloqueado">Desbloqueado</option>
                                        <option value="Cierre del periodo">Cierre del periodo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Fecha</label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Fecha de contabilidad</label>
                                <div class="col-sm-3">
                                    <input type="text" name="datapicker" class="form-control selector"  id="datepickerOneE">
                                </div>
                                <label class="col-sm-2 control-label">Hasta</label>
                                <div class="col-sm-4">
                                    <input type="text" name="datapicker" class="form-control selector"  id="datepickerTwoE">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Periodo </label>
                                <div class="col-sm-9">
                                    <select id="periodoD" class="form-control form-control-sm">
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button  type="submit" class="btn btn-secondary" data-dismiss="modal" id="submitButtonEdit">Guardar</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
                
            </div>
        </div>
    </div>

</div>


<script src="../assets/services/contabilidad.js"></script>


<script>

$( document ).ready(function() {
    $( "#datepickerOne" ).datepicker({minDate: '0', dateFormat: 'yy-dd-mm'});
    $( "#datepickerTwo" ).datepicker({minDate: '0', dateFormat: 'yy-dd-mm'});
    $( "#datepickerOneE" ).datepicker({minDate: '0', dateFormat: 'yy-dd-mm'});
    $( "#datepickerTwoE" ).datepicker({minDate: '0', dateFormat: 'yy-dd-mm'});
});


function myEditModal(id) {
    console.log(id)
    $("#ModalUpdate").modal("show");
    $.ajax({
    url: `../api1/public/define_accounting_periods/${id}`,
    type: 'GET',
    success: function(response) { 
        if(!response.error) {
            let elemens = JSON.parse(response);
            elemens.forEach(elemen => {
                console.log(elemen);
                $('#actiondE').val(elemen.actiond),
                $(`#subperiodE  option[value=${elemen.subperiod}]`).attr("selected",true);
                $(`#amountOfPeriodE option[value=${elemen.subperiod}]`).attr("selected",true);
                // $('#amountOfPeriodE').val(elemen.amountofperiod),
                $(`#amountOfPeriodE option[value=${elemen.amountofperiod}]`).attr("selected",true);
                // $('#periodtatusE').val(elemen.amountofperiod),
                $('#datepickerOneE').val(elemen.since),
                $('#datepickerTwoE').val(elemen.untild),
                $('#idpE').val(elemen.idp);
            })
        }
        }
    });
}

//myDeletModal

function myDeletModal(id) {
    $.ajax({
    url: `../api1/public/define_accounting_periods/${id}`,
    type: 'DELETE',
    success: function(response) {
        location.reload();
        }
    });
}

</script>