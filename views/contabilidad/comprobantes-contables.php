
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <!-- Estilos de modal -->
    <style>
        @media (min-width: 768px){
            .modal-dialog {
            width: 90vw;
            margin: 30px auto;
            }
        }

        .panel {
            background: #fff9f9c7 !important;
        }
        
    </style>

    <div class="panel row">

            <div class="m-2">
                <header class="panel-heading">
                    <h2 class="panel-title">Comprobante contable</h2>
                </header>

                <div class="col-md-12 text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Agregando comporbante contable
                    </button>
                </div>

                <div class="panel-body table-responsive"></div>

                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped" id="myTable">
                            <thead>
                                <tr>
                                    <th>Numero</th>
                                    <th> Tipo </th>
                                    <th>Feacha de elaboracion</th>
                                    <th>Usuario</th>
                                    <th>Valor</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="tasks"></tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>

    <?php include 'modals/comprobantes-contables-registrar.php';?>
    
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


    function mainPlus(id) {
        alert("mainPlus")
    }

    function mainTime(id) {
        alert("mainPlus")
    }

    </script>