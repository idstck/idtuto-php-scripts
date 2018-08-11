<?php 
    $hostname = 'localhost';
    $database = 'idtuto_tree_menu';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO("mysql:host={$hostname};dbname={$database}", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>