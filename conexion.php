<?php 

function conectar_a_bd() {

$servername = "localhost";
$username = "root";
$password = "";
$database = "crudapi";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);

} else {

    return $conn;

}

}

function insertar_Datos($datos) {

    $respuesta = false; 
    $conn = conectar_a_bd();

    for ($i = 0; $i < count($datos); $i++) {
    
        $sql = "INSERT INTO `usuario` (`Nombre`, `Apellidos`, `Genero`, `Ciudad`, `Estado`, `Pais`) VALUES ('".$datos[$i]['name']['first']."', '".$datos[$i]['name']['last']."', '".$datos[$i]['gender']."', '".$datos[$i]['location']['city']."', '".$datos[$i]['location']['state']."', '".$datos[$i]['location']['country']."')";
        $conn->query($sql);
    
    }

    $conn->close();

}

function obtener_Datos() {

    $respuesta = false; 
    $conn = conectar_a_bd();
    $sql =  "SELECT * FROM `usuario`";
    $result = $conn->query($sql);
    $datos = [];

    if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {

            array_push($datos,  Array($row["Id_Usuario"], $row["Nombre"], $row["Apellidos"], $row["Genero"], $row["Ciudad"], $row["Estado"], $row["Pais"]));
        }

    } else {

        echo "0 results";

    }
    
    $conn->close();

    return ($datos);



    function actualizar_datos(){
        $respuesta = false; 
        $conn = conectar_a_bd();
        $sql =  "UPDATE usuarios SET Nombre = '', Apellidos = '', Genero = '', Ciudad = '', Estado = '', Pais = '' WHERE id_Usuario = ''";
        $result = $conn->query($sql);
      
    }

}

?>