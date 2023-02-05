<?php view::layout('install/layout')?>

<?php view::begin('content');?>
	
<div class="mdui-container-fluid">
	<div class="mdui-typo">
	  <h1>程序安装 <small>环境检测</small></h1>
	</div>

	<div class="mdui-table-fluid">
	  <table class="mdui-table">
	    <thead>
	      <tr>
	        <th>#</th>
	        <th>环境需求</th>
	        <th>当前环境</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td>1</td>
	        <td>PHP > 5.5</td>
	        <?php if($check['php']): ?>
	        <td><i class="mdui-icon material-icons" style="color:#4caf50;">&#xe5ca;</i></td>
	        <?php else:?>
	        <td><i class="mdui-icon material-icons" style="color:#f44336;">&#xe5cd;</i></td>
	        <?php endif;?>
	      </tr>
	      <tr>
	        <td>2</td>
	        <td>curl 支持</td>
	        <?php if($check['curl']): ?>
	        <td><i class="mdui-icon material-icons" style="color:#4caf50;">&#xe5ca;</i></td>
	        <?php else:?>
	        <td><i class="mdui-icon material-icons" style="color:#f44336;">&#xe5cd;</i></td>
	        <?php endif;?>
	      </tr>
	      <tr>
	        <td>3</td>
	        <td>config/ 目录可读可写</td>
	        <?php if($check['config']): ?>
	        <td><i class="mdui-icon material-icons" style="color:#4caf50;">&#xe5ca;</i></td>
	        <?php else:?>
	        <td><i class="mdui-icon material-icons" style="color:#f44336;">&#xe5cd;</i></td>
	        <?php endif;?>
	      </tr>
	      <tr>
	        <td>4</td>
	        <td>cache/ 目录可读可写</td>
	        <?php if($check['cache']): ?>
	        <td><i class="mdui-icon material-icons" style="color:#4caf50;">&#xe5ca;</i></td>
	        <?php else:?>
	        <td><i class="mdui-icon material-icons" style="color:#f44336;">&#xe5cd;</i></td>
	        <?php endif;?>
	      </tr>
	    </tbody>
	  </table>
	</div>
	<form action="" method="post">
		<div class="mdui-textfield mdui-textfield-floating-label">
			<i class="mdui-icon material-icons">apps</i>
			<label class="mdui-textfield-label">应用名(appName)(可自定)</label>
			<input type="text" type="text" class="mdui-textfield-input" name="app_name" required value="<?php echo config('app_name');?>"/>
			<div class="mdui-textfield-error">应用名不能为空</div>
		</div>
		<br>
	    <?php if(array_sum($check) == count($check)):?><button class="mdui-btn mdui-color-theme-accent mdui-ripple mdui-float-right" type="submit">下一步</button><?php endif;?>
	</form>
	<br><br>
</div>

<?php view::end('content');?>