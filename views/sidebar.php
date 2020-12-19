<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left b-l">
				
    <div class="sidebar-header bg-dark">
        <div class="sidebar-title">
            Menú
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">                    
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-cubes" aria-hidden="true"></i>
                            <span>Gestión estratégica</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="<?php echo $host;?>gestion-estrategica/plan-indicativo">
                                    Plan indicativo
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $host;?>gestion-estrategica/plan-poai">
                                    Plan operativo POAI
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $host;?>gestion-estrategica/plan-anual-adquisiciones">
                                    Plan anual de adquisiciones
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $host;?>gestion-estrategica/plan-accion">
                                    Plan de acción
                                </a>
                            </li>                            
                        </ul>
                    </li>
                    <li class="nav-parent">
						<a>
							<i class="fa fa-bar-chart-o" aria-hidden="true"></i>
							<span>Gestión presupuestal</span>
						</a>
						<ul class="nav nav-children">
							<li class="nav-parent">
								<a>Presupuesto de ingresos</a>
								<ul class="nav nav-children">
									<li>
										<a>Reporte acumulativo</a>
									</li>
									<li>
										<a>Definición estructura</a>
                                    </li>
                                    <li>
										<a href="<?php echo $host;?>gestion-presupuestal/apropiacion-inicial">Apropiación inicial</a>
									</li>
								</ul>
                            </li>
                            <li class="nav-parent">
								<a>Presupuesto de gastos</a>
								<ul class="nav nav-children">
									<li>
										<a>Reporte acumulativo</a>
									</li>
									<li>
										<a>Definición estructura</a>
                                    </li>
                                    <li>
										<a>Apropiación inicial</a>
									</li>
                                    <li>
										<a>Solicitud CDP</a>
									</li>
                                    <li>
										<a>Expedición CDP</a>
									</li>
                                    <li>
										<a>Solicitud RP</a>
									</li>
                                    <li>
										<a>Expedición RP</a>
									</li>
								</ul>
							</li>
                            <li class="nav-parent">
								<a>Modificaciones presupuestales</a>
								<ul class="nav nav-children">
									<li>
										<a>Adición</a>
									</li>
									<li>
										<a>Reducción</a>
                                    </li>
                                    <li>
										<a>Aplazamiento</a>
									</li>
                                    <li>
										<a>Desaplazamiento</a>
									</li>
                                    <li>
										<a>Traslados</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <span>Tesorería</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="#">
                                    Reporte
                                </a>
                            </li>                            
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-building" aria-hidden="true"></i>
                            <span>Contabilidad</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="<?php echo $host;?>contabilidad/definir-plan-contable">
                                    Definir plan contable
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $host; ?>contabilidad/definir-periodo-contable">
                                    Definir periodos contables
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Maestro de terceros
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Registros contables
                                </a>
                            </li>
                            <!--<li>
                                <a href="#">
                                    Reportes financieros
                                </a>
                            </li>-->
                        </ul>
                    </li>                    
                </ul>
            </nav>
            <hr class="separator" />            
        </div>
    </div>
</aside>
<!-- end: sidebar -->