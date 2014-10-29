<?php  
    require_once('./include/cache_start.php');

  
	require_once('./include/db_info.inc.php');

  if(isset($OJ_LANG)){
		require_once("./lang/$OJ_LANG.php");
	}
?>

<?php if(isset($_GET['cid']))
	$cid=intval($_GET['cid']);
if (isset($_GET['pid']))
	$pid=intval($_GET['pid']);
?>

<table class="head" >
        <tr>
               <td>
			<img src="<?php echo "template/".$OJ_TEMPLATE?>/image/head.jpg" >
	       </td>
        </tr>
        <tr id="htr" align="center" >
	<td >
	<a class='astyle' href='./'><?php echo $MSG_HOME?></a>&nbsp&nbsp&nbsp
	<a class='astyle' href='./bbs.php?cid=<?php echo $cid?>'><?php echo $MSG_BBS?></a>&nbsp;&nbsp;&nbsp;
	<a class='astyle' href='./contest.php?cid=<?php echo $cid?>'><?php echo $MSG_PROBLEMS?></a>&nbsp;&nbsp;&nbsp;
	<a class='astyle' href='./contestrank.php?cid=<?php echo $cid?>'><?php echo $MSG_STANDING?></a>&nbsp;&nbsp;&nbsp;
	<a class='astyle' href='./status.php?cid=<?php echo $cid?>'><?php echo $MSG_STATUS?></a>&nbsp;&nbsp;&nbsp;
	<a class='astyle' href='./conteststatistics.php?cid=<?php echo $cid?>'><?php echo $MSG_STATISTICS?></a>&nbsp;&nbsp;&nbsp;
	</td>
	</tr>
</table>
<?php 
$view_marquee_msg=file_get_contents($OJ_SAE?"saestor://web/msg.txt":"./admin/msg.txt");
?>
<div id=broadcast>
<marquee id=broadcast scrollamount=1 direction=left scrolldelay=50 onMouseOver='this.stop()'; onMouseOut='this.start()';>
  <?php echo $view_marquee_msg?>
</marquee>
</div><!--end broadcast-->

