<?php $__env->startSection('content'); ?>
<div class="container" id="home-body">
    
    <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a>
    <div class="modal fade" id="modal-id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Adicionar um novo Processo</h4>
                </div>
                <div class="modal-body">
                    <?php echo e(Form::open()); ?>

                        <div class="form-group">
                            <?php echo e(Form::label('requerinte', 'Em nome de: ')); ?>

                            <?php echo e(Form::select('requerinte', [$clientes], null, ['class'=>'form-control'])); ?>

                        </div>
                    <?php echo e(Form::close()); ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.primer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>