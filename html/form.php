<!DOCTYPE html>
<html>
<header>
    <title>Formulario</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</header>
<body>
<div class="center">
<h2>Campo de texto</h2>
<p>El input <strong>type="text"</strong> define una línea para introducir un campo de texto:</p>

<form action="/action_page.php" method="POST">
  <label for="nombre">Nombre:</label><br>
  <input type="text" id="nombre" name="fname"><br>
  <label for="apellido">Apellidos:</label><br>
  <input type="text" id="apellido" name="lname"><br><br>
  <input type="submit" value="enviar">
</form>
</div>
</body>
</html>