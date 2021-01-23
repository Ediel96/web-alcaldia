
$(document).ready(function() {

    getAll();

    getAllType();

    getAllAccounting()

    function getAll() {
        $.ajax({
        url: '../api1/public/accounting_vouchers',
        type: 'GET',
            success: function(response) {
                if(!response.error) {
                    let elemens = JSON.parse(response);
                    let template = '';
                    console.log(elemens)
                    elemens.forEach(elemen => {
                    template += `
                        <tr taskid="${elemen.id_cod}">
                            <td> <a href="create-definir-periodo-contable-type?idCount=${elemen.id_cod}" style="cursor: pointer;">${elemen.cod}</a></td>
                            <td>${elemen.description}</td>
                            <td>${elemen.dateofelaboration}</td>
                            <td>${elemen.nameuser}</td>
                            <td>${elemen.val}</td>
                        </tr>` 
                    });
                    $('#tasks').html(template);
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

    $('#submitButtonAdd').click(function(e) {
        e.preventDefault();

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

        $.post(url, data, (response) => {

            getAll();
        });
    });

    $('#submitButtonEdit').click(function(e) {
        e.preventDefault();
        const idp = $('#idYpE').val();

        const data = {
            type_account: $('#idYpE').val(),
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
        const url = `../api1/public/accounting_vouchers/${idp}`;

        $.post(url, data, (response) => {

            getAll();
        });
    });

    $('#editModal').click(function(e) {
        e.preventDefault();
        const idp = $('#idYpE').val();

        const data = {
            type_account: $('#idYpE').val(),
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
        const url = `../api1/public/accounting_vouchers/${idp}`;

        $.post(url, data, (response) => {

            getAll();
        });
    });

    $('#myTable').DataTable({
        bFilter: false, 
        bInfo: false
    });


});
