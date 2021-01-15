
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
                        <h2 class="panel-title">Nuevo comprobante contable</h2>
                    </header>
                    <div class="panel-body">
                        <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                            <div class="form-group mt-lg">
                                <label class="col-sm-2 control-label mi-selector">Tipo</label>
                                <div class="col-sm-4">
                                    <select class="form-control form-select" id="typeA">
                                        <option>CC-1 Ajustes contables</option>
                                        <option>CC-2 Depreciacion</option>
                                        <option>CC-3 Costeo<</option>
                                        <option>CC-4 Diferidos</option>
                                    </select>
                                </div>
                                <input type="hidden" id="number_id" val="">
                                <label class="col-sm-2 control-label">Fecha de elaboración</label>
                                <div class="col-sm-4">
                                    <input type="text" name="datapicker" class="form-control selector"  id="dateofelaboration">
                                </div>
                            </div>
                            
                        <div class="form-horizontal mb-lg">
                            <table class="table table-active">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Cuenta contable</th>
                                        <th scope="col">Terceros</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Centro de costo</th>
                                        <th scope="col">Centro de cretido</th>
                                        <th style="width: 2%;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <select class="form-control form-select" id="typeA">
                                                <option>CC-1 Ajustes contables</option>
                                                <option>CC-2 Depreciacion</option>
                                                <option>CC-3 Costeo<</option>
                                                <option>CC-4 Diferidos</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" id=""></td>
                                        <td><input type="text" class="form-control" id=""></td>
                                        <td><input type="number" class="form-control" id=""></td>
                                        <td><input type="number" class="form-control" id=""></td>
                                        <td style="position: absolute; margin: 5px;">
                                            <a onclick="mainPlus()">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                            <a onclick="mainTime()">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <select class="form-control form-select" id="typeA">
                                                <option>CC-1 Ajustes contables</option>
                                                <option>CC-2 Depreciacion</option>
                                                <option>CC-3 Costeo<</option>
                                                <option>CC-4 Diferidos</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" id=""></td>
                                        <td><input type="text" class="form-control" id=""></td>
                                        <td><input type="number" class="form-control" id=""></td>
                                        <td><input type="number" class="form-control" id=""></td>
                                        <td style="position: absolute; margin: 5px;">
                                            <a>
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                            <a>
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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

    <script>
        jQuery("document").ready(function(){
            console.log("perso")
        });
    </script>