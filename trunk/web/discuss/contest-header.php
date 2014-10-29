<?php  
    require("../include/db_info.inc.php");
	
	if(isset($OJ_LANG)){
		require_once("../lang/$OJ_LANG.php");
	}
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel=stylesheet href='../template/bs/hoj.css' type='text/css'>
</head>
<?php if(isset($_GET['cid']))
	$cid=intval($_GET['cid']);
if (isset($_GET['pid']))
	$pid=intval($_GET['pid']);
?>
<div class="nav">
	<div class="navhead">
<table class="head" >
<tr>
    <td>
	<img  src="<?php echo "../template/".$OJ_TEMPLATE?>/image/head.jpg" >
    </td>
</tr>
<tr id="htr">

<td cellpadding="10">
	
	<a  href='../' class='astyle'><?php echo $MSG_HOME?></a>&nbsp;&nbsp;&nbsp;
	<a  href='../bbs.php?cid=<?php echo $cid?>' class='astyle'><?php echo $MSG_BBS?></a>&nbsp;&nbsp;&nbsp;
	<a  href='../contest.php?cid=<?php echo $cid?>' class='astyle'><?php echo $MSG_PROBLEMS?></a>&nbsp;&nbsp;&nbsp;
	<a  href='../contestrank.php?cid=<?php echo $cid?>' class='astyle'><?php echo $MSG_STANDING?></a>&nbsp;&nbsp;&nbsp;
	<a  href='../status.php?cid=<?php echo $cid?>' class='astyle'><?php echo $MSG_STATUS?></a>&nbsp;&nbsp;&nbsp;
	<a  href='../conteststatistics.php?cid=<?php echo $cid?>' class='astyle'><?php echo $MSG_STATISTICS?></a>&nbsp;&nbsp;&nbsp;
</td>
</tr>
</table>

<div id=broadcast>
<?php

	echo "<marquee id=broadcast scrollamount=1 direction=up scrolldelay=250 onMouseOver='this.stop()' onMouseOut='this.start()';>";
	require('../admin/msg.txt');
	echo "</marquee>";

?>
</div><!--end broadcast-->
<?php
$contest_ok=true;
$str_private="SELECT count(*) FROM `contest` WHERE `contest_id`='$cid' && `private`='1'";
$result=mysql_query($str_private);
$row=mysql_fetch_row($result);
mysql_free_result($result);
if ($row[0]=='1' && !isset($_SESSION['c'.$cid])) $contest_ok=false;
if (isset($_SESSION['administrator'])) $contest_ok=true;
?>
<div id=main>
