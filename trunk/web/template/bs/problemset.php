<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $view_title?></title>
<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
</head>
<body>
  <div class="nav">
    <div class="navheader">
    <?php require_once("oj-header.php");?>
    </div>
    <div class="navbody">
    <script type="text/javascript" src="include/jquery-latest.js"></script> 
    <script type="text/javascript" src="include/jquery.tablesorter.js"></script> 
    <script type="text/javascript">
    $(document).ready(function() 
    { 
        $("#problemset").tablesorter(); 
    } 
    ); 
    </script>
<div align="center">
   <font align='center' size=5px><b>Volume</b></font>
   <?php
    for ($i=1;$i<=$view_total_page;$i++){
		if ($i>1) echo '&nbsp;';
		if ($i==$page) 
			echo "<font color='red' size=5px>$i</font>";
		else 
			echo "<a href='problemset.php?page=".$i."'><font color='blue' size=5px>".$i."</font></a>";
	}
        ?>
</div>
   
<center>
<table>
<tr align='center' class='evenrow'>
<td width='5'></td>
<td width='50%' colspan='1'>
<form class=form-search action=problem.php>
Problem ID<input class="input-small search-query" type='text' name='id' size=5 style="height:24px">
<button class="btn btn-mini" type='submit'  >Go</button>
</form>
</td>
<td width='50%' colspan='1'>
<form class="form-search">
	<input  type="text" name=search >
	<button type="submit" ><?php echo $MSG_SEARCH?></button>
</form>
</td>
</tr>
</table>

<table id='problemset' width='100%'>

<tr class="toprow" id="htr">
	<th width="%10" ><?php echo $MSG_PROBLEM_ID?></th>
	<th width="%35"><?php echo $MSG_TITLE?></th>
	<th width="%35"><?php echo $MSG_SOURCE?></th>
	<th width="10%"><?php echo $MSG_AC?></A></th>
	<th width="10%"><?php echo $MSG_SUBMIT?></th>
	</tr>
<tr>
<?php 
	$cnt=0;
	foreach($view_problemset as $row){
		if ($cnt) 
			echo "<tr class='oddrow'>";
		else
			echo "<tr class='evenrow'>";
		foreach($row as $table_cell){
			echo "<td style='text-align:center;'>";
			echo "\t".$table_cell;
			echo "</td>";
				}
				
		echo "</tr>";
		$cnt=1-$cnt;
			}
?>
</tr>
</table>
	<div align="center">
	   <font align='center' size=5px><b>Volume</b></font>
	   <?php
	    for ($i=1;$i<=$view_total_page;$i++){
			if ($i>1) echo '&nbsp;';
			if ($i==$page) 
				echo "<font color='red' size=5px>$i</font>";
			else 
				echo "<a href='problemset.php?page=".$i."'><font color='blue' size=5px>".$i."</font></a>";
		}
		?>
	</div>
</center>
</div>
<!--end main--><div class="foot">
	<?php require_once("oj-footer.php");?>
</div><!--end foot-->

</body>
</html>
