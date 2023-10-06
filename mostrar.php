<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/estilo.css">
<title>Actores</title>
</head>
    <body>
<center>
    <tr>INDICE DE ACTORES</tr>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Actor</th>
                <th>Pelicula</th>
                <th>Personaje</th>
                <th>Edad</th>
                <th>Pais</th>
            </tr>
        </thead>
    <!-- -------------------------------- Titulos -------------------------------------------- -->
    <tbody>
    <?php
        include("open.php");
        $consulta = "SELECT * FROM actores";
        $resultado = $conexion->query($consulta);
        while($row = $resultado->fetch_assoc()){
    ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['actor']; ?></td>
            <td><?php echo $row['pelicula']; ?></td>
            <td><?php echo $row['personaje']; ?></td>
            <td><?php echo $row['edad']; ?></td>
            <td><?php echo $row['pais']; ?></td>
            
            <td><img height="50px" src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen']); ?> "></td>
        </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
</center>
</body>
</html>