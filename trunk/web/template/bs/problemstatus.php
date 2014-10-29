<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
</head>
<body>
	<script type="text/javascript" src="include/wz_jsgraphics.js"></script>
	<script type="text/javascript" src="include/pie.js"></script>
	<script type="text/javascript" src="include/jquery-latest.js"></script> 
	<script type="text/javascript" src="include/jquery.tablesorter.js"></script> 
<script type="text/javascript">
	$(document).ready(function() 
	    { 
		$("#problemstatus").tablesorter(); 
	    } 
	); 
</script>

<div class="nav">
	<div class="navhead">
	<?php require_once("oj-header.php");?>
	</div>

<div class="navbody">
	<h2 align=center>Problem <?php echo $id ?> Status</h2>
<table width=100%>
  <td>
	<table width=160>
	<?php 
		foreach($view_problem as $row){
		     $cnt=0;
			echo "<tr >";
			foreach($row as $table_cell){
				if($cnt)
				    echo "<td class='tred'>";
				else
				    echo "<td class='tblue'>";
				echo "\t".$table_cell;
				echo "</td>";
				$cnt = $cnt-1;
			}
			echo "</tr>";
		}
	?>
		
	</table>
  </td>
  <td>
	<table width=100%>
		<tr id=htr>
			<th><?php echo $MSG_Number?></th>
			<th>RunID</th>
			<th><?php echo $MSG_USER?></th>
			<th><?php echo $MSG_MEMORY?></th>
			<th><?php echo $MSG_TIME?></th>
			<th><?php echo $MSG_LANG?></th>
			<th ><?php echo $MSG_CODE_LENGTH?></th>
			<th><?php echo $MSG_SUBMIT_TIME?></th>
		</tr>
		<tr>
			<?php 
			$cnt=0;
			foreach($view_solution as $row){
				if ($cnt) 
					echo "<tr class='tl'>";
				else
					echo "<tr class='tl_1'>";
				foreach($row as $table_cell){
					echo "<td>";
					echo "\t".$table_cell;
					echo "</td>";
				}
				
				echo "</tr>";
				
				$cnt=1-$cnt;
			}
			
			?>
		</tr>
	</table>
</td>
	<hr>
	<!--Next_Problem-->
	<!--
	<?php if(isset($view_recommand)){?>
	<table  id=recommand ><tr><td>
			Recommanded Next Problem<br>
			<?php 
			$cnt=1;
			foreach($view_recommand as $row){
				echo "<a href=problem.php?id=$row[0]>$row[0]</a>&nbsp&nbsp;";
				$cnt++;
			}
			?>
			</td></tr>
	</table>
        -->
</table>
	<center>
	<?php }?>
	<?php
		echo "<a href='problemstatus.php?id=$id'>[TOP]</a>";
		echo "&nbsp;&nbsp;<a href='status.php?problem_id=$id'>[STATUS]</a>";
	if ($page>$pagemin){
		$page--;
		echo "&nbsp;&nbsp;<a href='problemstatus.php?id=$id&page=$page'>[PREV]</a>";
		$page++;
	}
	if ($page<$pagemax){
		$page++;
		echo "&nbsp;&nbsp;<a href='problemstatus.php?id=$id&page=$page'>[NEXT]</a>";
		$page--;
	}
	?>
	</center>
</div>
<div class=foot>
	<?php require_once("oj-footer.php");?>

</div><!--end foot-->
</div><!--end main-->
</div><!--end wrapper-->
</body>
</html>
