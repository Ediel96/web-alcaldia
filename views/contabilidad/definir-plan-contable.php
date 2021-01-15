<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2020.3.1118/styles/kendo.default-v2.min.css"/>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2020.3.1118/js/kendo.all.min.js"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>


<h3>Cuenta contable</h3>

<br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="treeList"></div>
        </div>
   

        <div class="col-md-6">
            <section class="panel">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed mb-none">
                            <thead>
                                <tr>
                                    <th >Codigo</th>
                                    <th></th>
                                    <th></th>
                                    <th>nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><input type="text" class="form-control" style="width"></td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        
    </div>
</div>


<script>

$("#treeList").kendoTreeList({
    columns: [
        { field: "codigo" },
        { field: "descripcion" }
    ],
    dataSource: {
      data: [
        { id: 1, parentId: null, codigo: 1, descripcion: "activo" },
        { id: 2, parentId: 1, codigo: 1, descripcion: "Efectivo y equivalentes de efectivo" },
        { id: 3, parentId: 2, codigo: 1, descripcion: "Inversiones en asociadas" },
        { id: 4, parentId: 2, codigo: 2, descripcion: "Comercio al por mayor y al por menor" },
        { id: 5, parentId: 1, codigo: 4, descripcion: "Reajuste fiscal" },
        { id: 6, parentId: null, codigo: 1, descripcion: "activo" },
        { id: 7, parentId: 5, codigo: 1, descripcion: "Efectivo y equivalentes de efectivo" },
        { id: 8, parentId: null, codigo: 1, descripcion: "Inversiones en asociadas" },
        { id: 4, parentId: null, codigo: 2, descripcion: "Comercio al por mayor y al por menor" }
      ]
    }
  }
);

</script>
