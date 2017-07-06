@extends('layouts.primer')

@section('content')
<div class="container-fluid">
	<div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title">Editar -{{ $cliente->nome}}</h4>
                </div>
                {{ Form::open(['url'=>"/$cliente->id/updateCliente"]) }}
               <div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('nome', 'Nome:*') }}
                        {{ Form::text('nome', $cliente->nome, ['class'=>'form-control', 'required']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('email', 'Email:*') }}
                        {{ Form::email('email', $cliente->email, ['class'=>'form-control', 'required']) }}
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            {{ Form::label('telefone', 'Telefone:*') }}
                            {{ Form::text('telefone', $cliente->telefone, ['class'=>'form-control', 'required']) }}
                        </div>

                        <div class="form-group col-md-6">
                            {{ Form::label('celular', 'Celular:') }}
                            {{ Form::text('celular', $cliente->celular, ['class'=>'form-control']) }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            {{ Form::label('documento', 'CPF/CNPJ:*') }}
                            {{ Form::text('documento', $cliente->documento, ['class'=>'form-control', 'required']) }}
                        </div>

                        <div class="form-group col-md-6">
                            {{ Form::label('rg', 'RG:') }}
                            {{ Form::text('rg', $cliente->rg, ['class'=>'form-control']) }}
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="form-group col-md-3">
                            {{ Form::label('cep', 'CEP:*') }}
                            {{ Form::text('cep', $cliente->cep, ['class'=>'form-control', 'required']) }}
                        </div>
                            
                        <div class="form-group col-md-5">
                            {{ Form::label('municipio', 'Cidade:') }}
                            {{ Form::text('municipio', $cliente->municipio, ['class'=>'form-control']) }}
                        </div>

                        <div class="form-group col-md-4">
                            {{ Form::label('uf', 'UF:') }}
                            {{ Form::text('uf', $cliente->uf, ['class'=>'form-control']) }}
                        </div>

                    </div>
                    
                    <div class="form-group">
                        {{ Form::label('endereco', 'Endereço:') }}
                        {{ Form::text('endereco', $cliente->endereco, ['class'=>'form-control']) }}
                    </div>
                    </div>
                      
                    <div class="form-group">
                        @if($errors->any())
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class="modal-footer">
                        {{ Form::submit('Salvar', ['class'=>'btn btn-primary']) }}
                    </div>
                       {{ Form::close() }}
               </div>
           </div>
       </div>
    </div>
@endsection