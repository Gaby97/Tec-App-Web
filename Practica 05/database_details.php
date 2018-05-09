<?php 
    
    include_once('config.php');
    $config = mysqli_connect($servidor, $username, $password, $database) or die ('Error de conexion');


    if($config){
        echo 'Conexion establecida';
    }
    $numfilas = 0;
      
    function getDatos(){
        global $config, $numfilas;
        //se manda la consulta y se trae las filas del select 

        $datos = mysqli_query ($config, 'SELECT *  FROM Datos');

        //trae el numero de filas que trae la consulta
        $numfilas = mysqli_num_rows($datos);
       // por cada dila que recorre es lo que va retornando
        return $datos;
        
    }

    //retorna datos que va a traer de la bd con nombres, correo etc
    function getNumfilas(){
        global $numfilas;
        return $numfilas;
    }
    function update($ID){
        global $config;
        $Nombre = $_POST['Nombre'];
        $Correo = $_POST['Correo'];
        $updatee = mysqli_query($config, 'UPDATE Datos SET Nombre = $Nombre, Correo = $Correo WHERE ID = $ID');
    }

 ?>