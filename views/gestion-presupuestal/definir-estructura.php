<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


<header class="panel-heading">
    <h2 class="panel-title">Definir estructura ingresos
    </h2>
</header>

<div class="panel-body">
    <div class="col-md-12">
        <?php
        $consultaItems = json_decode(file_get_contents("https://api.appalcaldia.website/apiv1/budget/getByLevel/1"), true);
        ?>
        <div class="dd" id="nestable">
            <ol class="dd-list">
                <?php
                foreach ($consultaItems as $items) {
                    $consultaSubNiveles2 = json_decode(file_get_contents("https://api.appalcaldia.website/apiv1/budget/" . $items['idBudgetCatalog']), true);
                ?>
                    <li class="dd-item" data-id="2">
                        <div class="dd-handle" style="
                        <?php if ($items['type'] == "A") {
                            echo 'background: #59b6cccc;';
                        } ?>">1 <?php echo $items['descriptionBudgetCatalog']; ?><a class="modal-with-form pull-right" href="#modalForm" onclick="abrirModalRegistrarItem('<?php echo $items['descriptionBudgetCatalog']; ?>',<?php echo $items['idBudgetCatalog'] ?>)" title="Añadir nivel"><i class="fa fa-plus"></i></a>
                        </div>

                        <?php
                        foreach ($consultaSubNiveles2 as $niveles2) {
                            $consultaDatosSubnivel2 = json_decode(file_get_contents("https://api.appalcaldia.website/apiv1/budget/getItem/" . $niveles2['idBudgetCatalogSubLevel']), true);
                        ?>
                            <ol class="dd-list">
                                <li class="dd-item" data-id="5">
                                    <div class="dd-handle" style="<?php if ($consultaDatosSubnivel2['type'] == "A") {
                                                                        echo 'background: #59b6cccc;';
                                                                    } ?>"><?php echo $consultaDatosSubnivel2['idBudget'] . " / " . $consultaDatosSubnivel2['type'] . " / " . $consultaDatosSubnivel2['descriptionBudgetCatalog'] ?> <a class="modal-with-form pull-right" href="#modalForm" onclick="abrirModalRegistrarItem('<?php echo $consultaDatosSubnivel2['descriptionBudgetCatalog'] ?>','<?php echo $consultaDatosSubnivel2['idBudgetCatalog'] ?>')" title="Añadir nivel"><i class="fa fa-plus"></i></a></div>
                                    <ol class="dd-list">
                                        <?php
                                        $consultaSubNiveles3 = json_decode(file_get_contents("https://api.appalcaldia.website/apiv1/budget/" . $consultaDatosSubnivel2['idBudgetCatalog']), true);
                                        foreach ($consultaSubNiveles3 as $niveles3) {
                                            $consultaDatosSubnivel3 = json_decode(file_get_contents("https://api.appalcaldia.website/apiv1/budget/getItem/" . $niveles3['idBudgetCatalogSubLevel']), true);
                                        ?>
                                            <li class="dd-item" data-id="6">
                                                <div class="dd-handle"><?php echo $consultaDatosSubnivel3['idBudget'] . " / " . $consultaDatosSubnivel3['type'] . " / " . $consultaDatosSubnivel3['descriptionBudgetCatalog'] ?>
                                                    <input type="checkbox" onchange="modificarEstadoItem(this,<?php echo $consultaDatosSubnivel2['idBudgetCatalog'] . ',' . $consultaDatosSubnivel3['idBudgetCatalog'] ?>)" class="pull-right" style=" width: 19px;height: 22px;margin: -1px 6px;" <?php if ($niveles3['state'] == 1) {
                                                                                                                                                                                                                                                                                                        echo 'checked';
                                                                                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                                                                                        echo '';
                                                                                                                                                                                                                                                                                                    } ?>>
                                                    <button class="btn btn-default btn-sm pull-right" style="padding: 0px 4px"><i class="fa fa-eye"></i></button>
                                                </div>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ol>
                                </li>
                            </ol>
                    <?php
                        }
                    }
                    ?>
                    </li>
            </ol>
        </div>
    </div>
    <!-- Modal -->
</div>

<script>
    function modificarEstadoItem(estado, idNivel1, idNivel2) {
        $('#myModal').modal('show');
        if (estado.checked) {
            document.getElementById('inactivoLabel').style.display = "none";
            document.getElementById('activoLabel').style.display = "";

            axios({
                url: 'https://api.appalcaldia.website/apiv1/budget/update/' + idNivel1 + '/' + idNivel2 + '/true',
                method: 'put',
                headers: {
                    'Content-type': 'text/html; charset=UTF-8',
                },

            }).then(OkCallback, ErrorCallback)

        } else {
            document.getElementById('activoLabel').style.display = "none";
            document.getElementById('inactivoLabel').style.display = "";
            axios({
                url: 'https://api.appalcaldia.website/apiv1/budget/update/' + idNivel1 + '/' + idNivel2 + '/false',
                method: 'put',
                headers: {
                    'Content-type': 'text/html; charset=UTF-8'
                },

            }).then(OkCallback, ErrorCallback)
        }
    }

    function abrirModalRegistrarItem(item, codigo) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("cargueModal").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "/views/gestion-presupuestal/ajax/modalCrearItem.php?item=" + item + "&codigo=" + codigo, true);
        xhttp.send();
    }

    function registrarItem(codigo){
   
        axios.post('https://api.appalcaldia.website/apiv1/budget/addBudget', {
                level: '2',
                descriptionBudgetCatalog: 'Williams',
                type: 'C',
                idBudget: '10'
            })
            .then(function(res) {
                if (res.status == 201) {
                    console.log('El Post ha sido guardado bajo el id: ' + res.data);
                    // axios.post('https://api.appalcaldia.website/apiv1/budget/addSubLevel/'+ res.data)
                    // .then(function() {});
                }
            })
            .catch(function(err) {
                console.log("Este es " + err);
            })
            .then(function() {});
    
}
</script>



<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="panel-title">Advertencia!</h2>
            </div>
            <div class="modal-body">
                <div class="modal-wrapper">
                    <div class="modal-icon">
                        <i class="fa fa-warning"></i>
                    </div>
                    <div class="modal-text">
                        <h4>Advertencia</h4>
                        <p>¿Desea <span class="label label-success" id="activoLabel" style="display: none;">Activo</span> <span class="label label-danger" id="inactivoLabel" style="display: none;">Inactivo</span> el estado de este ítem ?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>

<section class="panel">
    <div class="panel-body">
        <div id="modalForm" class="modal-block modal-block-primary mfp-hide">
            <section class="panel">
                <div id="cargueModal"></div>
            </section>
        </div>
    </div>
</section>

</div>