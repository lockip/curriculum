<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 标题 -->
    <title>首页-教师管理系统</title>
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
	background-color: #000;
    color: #fff;
}
.td-click-color{
	background-color: #08c;
    color: #fff;
}
 .gridly {
    position: relative;
    width: 960px;
  }
  .brick.small {
    width: 140px;
    height: 140px;
  }
  .brick.large {
    width: 300px;
    height: 300px;
  }

</style>

</head>
<body>
<!-- 头文件 -->
    
    
			<!----- start-header---->
			
			<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">教师管理</a>
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
            <div class="panel panel-default">
  				<div class="panel-body">
  				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label class="radio-inline" data-container="body" data-toggle="popover" data-placement="top" data-trigger="hover"  data-content="<?php echo ($vo["course_name"]); ?>  <?php echo ($vo["tea_name"]); ?> <?php echo ($vo["classroom"]); ?> <?php echo ($vo["class_time"]); ?>">
  			<input type="radio" name="btn-redio" id="redio<?php echo ($i); ?>" value="<?php echo ($i); ?>" data-id="<?php echo ($vo["id"]); ?>" data-course-name="<?php echo ($vo["course_name"]); ?>" data-tea-name="<?php echo ($vo["tea_name"]); ?>" data-classroom="<?php echo ($vo["classroom"]); ?>" data-class-time="<?php echo ($vo["class_time"]); ?>" <?php if($i == 1): ?>checked<?php endif; ?>> <?php echo ($vo["tea_name"]); ?>
			</label><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			  </div>
<table class="table table-bordered">
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
<input type="button" id="btn_save" class="btn btn-default btn-block" value="提交" />
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
				$('[data-toggle="popover"]').popover();
				init();
				var fn=$(".form_datetime");
				$('#btn_save').click(function(){
					$(this).button('loading');
					$('table tbody').find('td').each(function(){
						var a=$(this).attr('data-status');
						if(a==1){
							$classid=$(this).attr('data-id');
							$x=$(this).attr('data-x');
							$y=$(this).attr('data-y');
							$time=$('#text-date').val();
							adddata($classid,$time,$x,$y);
						}
					});
					$(this).button('reset');
				});
				$('table tbody tr').find('td').click(function(){
					var x=($(this).index())-1;
					var y=$(this).parents('tr').index();
					var rediocheck=$('input[name=btn-redio]:checked');
					console.log('x:'+x);
					console.log('y:'+y);
					var key=$(this).attr('data-status');
					switch(key){
					case '1':
						rediocheck.removeAttr("checked data-x data-y").parent().prev().show('snow').children().prop("checked",true);;
						//console.log(rediocheck.removeAttr("checked").parent().prev().children());
						$(this).removeClass('td-click-color').removeAttr('data-status').empty();
						break;
					case '2':
						alert('该课程已经被选，请选择其它课程');
						break;
					default:
						if(rediocheck.is(":hidden")){
							alert('请先取消后在添加其他课程');
							break;
						}
						$classid=rediocheck.attr('data-id');
						$name=rediocheck.attr('data-course-name')+' ';
						$teaname=rediocheck.attr('data-tea-name')+' ';
						$classroom=rediocheck.attr('data-classroom')+' ';
						$classtime=rediocheck.attr('data-class-time')+' ';
						rediocheck.removeAttr("checked data-x data-y").parent().hide('snow');
						rediocheck.parent().next().children().prop("checked",true);
						$(this).addClass('td-click-color').attr({'data-status':'1','data-id':$classid,'data-x':x,'data-y':y}).text($name+$teaname+$classroom+$classtime);
						break;
					}
						
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
			function getclass(time){
				$.ajax({
					type:"post",
					url:"<?php echo U('getclass');?>",
					data:{'time':time},
					beforeSend : function() {
						$('#d_loading').show();
						$('table tbody').find('tr td').removeClass('td-color').empty();
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
			function adddata(id,time,x,y){
				$.ajax({
				type:"post",
				url:"<?php echo U('addinfo');?>",
				data:{'time':time,'id':id,'x':x,'y':y},
				beforeSend : function() {
					console.log(id+time+x+y);
				},
				success:function(data){
					console.log(data);
				}
				});
			}
			function formatinfo(data){
				$.each(data, function(k, v) {
					var info='# '+v.id+' '+v.course_name+' '+v.tea_name+' '+v.classroom+' '+v.class_time;
					$('table tbody tr').eq(v.y).find('td').eq(v.x).addClass('td-color').attr({'data-status':'2','data-id':v.id}).text(info);
				});
			}
			//时间戳转换
			function getLocalTime(nS) {     
       				return new Date(parseInt(nS) * 1000).toLocaleString().replace(/年|月/g, "-").replace(/日/g, " ");      
    			}         
		</script>