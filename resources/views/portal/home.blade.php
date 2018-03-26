@extends('layouts.app')

@section('content')
<div class="page-head">
    <div class="text-center">
        <h1 style="font-weight:500">
           Bem-vindo ao Portal Aluno/Professor
       </h1>
       <p class="lead">Tudo bem com você? Espero que sim<i class="fa fa-smile-o fa-3"></i>.</p>
   </div>
</div>
<!-- page head end-->

<div class="container">
    <div class="col col-md-3">      
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        Dashboard</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <ul class="list-group">
                        <li class="list-group-item"><span class="badge">0</span> <a href="">Atividades</a></li>
                        <li class="list-group-item"><span class="badge">0</span> Deleted</li>
                        <li class="list-group-item"><span class="badge">0</span> Reported</li>
                    </ul>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        Blog</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <ul class="list-group">
                        <li class="list-group-item"><span class="badge">12</span> New</li>
                        <li class="list-group-item"><span class="badge">5</span> Deleted</li>
                    </ul>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        Configurações</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <ul class="list-group">
                        <li class="list-group-item"><span class="badge">1</span> Users Reported</li>
                        <li class="list-group-item"><span class="badge">5</span> User Waiting Activation</li>
                    </ul>
                </div>
            </div>
        </div> 

        <div class="profile-panel">
            <div class="col-md-12">
                <div class="row">
                    <div class="panel-default panel widget widget-shadow text-center">
                        <div class="widget-header">
                            <div class="widget-header-content">
                                <!--<img width=100px src="http://projetovisaoambiental.local:8000/uploads/images/avatar-110320182212.jpg">-->
                                <h4 class="profile-user">{{ Auth::user()->name }}</h4>
                                <span class="label label-success">Aluno</span>
                                <p class="help-block">Ciências Contábeis</p>
                            </div>
                        </div>
                        <div class="widget-footer">
                            <div class="row no-space">
                                <strong class="profile-stat-count text-success"> 1 </strong>
                                <span> Período </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>



    </div>
    <div class="col-md-9">
        <div class="alert alert-warning">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
        ut labore et dolore magna aliqua. Ut enim ad minim</div>

        <h3 class="text-center">Material Didático</h3>

        <!--<div class="row text-center">
            <div class="col-sm-6 col-md-4">
                <div class="tile">
                    <h3 class="tile-title padding-bottom-30 padding-top-40">Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="tile">
                    <h3 class="tile-title padding-bottom-30 padding-top-40">Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="tile">
                    <h3 class="tile-title padding-bottom-30 padding-top-40">Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
        </div>-->
        <table class="table forum table-striped">
            <thead>
                <tr>
                    <th class="cell-stat"></th>
                    <th>
                        Tópicos
                    </th>
                    <th class="cell-stat-2x hidden-xs hidden-sm">Data Aula</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alunoprofs as $k => $alunoprof)
                <tr>
                    <td class="text-center">
                        <i class="fa fa-file fa-2x"></i>
                    </td>
                    <td>
                        <h4>
                            <a href="#">{!! $alunoprof->title !!}</a>
                            <br>
                            <small class="help-block"> Por
                                <a href="#">{!! $alunoprof->author->name !!}</a>
                                <!--3 mesesatrás--> em 
                                <span class="label label-primary">
                                    {!! $alunoprof->cursos->pluck('name') !!}
                                </span>
                                <br>
                                Faculdade
                                <span class="label label-success">
                                   {!! $alunoprof->faculdades->pluck('name') !!}
                                </span>
                            </small>
                        </h4>
                    </td>

                    <td class="hidden-xs hidden-sm">
                        <small><i class="fa fa-clock-o"></i> {!! $alunoprof->data_aula !!} </small>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
</div>

@endsection
