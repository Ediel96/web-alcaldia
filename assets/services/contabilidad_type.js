$( document ).ready(function() {

    getAll();
    getAllIformation();
    getAllType();
    getAllAccounting();

    function getAll(){
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const idCount = urlParams.get('idCount')
        var creditsum = 0;
        var debitsum = 0;
        $.ajax({
            url: `../api1/public/accounting_vouchers/accounting/${idCount}`,
            type: 'GET',
            success: function(response) {
                if(!response.error) {
                    let elemens = JSON.parse(response);
                    let template = '';
                    var nume = null;
                    elemens.forEach(elemen => {
                    nume += 1;
                    template += `
                        <tr taskid="${elemen.id_cod}">
                            <td>${nume}</td>
                            <td>${elemen.account_name}</td>
                            <td>${elemen.accountsub_name}</td>
                            <td>${elemen.description}</td>
                            <td>${elemen.credit}</td>
                            <td>${elemen.debit}</td>
                        </tr>`;

                    $(`#description_occunt_${nume}`).val(elemen.description);
                    $(`#debit__occunt_${nume}`).val(elemen.credit);
                    $(`#credit__occunt_${nume}`).val(elemen.debit);
                    $(`#sub_id_${nume}`).val(elemen.sub_id);
                }); 

                elemens.forEach( elemento => {
                    creditsum +=  parseFloat(elemento.credit);
                    debitsum += parseFloat(elemento.debit);     
                });

                total =`
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>total</td>
                        <td>${creditsum}</td>
                        <td>${creditsum}</td>
                    </tr>
                `

                $('#elements').html(template);
                $('#elements').append(total);

                }
            }
        });
    }

    function getAllIformation(){
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const idCount = urlParams.get('idCount')
        $.ajax({
            url: `../api1/public/accounting_vouchers/type/${idCount}`,
            type: 'GET',
            success: function(response) {
                if(!response.error) {
                    let elemens = JSON.parse(response);
                    console.log(elemens)
                    elemens.forEach(elemen => {
                        $('#date-cont').html(`Fecha de elaboración: ${elemen.dateofelaboration}`);
                        $('#name-cont').html(`Nombre: ${elemen.nameuser}`);
                        $('#code-cont').html(`Codigo: ${elemen.cod}`);
                        $('#dateofelaboration').val(elemen.dateofelaboration);
                        $('#type_numbe').val(elemen.id_cod)
                    });
                    // $(`#slect_terce_${id}`).html(template);
                }
            }
        });
    }

    function getAllType(){
        $.ajax({
            url: '../api1/public/accounting_vouchers/type',
            type: 'GET',
            success: function(response) {
                if(!response.error) {
                    let elemens = JSON.parse(response);

                    let template = '';
                    elemens.forEach(elemen => {
                    template += `
                            <option value="${elemen.id}">${elemen.cod} ${elemen.description}</option>                            ` 
                    });
                    $('#select_typeA').html(template);
                }
            }
        });
    }

    function getAllAccounting(){
        $.ajax({
            url: '../api1/public/accounting_vouchers/accounting',
            type: 'GET',
            success: function(response) {
                if(!response.error) {
                    let elemens = JSON.parse(response);

                    let template = '';
                    elemens.forEach(elemen => {
                    template += `
                            <option value = "${elemen.cod_account}">${elemen.name}</option>                            ` 
                    });
                    $('.select_accountingId').html(template);
                }
            }
        });
    }

}); 