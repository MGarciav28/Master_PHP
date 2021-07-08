<!<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
    </head>
    <body>
        <h1>Foormulario en PHP</h1>        
        <form action="recibir_post.php" method="POST">
            <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            </p> 
            <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos"></p>
            
            <input type="submit" value="Enviar datos">
        </form>
        
        <!-- EN ESTE FORMULARIO CON METODO 'GET' SE RECIBIERON VALORES QUE 
         POSTERIORMENTE SE ENVIARON AL DOCUMENTO 'recibir.php' -->

    </body>
</html>


