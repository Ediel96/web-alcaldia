
$(document).ready(function() {

    getAll();
 
    function getAll() {
        $.ajax({
        url: '../api1/public/define_accounting_periods',
        type: 'GET',
        success: function(response) {
            if(!response.error) {
                let elemens = JSON.parse(response);
                let template = '';
                elemens.forEach(elemen => {
                template += `
                    <tr>
                    <td>#</td>
                    <td>${elemen.actiond}</td>
                    <td>${elemen.accounting_period}</td>
                    <td>${elemen.since}</td>
                    <td>${elemen.untild}</td>
                    </tr>
                        ` 
                });
                $('#tasks').html(template);
            }
            }
        });
    }
    

    $('.submitButtonAdd').click(function(e) {
        e.preventDefault();
        const idp = $('#taskId').val();
        const data = {
            actiond: $('#actiond').val(),
            subperiod:  $('#subperiod').val(),
            amountofperiod :$('#amountOfPeriod').val(),
            accounting_period: $('#periodtatus').val(),
            since : $('#datepickerOne').datepicker({ dateFormat: 'dd-mm-yy' }).val(),
            until : $('#datepickerTwo').datepicker({ dateFormat: 'dd-mm-yy' }).val(),
            //until : $('#datepickerTwo').val(),
            idp: $('#taskId').val()
        };
        const url = "../api1/public/define_accounting_periods";
        // const url = `../api1/public/define_accounting_periods/${idp}`;
        console.log(data, url);
        $.post(url, data, (response) => {
            console.log(response);
            getAll();
        });
    });

    $('.submitButtonApdate').click(function(e) {
        e.preventDefault();
        
    });



});

