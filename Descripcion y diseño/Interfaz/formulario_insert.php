<!DOCTYPE html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Formulario de ataques">
  <meta name="author" content="Alejandro Docasar Moreno">

  <title>Formulario de inserción</title>

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

  <!-- Jquery -->
  <script src="jquery-1.12.3.min.js" type="text/javascript"></script> 

</head>

<body>

  <div class="container">

    <div class="page-header">
      <h1>Insertar herramientas en la BBDD</h1>
      <p>Busque y encuentre la herramienta más adecuada para sus fines.</p>      
    </div>

    <form id="insertar" class="form-horizontal" method="post" action="">

      <fieldset>

        <!-- Form Name -->
        <legend>Insertar herramienta</legend>

        <!-- Name input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="searchinput">Nombre herramienta:</label>
          <div class="col-md-4">
            <input id="searchinput" name="searchinput" type="search" placeholder="Ej: nmap" class="form-control input-md" required>
          </div>
        </div>

        <!-- Description input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="description">Descripción herramienta:</label>
          <div class="col-md-4">
            <textarea id="description" name="description" placeholder="Introduzca aquí la descripción del ataque." class="form-control" rows="3" required></textarea>
          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_SO">Sistema operativo objetivo:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_SO[]" value="1">Android<br>
            <input type="checkbox" name="Enum_SO[]" value="2">iOS<br>
            <input type="checkbox" name="Enum_SO[]" value="3">OS-X<br>
            <input type="checkbox" name="Enum_SO[]" value="4">Ubuntu<br>
            <input type="checkbox" name="Enum_SO[]" value="5">Windows<br>
            <input type="checkbox" name="Enum_SO[]" value="6">Todos<br>

          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_recopilacion">Herramienta de recopilacion de informacion:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_recopilacion[]" value="1">Análisis de DNS<br>
            <input type="checkbox" name="Enum_recopilacion[]" value="2">Análisis de tráfico<br>
            <input type="checkbox" name="Enum_recopilacion[]" value="3">Análisis de OSINT<br>
            <input type="checkbox" name="Enum_recopilacion[]" value="4">Análisis de routeo<br>
            <input type="checkbox" name="Enum_recopilacion[]" value="5">Análisis de SMB<br>
            <input type="checkbox" name="Enum_recopilacion[]" value="6">Análisis de SMTP<br>
            <input type="checkbox" name="Enum_recopilacion[]" value="7">Análisis de SNMP<br>
            <input type="checkbox" name="Enum_recopilacion[]" value="8">Análisis de SSL<br>
            <input type="checkbox" name="Enum_recopilacion[]" value="9">Análisis de VoIP<br>
            <input type="checkbox" name="Enum_recopilacion[]" value="10">Análisis de VPN<br>
            <input type="checkbox" name="Enum_recopilacion[]" value="11">Detección de servicio<br>
            <input type="checkbox" name="Enum_recopilacion[]" value="12">Detección de SO<br>
            <input type="checkbox" name="Enum_recopilacion[]" value="13">Identificación de hosts en línea<br>
            <input type="checkbox" name="Enum_recopilacion[]" value="14">Identificación de IDS<br>
            <input type="checkbox" name="Enum_recopilacion[]" value="15">Todos<br>

          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_vulnera">Herramienta de análisis de vulnerabilidades:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_vulnera[]" value="1">Herramientas Cisco<br>
            <input type="checkbox" name="Enum_vulnera[]" value="2">Evaluación de BBDD<br>
            <input type="checkbox" name="Enum_vulnera[]" value="3">Fuzzing<br>
            <input type="checkbox" name="Enum_vulnera[]" value="4">Evaluación de software<br>
            <input type="checkbox" name="Enum_vulnera[]" value="5">Otros escáneres<br>
            <input type="checkbox" name="Enum_vulnera[]" value="6">Todos<br>

          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_contrasenas">Herramienta para romper contraseñas:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_contrasenas[]" value="1">Herramientas para GPU<br>
            <input type="checkbox" name="Enum_contrasenas[]" value="2">Ataques sin conexión<br>
            <input type="checkbox" name="Enum_contrasenas[]" value="3">Ataques con conexión<br>
            <input type="checkbox" name="Enum_contrasenas[]" value="4">Phising<br>
            <input type="checkbox" name="Enum_contrasenas[]" value="5">Todos<br>
          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_wireless">Herramienta wireless:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_wireless[]" value="1">Herramienta Bluetooth<br>
            <input type="checkbox" name="Enum_wireless[]" value="2">Herramienta RFID/NFC<br>
            <input type="checkbox" name="Enum_wireless[]" value="3">Herramienta wireless<br>
            <input type="checkbox" name="Enum_wireless[]" value="4">Todos<br>
          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_exploit">Herramienta para exploit:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_exploit[]" value="1">Explotación de redes<br>
            <input type="checkbox" name="Enum_exploit[]" value="2">Ingeniería social<br>
            <input type="checkbox" name="Enum_exploit[]" value="3">Denegación de servicio<br>
            <input type="checkbox" name="Enum_exploit[]" value="4">Todos<br>
          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_SSF">Sniffing/Spoofing/Forensics:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_SSF[]" value="1">Network sniffer<br>
            <input type="checkbox" name="Enum_SSF[]" value="2">Network Spoofing<br>
            <input type="checkbox" name="Enum_SSF[]" value="3">Herramientas VoIP<br>
            <input type="checkbox" name="Enum_SSF[]" value="4">Web sniffer<br>
            <input type="checkbox" name="Enum_SSF[]" value="5">Herramientas forense<br>
            <input type="checkbox" name="Enum_SSF[]" value="6">Todos<br>
          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_access">Post exploit:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_access[]" value="1">SO backdoor<br>
            <input type="checkbox" name="Enum_access[]" value="2">Web backdoor<br>
            <input type="checkbox" name="Enum_access[]" value="3">Herramientas para túneles<br>
            <input type="checkbox" name="Enum_access[]" value="4">Todos<br>
          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_inversa">Ingeniería inversa:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_inversa[]" value="1">Depurador<br>
            <input type="checkbox" name="Enum_inversa[]" value="2">Desensamblador<br>
            <input type="checkbox" name="Enum_inversa[]" value="3">Otras herramientas<br>
            <input type="checkbox" name="Enum_inversa[]" value="4">Todos<br>
          </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_informes">Presentación de informes:</label> 
          <div class="col-md-4">
            <input type="checkbox" name="Enum_informes[]" value="1">Gestión de evidencia<br>
            <input type="checkbox" name="Enum_informes[]" value="2">Capturador de medios<br>
            <input type="checkbox" name="Enum_informes[]" value="3">Todos<br>
          </div>
        </div>

        <div class="boton">
          <input class="btn btn-default" name="enviar" type="submit" value="Enviar">
        </div><br>

      </fieldset>

    </form>

  </div>

  <?php

  try {

  //Abrir conexión con la BBDD utilizando PDO
    $con = new PDO('mysql:host=localhost;dbname=Biblioteca de ataques', 'root', 'jjrch8mini');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //Para recuperar los datos de las consultas
    echo 'Estás insertando según estos criterios: ' . '<br/>';

    $ENVIAR = $_POST['enviar'];

    $NOMBRE = $_POST['searchinput'];
    echo 'Nombre del ataque: ' . $NOMBRE . '<br/>';

    $DESCRIPTION = $_POST['description'];
    echo 'Descripción del ataque: ' . $DESCRIPTION . '<br/>';

    if($ENVIAR != null){

    $stmt = $con->prepare("INSERT INTO Ataques (Nombre, Descripcion) VALUES (:nombre, :descripcion)"); 
    $stmt->bindParam(':nombre', $NOMBRE);
    $stmt->bindParam(':descripcion', $DESCRIPTION);
    $stmt->execute();

    //Recupero el ID del ultimo ataque que se ha insertado en la bbdd.
    if ($ID_ATAQUE = null) {
      $ID_ATAQUE = 1;
    } else {
      $ID_ATAQUE = $con->lastInsertId();
    }
    echo "Este es el ID del ultimo ataque: " . $ID_ATAQUE . '<br/>';

    //Insertar datos de la BBDD con prepare()

    $ID_SO = $_POST['Enum_SO'];
    $count = count($ID_SO);
    for ($i = 0; $i < $count; $i++) {
      echo 'ID de ataque de sistema operativo: ' . $ID_SO[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Sistemas_operativos (ID_ATAQUE, ID_SO) VALUES (:id_ataque, :id_so)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_so', $ID_SO[$i]);
      $stmt->execute();
    }

    $ID_RECOPILACION = $_POST['Enum_recopilacion'];
    $count = count($ID_RECOPILACION);
    for ($i = 0; $i < $count; $i++) {
      echo 'ID de ataque de recopilacion de información: ' . $ID_RECOPILACION[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Recopilacion_info (ID_ATAQUE, ID_RECOPILACION) VALUES (:id_ataque, :id_recopilacion)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_recopilacion', $ID_RECOPILACION[$i]);
      $stmt->execute();
    }
    

    $ID_VULNERABILIDAD = $_POST['Enum_vulnera'];
    $count = count($ID_VULNERABILIDAD);
    for ($i = 0; $i < $count; $i++) {
      echo 'ID de ataque de analisis de vulnerabilidades: ' . $ID_VULNERABILIDAD[$i] . '<br/>'; 
      $stmt = $con->prepare("INSERT INTO Analisis_vulnera (ID_ATAQUE, ID_VULNERABILIDAD) VALUES (:id_ataque, :id_vulnerabilidad)"); 
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

    $ID_WIRELESS = $_POST['Enum_wireless'];
    $count = count($ID_WIRELESS);
    for ($i = 0; $i < $count; $i++) {
      echo 'ID de herramienta wireless: ' . $ID_WIRELESS[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Wireless (ID_ATAQUE, ID_WIRELESS) VALUES (:id_ataque, :id_wireless)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_wireless', $ID_WIRELESS[$i]);
      $stmt->execute();    
    }

    $ID_EXPLOIT = $_POST['Enum_exploit'];
    $count = count($ID_EXPLOIT);
    for ($i = 0; $i < $count; $i++) {
      echo 'ID de herramienta exploit: ' . $ID_EXPLOIT[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Exploit (ID_ATAQUE, ID_EXPLOIT) VALUES (:id_ataque, :id_exploit)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_exploit', $ID_EXPLOIT[$i]);
      $stmt->execute();    
    }

    $ID_SSF = $_POST['Enum_SSF'];
    $count = count($ID_SSF);
    for ($i = 0; $i < $count; $i++) {
      echo 'ID de herramienta Sniffer/Spoofing/Forensics: ' . $ID_SSF[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Sniff_Spoof_Foren (ID_ATAQUE, ID_SSF) VALUES (:id_ataque, :id_SSF)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_SSF', $ID_SSF[$i]);
      $stmt->execute();    
    }

    $ID_ACCESS = $_POST['Enum_access'];
    $count = count($ID_ACCESS);
    for ($i = 0; $i < $count; $i++) {
      echo 'ID de herramienta de Maintaining Access: ' . $ID_ACCESS[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Maintaining_access (ID_ATAQUE, ID_ACCESS) VALUES (:id_ataque, :id_access)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_access', $ID_ACCESS[$i]);
      $stmt->execute();    
    }

    $ID_INVERSA = $_POST['Enum_inversa'];
    $count = count($ID_INVERSA);
    for ($i = 0; $i < $count; $i++) {
      echo 'ID de herramienta de Ingeniería inversa: ' . $ID_INVERSA[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Ingenieria_inversa (ID_ATAQUE, ID_INVERSA) VALUES (:id_ataque, :id_inversa)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_inversa', $ID_INVERSA[$i]);
      $stmt->execute();    
    }

  $ID_INFORME = $_POST['Enum_informes'];
    $count = count($ID_INFORME);
    for ($i = 0; $i < $count; $i++) {
      echo 'ID de herramienta de presentación de informes: ' . $ID_INFORME[$i] . '<br/>';
      $stmt = $con->prepare("INSERT INTO Informes (ID_ATAQUE, ID_INFORME) VALUES (:id_ataque, :id_informe)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_informe', $ID_INFORME[$i]);
      $stmt->execute();    
    }
  }

  }

  catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }

# close the connection
  $DBH = null;

  ?>


</body>







