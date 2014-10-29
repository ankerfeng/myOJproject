<table class="head" >
<tr>
    <td>
	<img  src="<?php echo "template/".$OJ_TEMPLATE?>/image/head.jpg" >
    </td>
</tr>
<tr  id="htr">
<?php $ACTIVE="_ing";?>
<td cellpadding="10">
<a class='astyle<?php if ($url=="JudgeOnline") echo "$ACTIVE";?>' href="<?php echo $OJ_HOME?>">
<?php echo $MSG_HOME?></a>&nbsp&nbsp

<a class='astyle<?php if ($url==$OJ_BBS.".php") echo "$ACTIVE";?>'  href="bbs.php">
<?php echo $MSG_BBS?></a>&nbsp&nbsp

<a class='astyle<?php if ($url=="problemset.php") echo "$ACTIVE";?>' href="problemset.php">
<?php echo $MSG_PROBLEMS?></a>&nbsp&nbsp

<a  class='astyle<?php if ($url=="status.php") echo "$ACTIVE";?>' href="status.php">
<?php echo $MSG_STATUS?></a>&nbsp&nbsp
		
<a class='astyle<?php if ($url=="ranklist.php") echo "$ACTIVE";?>' href="ranklist.php">
<?php echo $MSG_RANKLIST?></a>&nbsp&nbsp
		
<a class='astyle<?php if ($url=="contest.php") echo "$ACTIVE";?>'  href="contest.php">
</i><?php echo checkcontest($MSG_CONTEST)?></a>&nbsp&nbsp
		
<a class='astyle<?php if ($url=="recent-contest.php") echo "$ACTIVE";?>' href="recent-contest.php">
<?php echo "$MSG_RECENT_CONTEST"?></a>&nbsp&nbsp
		
<a class='astyle<?php if ($url=="faqs.php") echo "$ACTIVE";?>' href="<?php echo isset($OJ_FAQ_LINK)?$OJ_FAQ_LINK:"faqs.php"?>">
<?php echo "$MSG_FAQ"?></a>&nbsp&nbsp
	

<!--profile-->
<script src="include/profile.php?<?php echo rand();?>" ></script>
<!--end profile-->
</td>
</tr>
<!--end menu-->
</table>
<!--end head-->
<marquee id=broadcast scrollamount=1 direction=left scrolldelay=50 onMouseOver='this.stop()'; onMouseOut='this.start()';>
  <?php echo $view_marquee_msg?>
</marquee>
<br>
