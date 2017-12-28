
<?php
	include '../db.php';
    session_start();
    $val=$_GET['contents_name'];
	$sql = "SELECT * from sight where sight_name= '$val'";
	$ret= mysql_query($sql);
	$res = mysql_fetch_row($ret);
   
	
	//echo "<br>";
	//print_r($contentR);
	$info=explode("\n",$res[8]);
	$bottom=explode("\n",$res[9]);
    $extra=explode("\n",$res[10]);
    
	//echo "<br>";
	//print_r($info);
	//echo "<br>";
	//print_r($bottom);
    
    ?>
    <!DOCTYPE html>
<html>
<head>
    <title><?= $val?></title>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="contentsamplecss.css">
</head>
<body>
	<section>
		<h2> <?= $res[0]; ?> </h2>
		<img class="fullimg" src=<?= $res[3] ?>>
		<div class="paragraph">
			<div class="left_paragraph">
				<p> <?= $res[1]; ?> </p>				
				<!-- veriable1 ? -->
			</div>
			<div class="right_paragraph">
				<p>  <?= $res[2]; ?> </p>
				<!-- veriable2 ? -->
				
				<!-- 일단 있어서 들고오긴 했는데 blockquote가 필요한지는 의문 -->
				<!-- 여기 text는 justfied 적용 예정-->
			</div>
		</div>
		<div class="paragraph">
			<div class="left_paragraph">
				<img src=<?= $res[4] ?>>
				<img src=<?= $res[5] ?>>
			</div>
			<div class="right_paragraph">
				<img src=<?= $res[6] ?>>
				<img src=<?= $res[7] ?>>
			</div>
		</div>
		<div class="paragraph">
			<h3> <?= $info[0]; ?></h3>
			<ul>
				<li>
					<dl>
						<dt> <?= $info[1]; ?></dt>
						<?php for($i=2;$i<count($info);$i++){
	                    ?>
						<dt> <?= $info[$i]; ?></dt>
						<?php
	                }?>
					</dl>
				</li>
				<li>
					<dl>
					<?php for($i=0;$i<count($bottom);$i++){
	                    ?>
						<dt> <?= $bottom[$i]; ?></dt>
						<?php
	                }?>
					</dl>
				</li>
				<li>
					<dl>
					<?php for($i=0;$i<count($extra);$i++){
	                    ?>
						<dt> <?= $extra[$i]; ?></dt>
						<?php
	                }?>
					</dl>
				</li>
			</ul>
		</div>
		
	</section>
	
</body>
</html>