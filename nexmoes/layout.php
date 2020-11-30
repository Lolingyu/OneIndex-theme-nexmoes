<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<title><?php e(config('site_name'));?> - 私人云服务</title>
	<!-- 以下替换为自己GitHub favicon站点图片 -->
	<link rel="shortcut icon" href="https://github.com/Lolingyu/OneIndex-theme-nexmoes/blob/master/nexmoes/theme/favicon.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@0.4.3/dist/css/mdui.min.css">
	<!-- 以下替换为自己GitHub style -->
	<link rel="stylesheet" href="https://github.com/Lolingyu/OneIndex-theme-nexmoes/blob/master/nexmoes/theme/style.css">
	<script src="https://cdn.jsdelivr.net/npm/mdui@0.4.3/dist/js/mdui.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aplayer/dist/APlayer.min.css">
	<script src="https://cdn.jsdelivr.net/npm/aplayer/dist/APlayer.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/meting@2/dist/Meting.min.js"></script>
</head>
<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
	<header class="nav">
		<div class="navSize">
		<!-- 以下替换为自己GitHub 头像 -->
			<a href="/"><img class="avatar" src="https://s.gravatar.com/avatar/b8ccb191c244e104813a49c8aa678723?s=80" /></a>
			<div class="navRight">
				
				<div class="icon"></div>
			</div>
		</div>
	</header>
	<div class="mdui-container">
	    <div class="mdui-container-fluid">
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
  	</div>
	<meting-js
		server="netease"
		type="playlist"
		id="2485662712"
		fixed="true">
	</meting-js>
	<!-- id改成自己的歌单号 -->
	<script src="https://cdn.jsdelivr.net/gh/Mintimate/OneIndex-theme-nexmoes@latest/nexmoes/theme/personjs.js"></script>
</body>
</html>
