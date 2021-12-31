<?php
require 'serverside.php';
$table_data->get('vista_usuarios','user_id',array('user_id', 'username','first_name','last_name','gender','password','status'));
// primero se cambio el nombre de la tabla user_details por usuarios
// para crear 'vista_usuarios' => en la BD se uso la sentencia CREATE VIEW vista_usuarios AS SELECT user_id, username, first_name, last_name, gender, password, status FROM usuarios;

?>