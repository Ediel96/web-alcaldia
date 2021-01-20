
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
                                <input type="hidden" id="type_numbe" value="">
                                <div class="col-sm-4">
                                    <select class="form-control form-select" id="select_typeA">
                                        
                                    </select>
                                </div>
                                <input type="hidden" id="number_id">
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
                                            <select class="form-control form-select select_accountingId " id="slect_acuu_1" onclick="selectCount(1);">

                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control form-select" id="slect_terce_1">
                                            
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" id="description_occunt_1"></td>
                                        <td><input type="number" class="form-control" id="debit__occunt_1"></td>
                                        <td><input type="number" class="form-control" id="credit__occunt_1"></td>
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
                                        <th scope="row">2</th>
                                        <td>
                                            <select class="form-control form-select select_accountingId"  id="slect_acuu_2" onclick="selectCount(2);">

                                            </select>
                                        </td>
                                        <td>
                                            <select  class="form-control form-select" id="slect_terce_2">

                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" id="description_occunt_2"></td>
                                        <td><input type="number" class="form-control" id="debit__occunt_2"></td>
                                        <td><input type="number" class="form-control" id="credit__occunt_2"></td>
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
                    <button type="button" class="btn btn-secondary">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="cputAdd" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <script>

        $( "#select_typeA" ).change(function() {
            const cod = $('#select_typeA').val();
            $('#type_numbe').val(cod)
        });

        $('#cputAdd').click(function(e) { 
            var dataForm = [];
            var datenow = Date.now()
            var val = 0;
            var creditsum = 0;
            var debitsum = 0;
            var id_acount = 0;

            for (var i = 1; i <= 2; i++) {
                dta={
                    cod_account_id: $(`#slect_acuu_${i}`).val(),
                    cod_account_sub_id: $(`#slect_terce_${i}`).val(),
                    description: $(`#description_occunt_${i}`).val(),
                    debit: parseFloat($(`#debit__occunt_${i}`).val()),
                    credit: parseFloat($(`#credit__occunt_${i}`).val()),
                    datenow: datenow
                }
                dataForm.push(dta);
            }
            
            dataForm.forEach( elemento => {
                creditsum +=  parseFloat(elemento.credit);
                debitsum += parseFloat(elemento.debit);     
            });
            
            var data ={
                type: $('#select_typeA').val(),
                date: $('#dateofelaboration ').val(),
                datenow: datenow,
                nameuser: "Admin",
                number : $('#type_numbe').val(),
                val: debitsum
            }

            if (creditsum === debitsum){

                const url = `../api1/public/accounting_vouchers/count`;

                $.post(url, data, (response) => {
                    const elems =  JSON.parse(response)

                    elems.forEach( elem => {
                        const dataid = {id_contu : elem.id}
                        id_acount = dataid
                    });

                    const urll = `../api1/public/accounting_vouchers/count_sub`;
                    dataForm.forEach( elemento => {
                        const elemen = Object.assign(elemento, id_acount)
                        console.log(elemen);
                        $.post(urll, elemen, (response) => {
                        console.log(response)
                        });
                    });

                });

                // console.log(id_acount,"es el id")

            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Débito y Crédito no coinciden!'
                })
            }
        });
        
        function selectCount(id){
            const id_count = $(`#slect_acuu_${id}`).val();
            $.ajax({
                url: `../api1/public/accounting_vouchers/tree/${id_count}`,
                type: 'GET',
                success: function(response) {
                    if(!response.error) {
                        let elemens = JSON.parse(response);
                        let template = '';
                        console.log(elemens)
                        elemens.forEach(elemen => {
                        template += `
                                <option value = "${elemen.cod_account_sub}">${elemen.name}</option>                            ` 
                        });
                        $(`#slect_terce_${id}`).html(template);
                    }
                }
            });
        }
    </script>