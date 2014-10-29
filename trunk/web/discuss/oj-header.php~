<?php 
	require('../include/db_info.inc.php');
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel=stylesheet href='../template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
<?php function checkcontest($MSG_CONTEST){
		require_once("../include/db_info.inc.php");
		$sql="SELECT count(*) FROM `contest` WHERE `end_time`>NOW() AND `defunct`='N'";
		$result=mysql_query($sql);
		$row=mysql_fetch_row($result);
		if (intval($row[0])==0) $retmsg=$MSG_CONTEST;
		else $retmsg=$row[0]."&nbsp;$MSG_CONTEST";
		mysql_free_result($result);
		return $retmsg;
	}
	function checkmail(){
		require_once("../include/db_info.inc.php");
		$sql="SELECT count(1) FROM `mail` WHERE 
				new_mail=1 AND `to_user`='".$_SESSION['user_id']."'";
		$result=mysql_query($sql);
		if(!$result) return false;
		$row=mysql_fetch_row($result);
		if($row[0])
			$retmsg="<span id=red>(".$row[0].")</span>";
		else
			$retmsg="(".$row[0].")";
		mysql_free_result($result);
		return $retmsg;
	}
	if(isset($OJ_LANG)){
		require_once("../lang/$OJ_LANG.php");
		if(file_exists("../faqs.$OJ_LANG.php")){
			$OJ_FAQ_LINK="../faqs.$OJ_LANG.php";
		}
	}else{
		require_once("../lang/en.php");
	}
	

	if($OJ_ONLINE){
		require_once('../include/online.php');
		$on = new online();
	}
?>
</head>
<!--st-->
<body>

<div class="nav">
   <div class="navheader">
   <table class="head">
	<tr>
	    <td>
		<img src="<?php echo "../template/".$OJ_TEMPLATE?>/image/head.jpg" >
	    </td>
	</tr>
	<tr id="htr">
	<?php $ACTIVE="_ing";?>
	<td>
	<a class='astyle' href="../<?php echo $OJ_HOME?>">
	<?php echo $MSG_HOME?></a>&nbsp&nbsp

	<a class='astyle_ing'  href="../bbs.php">
	<?php echo $MSG_BBS?></a>&nbsp&nbsp

	<a class='astyle' href="../problemset.php">
	<?php echo $MSG_PROBLEMS?></a>&nbsp&nbsp

	<a  class='astyle' href="../status.php">
	<?php echo $MSG_STATUS?></a>&nbsp&nbsp
		
	<a class='astyle' href="../ranklist.php">
	<?php echo $MSG_RANKLIST?></a>&nbsp&nbsp
		
	<a class='astyle'  href="../contest.php">
	<?php echo checkcontest($MSG_CONTEST)?></a>&nbsp&nbsp
		
	<a class='astyle' href="../recent-contest.php">
	<?php echo "$MSG_RECENT_CONTEST"?></a>&nbsp&nbsp
		
	<a class='astyle' href="<?php echo isset($OJ_FAQ_LINK)?$OJ_FAQ_LINK:"../faqs.php"?>">
	<?php echo "$MSG_FAQ"?></a>&nbsp&nbsp
	<!--profile-->
	<?php if (isset($_SESSION['user_id'])){
				$sid=$_SESSION['user_id'];
				print "<a class='astyle' href=../modifypage.php>$MSG_USERINFO
				       </a>&nbsp
				       <a class='astyle' href='../userinfo.php?user=$sid'>
				       $sid
                                       </a>";
				$mail=checkmail();
				if ($mail)
					print "<a class='astyle' href=../mail.php>$mail</a>&nbsp&nbsp";
					print "<a class='astyle' href=../logout.php>$MSG_LOGOUT</a>&nbsp&nbsp";
				}else{
					print "<a class='astyle' href=../loginpage.php>$MSG_LOGIN</a>&nbsp&nbsp";
					print "<a class='astyle' href=../registerpage.php>$MSG_REGISTER</a>&nbsp&nbsp";
					}
				if (isset($_SESSION['administrator'])||isset($_SESSION['contest_creator'])){
					print "<a class='astyle' href=../admin>$MSG_ADMIN</a>";
			
				}
	?>
	<!--end profile-->
	</td>
	</tr>
	<!--end menu-->
   </table>
</div>
<!--broadcast-->
<div id=broadcast>
	<?php echo "<marquee id=broadcast scrollamount=1.5 direction=right scrolldelay=50>";
	echo "<font color=red>";
	echo file_get_contents($OJ_SAE?"saestor://web/msg.txt":"../admin/msg.txt");
	echo "</font>";
	echo "</marquee>";

?>
</div>
<!--end broadcast-->

