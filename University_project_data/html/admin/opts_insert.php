<?
   include "../common.php";

   $name=$_REQUEST['name'];
   $no1=$_REQUEST['no1'];
   $no2=$_REQUEST['no2'];
   
   $query="insert into opts (name47, opt_no47)
   values ('$name', '$no1')";
   $result=mysqli_query($db,$query);
   if (!$result) exit("에러:$query");

   echo("<script>location.href='opts.php?no1=$no1'</script>");
?>


