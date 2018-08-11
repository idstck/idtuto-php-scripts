<!DOCTYPE html>
<html>
<head>
	<title>Menu Tree Vertical</title>
	<link rel="stylesheet" type="text/css" href="css/jquery.treeview.css">
	<style type="text/css">
		body {
			font-family: Verdana, helvetica, arial, sans-serif;
			font-size: 12px;
			background: #fff;
			color: #333;
		}
	</style>
</head>
<body>

	<?php include 'menu.php'; ?>

	<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="js/jquery.treeview.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$("#menu-tree").treeview();
		});
	</script>
</body>
</html>