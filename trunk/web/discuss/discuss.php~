<?php
	require_once("discuss_func.inc.php");
	if(isset($_REQUEST['pid']))
		$pid=intval($_REQUEST['pid']); 
	else
		$pid=0;
	if(isset($_REQUEST['cid']))
		$cid=intval($_REQUEST['cid']);
	else
		$cid=0;
	$prob_exist = problem_exist($pid, $cid);
	if ($cid!='' && $cid!=null){
		$cstr='&cid='.$cid;
		require_once("contest-header.php");
  	}
	else 
		require_once("oj-header.php");
		echo "<title>WebBoard</title>";
?>

<div class="navbody">
<?php
	if ($prob_exist){?>
<div id="font1">
	[ <a href="newpost.php<?php 
		if ($pid!=0 && $cid!=null) echo "?pid=".$pid."&cid=".$cid;
		else if ($pid!=0) echo "?pid=".$pid;
		else if ($cid!=null) echo "?cid=".$cid;?>
		">New Thread</a> ]
</div>

<div id="font1">
Location : 
	<?php if ($cid!=null) 
		  echo "<a href=\"discuss.php?cid=".$cid."\">Contest ".$cid."</a>"; else echo "<a href=\"discuss.php\">MainBoard</a>";
	      if ($pid!=null && $pid!=0) 
		  echo " >> <a href=\"discuss.php?pid=".$pid."&cid=".$cid."\">Problem ".$pid."</a>";?>
</div>

<div style="float:right;font-size:80%;color:red;font-weight:bold">
<?php if ($pid!=null && $pid!=0 && ($cid=='' || $cid==null)){?>
	<a href="../problem.php?id=<?php echo $pid?>">See the problem</a>
<?php }?>
</div>

<?php }
$sql = "SELECT `tid`, `title`, `top_level`, `topic`.`status`, `cid`, `pid`, CONVERT(MIN(`reply`.`time`),DATE) `posttime`, MAX(`reply`.`time`) `lastupdate`, `topic`.`author_id`, COUNT(`rid`) `count` FROM `topic`, `reply` WHERE `topic`.`status`!=2 AND `reply`.`status`!=2 AND `tid` = `topic_id`";
if (array_key_exists("cid",$_REQUEST)&&$_REQUEST['cid']!='') 
	$sql.= " AND ( `cid` = '".mysql_escape_string($_REQUEST['cid'])."'";
else 
	$sql.=" AND ( ISNULL(`cid`)";
	$sql.=" OR `top_level` = 3 )";
if (array_key_exists("pid",$_REQUEST)&&$_REQUEST['pid']!=''){
  	$sql.=" AND ( `pid` = '".mysql_escape_string($_REQUEST['pid'])."' OR `top_level` >= 2 )";
  	$level="";
}
else
	$level=" - ( `top_level` = 1 AND `pid` != 0 )";
$sql.=" GROUP BY `topic_id` ORDER BY `top_level`$level DESC, MAX(`reply`.`time`) DESC";
$sql.=" LIMIT 30";
//echo $sql;
$result = mysql_query($sql) or die("Error! ".mysql_error());
$rows_cnt = mysql_num_rows($result);
$cnt=0;
$isadmin = isset($_SESSION['administrator']);
?>
<style type="text/css">
  .test{
	
  border:1px solid blue;

}
.webd{
	background-color:#F6F4EC;
}
</style>

<table  width=980px>
<!--新增webbord搜索功能-->
<tr>
<td >
	<form class=form-search action="discuss.php<?php if($cid&&$cid!=NULL)echo'?cid='.$cid;?>" method=post>
		Problem ID<input  type='text' name='pid' size=5 style="height:24px">
			  <input type=hidden name=cid value=<?php echo $_REQUEST['cid'];?>>
		<button  type='submit'  >search</button>
	</form>
</td>
</tr>
<!--新增翻页-->
<?php
//echo $cstr;
//每页显示per条
$per=50;
$page_cnt=intval(ceil($rows_cnt/$per));

$pg_id=1;
if(isset($_GET['pg'])&&intval($_GET['pg']))
	$pg_id=intval($_GET['pg']);
	
//echo $page_cnt;
//echo $pg_id;
//显示页面列表
echo '<center> <font align="center" size=5px><b>Volume</b></font>';
for ($j=1;$j<=$page_cnt;$j++){
		echo '&nbsp;';
		if ($j==$pg_id) 
			echo "<font color='red' size=5px>$j</font>";
		else 
			echo "<a href='discuss.php?pg=".$j.$cstr."'><font color='blue' size=5px>".$j."</font></a>";
	}
echo '</center>';
//for($j=1;$j<=$page_cnt;$j++){
	//echo $j;
//}
$st=($pg_id-1)*$per;


$ed=($st+$per)<$rows_cnt?($st+$per):$rows_cnt;
//echo 'st'.$st;
//echo 'ed'.$ed;

?>

<?php if ($rows_cnt==0) 
	echo("<tr height='50px'>
		<th >No thread here.</td>
	     </tr>");

echo '<tr class=webd><td>';
echo '<ol >';

for ($i=$st;$i<$ed;$i++){
	     mysql_data_seek($result,$i);
	$row=mysql_fetch_object($result);
	$user_id=$row->author_id;

	$sql2="SELECT `nick` FROM `users` WHERE `user_id` = '".$user_id."' LIMIT 0 , 30";
	$res2= mysql_query($sql2);
	$_nick=mysql_fetch_object($res2);

	
	echo "<li class=webd>";
	
	echo "<a href=\"thread.php?tid={$row->tid}&cid={$row->cid}\">".nl2br(htmlspecialchars($row->title))."</a>";
	echo"&nbsp;(".($row->count-1).")";
	if($row->author_id!=$_nick->nick)
		echo"&nbsp;&nbsp;&nbsp;<a href=\"../userinfo.php?user={$row->author_id}\">{$row->author_id}&{$_nick->nick}</a>";
	else
		echo"&nbsp;&nbsp;&nbsp;<a href=\"../userinfo.php?user={$row->author_id}\">{$row->author_id}</a>";
		
	
	//echo"&nbsp;&nbsp;&nbsp;{$row->posttime}";
	
	echo"&nbsp;&nbsp;&nbsp;{$row->lastupdate}";
	if ($row->pid!=0) 
		echo"&nbsp;&nbsp;<b>ProblemId</b>&nbsp;<a href=\"discuss.php?pid={$row->pid}&cid={$row->cid}\">{$row->pid}</a>";
	
	
	echo"</li><hr>";
	
}
echo '</ol>';
echo'</td></tr>';
echo'<tr><td>';
echo '<center> <font align="center" size=5px><b>Volume</b></font>';
for ($j=1;$j<=$page_cnt;$j++){
		echo '&nbsp;';
		if ($j==$pg_id) 
			echo "<font color='red' size=5px>$j</font>";
		else 
			echo "<a href='discuss.php?pg=".$j.$cstr."'><font color='blue' size=5px>".$j."</font></a>";
	}
echo '</center>';
echo'</td></tr>';

mysql_free_result($result);
mysql_free_result($res2);
?>
</table> 
</div>

<div class="foot">
<?php require_once("oj-footer.php")?>
</div>
