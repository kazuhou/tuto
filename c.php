<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
</head>
<?php  //表示 ループする予定
?>
<FORM method="GET"action="b.php">

<?php 
$class = array('１１','CS','PHP','DB');

$name = explode(",","田中,ヤマダ,永山");
?>
<table width='800px' height='200px'>
 <?php for($i=0;$i<3;$i++){ 
    if($i<3){
        echo $class[$i];
    }?>
    <tr>
    <td> <?php echo $name[$i];?></td>
    <?php for($j=0;$j<3;$j++){ ?>
    <td><input type=text name=p<?php echo $i . $j;?>><td><?php 
    }?>
    </tr>
    <?php
  }?>
</table>


<INPUT type='submit' value="次へ">

</FORM>
</body>
</html> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ホーム</title>
<style type="text/css">
</head>
<body>

</body>