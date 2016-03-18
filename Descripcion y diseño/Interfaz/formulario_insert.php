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
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <!-- js -->
  <script src="formulario.js"></script>

</head>

<body>

  <h2>Insertar ataques en la BBDD (root)</h2><br>


  <form id="insertar" class="form-horizontal" method="post" action="">
    <fieldset>

      <!-- Form Name -->
      <legend>Insertar ataque</legend>

      <!-- Name input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="searchinput">Nombre ataque:</label>
        <div class="col-md-4">
          <input id="searchinput" name="searchinput" type="search" placeholder="Ej: nmap" class="form-control input-md">
        </div>
      </div>

      <!-- Description input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="searchinput">Descripción ataque:</label>
        <div class="col-md-4">
          <textarea id="description" name="description" placeholder="Esto es un texto de prueba" class="form-control" rows="3"></textarea>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Lenguaje">Seleccionar Lenguaje:</label>
        <div class="col-md-4">
          <select id="Lenguaje" name="Lenguaje" class="form-control">
            <option value="1">Seleccionar</option>
            <option value="2">Python</option>
            <option value="3">Perl</option>
            <option value="4">C</option>
            <option value="5">Ruby</option>
            <option value="6">Java</option>
            <option value="7">Powershell</option>
            <option value="8">PHP</option>
            <option value="9">Sin determinar</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Protocolo">Seleccionar Protocolo:</label>
        <div class="col-md-4">
          <select id="Protocolo" name="Protocolo" class="form-control">
            <option value="1">Seleccionar</option>
            <option value="2">WEP</option>
            <option value="3">WPA</option>
            <option value="4">WPA2</option>
            <option value="5">WPS</option>
            <option value="6">TCP</option>
            <option value="7">IP</option>
            <option value="8">IPSEC</option>
            <option value="9">IKE</option>
            <option value="10">ARP</option>
            <option value="11">HTTP</option>
            <option value="12">HTTPS</option>
            <option value="13">ICMP</option>
            <option value="14">Sin determinar</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Enum_reco">Ataque de reconocimiento de redes:</label>
        <div class="col-md-4">
          <select id="Enum_reco" name="Enum_reco" class="form-control">
            <option value="1">Seleccionar</option>
            <option value="2">Recopilación de información</option>
            <option value="3">Ingeniería inversa</option>
            <option value="4">Escáner de puertos</option>
            <option value="5">Forense</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Enum_vulnera">Ataque de análisis de vulnerabilidades:</label>
        <div class="col-md-4">
          <select id="Enum_vulnera" name="Enum_vulnera" class="form-control">
            <option value="1">Seleccionar</option>          
            <option value="2">Escáner de programas</option>
            <option value="3">IDS</option>
            <option value="4">Configuraciones por defecto</option>
            <option value="5">Exploit</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Enum_info">Ataque de obtención de información:</label>
        <div class="col-md-4">
          <select id="Enum_info" name="Enum_info" class="form-control">
            <option value="1">Seleccionar</option>         
            <option value="2">SQLinjection</option>
            <option value="3">Ataque de fuerza bruta</option>
            <option value="4">Ataque de diccionario</option>
            <option value="5">Rainbow tables</option>
            <option value="6">Phising</option>
            <option value="7">Spoofing</option>
            <option value="8">MiTM</option>
            <option value="9">Ingeniería social</option>
            <option value="10">Post exploit</option>
          </select>
        </div>
      </div>

      <input class="btn btn-default" type="submit" value="Enviar">

    </fieldset>
  </form><br><br>

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

    $ID_LENGUAJE = $_POST['Lenguaje'];
    echo 'ID del lenguaje: ' . $ID_LENGUAJE . '<br/>';

    $ID_PROTOCOLO = $_POST['Protocolo'];
    echo 'ID del protocolo: ' . $ID_PROTOCOLO . '<br/>'; 

    $ID_RECONOCIMIENTO = $_POST['Enum_reco'];
    echo 'ID de ataque de reconocimiento: ' . $ID_RECONOCIMIENTO . '<br/>'; 

    $ID_VULNERABILIDAD = $_POST['Enum_vulnera'];
    echo 'ID de ataque de analisis de vulnerabilidades: ' . $ID_VULNERABILIDAD . '<br/>'; 

    $ID_TIPO = $_POST['Enum_info'];
    echo 'ID de ataque de obtencion de información: ' . $ID_TIPO . '<br/>'; 


  //Insertar datos de la BBDD con prepare()

    $stmt = $con->prepare("INSERT INTO Ataques (Nombre, Descripcion, ID_LENGUAJE, ID_PROTOCOLO) VALUES (:nombre, :descripcion, :id_lenguaje, :id_protocolo)"); 
    $stmt->bindParam(':nombre', $NOMBRE);
    $stmt->bindParam(':descripcion', $DESCRIPTION);
    $stmt->bindParam(':id_lenguaje', $ID_LENGUAJE);
    $stmt->bindParam(':id_protocolo', $ID_PROTOCOLO);
    $stmt->execute();

    $ID_ATAQUE = $con->lastInsertId();

    if ($ID_RECONOCIMIENTO != 1) {
      $stmt = $con->prepare("INSERT INTO Reco (ID_ATAQUE, ID_RECONOCIMIENTO) VALUES (:id_ataque, :id_reconocimiento)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_reconocimiento', $ID_RECONOCIMIENTO);
      $stmt->execute();
    } elseif ($ID_VULNERABILIDAD != 1) {
      $stmt = $con->prepare("INSERT INTO Analisis_vulnera (ID_ataque, ID_vulnerabilidad) VALUES (:id_ataque, :id_vulnerabilidad)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_vulnerabilidad', $ID_VULNERABILIDAD);
      $stmt->execute();
    } elseif ($ID_TIPO != 1) {
      $stmt = $con->prepare("INSERT INTO Obtener_info (ID_ATAQUE, ID_TIPO) VALUES (:id_ataque, :id_tipo)"); 
      $stmt->bindParam(':id_ataque', $ID_ATAQUE);
      $stmt->bindParam(':id_tipo', $ID_TIPO);
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







