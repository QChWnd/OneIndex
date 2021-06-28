<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="theme-color" content="<?php e(config('nexmoe_theme-color'));?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<?php if($path != '/'):?>
	<title><?php e($title.' - '.config('site_name'));?></title>
	<?php else:?>
	<title><?php e(config('site_name').' - '.config('site_descr'));?></title>
	<?php endif;?>
	<link rel="icon" href="<?php e(config('favicon'));?>">
	<link rel="shortcut icon" href="<?php e(config('favicon'));?>">
	<title><?php e(config('site_name'));?></title>
	<?php e(config('loadmdui_css'));?>
	<?php e(config('loadmdui_js'));?>
	<?php e(config('loadjquery'));?>
	<?php e(config('loadnprogress_css'));?>
	<?php e(config('loadnprogress_js'));?>
	<?php e(config('loadJustified-Gallery_css'));?>
	<?php e(config('loadJustified-Gallery_js'));?>
</head>
	<?php e(config('nexmoe_ext'));?>
<body class="mdui-theme-layout-<?php e(config('nexmoe_mdui-theme-layout'));?> mdui-theme-primary-<?php e(config('nexmoe_mdui-theme-primary_color'));?> mdui-theme-accent-<?php e(config('nexmoe_mdui-theme-accent_color'));?>">
	<div class="mdui-container">
	    <div class="mdui-container" style="background: #ffffff15; border-radius: 30px; width: auto; margin-top: 60px;">
	    <div class="mdui-toolbar nexmoe-item">
			<a href="/"><?php e(config('site_name'));?></a>
			<?php foreach((array)$navs as $n=>$l):?>
			<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
			<a href="<?php e($l);?>"><?php e($n);?></a>
			<?php endforeach;?>
			<!--<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>-->
		</div>
		</div>
    	<?php view::section('content');?>
		<footer class="mdui-container-fluid" style="text-align: center; margin-top: 5%;">
    			<div id="favicon">
     				<img src="<?php e(config('favicon'));?>" style="width: 130px; border-radius: 100%;">
    			</div>
    			<div id="footertext">
				<p>Copyright © by <?php e(config('author'));?> All Rights Reserved.</p>
				<p style="opacity: 75%;"><?php e(config('site_descr'));?></p>
				<div style="margin-top: 5%;"></div>
    			</div>
		</footer>
  	</div>
  	<style><?php e(config('nexmoe_nprogress_style'));?><?php e(config('nexmoe_layout_style'));?></style>
        <script>
                NProgress.start();
                setTimeout(function () {
                        NProgress.done();
                        $(".fade").removeClass("out");
                }, 3000);
        </script>
</body>
</html>
