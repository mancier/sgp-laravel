@extends ('layouts.primer')

@section('content')
<div class="container-fluid" id="home-body">
    <div class="row">
        <h1 class="title">Clientes</h1>
    </div>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF/CNPJ</th>
                <th>Telefone</th>
                <th>CEP</th>
                <th>Opções</th>
            </tr>
        </thead>

        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->documento}}</td>
                <td>{{$cliente->telefone}}</td>
                <td>{{$cliente->cep}}</td>
                <td>
                    <div class="row">
                        <div class="col-md-12"><a href="{{ route('cliente.edit', ['id'=>$cliente->id]) }}" class="btn btn-success" id="edit" style="width: 100%" data-token="{{ csrf_token() }}"><i class="fa fa-edit" aria-hidden="true"></i></a></div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!--Trigger-->
    <a class="btn btn-primary" data-toggle="modal" href='#adicionar-cliente'><i class="fa fa-plus"></i></span></a>
   
   
   <!--Modal=>Cadastro-->
   <div class="modal fade" id="adicionar-cliente">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   <h4 class="modal-title">Cadastro de um novo Usuário</h4>
                </div>
                {{ Form::open(['url'=>'/cliente/store']) }}
               <div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('nome', 'Nome:*') }}
                        {{ Form::text('nome', null, ['class'=>'form-control', 'required']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('email', 'Email:*') }}
                        {{ Form::email('email', null, ['class'=>'form-control', 'required']) }}
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            {{ Form::label('telefone', 'Telefone:*') }}
                            {{ Form::text('telefone', null, ['class'=>'form-control', 'required']) }}
                        </div>

                        <div class="form-group col-md-6">
                            {{ Form::label('celular', 'Celular:') }}
                            {{ Form::text('celular', null, ['class'=>'form-control']) }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            {{ Form::label('documento', 'CPF/CNPJ:*') }}
                            {{ Form::text('documento', null, ['class'=>'form-control', 'required']) }}
                        </div>

                        <div class="form-group col-md-6">
                            {{ Form::label('rg', 'RG:') }}
                            {{ Form::text('rg', null, ['class'=>'form-control']) }}
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="form-group col-md-3">
                            {{ Form::label('cep', 'CEP:*') }}
                            {{ Form::text('cep', null, ['class'=>'form-control', 'required']) }}
                        </div>
                            
                        <div class="form-group col-md-5">
                            {{ Form::label('municipio', 'Cidade:') }}
                            {{ Form::text('municipio', null, ['class'=>'form-control', 'readonly']) }}
                        </div>

                        <div class="form-group col-md-4">
                            {{ Form::label('uf', 'UF:') }}
                            {{ Form::text('uf', null, ['class'=>'form-control', 'readonly']) }}
                        </div>

                    </div>
                    
                    <div class="form-group">
                        {{ Form::label('endereco', 'Endereço:') }}
                        {{ Form::text('endereco', null, ['class'=>'form-control', 'readonly']) }}
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

</div>
@endsection