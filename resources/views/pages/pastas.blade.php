@extends('layouts.primer')

@section('content')
    <div class="container-fluid" id="home-body">
        <div class="row">
            <h1 class="title">Arquivos</h1>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        {{ Form::label('cliente', 'Cliente: ') }}
                        {{ Form::select('cliente', $clientes, null, ['class'=>'form-control', 'data-token'=> csrf_token()]) }}
                    </div><!--/.col-md-6-->
                    <div class="col-md-6">
                        {{ Form::label('processo', 'Processo: ') }}
                        <select name="processo" id="processo" class="form-control" data-token="{{ csrf_token() }}">
                        </select>
                    </div>
                </div><!--/.row-->
            </div><!--/.panel-heading-->

            <div class="panel-body">
                <form action="upload" id="upload" enctype="multipart/form-data">
                <span class="btn btn-default fileinput-button">
                    <i class="fa fa-plus"></i>
                    <span>Add files...</span>
                    <input id="fileupload" type="file" name="files[]" multiple data-token="{{ csrf_token() }}">
                    </span>
                </form>
                <div id="progress" class="progress">
                    <div class="progress-bar progress-bar-primary progress-bar-striped active"></div>
                </div>
                <!-- The container for the uploaded files -->
                <div id="files" class="files"></div>
                <table class="table-borderless table-hover table-striped table-responsive" style="width: 100%;">
                    <tbody id="items_processo"></tbody>
                </table>
            </div>
        </div><!--/.panel-default-->
    </div><!--/.container-->
</div><!--/.#app-->
@endsection

@section('script')
@parent
    <script src="{{ asset('js/pastas.js') }}"></script>
    <script src="{{ asset('js/jquery-file-upload.js') }}"></script>
@stop