﻿<?
include ("./freeboard_lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);
?>
<head>
  <title>수원톡톡</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
 
<style type="text/css">
html,body { 
	margin: 0px;
	padding: 0px;
}
button{
	background-color:#fff;
	border:none;
	border-radius:5px;
	width:85%;
	height:70%;
}
table tr td{
	border-bottom:1px solid #DCDDDD;
	height:65px;
	width:40%;

}

.bodydiv{
	width:100%;
	height:90%;
}
.board{
	width:100%;
	height:80%;
}
</style>
</head>

<body>
	<?
	include("./suwon_include.html");
	?>

	<div class="board">
<!------------------------------------------------>
<table style="width:100%;background-color:#fff;">
	
	<?
	$sql="select * from foodtel;";
	$mid=mysql_query($sql);

	//넘겨온 num에 따라 번호 불러오기
	switch($_GET['num']){
		case 1:
			while($result=mysql_fetch_array($mid)){
				if($result['f_sort']=="한식"){
			?>
		<div>
			<tr>
				<td style="padding-left:7%;padding-bottom:1%;">
					<font size=3><?=$result['f_name']?></font>
				</td>
				<td style="width:60%">
					<button class="call" style="border:1px #B5B5B6 solid;border-radius:8px;background-color:#F5F5F5;color:#595757;"
					onclick="window.open('tel:<?=$result['f_num']?>');">
							<img src="./pic/num.png"/ style="float:left;width:12%;padding-left:8%;">
							<div style="width:70%;padding-top:1%;padding-right:2%;float:right;"><font size="3"><?=$result['f_num']?></font></div>		
					</button>
				</td>
			</tr>
			
			<?
					}
			}
				
		break;	

		case 2:
			while($result=mysql_fetch_array($mid)){
				if($result['f_sort']=="중식"){
			?>
			<tr>
				<td style="padding-left:7%;padding-bottom:1%;">
					<font size=3><?=$result['f_name']?></font>
				</td>
				<td style="width:60%">
					<button class="call" style="border:1px #B5B5B6 solid;border-radius:8px;background-color:#F5F5F5;color:#595757;"
					onclick="window.open('tel:<?=$result['f_num']?>');">
							<img src="./pic/num.png"/ style="float:left;width:12%;padding-left:8%;">
							<div style="width:70%;padding-top:1%;padding-right:2%;float:right;"><font size="3"><?=$result['f_num']?></font></div>
						</button>
				</td>
			</tr>
			<?
					}
			}
		break;	

		case 3:
			while($result=mysql_fetch_array($mid)){
				if($result['f_sort']=="양식"){
			?>
			<tr>
				<td style="padding-left:7%;padding-bottom:1%;">
					<font size=3><?=$result['f_name']?></font>
				</td>
				<td style="width:60%">
					<button class="call" style="border:1px #B5B5B6 solid;border-radius:8px;background-color:#F5F5F5;color:#595757;"
					onclick="window.open('tel:<?=$result['f_num']?>');">
							<img src="./pic/num.png"/ style="float:left;width:12%;padding-left:8%;">
							<div style="width:70%;padding-top:1%;padding-right:2%;float:right;"><font size="3"><?=$result['f_num']?></font></div>
						</button>
				</td>
			</tr>
			<?
					}
			}
		break;	

		case 4:
			while($result=mysql_fetch_array($mid)){
				if($result['f_sort']=="육류"){
			?>
			<tr>
				<td style="padding-left:7%;padding-bottom:1%;">
					<font size=3><?=$result['f_name']?></font>
				</td>
				<td style="width:60%">
					<button class="call" style="border:1px #B5B5B6 solid;border-radius:8px;background-color:#F5F5F5;color:#595757;"
					onclick="window.open('tel:<?=$result['f_num']?>');">
							<img src="./pic/num.png"/ style="float:left;width:12%;padding-left:8%;">
							<div style="width:70%;padding-top:1%;padding-right:2%;float:right;"><font size="3"><?=$result['f_num']?></font></div>
						</button>
				</td>
			</tr>
			<?
					}
			}
		break;	

		case 5:
			while($result=mysql_fetch_array($mid)){
				if($result['f_sort']=="카페"||$result['f_sort']=="주류"){
			?>
			<tr>
				<td style="padding-left:7%;padding-bottom:1%;">
					<font size=3><?=$result['f_name']?></font>
				</td>
				<td style="width:60%">
					<button class="call" style="border:1px #B5B5B6 solid;border-radius:8px;background-color:#F5F5F5;color:#595757;"
					onclick="window.open('tel:<?=$result['f_num']?>');">
							<img src="./pic/num.png"/ style="float:left;width:12%;padding-left:8%;">
							<div style="width:70%;padding-top:1%;padding-right:2%;float:right;"><font size="3"><?=$result['f_num']?></font></div>
						</button>
				</td>
			</tr>
			<?
					}
			}
		break;	

		case 6:
			while($result=mysql_fetch_array($mid)){
				if($result['f_sort']=="분식"||$result['f_sort']=="분식"){
			?>
			<tr>
				<td style="padding-left:7%;padding-bottom:1%;">
					<font size=3><?=$result['f_name']?></font>
				</td>
				<td style="width:60%">
					<button class="call" style="border:1px #B5B5B6 solid;border-radius:8px;background-color:#F5F5F5;color:#595757;"
					onclick="window.open('tel:<?=$result['f_num']?>');">
							<img src="./pic/num.png"/ style="float:left;width:12%;padding-left:8%;">
							<div style="width:70%;padding-top:1%;padding-right:2%;float:right;"><font size="3"><?=$result['f_num']?></font></div>
						</button>
				</td>
			</tr>
			<?
					}
			}
		break;		
	}
	?>
</table>
	</div>
<!------------------------------------------------>
</div>

</div>
</body>
</html>
