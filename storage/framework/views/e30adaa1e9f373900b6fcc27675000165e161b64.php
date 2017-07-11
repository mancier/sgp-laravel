

<?php $__env->startSection('content'); ?>
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
            <?php $__currentLoopData = $processos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $processo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($processo->numero_processo); ?></td>
                    <td><?php echo e($processo->cliente->nome); ?></td>
                    <td><?php echo e($processo->vara); ?></td>
                    <td><?php echo e($processo->valor_causa); ?></td>
                    <td>
                        <div class="row">
                            <div class="col-md-6"><a href="<?php echo e(route('processos.alt', ['id'=>$processo->id])); ?>" class="btn btn-success" style="width: 100%"><i class="fa fa-edit" aria-hidden="true"></i></a></div>
                            <div class="col-md-6"><a href="<?php echo e(route('processos.destroy', ['id'=>$processo->id])); ?>" class="btn btn-danger" style="width: 100%"><i class="fa fa-trash" aria-hidden="true"></i></a></div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <?php echo e(Form::open(['url'=>'processo/store'])); ?>

                <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <?php echo e(Form::label('numero_processo', 'Número do Processo*: ')); ?>

                        <?php echo e(Form::text ('numero_processo', null, ['class'=>'form-control', 'required', 'maxlength'=>'19'])); ?>

                    </div>

                    <div class="form-group col-md-6">
                        <?php echo e(Form::label('nome_processo', 'Nome da Ação*: ')); ?>

                        <?php echo e(Form::text ('nome_processo', null, ['class'=>'form-control', 'required'])); ?>

                    </div>
                </div>
                    
                    <div class="form-group">
                        <?php echo e(Form::label('clientes_id', 'Requerente*: ')); ?>

                        <?php echo e(Form::select('clientes_id', $clientes, null, ['class'=>'form-control', 'required'])); ?>

                    </div>

                    <div class="form-group">
                        <?php echo e(Form::label('requerendo', 'Requerido: ')); ?>

                        <?php echo e(Form::text('requerendo', null, ['class'=>'form-control'])); ?>

                    </div>

                    <div class="form-group">
                        <?php echo e(Form::label('vara', 'Vara*: ')); ?>

                        <?php echo e(Form::text('vara', null, ['class'=>'form-control', 'required'])); ?>

                    </div>

                    <div class="form-group row">
                        <div class="col-md-7">
                            <?php echo e(Form::label('comarca', 'Comarca: ')); ?>

                            <?php echo e(Form::text('comarca', null, ['class'=>'form-control'])); ?>

                        </div>
                        <div class="col-md-5">
                            <?php echo e(Form::label('valor_causa', 'Valor da Causa:')); ?>

                            <?php echo e(Form::text('valor_causa', null, ['class'=>'form-control'])); ?>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <?php echo e(Form::submit('Salvar', ['class'=>'btn btn-primary'])); ?>

                    </div>
                </div>
                <?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.primer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>