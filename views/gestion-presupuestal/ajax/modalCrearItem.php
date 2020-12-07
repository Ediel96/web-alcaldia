<!-- Modal Form -->

<header class="panel-heading">
    <h2 class="panel-title">Añadir item a <b><?php echo $_GET['item'] ?></b></h2>
</header>
<div class="panel-body">
    <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
        <input type="hidden" name="url" class="form-control" placeholder="" value="<?php echo $_GET['codigo'] ?>" />

        <div class="form-group">
            <label class="col-sm-3 control-label">Identificación presupuestal</label>
            <div class="col-sm-9">
                <input type="url" name="url" class="form-control" placeholder="" value="" />
            </div>
        </div>
        <div class="form-group mt-lg">
            <label class="col-sm-3 control-label">Nivel</label>
            <div class="col-sm-9">
                <select type="text" name="name" class="form-control">
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="1">5</option>
                    <option value="1">6</option>
                    <option value="1">7</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Tipo</label>
            <div class="col-sm-9">
                <select type="text" name="name" class="form-control">
                    <option value="1">A</option>
                    <option value="1">C</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Descripción</label>
            <div class="col-sm-9">
                <input type="url" name="url" class="form-control" placeholder="" />
            </div>
        </div>

    </form>
</div>
<footer class="panel-footer">
    <div class="row">
        <div class="col-md-12 text-right">
            <button class="btn btn-primary modal-confirm" id="registroItem" onclick="registrarItem(<?php echo $_GET['codigo'] ?>)">Registrar</button>
            <button class="btn btn-default modal-dismiss">Cancelar</button>
        </div>
    </div>
</footer>

