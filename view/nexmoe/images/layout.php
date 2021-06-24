<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="theme-color" content="<?php e(config('nexmoe_theme-color'));?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<title><?php e($title.' - '.config('site_name'));?></title>
	<link rel="icon" href="<?php e(config('favicon'));?>">
	<link rel="shortcut icon" href="<?php e(config('favicon'));?>">
	<?php e(config('loadmdui_css'));?>
	<?php e(config('loadmdui_js'));?>
	<?php e(config('loadnprogress_css'));?>
	<?php e(config('loadnprogress_js'));?>
	<?php e(config('nexmoe_ext'));?>
</head>
<body class="mdui-theme-layout-<?php e(config('nexmoe_mdui-theme-layout'));?> mdui-theme-primary-<?php e(config('nexmoe_mdui-theme-primary_color'));?> mdui-theme-accent-<?php e(config('nexmoe_mdui-theme-accent_color'));?>">
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
	<style><?php e(config('nprogress_style'));?><?php e(config('nexmoe_layout_style'));?></style>
        <script>
                NProgress.start();
                setTimeout(function () {
                        NProgress.done();
                        $(".fade").removeClass("out");
                }, 3000);
        </script>
</body>
</html>
