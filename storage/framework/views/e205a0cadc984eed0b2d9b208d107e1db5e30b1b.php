<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
<meta http-equiv="Content-Type">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo e(config('app.nome', $pagina_nome)); ?></title>

<!--Importação-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
<script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script>
<script src="https://use.fontawesome.com/1bc0aba356.js"></script>
</head>

<body>
<div id="app">
	<nav class="nav-lateral">
		<ul class="list-group">
			<li class="list-group-item img-responsive"><span class=""><img src="<?php echo e(asset('img/icone.png')); ?>" alt="Logo" width="100%"></span></li>
			<a href="./home"><li class="list-group-item item"><span class="menu-text">Home <span class="fa fa-home" aria-hidden="true"></span></span></li></a>
			<a href="./processos"><li class="list-group-item item"><span class="menu-text">Processos <span class="fa fa-gavel" 	aria-hidden="true"></span></span></li></a>
			<a href="./peticao"><li class="list-group-item item"><span class="menu-text">Petições <span class="fa fa-tasks" 	aria-hidden="true"></span></span></li></a>
			<a href="./usuario"><li class="list-group-item item"><span class="menu-text">Usuários <span class="fa fa-user" aria-hidden="true"></span></span></li></a>
		</ul>
		<a href="" class="btn btn-danger btn-lg sair" role="button"><span class="fa fa-power-off"></span></a>
	</nav>

	<?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html>
