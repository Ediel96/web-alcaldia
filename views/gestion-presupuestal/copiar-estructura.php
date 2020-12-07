<div class="row">
 <section class="panel">
  <header class="panel-heading">
   <h2 class="panel-title"><?php if(!isset($_GET['item'])){echo 'GESTIÓN PRESUPUESTAL / DEFINIR ESTRUCTURA';}else{echo 'Meta Producto # 1.A.1.1.1';}?></h2>
  </header>
  <button type="button" class=" btn btn-primary" data-toggle="modal" data-target="#bd-modal-cargar"><i class="fa fa-upload"></i>Cargar Archivo Plano XLS</button>
  <!-- Modal -->
  <div class="modal fade " id="bd-modal-cargar"  role="dialog" >
   <div class="modal-dialog modal-md">
    <div class="modal-content">
     <div class="modal-header">
      <h5 class="modal-title" id="ModalLongTitle">CARGAR ESTRUCTURA</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
      </button>
     </div>
     <div class="modal-body">
      <div class="row">
       <form>
        <div class="text-center">
         <img src="https://lh3.googleusercontent.com/puSRUtbsB8x4ndhlzjp4dCDfZMPMplhkqKU_2XYB_ukeSxe6E0frlyqJ2pRzwQ5w7Jle9Q=s85" class="rounded" alt="...">
          <div class="form-group col-md-12">                                                                            
          </div>
          <div class="form-group col-md-12">                                                                            
          </div>
          <div class="form-group col-md-12">                                                                            
          </div>
          <div class="form-row">                                    
           <div class="form-group">
            <div align='center'>
             <button type="button" class=" btn btn-primary" data-toggle="modal" data-target="#bd-modal-load"><i class="fa fa-upload"></i>Cargar Archivo Plano XLS</button>  
            </div>                                           
           </div>
          </div>
         </form>
        </div>
       </div>
      </div>
     </div>
    </div>
  </div>
 <button type="button" class=" btn btn-primary" data-toggle="modal" data-target="#bd-modal-copy"><i class="fa fa-copy"></i>Copiar Estructura</button>
 <!-- Modal -->
 <div class="modal fade " id="bd-modal-copy" role="dialog">
  <div class="modal-dialog modal-copy">
   <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="ModalLongTitle">Cargar Estructura</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
     </button>
    </div>
    <div class="modal-body">
     <div class="row">
      <form>
      <label class="col-md-6 control-label" for="inputSuccess">Seleccione el año inmediatamente anterior: </label>
	   <div class="col-md-3">
        <select class="form-control input-sm mb-md">
		 <option>2020</option>
		 <option>2021</option>
		 <option>2022</option>
         <option>2023</option>
		</select>
		</div>
        <hr>
        <div class="form-group col-md-12">                                                                            
        </div>
        <div class="form-group col-md-12">                                                                            
        </div>
        <div class="form-group col-md-12">                                                                            
        </div>
        </hr>
        <div class="form-row">                                    
         <div class="form-group">
          <div align='center'>
          <button type="button" class=" btn btn-primary" data-toggle="modal" data-target="#bd-modal-copiado"><i class="fa fa-copy"></i>Copiar</button>  
          <!-- Modal -->
          <div class="modal fade " id="bd-modal-copiado" role="dialog">
           <div class="modal-dialog modal-copiado">
            <div class="modal-content">
             <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
             </div>
             <div class="modal-body">
              <div class="row">
               <form>
               <label class="col-md-12 control-label" for="inputSuccess">Se copiaran todos los datos relacionados a la estructura de Presupuesto de Ingresos. </label>
                <div class="form-row">                                    
                 <div class="form-group">
                 </div>
                </div>
                <div>
                 <a href='https://pruebas.appalcaldia.website/gestion-presupuestal/copiar-estructura'>Aceptar</a>
                </div>
	           </form>
              </div>
	         </div>
            </div>
           </div>
          </div>          
          </div>                                           
         </div>
        </div>
	   </div>
	  </form>
     </div>
    </div>
   </div>
  </div>



  <button type="button" class=" btn btn-primary" data-toggle="modal" data-target="#bd-modal-caja"><i class="fa fa-copy"></i>Modal Caja</button>
<!-- Modal -->



<div class="container">
 <div class="modal" tabindex="-1" id="bd-modal-caja">
  <div class="modal-dialog modal-lg">
   <div class="modal-content">
    <div class="modal-header">
     1.0.01/C/ Caja
     <button type="button" class="btn btn-danger close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
     </button>
    </div>
    <div class="panel-heading">
     <div class="modal-body">
      <label class="col-xs-2 control-label" for="inputSuccess">Tipo de vigencia</label>
      <div class="col-xs-3">
       <select class="form-control input-sm mb-md">
	    <option>1. Vigencia actual</option>
  	    <option>2. Reserva presupuestal</option>
	    <option>3. Pasivos Exigibles</option>
  	   </select>
	  </div> 
	  <label class="col-md-2 control-label" for="inputSuccess">Equivalente POAI</label>
      <div class="col-md-3">
       <select class="form-control input-sm mb-md">
	    <option>Cof Dtpo 202</option>
	    <option>Cof Nacion 2</option>
	    <option>Crédito 2020</option>
	   </select>
	  </div>
	  <label class="col-md-1 control-label" for="inputSuccess">ICLD</label>
      <div class="col-md-1">
       <select class="form-control input-sm mb-md">
	    <option>SI</option>
	    <option>NO</option>
	   </select>
	  </div>
      <br>
      <div class="panel panel-default">
       <div class="panel-heading">
       </div>
       <div class="panel-body">
        Destinación de sectores
        <div class="form-row">
        <br>

        <div class="form-row">
 <div class="col-sm-2 sm-3">
  <br>
  <label for="%_ICLD">% ICLD:</label>
  </br>
  <input type="text" class="form-control input-sm mb-md" id="%_ICLD" placeholder="% ICLD" style="width:70px"> 
 </div>
 <div class="form-row">
  <div class="col-md-3 mb-3">
  <br>
  <label for="validationCustom01">Sector destinación 1:</label>
  </br>
    <select class="form-control input-sm mb-md" style="width:100px">
     <option>Valor 1</option>
	 <option>Valor 2</option>
     <option>Valor 3</option>
	</select>
  </div>
  <div class="form-row">
  <div class="col-md-3 sm-3">
  <label for="validationCustom01">Tipo acto administrativo destinación 1:</label>
   <br>
   <select class="form-control input-sm sm-md">
	    <option>1. Vigencia actual</option>
  	    <option>2. Reserva presupuestal</option>
	    <option>3. Pasivos Exigibles</option>
  	   </select>
   </br>
  </div>
  <div class="col-md-3 sm-3">
   <label for="act_adm_des">Acto administrativo destinación</label>
   <input type="text" class="form-control" id="act_adm_des" placeholder="act_adm_des" value="Mark" required>
  </div>
 </div>
</div>



       </div>
      </div>
	 </div>
     <div class="modal-footer">
	  <button type="button" class=" btn btn-primary" data-toggle="modal" data-target="#bd-modal-caja"><i class="fa fa-save"></i>Guardar</button>
	 </div>
    </div> 
  </div>
 </div>
</div>









 </section>
</div>