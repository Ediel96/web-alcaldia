
$(document).ready(function() {

    getAll();//<li class="editModal"><a href="#" class="fa fa-edit"></a></li>
 
     function getAll() {
        $.ajax({
        url: '../api1/public/accounting_vouchers',
        type: 'GET',
        success: function(response) {
            if(!response.error) {
                let elemens = JSON.parse(response);
                let template = '';
                elemens.forEach(elemen => {
                template += `
                    <tr taskid="${elemen.id}">
                        <td>${elemen.type_account}</td>
                        <td>${elemen.nombre}</td>
                        <td>${elemen.dateofelaboration}</td>
                        <td>${elemen.nombre}</td>
                        <td>${elemen.credits}</td>
                        <td taskid="${elemen.id}">
                            <button type="submit"  class="btn btn-primary task-edit" onclick="myEditModal(${elemen.id})">
                                Editar
                            </button>
                            <button type="submit"  class="btn btn-danger" onclick="myDeletModal(${elemen.id})">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                        ` 
                });
                $('#tasks').html(template);
            }
            }
        });
    }

    $('#submitButtonAdd').click(function(e) {
        e.preventDefault();
        console.log(12)
        const idp = $('#taskId').val();
        const data = {
            type_account: $('#typeA').val(),
            dateofelaboration: $('#dateofelaboration').val(),
            number_account : $('#number_account').val(),
            accounting_account : $('#accounting_account').val(),
            third :  $('#third').val(),
            detail :$('#detail').val(),
            description: $('#description').val(),
            cost_center : $('#cost_center').val(),
            debit : $('#datepickerTwo').datepicker({ dateFormat: 'dd-mm-yy' }).val(),
            credits: $('#taskId').val(),
            nombre: 'pepipo'
        };
        const url = "../api1/public/accounting_vouchers";
        // const url = `../api1/public/define_accounting_periods/${idp}`;
        console.log(data, url);
        $.post(url, data, (response) => {
            console.log(response);
            getAll();
        });
    });

    $('#submitButtonEdit').click(function(e) {
        e.preventDefault();
        const idp = $('#idpE').val();
        const data = {
            type_account: $('#typeE').val(),
            dateofelaboration: $('#dateofelaborationE').val(),
            number_account : $('#number_accountE').val(),
            accounting_account : $('#accounting_accountE').val(),
            third :  $('#thirdE').val(),
            detail :$('#detailE').val(),
            description: $('#descriptionE').val(),
            cost_center : $('#cost_centerE').val(),
            debit : $('#debitE').datepicker({ dateFormat: 'dd-mm-yy' }).val(),
            credits: $('#creditsE').val(),
            nombre: 'pepipo'
        };
        const url = `../api1/public/define_accounting_periods/${idp}`;
        console.log(data, url);
        $.post(url, data, (response) => {
            console.log(response);
            getAll();
        });
    });


});
