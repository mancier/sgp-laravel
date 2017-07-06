@extends('layouts.primer')

@section('content')
<div class="container-fluid" id="home-body">
    <div class="row">
        <h1 class="title">Processos</h1>
    </div>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nº do Processo</th>
                <th>Requirinte</th>
                <th>Vara</th>
                <th>Valor</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach($processos as $processo)
                <tr>
                    <td>{{ $processo->numero_processo }}</td>
                    <td>{{ $processo->cliente->nome }}</td>
                    <td>{{ $processo->vara }}</td>
                    <td>{{ $processo->valor_causa }}</td>
                    <td>
                        <div class="row">
                            <div class="col-md-6"><a href="{{ route('processos.alt', ['id'=>$processo->id]) }}" class="btn btn-success" style="width: 100%"><i class="fa fa-edit" aria-hidden="true"></i></a></div>
                            <div class="col-md-6"><a href="{{ route('processos.destroy', ['id'=>$processo->id]) }}" class="btn btn-danger" style="width: 100%"><i class="fa fa-trash" aria-hidden="true"></i></a></div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i></a>
    <div class="modal fade" id="modal-id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Adicionar um novo Processo</h4>
                </div>
                {{ Form::open(['url'=>'processo/store']) }}
                <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        {{ Form::label('numero_processo', 'Número do Processo*: ') }}
                        {{ Form::text ('numero_processo', null, ['class'=>'form-control', 'required', 'maxlength'=>'19']) }}
                    </div>

                    <div class="form-group col-md-6">
                        {{ Form::label('nome_processo', 'Nome da Ação*: ') }}
                        {{ Form::text ('nome_processo', null, ['class'=>'form-control', 'required']) }}
                    </div>
                </div>
                    
                    <div class="form-group">
                        {{ Form::label('clientes_id', 'Requerente*: ') }}
                        {{ Form::select('clientes_id', $clientes, null, ['class'=>'form-control', 'required']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('requerendo', 'Requerido: ') }}
                        {{ Form::text('requerendo', null, ['class'=>'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('vara', 'Vara*: ') }}
                        {{ Form::text('vara', null, ['class'=>'form-control', 'required']) }}
                    </div>

                    <div class="form-group row">
                        <div class="col-md-7">
                            {{ Form::label('comarca', 'Comarca: ') }}
                            {{ Form::text('comarca', null, ['class'=>'form-control']) }}
                        </div>
                        <div class="col-md-5">
                            {{ Form::label('valor_causa', 'Valor da Causa:') }}
                            {{ Form::text('valor_causa', null, ['class'=>'form-control']) }}
                        </div>
                    </div>

                    <div class="modal-footer">
                        {{ Form::submit('Salvar', ['class'=>'btn btn-primary']) }}
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection