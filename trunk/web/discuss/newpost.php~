<?php
//新增不跳出比赛页面
//标记是否为比赛页面，默认为0
$cst=0;
if(isset($_GET['cid'])&&$_GET['cid']!=NULL)
	$cst=1;
	
	if($cst)
		require_once("contest-header.php");
	else
		require_once("oj-header.php");
	echo "<title>WebBoard >> New Thread</title>";

	if (!isset($_SESSION['user_id'])){
		
		echo "<h2><a href=../loginpage.php>Please Login First</a></h2>";
		echo "<div class=foot>";
		require_once("oj-footer.php");
		echo"</div>";
		
		exit(0);
	}
?>
<center>
<div style="width:90%; text-align:left">
	
	<h2 style="margin:0px 10px">
	Post New Thread<?php if (array_key_exists('cid',$_REQUEST) && $_REQUEST['cid']!='') 
				echo ' For Contest '.$_REQUEST['cid'];?>
	</h2>
<form action="post.php?action=new" method=post>	
	<!--cid && pid 改post-->
	<input type=hidden name=cid value="<?php if (array_key_exists('cid',$_REQUEST)) echo $_REQUEST['cid'];?>">

	<div style="margin:0px 10px">Problem : 
	</div>
	<div>
	<input name=pid style="border:1px dashed #8080FF; width:100px; height:20px; font-size:100%;margin:0 10px; padding:2px 10px" value="<?php if(array_key_exists('pid',$_REQUEST)) echo $_REQUEST['pid']; ?>">
	</div>
	<div style="margin:0px 10px">Title : 
	</div>
	<div>
	<input name=title style="border:1px dashed #8080FF; width:700px; height:20px; font-size:100%;margin:0 10px; padding:2px 10px">
	</div>
	<div style="margin:0px 10px">Content : 
	</div>
	<div>
	<textarea name=content style="border:1px dashed #8080FF; width:700px; height:400px; font-size:100%; margin:0 10px; padding:10px">
	</textarea>
	</div>
	<div>
	<input type="submit" style="margin:5px 10px" value="Submit">
	</input>
	</div>
	</form>
</div>
</center>

<div class="foot">
<?php require_once("oj-footer.php")?>
</div>
