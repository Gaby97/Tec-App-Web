<!DOCTYPE html>
<html>
    <head>
        <title>Tarea N0.2</title>
    </head>
<body>
       
    <?php 
    // Mandamos a llamar al Archivo de Nombre: "Tarea02Parte2.php, el cual tenemos el codigo PHP el cual se encargara de realizar las validaciones y asignaciones de los Campos."
    include('Tarea02Parte2.php');
    // En $variables es mediante la cual accederemos a las variables, aqui se manda a llamar a la clase: 'Form' en la cual se encuentran los IF y Else para cada campo.
    $variables = new Form();
    // Estando en la clase 'Form', accederemos a la Funcion: 'Info_Validacion', en la cual validaremos los campos dependiendo de la necesidad ya sea si son campos requeridos/obligatorios o no.
    $variables->Info_Validacion();
    ?>
    <!– Inicio de Construccion del Formulario–>
        <h2>PHP Form Validation Example</h2>
        <p><span class="error">* required field.</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <!– Inicio de Construccion de los Inputs–>	
            Name: <input type="text" name="name" value="<?php echo $variables->name;?>">
            <span class="error">* <?php echo $variables->nameErr;?></span>
            <br><br>
            E-mail: <input type="text" name="email" value="<?php echo $variables->email;?>">
            <span class="error">* <?php echo $variables->emailErr;?></span>
            <br><br>
            Website: <input type="text" name="website" value="<?php echo $variables->website;?>">
            <span class="error"><?php echo $variables->websiteErr;?></span>
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"><?php echo $variables->comment;?></textarea>
            <br><br>
            Gender:
            <input type="radio" name="gender" <?php if (isset($variables->gender) && $variables->gender=="female") echo "checked";?> value="female">Female
            <input type="radio" name="gender" <?php if (isset($variables->gender) && $variables->gender=="male") echo "checked";?> value="male">Male
            <span class="error">* <?php echo $variables->genderErr;?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <!– Resultado de los Campos Ingresados con Anterioridad puestos en las Variables.–>	
        <?php 
            echo "<h2>Your Input:</h2>";
            echo $variables->name;
            echo "<br>";
            echo $variables->email;
            echo "<br>";
            echo $variables->website;
            echo "<br>";
            echo $variables->comment;
            echo "<br>";
            echo $variables->gender;
        ?>

        <ul>
            <li><a href="form.php">Volver al Inicio</a></li>
        </ul>

    </body>
</html>