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
        </div> 




    </div>
    <div class="col-md-9">
        <div class="alert alert-warning">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
        ut labore et dolore magna aliqua. Ut enim ad minim</div>

        <h3 class="text-center">Material Didático</h3>

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
                @foreach($alunoprofs as $alunoprof)
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
                                
                                    @foreach ($alunoprof['cursos'] as $k => $curso)
                                    <span class="label label-primary"> 
                                        {!! $curso->name !!}
                                    </span> 
                                    @endforeach                                    
                              </small>
                              <small class="help-block">
                              Faculdade
                                
                                    @foreach ($alunoprof['faculdades'] as $k => $faculdades) 
                                    <span class="label label-success">
                                   {!! $faculdades->name !!}
                               </span> 
                                    @endforeach
                               
                                
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
