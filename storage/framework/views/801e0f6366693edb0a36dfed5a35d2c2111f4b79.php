<?php $__env->startSection('content'); ?>
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
                        <?php echo e(Form::label('cliente', 'Cliente: ')); ?>

                        <?php echo e(Form::select('cliente', $clientes, null, ['class'=>'form-control', 'data-token'=> csrf_token()])); ?>

                    </div><!--/.col-md-6-->
                    <div class="col-md-6">
                        <?php echo e(Form::label('processo', 'Processo: ')); ?>

                        <select name="processo" id="processo" class="form-control" data-token="<?php echo e(csrf_token()); ?>">
                        </select>
                    </div>
                </div><!--/.row-->
            </div><!--/.panel-heading-->

            <div class="panel-body">
                <form action="upload" id="upload" enctype="multipart/form-data">
                    <input type="file" name="file[]" multiple><br>
                    <input type="submit" data-token="<?php echo e(csrf_token()); ?>">
                </form>
                <table class="table-borderless table-hover table-striped table-responsive" style="width: 100%;">
                    <tbody id="items_processo"></tbody>
                </table>
            </div>
        </div><!--/.panel-default-->

        <vc-pasta></vc-pasta>

    </div><!--/.container-->
</div><!--/.#app-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
    <script src="<?php echo e(asset('js/pastas.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vue.js')); ?>"></script>>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.primer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>