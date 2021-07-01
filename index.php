<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
</head>
<body>
    <h1>Holaa mundo</h1>

    <form id="formulario" action="procesar.php" method="POST">
        <input type="text" id="num1" name="num1">
        *
        <input type="text" id="num2" name="num2">

        <input type="submit" id="submit" name="submit" value="Multiplicar">
    </form>

    <select name="datos" id="datos">
        <option value="0"> Selecciona un valor </option>
        <?php
            for($a =1; $a <12; $a++ ){
                echo "<option value='$a'>$a</option>";
            }
        ?>
    </select>
</body>
</html>