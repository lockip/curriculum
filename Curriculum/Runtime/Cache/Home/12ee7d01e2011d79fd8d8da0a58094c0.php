<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 标题 -->
    <title>首页-学生选课系统</title>
<!--  <link rel="shortcut icon"href="/curriculum/Public/img/Common/admin.ico">-->     

			 <!-- Custom Theme files -->
		<link href="/curriculum/Public/css/bootstrap.css" rel="stylesheet">
		<link href="/curriculum/Public/css/site.css" rel="stylesheet">
		
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 样式表文件 -->

<link href="/curriculum/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/curriculum/Public/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<style>
.td-color{
	background-color: #08c;
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

 <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" id="myTabs">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">已选课程</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">选取课程</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="home" style="padding:8px;">
    <table class="table table-hover table-bordered"><thead><tr><th>#</th><th>课程</th><th>教师</th><th>教室</th><th>上课时间</th></tr></thead>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tbody><tr>
    <td><?php echo ($vo["id"]); ?></td>
    <td><?php echo ($vo["course_name"]); ?></td>
    <td><?php echo ($vo["tea_name"]); ?></td>
    <td><?php echo ($vo["classroom"]); ?></td>
    <td><?php echo ($vo["class_time"]); ?></td>
    </tr></tbody><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
	</div>
    <div role="tabpanel" class="tab-pane fade in" id="profile" style="padding:8px;">
            <div class="form-group " >
            <div class="col-md-4 control-label" style="text-align: center;">
                <label id="date-label" class="control-label"></label>
                <div id="d_loading" style="display:none;"><span>加载中...</span><img src="/curriculum/Public/images/progress.gif" /></div>
                </div>

                <div class="input-group date form_datetime col-md-4 clearfix" >
                    <input class="form-control" id="text-date" size="16" type="text" value="<?php echo ($time); ?>" placeholder="选择时间" readonly >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
                
                <div class="col-md-4">
                
                
                </div>
            </div>
<table id="t-table" class="table table-bordered">
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
<tr><th>第一节</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
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

<script type="text/javascript" src="/curriculum/Public/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="/curriculum/Public/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script src="http://libs.baidu.com/jqueryui/1.8.22/jquery-ui.min.js "></script>
<script type="text/javascript" src="/curriculum/Public/js/myTime.js" charset="UTF-8"></script>
		<script type="text/javascript">
			$(function() {
				var fn=$(".form_datetime");
				init();
				$('#t-table tbody tr').find('td').click(function(){
					if($(this).attr('data-status')==2){
						$id=$(this).attr('data-id');
						addinfo($id);
					}
					else{
						console.log(0);}
				});
				  fn.datetimepicker.dates['zh-CN'] = {
				            days: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六", "星期日"],
				            daysShort: ["周日", "周一", "周二", "周三", "周四", "周五", "周六", "周日"],
				            daysMin:  ["日", "一", "二", "三", "四", "五", "六", "日"],
				            months: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
				            monthsShort: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
				            today: "今日",
				            suffix: [],
				            meridiem: ["上午", "下午"]
				    };
				  fn.datetimepicker({
				        format: "yyyy-mm-dd",
				        autoclose: true,
				        minView: "month",
				        todayBtn: true,
				        pickerPosition: "bottom-left",
				        minuteStep: 10,
				        language:'zh-CN',
				  });
				fn.datetimepicker().on('changeDate',function(data){
					//console.log(data);
					var time=data.date;
				    	//返回date是一周中的某一天  
				    	var week = time.getDay();
				    	 //一天的毫秒数  
				        var millisecond = 1000 * 60 * 60 * 24;
				    	//减去的天数  
				        var minusDay = week != 0 ? week - 1 : 6;
				    	//本周 周一  
				        var monday = new Date(time.getTime() - (minusDay * millisecond));
				      //本周 周日  
				        var sunday = new Date(monday.getTime() + (6 * millisecond));
				        console.log(monday);
				      	console.log(sunday);
				        monday=timeStamp2String(monday,0);
				        sunday=timeStamp2String(sunday,0);
				      	var ms_str='<h4><span class="label label-default">'+monday+'</span>'+' ~ '+'<span class="label label-default">'+sunday+'</span></h4>';
				      	$('#date-label').empty().append(ms_str);
				});
				fn.datetimepicker().on('hide',function(data){
					var time=data.date.toLocaleDateString();
					getclass(time);
					console.log(time);
				});
			});
			function init(){
				getclass(null);
				var time=new Date();
		    	//返回date是一周中的某一天  
		    	var week = time.getDay();
		    	 //一天的毫秒数  
		        var millisecond = 1000 * 60 * 60 * 24;
		    	//减去的天数  
		        var minusDay = week != 0 ? week - 1 : 6;
		    	//本周 周一  
		        var monday = new Date(time.getTime() - (minusDay * millisecond));
		      //本周 周日  
		        var sunday = new Date(monday.getTime() + (6 * millisecond));
		        monday=timeStamp2String(monday,0);
		        sunday=timeStamp2String(sunday,0);
		        //console.log(monday);
		      	//console.log(sunday);
		      	var ms_str='<h4><span class="label label-default">'+monday+'</span>'+' ~ '+'<span class="label label-default">'+sunday+'</span></h4>';
		      	$('#date-label').empty().append(ms_str);
			}
			
			function getclass(time){
				$.ajax({
					type:"post",
					url:"<?php echo U('/Admin/Index/getclass');?>",
					data:{'time':time},
					beforeSend : function() {
						$('#d_loading').show();
						$('#t-table tbody').find('tr td').removeClass('td-color').empty();
					},
					success : function(data){
						console.log(data);
						if(data!=0)
						formatinfo(data);
					},
					complete : function() {
						$('#d_loading').hide();
					}
				});
			}
			function addinfo(id){
				$.ajax({
					type:"post",
					url:"<?php echo U('/Home/Index/getclass');?>",
					data:{'id':id},
					beforeSend : function() {
						$('#d_loading').show();
					},
					success : function(data){
						if(data==1){
							alert('操作成功!');
							$('#myTabs a:first').tab('show');
						}else if(data==2){
							alert('改课程已选!无需重复选择');
						}else{
							alert('数据添加失败!');
						}
						console.log(data);
					},
					complete : function() {
						$('#d_loading').hide();
						
					}
				});
			}
			function timeStamp2String(time,status){  
			    var datetime = new Date();  
			    datetime.setTime(time);  
			    var year = datetime.getFullYear();  
			    var month = datetime.getMonth() + 1 < 10 ? "0" + (datetime.getMonth() + 1) : datetime.getMonth() + 1;  
			    var date = datetime.getDate() < 10 ? "0" + datetime.getDate() : datetime.getDate();  
			    var hour = datetime.getHours()< 10 ? "0" + datetime.getHours() : datetime.getHours();  
			    var minute = datetime.getMinutes()< 10 ? "0" + datetime.getMinutes() : datetime.getMinutes();  
			    var second = datetime.getSeconds()< 10 ? "0" + datetime.getSeconds() : datetime.getSeconds();  
			    if(status==1)
			    	return year + "-" + month + "-" + date+" "+hour+":"+minute+":"+second;
			    else
			    	return year + "-" + month + "-" + date;
			}
			function formatinfo(data){
				$.each(data, function(k, v) {
					var info='# '+v.id+' '+v.course_name+' '+v.tea_name+' '+v.classroom+' '+v.class_time;
					$('#t-table tbody tr').eq(v.y).find('td').eq(v.x).addClass('td-color').attr({'data-status':'2','data-id':v.id}).text(info);
				});
			}
		</script>