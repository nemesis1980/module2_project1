<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Menu PHP projekt</title>
</head>

<body>

<?php
 $curpage = basename($_SERVER['PHP_SELF']);
?>

<ul>
	<li><a href="index.php" <?php if ($curpage == 'index.php') { echo 'class="active"'; } ?>>Hjem</a></li>
	<li><a href="side1.php" <?php if ($curpage == 'side1.php') { echo 'class="active"'; } ?>>Side 1</a></li>
	<li><a href="side2.php" <?php if ($curpage == 'side2.php') { echo 'class="active"'; } ?>>Side 2</a></li>
	<li><a href="side3.php" <?php if ($curpage == 'side3.php') { echo 'class="active"'; } ?>>Side 3</a></li>
	<li><a href="side4.php" <?php if ($curpage == 'side4.php') { echo 'class="active"'; } ?>>Side 4</a></li>
</ul>


</body>
</html>
