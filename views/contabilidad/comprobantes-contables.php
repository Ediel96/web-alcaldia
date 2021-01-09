
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" />
    <script src="vendor/select2/dist/js/select2.min.js"></script>

    <h2>Comprobantes contables</h2>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Agregando comporbante contable
    </button>

    <!-- <div class="row">
        <div class="col-md-12">
            <div class="toggle" data-plugin-toggle>
                <p>Solo cierre</p>
                <section class="toggle">
                    <label>Ocultar criterios de </label>
                    <div class="toggle-content">
                        <form>

                            <button type="submit" class="btn btn-success">Buscar</button>
                            <button type="submit" class="btn btn-primary">Limpiar filtro</button>

                            <br>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Tipo</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Fecha de elaboracion</label>
                                    <div class="form-group">
                                        
                                        <select id="inputState" class="form-control">
                                            <option selected>2020</option>
                                            <option>2021</option>
                                            <option>2022</option>
                                            <option>2023</option>
                                        </select>

                                        <select id="inputState" class="form-control">
                                            <option selected>Rango</option>
                                            <option>Este mes</option>
                                            <option>Este trimestre</option>
                                            <option>Este semestre</option>
                                            <option>Solo cierre</option>
                                        </select>

                                        <input type="password" class="form-control col-md-6" placeholder="Password">
                                        <input type="password" class="form-control col-md-6" placeholder="Password">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Usuario</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Anulada</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Si</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>
        
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div> -->

    <div class="row">
    <table class="table ">
            <thead>
                <tr>
                    <th> Tipo </th>
                    <th>Numero</th>
                    <th>Feacha de elaboracion</th>
                    <th>Usuario</th>
                    <th>Valor</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tasks"></tbody>
        </table>
    </div>


    <!-- Modal Agregar-->
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
                        <h2 class="panel-title">Agregar Periodos Contable</h2>
                    </header>
                    <div class="panel-body">
                        <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                            <div class="form-group mt-lg">
                                <label class="col-sm-3 control-label">Tipo</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="typeA">
                                        <option>CC-1 Ajustes contables</option>
                                        <option>CC-2 Depreciacion</option>
                                        <option>CC-3 Costeo<</option>
                                        <option>CC-4 Diferidos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Fecha de elaboración</label>
                                <div class="col-sm-9">
                                    <input type="text" name="datapicker" class="form-control selector"  id="dateofelaboration">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Numero</label>
                                <div class="col-sm-9">
                                    <input type="number" name="datapicker" class="form-control selector"  id="number_account">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Cuenta contable</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="accounting_account">
                                        <option>11050501 - Caja</option>
                                        <option>11051001 - Caja... </option>
                                        <option>11450501 - Fidu...</option>
                                        <option>12053502 - Reaj...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tercero</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="third">
                                        <option>A.I.C.</option>
                                        <option>ACH Colombia </option>
                                        <option>ACH Colombia S....</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Detalle</label>
                                <div class="col-sm-3">
                                    <input type="text" name="dall" class="form-control" id="detail">
                                </div>
                                <label class="col-sm-2 control-label">Descripción</label>
                                <div class="col-sm-4">
                                    <input type="text" name="description" class="form-control" id="description">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Centro de costo</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="cost_center">
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Débito</label>
                                <div class="col-sm-9">
                                    <input type="text" name="debito" class="form-control" id="debit">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Crédito</label>
                                <div class="col-sm-9">
                                    <input type="text" name="debito" class="form-control" id="credits">
                                </div>
                            </div>

                        </form>
                    </div>
                </section>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Cancelar</button>
                    <button type="button" class="btn btn-secondary" id="submitButtonAdd" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar-->
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
                        <h2 class="panel-title">Agregar Periodos Contable</h2>
                    </header>
                    <div class="panel-body">
                        <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                            <div class="form-group mt-lg">
                                <input type="hidden" name="" id="idYpE">

                                <label class="col-sm-3 control-label">Tipo</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="typeE">
                                        <option>CC-1 Ajustes contables</option>
                                        <option>CC-2 Depreciacion</option>
                                        <option>CC-3 Costeo<</option>
                                        <option>CC-4 Diferidos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Fecha de elaboración</label>
                                <div class="col-sm-9">
                                    <input type="text" name="datapicker" class="form-control selector"  id="dateofelaborationE">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Numero</label>
                                <div class="col-sm-9">
                                    <input type="number" name="datapicker" class="form-control selector"  id="number_accountE">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Cuenta contable</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="accounting_accountE">
                                        <option>11050501 - Caja</option>
                                        <option>11051001 - Caja... </option>
                                        <option>11450501 - Fidu...</option>
                                        <option>12053502 - Reaj...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tercero</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="thirdE">
                                        <option>A.I.C.</option>
                                        <option>ACH Colombia </option>
                                        <option>ACH Colombia S....</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Detalle</label>
                                <div class="col-sm-3">
                                    <input type="text" name="dall" class="form-control" id="detailE">
                                </div>
                                <label class="col-sm-2 control-label">Descripción</label>
                                <div class="col-sm-4">
                                    <input type="text" name="description" class="form-control" id="descriptionE">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Centro de costo</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="cost_centerE">
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Débito</label>
                                <div class="col-sm-9">
                                    <input type="text" name="debito" class="form-control" id="debitE">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Crédito</label>
                                <div class="col-sm-9">
                                    <input type="text" name="debito" class="form-control" id="creditsE">
                                </div>
                            </div>

                        </form>
                    </div>
                </section>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Cancelar</button>
                    <button type="button" class="btn btn-secondary" id="submitButtonEdit" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../assets/services/contabilidad.js"></script>
    <script>
        $( "#dateofelaboration" ).datepicker({minDate: '0', dateFormat: 'yy-dd-mm'});

    function myEditModal(id) {
        console.log(id)
        $("#ModalUpdate").modal("show");
            $.ajax({
            url: `../api1/public/accounting_vouchers/${id}`,
            type: 'GET',
            success: function(response) { 
                if(!response.error) {
                    let elemens = JSON.parse(response);
                    elemens.forEach(elemen => {
                        console.log(elemen)
                        $('#typeE').val(elemen.type_account),
                        $('#dateofelaborationE').val(elemen.dateofelaboration),
                        $('#number_accountE').val(elemen.accounting_account),
                        $('#accounting_accountE').val(elemen.accounting_account),
                        $('#thirdE').val(elemen.third),
                        $('#detailE').val(elemen.detail),
                        $('#descriptionE').val(elemen.description),
                        $('#cost_centerE').val(elemen.cost_center),
                        $('#debitE').val(elemen.debit),
                        $('#creditsE').val(elemen.credits),
                        $('#idYpE').val(elemen.id)
                        //$("option:selected").attr("selected", false);
                    })
                }
            }
        });
    }

//myDeletModal
function myDeletModal(id) {
    $.ajax({
    url: `../api1/public/accounting_vouchers/${id}`,
    type: 'DELETE',
    success: function(response) {
        location.reload();
        }
    });
}

    </script>