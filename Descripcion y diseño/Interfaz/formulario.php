<!DOCTYPE html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Formulario de ataques">
  <meta name="author" content="Alejandro Docasar Moreno">

  <title>Formulario de búsqueda</title>

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

  <h2>Biblioteca de herramientas de ataque</h2><br>


  <form id="consulta" class="form-horizontal" method="post" action="">
    <fieldset>

      <!-- Form Name -->
      <legend>Realice su consulta <a href="informacion.html"> (Información) </a> </legend>

      <!-- Search input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="searchinput">Búsqueda rápida:</label>
        <div class="col-md-4">
          <input id="searchinput" name="searchinput" type="search" placeholder="Ej: nmap" class="form-control input-md">
        </div>
      </div>

      <!-- Select Basic 
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
          </select>
        </div>
      </div> -->

      <!-- Select Basic 
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
          </select>
        </div>
      </div> -->

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

  <legend>Resultados de la búsqueda</legend>

  <?php

  try {

  //Abrir conexión con la BBDD utilizando PDO
    $con = new PDO('mysql:host=localhost;dbname=Biblioteca de ataques', 'root', 'jjrch8mini');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  //Para recuperar los datos da las consultas
    echo 'Estás buscando según estos criterios: ' . '<br/>';

    /*$ID_LENGUAJE = $_POST['Lenguaje'];
    echo 'ID del lenguaje: ' . $ID_LENGUAJE . '<br/>';

    $ID_PROTOCOLO = $_POST['Protocolo'];
    echo 'ID del protocolo: ' . $ID_PROTOCOLO . '<br/>'; */

    $ID_RECONOCIMIENTO = $_POST['Enum_reco'];
    echo 'ID de ataque de reconocimiento: ' . $ID_RECONOCIMIENTO . '<br/>'; 

    $ID_VULNERABILIDAD = $_POST['Enum_vulnera'];
    echo 'ID de ataque de analisis de vulnerabilidades: ' . $ID_VULNERABILIDAD . '<br/>'; 

    $ID_TIPO = $_POST['Enum_info'];
    echo 'ID de ataque de obtencion de información: ' . $ID_TIPO . '<br/>'; 


  //Recuperar datos de la BBDD con prepare().

    //Si se deja todo sin marcar se muestra todo.
    $sentencia = "SELECT * FROM Ataques"; 

    //Esto solo sirve de guía para construir una sentencia compleja.
    $sentencia_mas_compleja = "SELECT * FROM Ataques INNER JOIN Reco ON Reco.ID_ATAQUE = Ataques.ID_ATAQUE INNER JOIN Analisis_vulnera ON Analisis_vulnera.ID_ATAQUE = Ataques.ID_ATAQUE INNER JOIN Obtener_info ON Obtener_info.ID_ATAQUE = Ataques.ID_ATAQUE WHERE Reco.ID_RECONOCIMIENTO = $ID_RECONOCIMIENTO AND Analisis_vulnera.ID_VULNERABILIDAD = $ID_VULNERABILIDAD AND Obtener_info.ID_TIPO = $ID_TIPO";

    if ($ID_RECONOCIMIENTO != 1) {
      $sentencia_01 = " INNER JOIN Reco ON Reco.ID_ATAQUE = Ataques.ID_ATAQUE";
      $sentencia_04 = " WHERE Reco.ID_RECONOCIMIENTO = $ID_RECONOCIMIENTO";
    } else {
      $sentencia_01 = null;
      $sentencia_04 = null;
    }
    if ($ID_VULNERABILIDAD != 1) {
      $sentencia_02 = " INNER JOIN Analisis_vulnera ON Analisis_vulnera.ID_ATAQUE = Ataques.ID_ATAQUE";
      $sentencia_05 = " AND Analisis_vulnera.ID_VULNERABILIDAD = $ID_VULNERABILIDAD";
    } else {
      $sentencia_02 = null;
      $sentencia_05 = null;
    }
    if ($ID_TIPO != 1) {
      $sentencia_03 = " INNER JOIN Obtener_info ON Obtener_info.ID_ATAQUE = Ataques.ID_ATAQUE";
      $sentencia_06 = " AND Obtener_info.ID_TIPO = $ID_TIPO";
    } else {
      $sentencia_03 = null;
      $sentencia_06 = null;
    }

    //La sentencia se crea en función de lo que el usuario haya buscado.
    $sentencia = $sentencia . $sentencia_01 . $sentencia_02 . $sentencia_03 . $sentencia_04 . $sentencia_05 . $sentencia_06; 

    //Ejecución de la sentencia.
    $stmt = $con->prepare($sentencia); 
    $stmt->execute();

  }catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }

  //Imprimir resultados en una tabla.
  echo '<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre ataque</th>
        <th>Descripción</th>
      </tr>
    </thead>';

  //Mostrar nombre y descripción de cada ataque.
    while( $datos = $stmt->fetch() ){
      echo '<tr> <td>' . $datos[1] . '<td/> <td>' . $datos[2] . '<td/> <tr/>';
    }
    echo '<table/><div/>';

# close the connection
    $DBH = null;

    ?>

  </body>







