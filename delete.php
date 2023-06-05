<?php 

echo 'ESTAMOS EN DELETE.PHP';
echo 'Hemos recogido el valor del id : '. $_GET['id'];

// 1 recoger el id e la URL, ver si existe 
$id = $_GET['id']

// 2. Importar la clase database.php para:
require_once('Database.php');

// 3. invocar la funcion delete de la clase database.php
Database::delete($id);

// 4. Retornar al index.php para ver cambios
header('location: index.php');

?> 