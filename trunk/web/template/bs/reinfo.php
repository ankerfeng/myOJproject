<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
</head>
<body>
<div class="nav">
	<div class="navhead">
	<?php require_once("oj-header.php");?>
	</div>

<div class="nabody">
	<p id='errtxt' ><?php echo $view_reinfo?></p>
<div id='errexp'>Explain:</div>

<script>
   var pats=new Array();
   var exps=new Array();
   pats[0]=/A Not allowed system call.* /;
   exps[0]="使用了系统禁止的操作系统调用，看看是否越权访问了文件或进程等资源";
   pats[1]=/Segmentation fault/;
   exps[1]="段错误，检查是否有数组越界，指针异常，访问到不应该访问的内存区域";
   pats[2]=/Floating point exception/;
   exps[2]="浮点错误，检查是否有除以零的情况";
   pats[3]=/buffer overflow detected/;
   exps[3]="缓冲区溢出，检查是否有字符串长度超出数组的情况";
   pats[4]=/Killed/;
   exps[4]="进程因为内存或时间原因被杀死，检查是否有死循环";
   pats[5]=/Alarm clock/;
   exps[5]="进程因为时间原因被杀死，检查是否有死循环，本错误等价于超时TLE";
   
   function explain(){
     //alert("asdf");
       var errmsg=document.getElementById("errtxt").innerHTML;
	   var expmsg="辅助解释：<br>";
	   for(var i=0;i<pats.length;i++){
		   var pat=pats[i];
		   var exp=exps[i];
		   var ret=pat.exec(errmsg);
		   if(ret){
		      expmsg+=ret+":"+exp+"<br>";
		   }
	   }
	   document.getElementById("errexp").innerHTML=expmsg;
     //alert(expmsg);
   }
   explain();
</script>
<font size=4px>
if you have any problem you can just click the
&nbsp<a class=astyle_red href="<?php echo isset($OJ_FAQ_LINK)?$OJ_FAQ_LINK:"faqs.php"?>"><?php echo "$MSG_FAQ"?></a>
&nbsp!
</font>
</div>
<div class=foot>
	<?php require_once("oj-footer.php");?>
	</div><!--end foot-->
</div><!--end main-->

</body>
</html>
