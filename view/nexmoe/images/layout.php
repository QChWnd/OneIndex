<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<title><?php e($title.' - '.config('site_name'));?></title>
	<?php e(config('loadmdui_css'));?>
	<?php e(config('loadmdui_js'));?>
</head>
<body class="mdui-theme-primary-<?php e(config('nexmoe_mdui-theme-primary_color'));?> mdui-theme-accent-<?php e(config('nexmoe_mdui-theme-accent_color'));?>">
	<header class="mdui-appbar mdui-color-theme">
		<div class="mdui-toolbar mdui-container">
			<a href="/" class="mdui-typo-headline"><?php e(config('site_name'));?></a>
			<?php foreach((array)$navs as $n=>$l):?>
			<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
			<a href="<?php e($l);?>"><?php e($n);?></a>
			<?php endforeach;?>
			<!--<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>-->
		</div>
	</header>
	
	<div class="mdui-container">
    	<?php view::section('content');?>
  	</div>
</body>
</html>
