<div class="navbar-custom">
    <div class="container" style="display: flex;justify-content: center;">
        <div id="navigation">
            <!-- Navigation Menu-->
            <?php
                $projectsCasas = Project::where('casas', 1)->get();
                $projectsApto = Project::where('apartamentos', 1)->get();
                $countHomes = Home::count();
            ?>
            <ul class="navigation-menu">
                <li>
                    <a href="/calculoCuotas" class="waves-effect waves-light" onclick="javascript:$('#myPleaseWait').modal('show');">
                        <i class="fa fa-home "></i>
                        <span>Casas<span class="badge badge-xs badge-danger">{{$countHomes}}</span></span> 
                    </a>
                </li>
                <li class="has-submenu">
                    <a href="#" class="waves-effect waves-light"><i class="fa fa-building"></i> <span> Proyectos </span> </a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li>
                                    <span>Casas</span>
                                </li>
                                @foreach($projectsCasas as $casa)
                                    <li><a onclick="javascript:$('#myPleaseWait').modal('show');" href="/proyecto/{{$casa->id}}/info">{{$casa->nombre}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li>
                                    <span>Apartamentos</span>
                                </li>
                                @foreach($projectsApto as $apto)
                                    <li><a onclick="javascript:$('#myPleaseWait').modal('show');" href="/proyecto/{{$apto->id}}/info">{{$apto->nombre}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- End navigation menu        -->
        </div>
    </div>
</div>
    <!-- End Navigation Bar           



        
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    
                    <div id="sidebar-menu">
                        <ul>

                          <li class="text-muted menu-title">menu</li>

                            <li>
                                <a href="/clients" class="waves-effect waves-light" onclick="javascript:$('#myPleaseWait').modal('show');"><i class="md icon-people "></i> <span> Clientes </span> </a>
                            </li>
                            <li>
                                <a href="/calculoCuotas" class="waves-effect waves-light" onclick="javascript:$('#myPleaseWait').modal('show');"><i class="fa fa-calculator "></i> <span> Calculo de Cuotas </span> </a>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect waves-light"><i class="md icon-notebook"></i> <span> Reportes </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="/reporte/consolidado" onclick="javascript:$('#myPleaseWait').modal('show');">Consolidado</a></li>
                                    <li><a href="/reporte/detallado" onclick="javascript:$('#myPleaseWait').modal('show');"> Detallado</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="/loan/historico" class="waves-effect waves-light" onclick="javascript:$('#myPleaseWait').modal('show');"><i class="fa fa-history "></i> <span> Historico </span> </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->