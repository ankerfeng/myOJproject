<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
</head>
<body>
<div class="nav">
	<div class="navhead">
	<?php require_once("oj-header.php");?>
	</div>

<?php
if($view_content)echo "
<table >
<td >";
//邮箱列表
echo"

<table width=180>
    <h1><a href='#new'>NewMail</a></h1>
    <tr class=tblue>
	
	<td>Title</td>
	<td>Date</td>
    </tr>
	   ";
		
		foreach($view_mail as $row){
			
				echo "<tr class='tl_2'>";
			foreach($row as $table_cell){
				echo "<td>";
				echo "\t".$table_cell;
				echo "</td>";
				}
				
			echo "</tr>";
				
			}
//邮件内容
echo"	
</table>
</td>
<td>
<table width=800>
	<tr>
		<th id='htr2'>$to_user:".htmlspecialchars(str_replace("\n\r","\n",$view_title))." </th>
	</tr>
	<tr>
		<td>
		<p class='content'>".nl2br(htmlspecialchars(str_replace("\n\r","\n",$view_content)))."</p>		
		</td>
	</tr>
</table>
";
//新邮件
echo'
<a name="new"></a>
<table width=800>
	<form method=post action=mail.php>
	<tr>
	<td>
		To:<input name=to_user size=10 value="'.$to_user.'">
		Title:<input name=title size=20 value="'.$title.'">
		<input type=submit value="'.$MSG_SUBMIT.'">
	</td>
	</tr>
	<tr><td> 
		<textarea name=content rows=10 cols=47 class="input input-xxlarge"></textarea>
	 </td></tr>
	</form>
   </table>
';
echo "
</td>
</table>
";
	
?>

<div class='foot nav'>
	<?php require_once("oj-footer.php");?>

</div><!--end foot-->
</div><!--end main-->
</div><!--end wrapper-->
</body>
</html>
