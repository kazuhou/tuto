<!DOCTYPE  html>
<html lang="ja">
<body>
<?php 
	$sum=0;
	$val_list=array();
	for($i=0;$i<3;$i++){
		for($j=0;$j<3;$j++){
		$val[$j]=$_GET['p'.$i.$j];	  
		$val_list[$i]=$val ;
		}
	}
?>
</body>
<head>
　<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" media="screen" >
　<title></title>
<style> 
</style>
</head>
<body>
<?php //table作成?>
	<table>
	<?php foreach( $val_list as $data_list){
		$val = $data_list; ?>
			<tr>
			<?php foreach($val as $data){ ?>
				<td> <?php echo $data ; ?></td><?php 
				$sum += $data;
				$ave =  $sum / 3;
			}
			?>
				<td><?php echo $sum  ;?></td>
				<td><?php echo $ave  ;?></td>
			</tr><?php
		}?>
	</table>
<?php

?>
</body>
</html>