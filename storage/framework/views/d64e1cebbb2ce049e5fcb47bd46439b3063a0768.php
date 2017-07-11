

<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="home-body">
<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo e($processos->numero_processo); ?> - <?php echo e($processos->nome_processo); ?></h4>
                </div>
                <?php echo e(Form::open(['url'=>"$processos->id/updateProcesso"])); ?>

                <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                            <?php echo e(Form::label('numero_processo', 'Número do Processo*: ')); ?>

                            <?php echo e(Form::text ('numero_processo', $processos->numero_processo, ['class'=>'form-control', 'required'])); ?>

                    </div>

                    <div class="form-group col-md-6">
                        <?php echo e(Form::label('nome_processo', 'Nome do Processo*: ')); ?>

                        <?php echo e(Form::text ('nome_processo', $processos->nome_processo, ['class'=>'form-control', 'required'])); ?>

                    </div>
                </div>
                    
                    <div class="form-group">
                        <?php echo e(Form::label('cliente_id', 'Requerinte*: ')); ?>

                        <?php echo e(Form::select('cliente_id', $clientes, $processos->clientes_id, ['class'=>'form-control', 'required'])); ?>

                    </div>

                    <div class="form-group">
                        <?php echo e(Form::label('requerendo', 'Requerendo: ')); ?>

                        <?php echo e(Form::text('requerendo', $processos->requerendo, ['class'=>'form-control'])); ?>

                    </div>

                    <div class="form-group">
                        <?php echo e(Form::label('vara', 'Vara*: ')); ?>

                        <?php echo e(Form::text('vara', $processos->vara, ['class'=>'form-control', 'required'])); ?>

                    </div>

                    <div class="form-group row">
                        <div class="col-md-7">
                            <?php echo e(Form::label('comarca', 'Comarca: ')); ?>

                            <?php echo e(Form::text('comarca', $processos->comarca, ['class'=>'form-control'])); ?>

                        </div>
                        <div class="col-md-5">
                            <?php echo e(Form::label('valor_causa', 'Valor da Causa*:')); ?>

                            <?php echo e(Form::text('valor_causa', $processos->valor_causa, ['class'=>'form-control', 'required'])); ?>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.primer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>