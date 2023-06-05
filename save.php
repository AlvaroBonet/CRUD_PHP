<?php 

// 1. Recoger todos los elementos del formulario
$datos = [$_POST['marca'], $_POST['modelo'], $_POST['precio'], $_POST['descripcion']];

// 2. Cargar la clase database.php
require_once('Database.php');

// 3. Invocar la funcion save de database, llevandole los datos
Database::save($datos);

// 4. Retornar al index.php para ver cambios
header('location: index.php');

?> 