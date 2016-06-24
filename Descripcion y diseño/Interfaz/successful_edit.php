<?php

try {

  //Abrir conexión con la BBDD utilizando PDO
  $con = new PDO('mysql:host=localhost;dbname=Biblioteca de ataques', 'root', 'jjrch8mini');
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //Para recuperar los datos de las consultas
  $ENVIAR = $_POST['enviar'];
  $NOMBRE_2 = $_POST['searchinput'];
  $DESCRIPCION_2 = $_POST['description'];
  $ID_ATAQUE = $_POST['id_tool'];

  if($ENVIAR != null){

    //Actualizar nombre y descripción de la herramienta.
    $stmt = $con->prepare("UPDATE `Biblioteca de ataques`.`Ataques` SET `Nombre` = '$NOMBRE_2', `Descripcion` = '$DESCRIPCION_2' WHERE `Ataques`.`ID_ATAQUE` = '$ID_ATAQUE'"); 
    $stmt->execute();

    //Para actualizar las categorias se borran las antiguas y se insertan las nuevas, puesto que es mucho más fácil que actualizar las ya existentes.
    $ID_SO = $_POST['Enum_SO'];
    $count = count($ID_SO);
    $borrado = "DELETE FROM `Sistemas_operativos` WHERE ID_ATAQUE = $ID_ATAQUE";
    $stmt = $con->prepare($borrado); 
    $stmt->execute();
    for ($i = 0; $i < $count; $i++) {
      //echo 'ID de ataque de sistema operativo: ' . $ID_SO[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Sistemas_operativos (ID_ATAQUE, ID_SO) VALUES (:id_ataque, :id_so)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_so', $ID_SO[$i]);
      $stmt->execute();
    }

    $ID_RECOPILACION = $_POST['Enum_recopilacion'];
    $count = count($ID_RECOPILACION);
    $borrado = "DELETE FROM `Recopilacion_info` WHERE ID_ATAQUE = $ID_ATAQUE";
    $stmt = $con->prepare($borrado); 
    $stmt->execute();
    for ($i = 0; $i < $count; $i++) {
      //echo 'ID de ataque de recopilacion de información: ' . $ID_RECOPILACION[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Recopilacion_info (ID_ATAQUE, ID_RECOPILACION) VALUES (:id_ataque, :id_recopilacion)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_recopilacion', $ID_RECOPILACION[$i]);      
      $stmt->execute();
    }

    $ID_VULNERABILIDAD = $_POST['Enum_vulnera'];
    $count = count($ID_VULNERABILIDAD);
    $borrado = "DELETE FROM `Analisis_vulnera` WHERE ID_ATAQUE = $ID_ATAQUE";
    $stmt = $con->prepare($borrado); 
    $stmt->execute();
    for ($i = 0; $i < $count; $i++) {
      //echo 'ID de ataque de analisis de vulnerabilidades: ' . $ID_VULNERABILIDAD[$i] . '<br/>'; 
      $stmt = $con->prepare("INSERT INTO Analisis_vulnera (ID_ATAQUE, ID_VULNERABILIDAD) VALUES (:id_ataque, :id_vulnerabilidad)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_vulnerabilidad', $ID_VULNERABILIDAD[$i]);      
      $stmt->execute();
    }

    $ID_CONTRASENA = $_POST['Enum_contrasenas'];
    $count = count($ID_CONTRASENA);
    $borrado = "DELETE FROM `Contrasenas` WHERE ID_ATAQUE = $ID_ATAQUE";
    $stmt = $con->prepare($borrado); 
    $stmt->execute();
    for ($i = 0; $i < $count; $i++) {
      //echo 'ID de ataque de romper contraseñas: ' . $ID_CONTRASENA[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Contrasenas (ID_ATAQUE, ID_CONTRASENA) VALUES (:id_ataque, :id_contrasena)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_contrasena', $ID_CONTRASENA[$i]);      
      $stmt->execute();    
    }

    $ID_WIRELESS = $_POST['Enum_wireless'];
    $count = count($ID_WIRELESS);
    $borrado = "DELETE FROM `Wireless` WHERE ID_ATAQUE = $ID_ATAQUE";
    $stmt = $con->prepare($borrado); 
    $stmt->execute();
    for ($i = 0; $i < $count; $i++) {
      //echo 'ID de herramienta wireless: ' . $ID_WIRELESS[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Wireless (ID_ATAQUE, ID_WIRELESS) VALUES (:id_ataque, :id_wireless)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_wireless', $ID_WIRELESS[$i]);      
      $stmt->execute();    
    }

    $ID_EXPLOIT = $_POST['Enum_exploit'];
    $count = count($ID_EXPLOIT);
    $borrado = "DELETE FROM `Exploit` WHERE ID_ATAQUE = $ID_ATAQUE";
    $stmt = $con->prepare($borrado); 
    $stmt->execute();
    for ($i = 0; $i < $count; $i++) {
      //echo 'ID de herramienta exploit: ' . $ID_EXPLOIT[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Exploit (ID_ATAQUE, ID_EXPLOIT) VALUES (:id_ataque, :id_exploit)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_exploit', $ID_EXPLOIT[$i]);      
      $stmt->execute();    
    }

    $ID_SSF = $_POST['Enum_SSF'];
    $count = count($ID_SSF);
    $borrado = "DELETE FROM `Sniff_Spoof_Foren` WHERE ID_ATAQUE = $ID_ATAQUE";
    $stmt = $con->prepare($borrado); 
    $stmt->execute();
    for ($i = 0; $i < $count; $i++) {
      //echo 'ID de herramienta Sniffer/Spoofing/Forensics: ' . $ID_SSF[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Sniff_Spoof_Foren (ID_ATAQUE, ID_SSF) VALUES (:id_ataque, :id_SSF)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_SSF', $ID_SSF[$i]);      
      $stmt->execute();    
    }

    $ID_ACCESS = $_POST['Enum_access'];
    $count = count($ID_ACCESS);
    $borrado = "DELETE FROM `Maintaining_access` WHERE ID_ATAQUE = $ID_ATAQUE";
    $stmt = $con->prepare($borrado); 
    $stmt->execute();
    for ($i = 0; $i < $count; $i++) {
      //echo 'ID de herramienta de Maintaining Access: ' . $ID_ACCESS[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Maintaining_access (ID_ATAQUE, ID_ACCESS) VALUES (:id_ataque, :id_access)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_access', $ID_ACCESS[$i]);      
      $stmt->execute();    
    }

    $ID_INVERSA = $_POST['Enum_inversa'];
    $count = count($ID_INVERSA);
    $borrado = "DELETE FROM `Ingenieria_inversa` WHERE ID_ATAQUE = $ID_ATAQUE";
    $stmt = $con->prepare($borrado); 
    $stmt->execute();
    for ($i = 0; $i < $count; $i++) {
      //echo 'ID de herramienta de Ingeniería inversa: ' . $ID_INVERSA[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Ingenieria_inversa (ID_ATAQUE, ID_INVERSA) VALUES (:id_ataque, :id_inversa)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_inversa', $ID_INVERSA[$i]);      
      $stmt->execute();    
    }

    $ID_INFORME = $_POST['Enum_informes'];
    $count = count($ID_INFORME);
    $borrado = "DELETE FROM `Informes` WHERE ID_ATAQUE = $ID_ATAQUE";
    $stmt = $con->prepare($borrado); 
    $stmt->execute();
    for ($i = 0; $i < $count; $i++) {
      //echo 'ID de herramienta de presentación de informes: ' . $ID_INFORME[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Informes (ID_ATAQUE, ID_INFORME) VALUES (:id_ataque, :id_informe)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_informe', $ID_INFORME[$i]);      
      $stmt->execute();    
    }
  }

}catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

# close the connection
$DBH = null;

header("Location: http://localhost/gestor_tool.php"); /* Redirección del navegador */


?>