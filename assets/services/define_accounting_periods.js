
$(document).ready(function() {

    getAll();//<li class="editModal"><a href="#" class="fa fa-edit"></a></li>
 
     function getAll() {
        $.ajax({
        url: '../api1/public/define_accounting_periods/year',
        type: 'GET',
        success: function(response) {
            if(!response.error) {
                let elemens = JSON.parse(response);
                console.log(elemens);
                let template = '';
                elemens.forEach(elemen => {
                template += `
                    <tr taskid="${elemen.year_id}">
                        <td>${elemen.year_id}</td>
                        <td>${elemen.year_date}</td>
                        <td>${elemen.active_date}</td>
                        <td taskid="${elemen.year_id}">
                            <button type="submit"  class="btn btn-primary task-edit" onclick="myEditModal(${elemen.year_id})">
                                Editar
                            </button>
                            <button type="submit"  class="btn btn-warning" onclick="myDeletModal(${elemen.year_id} , ${elemen.active})">
                                Activar o Desactivar
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

    $('#submitButtonEdit').click(function(e) {
        e.preventDefault();
        var dataDate = [];
        const idp = $('#idpY').val();
        for (var i = 1; i <= 12; i++) {
            const data = {
                idY : idp, 
                idM: i,
                activem : $(`#date_${i}`).val(),
                activemm : $(`#date_${i}`).prop('checked')
            };
            dataDate.push(data);
            
        }
        dataDate.map(res => {
            url = `../api1/public/define_accounting_periods/month/${res.idY}/${res.idM}`;
            data = res;
            $.post(url, data, (response) => {
                console.log(response)
            });
        })
        
    });

    function funtionAdd(res){
        console.log(res)
    }

});
