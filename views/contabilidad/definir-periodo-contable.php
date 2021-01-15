<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


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
                    
                    <th>#</th>
                    <th>Año</th>
                    <th>Activo</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody id="tasks"></tbody>
        </table>
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
                            <input type="hidden" id="idpY">
                            <div class="form-check">
                                <label class="form-check-label" for="date_1">Enero</label>
                                <input class="form-check-input" type="checkbox" id="date_1" value="option1" checked>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="date_2">Febrero</label>
                                <input class="form-check-input" type="checkbox" id="date_2" value="option1" checked>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="date_3">Marzo</label>
                                <input class="form-check-input" type="checkbox" id="date_3" value="option1" checked>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="date_4">Abril</label>
                                <input class="form-check-input" type="checkbox" id="date_4" value="option1" checked>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="date_5">Mayo</label>
                                <input class="form-check-input" type="checkbox" id="date_5" value="option1" checked>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="date_6">Junio</label>
                                <input class="form-check-input" type="checkbox" id="date_6" value="option1" checked>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="date_7">Julio</label>
                                <input class="form-check-input" type="checkbox" id="date_7" value="option1" checked>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="date_8">Agosto</label>
                                <input class="form-check-input" type="checkbox" id="date_8" value="option1" checked>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="date_9">Septiembre</label>
                                <input class="form-check-input" type="checkbox" id="date_9" value="option1" checked>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="date_10">Octubre</label>
                                <input class="form-check-input" type="checkbox" id="date_10" value="option1" checked>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="date_11">Noviembre</label>
                                <input class="form-check-input" type="checkbox" id="date_11" value="option1" checked>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="date_12">Diciembre</label>
                                <input class="form-check-input" type="checkbox" id="date_12" value="option1" checked>
                            </div>
                            <div class="modal-footer">
                                <button  type="submit" class="btn btn-secondary" id="submitButtonEdit">Guardar</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
                
            </div>
        </div>
    </div>

</div>


<script src="../assets/services/define_accounting_periods.js"></script>


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
    url: `../api1/public/define_accounting_periods/month/${id}`,
    type: 'GET',
    success: function(response) { 
        if(!response.error) {
            let elemens = JSON.parse(response);
            elemens.forEach(elemen => {
                console.log(elemen);
                $(`#idpY`).val(elemen.yy_date);
                $(`#date_${elemen.month_id}`).val(elemen.valueym);
                $(`#date_${elemen.month_id}`).prop('checked', elemen.valueyymm);
            })
        }
        }
    });
}

//myDeletModal
function myDeletModal(id , active) {

    const url = `../api1/public/define_accounting_periods/year/${id}`;
    const actived = active === 2 ? 1 : 2;
    const activen = active === 2 ? "Activara" : "Inactivo";

    const data = {
        active : actived
    }
    Swal.fire({
    title: '¿Estás seguro?',
    text: `Se ${activen} el año`,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                console.log(url, active, actived);
                $.post(url, data, (response) => {
                    
                });
            
        }
    })
}

</script>