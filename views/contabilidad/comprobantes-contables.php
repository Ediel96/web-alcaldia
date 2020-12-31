
        <h2>Comprobantes contables</h2>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Agregando comporbante contable
        </button>

        <div class="row">
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