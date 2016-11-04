<?php
$city = $_POST ["city"];
$state = $_POST ["state"];
$zip = $_POST ["zip"];
$firstname = $_POST ["firstName"];
$lastname = $_POST ["lastName"];
$quantity = $_POST ["quantity"];
$size = $_POST ["size"];
date_default_timezone_set ( 'America/Phoenix' );
$mydate = date ( "d-M-Y" );

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Purchase</title>
</head>
<body>
	<div class="receipt">
		<h3>Receipt</h3>
		<br />
Purchase date: <?php echo $mydate?><br />
Purchase <?php echo $quantity?> item(s) of size '<?php echo $size?>' at $<?php

if ($size === 'small')
	echo '2.00';

if ($size === 'medium')
	echo '2.65';

if ($size === 'large')
	echo '2.99'?>
	 each<br />

Total Cost: $<?php
if ($size === 'small')
	echo 2 * $quantity;

if ($size === 'medium')
	echo 2.65 * $quantity;

if ($size === 'large')
	echo 2.99 * $quantity?><br /> <br />

		<div class="ship">
			<fieldset>
				<legend>ship to</legend>
<?php echo $firstname?> <?php echo $lastname?><br />
<?php echo $city ?>, <?php echo $state?><br />
<?php echo $zip?>
</fieldset>
		</div>
	</div>
</body>
</html>