<div>
    <div class="row">
        
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Agregando periodos contables
        </button>

        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>
                <h2 class="panel-title">Definir periodos contables</h2>
            </header>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table mb-none">
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
                        <tbody>
                            <tr>
                                <td><lu class="fa fa-eye"></lu></td>
                                <td>2020</td>
                                <td>desbloqu blog cierre del periodo</td>
                                <td>01/02/2020</td>
                                <td>01/06/2020</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal -->
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
                        <h2 class="panel-title">Periodos Contable</h2>
                    </header>
                    <div class="panel-body">
                        <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                            <div class="form-group mt-lg">
                                <label class="col-sm-3 control-label">Nombre del periodo</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" placeholder="Type your name..." required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Subperiodos</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm">
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
                                    <select class="form-control form-control-sm">
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
                                    <select class="form-control form-control-sm">
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
                                    <input type="url" name="url" class="form-control" placeholder="Type an URL...">
                                </div>
                                <label class="col-sm-2 control-label">Hasta</label>
                                <div class="col-sm-4">
                                    <input type="url" name="url" class="form-control" placeholder="Type an URL...">
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
                        </form>
                    </div>
                </section>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Crear</button>
                    <button type="button" class="btn btn-primary">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

</div>