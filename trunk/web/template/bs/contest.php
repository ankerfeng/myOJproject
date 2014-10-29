<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
         <script src="include/sortTable.js"></script>
</head>
<body>
<div class="nav">
	<div class="navhead">
		<?php require_once("contest-header.php");?>
	</div>
<div class='navbody'>
<center >
<h3 >Contest<?php echo $view_cid?> - <?php echo $view_title ?></h3>
<h4><?php echo $view_description?></h4>
<div >
	<p >
	Start Time: <font size=3 color=#993399><?php echo $view_start_time?></font>
	End Time: <font size=3 color=#993399><?php echo $view_end_time?></font>
	</p>
	<p >
	Current Time: <font size=3 color=#993399> <?php echo date("Y-m-d H:i:s")?></font>
	Status:<?php
		if ($now>$end_time) 
			echo "<span class=red>Ended</span>";
		else if ($now<$start_time) 
			echo "<span class=red>Not Started</span>";
		else 
			echo "<span class=red>Running</span>";
		?>
		          
		<?php
		if ($view_private=='0') 
			echo "<span class=blue>Public</font>";
		else 
			echo "&nbsp;&nbsp;<span class=red>Private</font>"; 
		?>
	</p>
</div>
<div>
	[<a href='status.php?cid=<?php echo $view_cid?>'>Status</a>]
	[<a href='contestrank.php?cid=<?php echo $view_cid?>'>Standing</a>]
	[<a href='conteststatistics.php?cid=<?php echo $view_cid?>'>Statistics</a>]
</div>
</center>
<table width='100%'>
	<tr id=htr>
	<!--onclick="sortTable('problemset', 1, 'int');"-->
	<th ><?php echo $MSG_PROBLEM_ID?></th>
	<th ><?php echo $MSG_TITLE?></th>
	<th ><?php echo $MSG_SOURCE?></th>
	<!--onclick="sortTable('problemset', 4, 'int');"-->
	<th ><?php echo $MSG_AC?></th>
	<!--onclick="sortTable('problemset', 5, 'int');"-->
	<th ><?php echo $MSG_SUBMIT?></th>
	</tr>
	<tr>
		<?php 
			$cnt=0;
			foreach($view_problemset as $row){
				if ($cnt) 
					echo "<tr class='tl'>";
				else
					echo "<tr class='tl_1'>";
				foreach($row as $table_cell){
					echo "<td >";
					echo "\t".$table_cell;
					echo "</td>";
				}
				
				echo "</tr>";
				
				$cnt=1-$cnt;
			}
			?>
	</tr>
</table>

</div>
<div class="foot">
	<?php require_once("oj-footer.php");?>
</div>
</div>
</body>
<script>
var diff=new Date("<?php echo date("Y/m/d H:i:s")?>").getTime()-new Date().getTime();
//alert(diff);
function clock()
    {
      var x,h,m,s,n,xingqi,y,mon,d;
      var x = new Date(new Date().getTime()+diff);
      y = x.getYear()+1900;
      if (y>3000) y-=1900;
      mon = x.getMonth()+1;
      d = x.getDate();
      xingqi = x.getDay();
      h=x.getHours();
      m=x.getMinutes();
      s=x.getSeconds();
  
      n=y+"-"+mon+"-"+d+" "+(h>=10?h:"0"+h)+":"+(m>=10?m:"0"+m)+":"+(s>=10?s:"0"+s);
      //alert(n);
      document.getElementById('nowdate').innerHTML=n;
      setTimeout("clock()",1000);
    } 
    clock();
</script>

</html>
