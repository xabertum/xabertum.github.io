<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<style>
	label { display:block; }
	textarea { display:block; }
</style>

</head>

<body>
	<form method="post" action="guardar_galeria.php">
    	<label>Titulo</label>
        <input type="text" name="titulo"/>
        <label>Descripción</label>
        <textarea name="descripcion" rows="5" cols="90"></textarea>
        <input type="submit"/>
	</form>
</body>
</html>