<?php 

echo 'ESTAMOS EN DELETE.PHP';
echo 'Hemos recogido el valor del id : '. $_GET['id'];

// 1 recoger el id e la URL, ver si existe 
$id = $_GET['id'];

// 2. Importar la clase database.php para:
require_once('Database.php');

// 3. invocar la funcion findById de la clase database.php
$ordenador = Database::findById($id);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" values="<?php $coche['id'] ?>">
        <input type="text" name="marca" values="<?php $coche['marca'] ?>" placeholder="Actualiza la marca">
        <input type="text" name="modelo" values="<?php $coche['modelo'] ?>" placeholder="Actualiza el modelo">
        <input type="text" name="precio" values="<?php $coche['precio'] ?>" placeholder="Actualiza el precio">
        <input type="text" name="descripcion" values="<?php $coche['descripcion'] ?>" placeholder="Actualiza la descripcion">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>