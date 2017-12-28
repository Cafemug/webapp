<!DOCTYPE html>
<html>
<head>
	<title>food sample</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="foodsample.css">
</head>
<body>
<?php
    include '../db.php';
    session_start();
    $val=$_GET['contents_name'];
	$sql = "SELECT * from food where food_name= '$val'";
	$ret= mysql_query($sql);
	$res = mysql_fetch_row($ret);
    $info=explode("\n",$res[9]);
	$bottom=explode("\n",$res[10]);
    $extra=explode("\n",$res[11]);
    $arrs=array($info,$bottom,$extra);
    ?>
	<section>
		<h2> <?= $val; ?> </h2>
		<img class="fullimg" src=<?= $res[3]; ?>>
		<div class="paragraph">
			<div class="left_paragraph">
				<p> <?= $res[1]; ?> </p>				
			</div>
			<div class="right_paragraph">
				<p>  <?= $res[2]; ?> </p>
			</div>
		</div>
		<div class="paragraph">
			<div class="left_paragraph">
				<img src=<?= $res[4]; ?>>
				<img src=<?= $res[5]; ?>>
			</div>
			<div class="right_paragraph">
				<img src=<?= $res[6]; ?>>
				<img src=<?= $res[7]; ?>>
			</div>
		</div>
		<div class="paragraph">
			<h3> <?= $res[8]; ?></h3>
			<ul>
			<?php foreach($arrs as $arr){?>
				<li>
					<dl>
					    
						<dt><?= $arr[0]; ?></dt>
						<?php for($i=1;$i<count($arr);$i++) {?>
						<dd><?= $arr[$i]; ?></dd>
						<?php }?>
						
					</dl>
				</li>
				<?php }?>
				
			</ul>
		</div>
	</section>
</body>
</html>