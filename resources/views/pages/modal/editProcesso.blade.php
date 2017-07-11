@extends('layouts.primer')

@section('content')
<div class="container-fluid" id="home-body">
<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $processos->numero_processo }} - {{ $processos->nome_processo }}</h4>
                </div>
                {{ Form::open(['url'=>"$processos->id/updateProcesso"]) }}
                <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                            {{ Form::label('numero_processo', 'Número do Processo*: ') }}
                            {{ Form::text ('numero_processo', $processos->numero_processo, ['class'=>'form-control', 'required']) }}
                    </div>

                    <div class="form-group col-md-6">
                        {{ Form::label('nome_processo', 'Nome do Processo*: ') }}
                        {{ Form::text ('nome_processo', $processos->nome_processo, ['class'=>'form-control', 'required']) }}
                    </div>
                </div>
                    
                    <div class="form-group">
                        {{ Form::label('cliente_id', 'Requerinte*: ') }}
                        {{ Form::select('cliente_id', $clientes, $processos->clientes_id, ['class'=>'form-control', 'required']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('requerendo', 'Requerendo: ') }}
                        {{ Form::text('requerendo', $processos->requerendo, ['class'=>'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('vara', 'Vara*: ') }}
                        {{ Form::text('vara', $processos->vara, ['class'=>'form-control', 'required']) }}
                    </div>

                    <div class="form-group row">
                        <div class="col-md-7">
                            {{ Form::label('comarca', 'Comarca: ') }}
                            {{ Form::text('comarca', $processos->comarca, ['class'=>'form-control']) }}
                        </div>
                        <div class="col-md-5">
                            {{ Form::label('valor_causa', 'Valor da Causa*:') }}
                            {{ Form::text('valor_causa', $processos->valor_causa, ['class'=>'form-control', 'required']) }}
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
@endsection