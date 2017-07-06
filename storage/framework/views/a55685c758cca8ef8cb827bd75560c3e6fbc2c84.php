<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="home-body">
    <div class="row">
        <h1 class="title">Usuário</h1>
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
        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($cliente->nome); ?></td>
                <td><?php echo e($cliente->email); ?></td>
                <td><?php echo e($cliente->documento); ?></td>
                <td><?php echo e($cliente->telefone); ?></td>
                <td><?php echo e($cliente->cep); ?></td>
                <td></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <?php echo e(Form::open(['url'=>'cliente/store'])); ?>

               <div class="modal-body">
                    <div class="form-group">
                        <?php echo e(Form::label('nome', 'Nome:*')); ?>

                        <?php echo e(Form::text('nome', null, ['class'=>'form-control', 'required'])); ?>

                    </div>

                    <div class="form-group">
                        <?php echo e(Form::label('email', 'Email:*')); ?>

                        <?php echo e(Form::email('email', null, ['class'=>'form-control'], 'required')); ?>

                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <?php echo e(Form::label('telefone', 'Telefone:*')); ?>

                            <?php echo e(Form::text('telefone', null, ['class'=>'form-control'], 'required')); ?>

                        </div>

                        <div class="form-group col-md-6">
                            <?php echo e(Form::label('celular', 'Celular:')); ?>

                            <?php echo e(Form::text('celular', null, ['class'=>'form-control'])); ?>

                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <?php echo e(Form::label('cpf_cnpj', 'CPF/CNPJ:*')); ?>

                            <?php echo e(Form::text('cpf_cnpj', null, ['class'=>'form-control', 'required'])); ?>

                        </div>

                        <div class="form-group col-md-6">
                            <?php echo e(Form::label('rg', 'RG:')); ?>

                            <?php echo e(Form::text('rg', null, ['class'=>'form-control'])); ?>

                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="form-group col-md-3">
                            <?php echo e(Form::label('cep', 'CEP:*')); ?>

                            <?php echo e(Form::text('cep', null, ['class'=>'form-control']), 'required'); ?>

                        </div>
                            
                        <div class="form-group col-md-5">
                            <?php echo e(Form::label('cidade', 'Cidade:')); ?>

                            <?php echo e(Form::text('cidade', null, ['class'=>'form-control', 'required'])); ?>

                        </div>

                        <div class="form-group col-md-4">
                            <?php echo e(Form::label('estado', 'UF:')); ?>

                            <?php echo e(Form::text('estado', null, ['class'=>'form-control'])); ?>

                        </div>

                    </div>
                    
                    <div class="form-group">
                        <?php echo e(Form::label('endereco', 'Endereço:')); ?>

                        <?php echo e(Form::text('endereco', null, ['class'=>'form-control'])); ?>

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

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.primer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>