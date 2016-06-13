<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 标题 -->
    <title>协会概况-四川省特种工程机械行业协会</title>
<!--  <link rel="shortcut icon"href="/curriculum/Public/img/Common/admin.ico">-->     

			 <!-- Custom Theme files -->
		<link href="/curriculum/Public/css/bootstrap.css" rel="stylesheet">
		<link href="/curriculum/Public/css/site.css" rel="stylesheet">
		
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 样式表文件 -->

<style>
.td-color{
	background-color: #000;
    color: #fff;
}
</style>

</head>
<body>
<!-- 头文件 -->
    
    
			<!----- start-header---->
			
			<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">学生选课系统</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">首页 <span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo (session('email')); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo U('signout');?>">注销</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

			<!----- //End-header---->	
    <!-- 内容页 -->

        
<div class="container-full">
<div>
<table class="table table-hover table-bordered">
<thead>
<tr>
<th>#</th>
<th>星期一</th>
<th>星期二</th>
<th>星期三</th>
<th>星期四</th>
<th>星期五</th>
<th>星期六</th>
<th>星期天</th>
</tr>
</thead>
<tbody>
<tr><th>第一节</th><td class="td-color">彭老师 数据结构 实验大楼503</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><th>第二节</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><th>第三节</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><th>第四节</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><th>第五节</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><th>第六节</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><th>第七节</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><th>第八节</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</tbody>
</table>
</div>
</div>

        
        <!-- 脚文件 -->
                 <div class="footer" style="margin-top:100px;">
         	<div class="container">
         		<div class="footer-right">
         			<p>Copyright &copy; 2016 BSL</p>
				<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>
         		</div>
         		<div class="clearfix"> </div>
         	</div>
         </div>	

</body>
</html>
    <script src="/curriculum/Public/js/jquery-1.11.3.min.js"></script>
    <script src="/curriculum/Public/js/bootstrap.min.js"></script>
   
<!-- javascript文件 -->

		<script type="text/javascript">
			$(function() {
				$('table tbody tr').find('td').click(function(){
					var index=($(this).index())-1;
					var th=$(this).parents('tr').index();
					console.log('x:'+index);
					console.log('y:'+th);
					$(this).addClass('td-color');
				});
			});
		</script>