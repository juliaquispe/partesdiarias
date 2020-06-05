@extends ("theme.$theme.layout")
@section('contenido')
    <div style="text-align: center">
        <font face="Cooper Black" size="6" color="#088A68" >Fundacion De Software Libre</font><br>
        <font face="Algerian" size="5" color="teal"><b>Sistema de Partes Diarias</b></font>
    </div>
    <div class="image" style="text-align: center">
        <img src="{{asset("assets\images/policia.jpg")}}" class="img-circle elevation-2" height="250px" alt="User Image" >
    </div>  <br>
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$A}}</h3>
                        <p><b>Usuario</b></p>
                    </div>
                    <a href="{{route('usuario')}}">
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                    </a>
                        <div class="card card-primary collapsed-card">
                            <div class="card-header">
                                <h5 class="card-title">Descripcion</h5>                   
                                <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                </button>
                                </div>
                            </div>
                            <div class="card-body">
                               <h6 style="color:rgb(31, 95, 121)">Son los que tienen acceso al sistema.</h6>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$B}}</h3>
                        <p><b>Personal</b></p>
                    </div>
                    <a href="{{route('personal')}}">
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                    </a>
                    <div class="card card-primary collapsed-card">
                        <div class="card-header" style="background-color: green">
                            <h5 class="card-title">Descripcion</h5>                   
                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 style="color:rgb(9, 99, 17)">Son todos los personales de la policia.</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{$C}}</h3>
                        <p><b>Unidad</b></p>
                    </div>
                    <a href="{{route('unidad')}}">
                        <div class="icon">
                            <i class="nav-icon fas fa-chart-pie"></i>
                        </div>
                    </a>
                    <div class="card card-primary collapsed-card">
                        <div class="card-header" style="background-color: rgb(185, 161, 23)">
                            <h5 class="card-title">Descripcion</h5>                   
                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 style="color:rgb(136, 145, 22)">Son las diferentes unidades que existe en la policia.</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$D}}</h3>
                        <p><b>Rol</b></p>
                    </div>
                    <a href="{{route('rol')}}">
                        <div class="icon">
                            <i class="nav-icon fas fa-list-ul"></i>
                        </div>
                    </a>
                    <div class="card card-primary collapsed-card">
                        <div class="card-header" style="background-color: rgb(150, 30, 14)">
                            <h5 class="card-title">Descripcion</h5>                   
                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 style="color:rgb(90, 16, 16)">Es el papel o función que alguien o algo representa o desempeña.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
@endsection