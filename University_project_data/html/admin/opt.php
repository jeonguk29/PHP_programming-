<?
   include"../common.php";
   	
	$query="select * from opt order by no47;";
	$result=mysqli_query($db,$query);
	if(!$result) exit("에러:$query");
	
	$count=mysqli_num_rows($result);
	
	
 ?>
<html>
<head>
<title>쇼핑몰 홈페이지</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
<script>
	function go_new()
	{
		location.href="opt_new.php";
	}
</script>
</head>

<body style="margin:0">

<center>
<br>
<script> document.write(menu());</script>

<table width="500" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="left"  width="250" height="50" valign="bottom">&nbsp 옵션수 : <font color="#FF0000"><?=$count;?></font></td>
		<td align="right" width="250" height="50" valign="bottom">
			<input type="button" value="신규입력" onclick="javascript:go_new();"> &nbsp
		</td>
	</tr>
	<tr><td height="5" colspan="2"></td></tr>
</table>

<table width="500" border="1" cellpadding="2"  style="border-collapse:collapse">
	<tr bgcolor="#CCCCCC" height="20"> 
		<td width="50"  align="center"><font color="#142712">번호</font></td>
		<td width="250" align="center"><font color="#142712">옵션명</font></td>
		<td width="100" align="center"><font color="#142712">수정/삭제</font></td>
		<td width="100" align="center"><font color="#142712">소옵션편집</font></td>
	</tr>

<?

for ($i=0; $i<$count; $i++) //남은 줄만큼만 표시

	{

		$row=mysqli_fetch_array($result);
		
		echo(" <tr bgcolor='lightyellow'>

		
			<td width='50' align='center'>$row[no47]</td>
			<td width='250' align='center'>$row[name47]</td>
			<td width='100' align='center'>
				<a href='opt_edit.php?no=$row[no47]'>수정</a> /
				<a href='opt_delete.php?no=$row[no47]'onClick='javascript:return confirm(\"삭제할까요 ?\");'>삭제</a>
			</td>
			<td width='100' align='center'><a href='opts.php?no1=$row[no47]'>소옵션편집</a></td>
			
			</tr>");
	}
?>
<!--
	<tr bgcolor="#F2F2F2" height="20">	
		<td width="50"  align="center">1</td>
		<td width="250" align="left">사이즈</td>
		<td width="100" align="center">
			<a href="opt_edit.html?no1=1">수정</a>/
			<a href="opt_delete.html?no1=1" onclick="javascript:return confirm('삭제할까요 ?');">삭제</a>
		</td>
		<td width="100" align="center"><a href="opts.html?no1=1">소옵션편집</a></td>
	</tr>
	<tr bgcolor="#F2F2F2" height="20">
		<td width="50"  align="center">2</td>
		<td width="250" align="left">색상</td>
		<td width="100" align="center">
			<a href="opt_edit.html?no1=2">수정</a>/
			<a href="opt_delete.html?no1=2" onclick="javascript:return confirm('삭제할까요 ?');">삭제</a>
		</td>
		<td width="100"  align="center"><a href="opts.html?no1=2">소옵션편집</a></td>
	</tr>
-->
</table>

<br>
</center>

</body>
</html>