<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title">Editar -<?php echo e($cliente->nome); ?></h4>
                </div>
                <?php echo e(Form::open(['url'=>"/$cliente->id/updateCliente"])); ?>

               <div class="modal-body">
                    <div class="form-group">
                        <?php echo e(Form::label('nome', 'Nome:*')); ?>

                        <?php echo e(Form::text('nome', $cliente->nome, ['class'=>'form-control', 'required'])); ?>

                    </div>

                    <div class="form-group">
                        <?php echo e(Form::label('email', 'Email:*')); ?>

                        <?php echo e(Form::email('email', $cliente->email, ['class'=>'form-control', 'required'])); ?>

                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <?php echo e(Form::label('telefone', 'Telefone:*')); ?>

                            <?php echo e(Form::text('telefone', $cliente->telefone, ['class'=>'form-control', 'required'])); ?>

                        </div>

                        <div class="form-group col-md-6">
                            <?php echo e(Form::label('celular', 'Celular:')); ?>

                            <?php echo e(Form::text('celular', $cliente->celular, ['class'=>'form-control'])); ?>

                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <?php echo e(Form::label('documento', 'CPF/CNPJ:*')); ?>

                            <?php echo e(Form::text('documento', $cliente->documento, ['class'=>'form-control', 'required'])); ?>

                        </div>

                        <div class="form-group col-md-6">
                            <?php echo e(Form::label('rg', 'RG:')); ?>

                            <?php echo e(Form::text('rg', $cliente->rg, ['class'=>'form-control'])); ?>

                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="form-group col-md-3">
                            <?php echo e(Form::label('cep', 'CEP:*')); ?>

                            <?php echo e(Form::text('cep', $cliente->cep, ['class'=>'form-control', 'required'])); ?>

                        </div>
                            
                        <div class="form-group col-md-5">
                            <?php echo e(Form::label('municipio', 'Cidade:')); ?>

                            <?php echo e(Form::text('municipio', $cliente->municipio, ['class'=>'form-control'])); ?>

                        </div>

                        <div class="form-group col-md-4">
                            <?php echo e(Form::label('uf', 'UF:')); ?>

                            <?php echo e(Form::text('uf', $cliente->uf, ['class'=>'form-control'])); ?>

                        </div>

                    </div>
                    
                    <div class="form-group">
                        <?php echo e(Form::label('endereco', 'Endereço:')); ?>

                        <?php echo e(Form::text('endereco', $cliente->endereco, ['class'=>'form-control'])); ?>

                    </div>
                    </div>
                      
                    <div class="form-group">
                        <?php if($errors->any()): ?>
                            <ul class="alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class="modal-footer">
                        <?php echo e(Form::submit('Salvar', ['class'=>'btn btn-primary'])); ?>

                    </div>
                       <?php echo e(Form::close()); ?>

               </div>
           </div>
       </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.primer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>