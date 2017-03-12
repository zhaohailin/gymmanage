<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			WebBuilding_后台登录
		</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="/Public/Css/Common/bootstrap_min.css" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
	<link rel="stylesheet" type="text/css" href="/Public/Css/Common/animate.min.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Css/Admin/login.css" />

		<!-- jQuery -->
		<script type="text/javascript" src="/Public/Js/Common/jquery_min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script type="text/javascript" src="/Public/Js/Common/bootstrap_min.js"></script>
		<!-- jquery版本兼容 -->
		<script type="text/javascript" src="/Public/Js/Common/jquery-migrate-1_1_0.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script type="text/javascript" src="/Public/Js/Common/ie10-viewport-bug-workaround.js"></script>
	</head>
	<body>
		
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 col-xs-12">
					<img id="logo" class="animated bounceIn img-responsive" src="/Public/Img/Common/webbuildinglogo.jpg" alt="">
					<div class="">
						<form class="form-horizontal" action="">
							 <div class="form-group">
							    <label class="control-label text-right col-xs-3" for="login_user">账&nbsp;&nbsp;&nbsp;号:</label>
							    <div class="col-xs-9">
							   		<input type="text" class="form-control" id="login_user" value="" placeholder="请输入账号">
							    </div>
							</div>
							<div class="form-group">
							    <label class="control-label text-right col-xs-3" for="login_pd">密&nbsp;&nbsp;&nbsp;码:</label>
							    <div class="col-xs-9">
							   		<input type="password" class="form-control" id="login_pd" placeholder="请输入密码">
							    </div>
							</div>
							<div class="form-group">
							    <label class="control-label text-right col-xs-3" for="login_yzm">验证码:</label>
							    <div class="col-xs-5">
							   		<input type="text" class="form-control" id="login_user" value="" placeholder="请输入验证码">
							    </div>
						   		<div class="col-xs-4">
									<img class="img-responsive" id="login_verify" src="<?php echo U('Index/verify');?>" alt="verify_code">
						   		</div>
							</div>
							<div class="col-xs-9 col-xs-offset-3">
								<div class="col-xs-6">
									<input class="btn btn-primary btn-lg" type="submit" value="登录">
								</div>
								<div class="col-xs-6">
									<input class="btn btn-default btn-lg" type="reset" value="重置">
								</div>
							</div>
						</form>
					</div>
			</div>
		</div>
	</div>

	</body>
	
	<script type="text/javascript" src="/Public/Js/Admin/login.js"></script>
	<script>
		$("#logo").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
			$(this).addClass("fadeIn")
		});
		$("#login_verify").click(function () {
            var src = $(this).attr("src")+'?'+Math.random();
            $(this).attr("src",src);
        });
	</script>

</html>