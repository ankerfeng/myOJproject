<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv='refresh' content='60'>
<title><?php echo $view_title?></title>
<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
<!--
<script type="text/javascript" src="include/jquery-latest.js"></script>
<script type="text/javascript" src="include/jquery.tablesorter.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$("#cs").tablesorter();
	}
	);
</script>
<script language="javascript" type="text/javascript" src="include/jquery-latest.js"></script>
<script language="javascript" type="text/javascript" src="include/jquery.flot.js"></script>
<script type="text/javascript">
$(function () {
	var d1 = [];
	var d2 = [];
	<?php
	       foreach($chart_data_all as $k=>$d){
	    ?>
	d1.push([<?php echo $k?>, <?php echo $d?>]);
	<?php }?>
	<?php
	       foreach($chart_data_ac as $k=>$d){
	    ?>
	d2.push([<?php echo $k?>, <?php echo $d?>]);
	<?php }?>
	//var d2 = [[0, 3], [4, 8], [8, 5], [9, 13]];

	// a null signifies separate line segments
	var d3 = [[0, 12], [7, 12], null, [7, 2.5], [12, 2.5]];
	$.plot($("#submission"), [
	{label:"<?php echo $MSG_SUBMIT?>",data:d1,lines: { show: true }},
	{label:"<?php echo $MSG_AC?>",data:d2,bars:{show:true}} ],{
	xaxis: {
	mode: "time"
	//, max:(new Date()).getTime()
	//,min:(new Date()).getTime()-100*24*3600*1000
	},
	grid: {
	backgroundColor: { colors: ["#fff", "#333"] }
	}
	});
	});
	//alert((new Date()).getTime());
</script>
-->

</head>
<body>
<div class="nav">
	<div class="navhead">
	<?php require_once("contest-header.php");?>
<div class="navbody">

<center>
	<h3>Contest Statistics</h3>
<table id=cs width=90%>
<td>
	<tr id=htr>
	<th>PID</th>
	<th>AC</th>
	<th>PE</th>
	<th>WA</th>
	<th>TLE</th>
	<th>MLE</th>
	<th>OLE</th>
	<th>RE</th>
	<th>CE</th>
	<th>Total</th>
	<th>C</th>
	<th>C++</th>
	<th>Pascal</th>
	<th>Java</th>
	<!--
	<th>Ruby<th>Bash<th>Python<th>PHP<th>Perl<th>C#<th>Obj-c<th>FreeBasic
	-->
	</tr>
</td>

<td>
<?php
	for ($i=0;$i<$pid_cnt;$i++){

		if(!isset($PID[$i])) 
			$PID[$i]="";

		if ($i&1)
			echo "<tr  class='tl'><td>";
		else
			echo "<tr  class='tl_1'><td>";

		echo "<a href='problem.php?cid=$cid&pid=$i'>$PID[$i]</a></td>";
		

		for ($j=0;$j<14;$j++) {
			if ($j==9)//在设计的时候没有9这种情况，故应该忽略掉
				$j+=1;
			
		        if(!isset($R[$i][$j])) 
				$R[$i][$j]=" ";
				
				echo "<td>".$R[$i][$j]."</td>";
		}
		
		echo "</tr>";
	}	
		echo "<tr class='tl_2'><th>Total</th>";	
		for ($j=0;$j<14;$j++) {
			if ($j==9)
				$j +=1;
				
			else if(!isset($R[$i][$j])) 
					$R[$i][$j]=" ";
				echo "<td>".$R[$i][$j]."</td>";
	}
	echo "</tr>";
	?>
</td>

<table>
</center>

<div class=foot>
<?php require_once("oj-footer.php");?>

</div><!--end foot-->
</div><!--end main-->
</div><!--end wrapper-->
</body>
</html>
