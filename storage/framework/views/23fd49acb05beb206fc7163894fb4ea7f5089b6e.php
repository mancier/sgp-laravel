<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
<meta http-equiv="Content-Type">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo e(config('app.nome', $pagina_nome)); ?></title>

<!--Importação-->
<?php $__env->startSection('script'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('jquery-file-upload/css/jquery.fileupload.css')); ?>">

<script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script>
<script src="https://use.fontawesome.com/1bc0aba356.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="<?php echo e(asset('jquery-file-upload/js/jquery.fileupload.js')); ?>"></script>
<script src="<?php echo e(asset('jquery-file-upload/js/vendor/jquery.ui.widget.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script src="<?php echo e(asset('js/mask.js')); ?>"></script>
<?php echo $__env->yieldSection(); ?>
</head>

<body>
<div id="app">
	<nav class="nav-lateral">
		<ul class="list-group">
			<li class="list-group-item img-responsive">
				<span class=""><img src="<?php echo e(asset('img/icone.png')); ?>" alt="Logo" width="100%"></span>
			</li>
			
			<a href="./home">
				<li class="list-group-item item">
					<span class="menu-text">Home </span>
					<i class="fa fa-home" aria-hidden="true"></i>
				</li>
			</a>
			
			<a href="./processos">
				<li class="list-group-item item">
					<span class="menu-text">Processos </span>
					<i class="fa fa-gavel" aria-hidden="true"></i>
				</li>
			</a>

			<a href="./movimentacao">
				<li class="list-group-item item">
					<span class="menu-text">Financeiro </span>
					<i class="fa fa-university" aria-hidden="true"></i>
				</li>
			</a>

			<a href="./pastas">
				<li class="list-group-item item">
					<span class="menu-text">Pastas</span>
					<i class="fa fa-paste" aria-hidden="true"></i>
				</li>
			</a>

			<a href="./clientes">
				<li class="list-group-item item">
					<span class="menu-text">Clientes </span>
					<i class="fa fa-user" aria-hidden="true"></i>
				</li>
			</a>
		</ul>

		<a href="" class="btn btn-danger btn-lg sair" role="button"><span class="fa fa-power-off"></span></a>
	
	</nav>

	<?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html>
