<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<div class="row">
    <div class="panel">

        <div class="m-2">
            <header class="panel-heading">
                <h2 class="panel-title">Comprobante contable</h2>
            </header>
            <div class="col-md-12 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Editar comporbante contable
                </button>
            </div>
            <div class="panel-body table-responsive">
                <div class="col" id="date-cont">
                    Fecha: 
                </div>
                <div class="col" id="name-cont">
                    Nombre: 
                </div>
                <div class="col" id="code-cont">
                    Codigo:
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Cuenta contable</th>
                                <th> Tercero </th>
                                <th>Description</th>
                                <th>Debito</th>
                                <th>Credito</th>
                            </tr>
                        </thead>
                        <tbody id="elements">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'modals/create-definir-periodo-contable-type.php';?>

<script src="../assets/services/contabilidad_type.js"></script>