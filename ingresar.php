<html>
<head>
    <title> Ingresar Libro</title>
    <link rel="stylesheet" href="ingresar.css">
</head>
<header>
INGRESAR DATOS DEL LIBRO:
</header>
<form action='administrar_libro.php' method='post'>
    <div class='container'>
   
		
			<input placeholder='NOMBRE LIBRO' type='text' name='nombre'>
		
		
			<input placeholder='AUTOR' type='text' name='autor' >
		
	
			<input   placeholder='FECHA EDICION' type='text' name='edicion' >
		
		<input type='hidden' name='insertar' value='insertar'>
	</table>
    <input type='submit' value='Guardar' class='guardar'>
	<img src='back.png' width='10%'  onclick="window.location='index.php'">
</form>
    </div>
	

</html>