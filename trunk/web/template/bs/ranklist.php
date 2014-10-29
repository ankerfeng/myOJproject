<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
        <style type="text/css">
         a{
             font-size:14px;
             color:black;
             
          }
          a:hover{
              color:orange;
              text-decoration:none;
          }
        </style>
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
</head>
<body>
<div class="nav">
<div class="navhead">
	<?php require_once("oj-header.php");?>
</div>
<div class="navbody">
	<table id=htr2>
		<tr>
			
			<form action=userinfo.php>
			<?php echo $MSG_USER?><input name=user>
			<input type=submit value=Go>
			</form></td><td colspan=3 style="padding-left:200px;">
			<a href=ranklist.php?scope=d>Day</a>|
			<a href=ranklist.php?scope=w>Week</a>|
			<a href=ranklist.php?scope=m>Month</a>|
			<a href=ranklist.php?scope=y>Year</a>
			
		</tr>
		<tr id=htr >
				<td ><?php echo $MSG_Number?>
				<td ><?php echo $MSG_USER?>
				<td ><?php echo $MSG_NICK?>
				<td ><?php echo $MSG_AC?>
				<td ><?php echo $MSG_SUBMIT?>
				<td ><?php echo $MSG_RATIO?>
		</tr>
	        
			<?php 
			$cnt=0;
			foreach($view_rank as $row){
				if ($cnt) 
					echo "<tr class='tl'>";
				else
					echo "<tr class='tl_1'>";
				foreach($row as $table_cell){
					echo "<td style='height:30px;line-height:30px;'>";
					echo "\t".$table_cell;
					echo "</td>";
				}
				
				echo "</tr>";
				
				$cnt=1-$cnt;
			}
			?>		
	</table>
     <div class="font">
	<?php 
	   echo "<center>";
		for($i = 0; $i <$view_total ; $i += $page_size) {
			echo "<a href='./ranklist.php?start=" . strval ( $i ).($scope?"&scope=$scope":"") . "'>";
			echo strval ( $i + 1 );
			echo "-";
			echo strval ( $i + $page_size );
			echo "</a>&nbsp;";
			if ($i % 250 == 200)
				echo "<br>";
		}
		echo "</center>";
	
	?>
    </div>
</div>
<div class="foot">
	<?php require_once("oj-footer.php");?>

</div><!--end foot-->
</div><!--end wrapper-->
</body>
</html>
