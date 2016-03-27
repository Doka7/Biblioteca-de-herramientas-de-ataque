<!DOCTYPE html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Formulario de ataques">
  <meta name="author" content="Alejandro Docasar Moreno">

  <title>Formulario de insercción</title>

  <!-- Favicon -->
  <link rel="icon" 
  type="image/png" 
  href="kali.png">

  <!-- CSS -->
  <link rel="stylesheet" href="formulario.css" type="text/css" media="all">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css"> 

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

  <!-- js -->
  <script src="formulario.js"></script>

</head>

<body>

  <div class="container">

    <div class="page-header">
      <h1>Insertar ataques en la BBDD (root)</h1>
      <p>Realice búsquedas y encuentre la herramienta más adecuada para sus fines.</p>      
    </div>

    <form id="insertar" class="form-horizontal" method="post" action="">

      <fieldset>

        <!-- Form Name -->
        <legend>Insertar ataque</legend>

        <!-- Name input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="searchinput">Nombre ataque:</label>
          <div class="col-md-4">
            <input id="searchinput" name="searchinput" type="search" placeholder="Ej: nmap" class="form-control input-md" required>
          </div>
        </div>

        <!-- Description input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="searchinput">Descripción ataque:</label>
          <div class="col-md-4">
            <textarea id="description" name="description" placeholder="Introduzca aquí la descripción del ataque." class="form-control" rows="3" required></textarea>
          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_lenguaje">Lenguaje:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_lenguaje[]" value="2">Python<br>
            <input type="checkbox" name="Enum_lenguaje[]" value="3">Perl<br>
            <input type="checkbox" name="Enum_lenguaje[]" value="4">C<br>
            <input type="checkbox" name="Enum_lenguaje[]" value="5">Ruby<br>
            <input type="checkbox" name="Enum_lenguaje[]" value="6">Java<br>
            <input type="checkbox" name="Enum_lenguaje[]" value="7">PowerShell<br>
            <input type="checkbox" name="Enum_lenguaje[]" value="8">PHP<br>
          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_protocolo">Protocolo:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_protocolo[]" value="2">WEP<br>
            <input type="checkbox" name="Enum_protocolo[]" value="3">WPA<br>
            <input type="checkbox" name="Enum_protocolo[]" value="4">WPA2<br>
            <input type="checkbox" name="Enum_protocolo[]" value="5">WPS<br>
            <input type="checkbox" name="Enum_protocolo[]" value="6">TCP<br>
            <input type="checkbox" name="Enum_protocolo[]" value="7">IP<br>
            <input type="checkbox" name="Enum_protocolo[]" value="8">IPSEC<br>
            <input type="checkbox" name="Enum_protocolo[]" value="9">IKE<br>
            <input type="checkbox" name="Enum_protocolo[]" value="10">ARP<br>
            <input type="checkbox" name="Enum_protocolo[]" value="11">HTTP<br>
            <input type="checkbox" name="Enum_protocolo[]" value="12">HTTPS<br>
            <input type="checkbox" name="Enum_protocolo[]" value="13">ICMP<br>
          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_reco">Ataque de reconocimiento de redes:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_reco[]" value="2">Ingeniería inversa<br>
            <input type="checkbox" name="Enum_reco[]" value="3">Escáner de redes<br>
          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_vulnera">Ataque de análisis de vulnerabilidades:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_vulnera[]" value="2">Escáner de programas<br>
            <input type="checkbox" name="Enum_vulnera[]" value="3">Configuraciones por defecto<br>
            <input type="checkbox" name="Enum_vulnera[]" value="4">Exploit<br>
          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_contrasenas">Ataque para romper contraseñas:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_contrasenas[]" value="2">Ataque wireless<br>
            <input type="checkbox" name="Enum_contrasenas[]" value="3">Ataque de fuerza bruta<br>
            <input type="checkbox" name="Enum_contrasenas[]" value="4">Ataque de diccionario<br>
            <input type="checkbox" name="Enum_contrasenas[]" value="5">Rainbow tables<br>
          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_suplantacion">Herramientas de soporte de suplantación:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_suplantacion[]" value="2">Phising<br>
            <input type="checkbox" name="Enum_suplantacion[]" value="3">Spoofing<br>
            <input type="checkbox" name="Enum_suplantacion[]" value="4">Ingeniería social<br>
          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_info">Herramientas de obtención de información:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_info[]" value="2">SQLinjection<br>
            <input type="checkbox" name="Enum_info[]" value="3">MiTM<br>
            <input type="checkbox" name="Enum_info[]" value="4">Post exploit<br>
            <input type="checkbox" name="Enum_info[]" value="4">Forense<br>
          </div>
        </div>

        <div class="boton">
          <input class="btn btn-default" type="submit" value="Enviar">
        </div><br>

      </fieldset>

    </form>

  </div>

  <?php

  try {

  //Abrir conexión con la BBDD utilizando PDO
    $con = new PDO('mysql:host=localhost;dbname=Biblioteca de ataques', 'root', 'jjrch8mini');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //Para recuperar los datos da las consultas
    echo 'Estás insertando según estos criterios: ' . '<br/>';

    $NOMBRE = $_POST['searchinput'];
    echo 'Nombre del ataque: ' . $NOMBRE . '<br/>';

    $DESCRIPTION = $_POST['description'];
    echo 'Descripción del ataque: ' . $DESCRIPTION . '<br/>';

    $stmt = $con->prepare("INSERT INTO Ataques (Nombre, Descripcion) VALUES (:nombre, :descripcion)"); 
    $stmt->bindParam(':nombre', $NOMBRE);
    $stmt->bindParam(':descripcion', $DESCRIPTION);
    $stmt->execute();

    //Recupero el ID del ultimo ataque que se ha insertado en la bbdd.
    $ID_ATAQUE = $con->lastInsertId();
    echo "Este es el ID del ultimo ataque: " . $ID_ATAQUE . '<br/>';

    //Insertar datos de la BBDD con prepare()

    $ID_LENGUAJE = $_POST['Enum_lenguaje'];
    $count = count($ID_LENGUAJE);
    for ($i = 0; $i < $count; $i++) {
      echo 'ID del lenguaje: ' . $ID_LENGUAJE[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Lenguajes (ID_ATAQUE, ID_LENGUAJE) VALUES (:id_ataque, :id_lenguaje)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_lenguaje', $ID_LENGUAJE[$i]);
      $stmt->execute();
    }

    $ID_PROTOCOLO = $_POST['Enum_protocolo'];
    $count = count($ID_PROTOCOLO);
    for ($i = 0; $i < $count; $i++) {
      echo 'ID del protocolo: ' . $ID_PROTOCOLO[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Protocolos (ID_ATAQUE, ID_PROTOCOLO) VALUES (:id_ataque, :id_protocolo)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_protocolo', $ID_PROTOCOLO[$i]);
      $stmt->execute(); 
    }

    $ID_RECONOCIMIENTO = $_POST['Enum_reco'];
    $count = count($ID_RECONOCIMIENTO);
    for ($i = 0; $i < $count; $i++) {
      echo 'ID de ataque de reconocimiento: ' . $ID_RECONOCIMIENTO[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Reco (ID_ATAQUE, ID_RECONOCIMIENTO) VALUES (:id_ataque, :id_reconocimiento)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_reconocimiento', $ID_RECONOCIMIENTO[$i]);
      $stmt->execute();
    }
    

    $ID_VULNERABILIDAD = $_POST['Enum_vulnera'];
    $count = count($ID_VULNERABILIDAD);
    for ($i = 0; $i < $count; $i++) {
      echo 'ID de ataque de analisis de vulnerabilidades: ' . $ID_VULNERABILIDAD[$i] . '<br/>'; 
      $stmt = $con->prepare("INSERT INTO Analisis_vulnera (ID_ataque, ID_vulnerabilidad) VALUES (:id_ataque, :id_vulnerabilidad)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_vulnerabilidad', $ID_VULNERABILIDAD[$i]);
      $stmt->execute();
    }

    $ID_CONTRASENA = $_POST['Enum_contrasenas'];
    $count = count($ID_CONTRASENA);
    for ($i = 0; $i < $count; $i++) {
      echo 'ID de ataque de romper contraseñas: ' . $ID_CONTRASENA[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Contrasenas (ID_ATAQUE, ID_CONTRASENA) VALUES (:id_ataque, :id_contrasena)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_contrasena', $ID_CONTRASENA[$i]);
      $stmt->execute();    
    }

    $ID_SUPLANTACION = $_POST['Enum_suplantacion'];
    $count = count($ID_SUPLANTACION);
    for ($i = 0; $i < $count; $i++) {
      echo 'ID de ataque de soporte de suplantación: ' . $ID_SUPLANTACION[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Suplantacion (ID_ATAQUE, ID_SUPLANTACION) VALUES (:id_ataque, :id_suplantacion)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_suplantacion', $ID_SUPLANTACION[$i]);
      $stmt->execute();  
    }

    $ID_TIPO = $_POST['Enum_info'];
    $count = count($ID_TIPO);
    for ($i = 0; $i < $count; $i++) {
      echo 'ID de ataque de obtencion de información: ' . $ID_TIPO[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Obtener_info (ID_ATAQUE, ID_TIPO) VALUES (:id_ataque, :id_tipo)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_tipo', $ID_TIPO[$i]);
      $stmt->execute();    
    }

  }

  catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }

# close the connection
  $DBH = null;

  ?>


</body>







