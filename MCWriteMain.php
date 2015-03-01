<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MC Write</title>
	<link rel="icon" type="image/png" href="http://pokeasaurus.com/favicon.png"/>
	<link rel="stylesheet" href="dist/css/bootstrap.css"/>
	<script>

	</script>
	<style type="text/css">
		#iFrame1{
		border: 2px solid;
		height: 600px;
		width: 900px;
	}
	</style>
</head>
<body>
<div id="outerdiv">
	<iframe id="iFrame1" scrolling="no" frameborder=0 src="MCWriteOutput.php#bottom"></iframe>
</div>

<?php
if (isset($_GET['msg']))
{
	$file = 'MCWriteReceiver.txt';
    $msg = $_GET['msg'];
	
	if (($fd = fopen($file, "a+")) !== false) { 
		fwrite($fd, "\n" . $msg . "<br />");   
		fclose($fd); 
	}
}
?>
</body>