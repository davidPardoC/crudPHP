<?php
//incluye la clase Libro y CrudLibro
require_once('crud_libro.php');
require_once('libro.php');
$crud=new CrudLibro();
$libro= new Libro();
//obtiene todos los libros con el método mostrar de la clase crud
$listaLibros=$crud->mostrar();
?>

<html>
<head>
    <title>Mostrar Libros</title>
    <link rel="stylesheet" href="mostrar.css">
</head>
<body>
	<table>
		<head>
			<td id='head'>Nombre</td>
			<td id='head'>Autor</td>
			<td id='head'>Edicion</td>
			<td id='head'>Actualizar</td>
			<td id='head'>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaLibros as $libro) {?>
			<tr>
				<td><?php echo $libro->getNombre() ?></td>
				<td><?php echo $libro->getAutor() ?></td>
				<td><?php echo $libro->getAnio_edicion()?> </td>
				<td><a href="actualizar.php?id=<?php echo $libro->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_libro.php?id=<?php echo $libro->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<img src='back.png' width='10%'  onclick="window.location='index.php'">
</body>
</html>