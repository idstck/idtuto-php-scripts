<?php
	require 'db.php';
	require 'menu_function.php';

	$sql = $db->query("SELECT * FROM menu ORDER BY menu_order");
	$result = $sql->fetchAll(PDO::FETCH_OBJ);

	foreach ($result as $row) {
		$data[$row->parent_id][] = $row;
	}
	$menu = menu($data);
	echo "$menu";
?>