<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="TFG Formulario de ataques">
  <meta name="author" content="Alejandro Docasar Moreno">

  <title>Formulario de búsqueda</title>

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
      <h1>Biblioteca de herramientas de ataque</h1>
      <p>Busque y encuentre la herramienta más adecuada para sus fines.</p>      
    </div>

    <form id="consulta" class="form-horizontal" method="post" action="">

      <fieldset>

        <!-- Form Name -->
        <legend>Realice su consulta<a href="informacion.html"> (Información) </a> </legend>

        <!-- Quicksearch input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="searchinput">Búsqueda rápida:</label>
          <div class="col-md-4">
            <input id="searchinput" name="searchinput" type="search" placeholder="Ej: Python" class="form-control input-md">
          </div>
        </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Enum_recopilacion" >Recopilación de información:</label>
        <div class="col-md-4">
          <select id="Enum_recopilacion" name="Enum_recopilacion" class="form-control" onchange="checkAndSubmit()">
            <option value="0" <?php if($_POST['Enum_recopilacion']==0) echo 'selected="selected" ';?>>Seleccionar</option>
            <option value="1" <?php if($_POST['Enum_recopilacion']==1) echo 'selected="selected" ';?>>Análisis de DNS</option>
            <option value="2" <?php if($_POST['Enum_recopilacion']==2) echo 'selected="selected" ';?>>Análisis de tráfico</option>
            <option value="3" <?php if($_POST['Enum_recopilacion']==3) echo 'selected="selected" ';?>>Análisis de OSINT</option>
            <option value="4" <?php if($_POST['Enum_recopilacion']==4) echo 'selected="selected" ';?>>Análisis de routeo</option>
            <option value="5" <?php if($_POST['Enum_recopilacion']==5) echo 'selected="selected" ';?>>Análisis de SMB</option>
            <option value="6" <?php if($_POST['Enum_recopilacion']==6) echo 'selected="selected" ';?>>Análisis de SMTP</option>
            <option value="7" <?php if($_POST['Enum_recopilacion']==7) echo 'selected="selected" ';?>>Análisis de SNMP</option>
            <option value="8" <?php if($_POST['Enum_recopilacion']==8) echo 'selected="selected" ';?>>Análisis de SSL</option>
            <option value="9" <?php if($_POST['Enum_recopilacion']==9) echo 'selected="selected" ';?>>Análisis de VoIP</option>
            <option value="10" <?php if($_POST['Enum_recopilacion']==10) echo 'selected="selected" ';?>>Análisis de VPN</option>
            <option value="11" <?php if($_POST['Enum_recopilacion']==11) echo 'selected="selected" ';?>>Detección de servicio</option>
            <option value="12" <?php if($_POST['Enum_recopilacion']==12) echo 'selected="selected" ';?>>Detección de SO</option>
            <option value="13" <?php if($_POST['Enum_recopilacion']==13) echo 'selected="selected" ';?>>Identificación de hosts en línea</option>
            <option value="14" <?php if($_POST['Enum_recopilacion']==14) echo 'selected="selected" ';?>>Identificación de IDS</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Enum_vulnera">Análisis de vulnerabilidades:</label>
        <div class="col-md-4">
          <select id="Enum_vulnera" name="Enum_vulnera" class="form-control" onchange="checkAndSubmit()">
            <option value="0" <?php if($_POST['Enum_vulnera']==0) echo 'selected="selected" ';?>>Seleccionar</option>          
            <option value="1" <?php if($_POST['Enum_vulnera']==1) echo 'selected="selected" ';?>>Herramientas Cisco</option>
            <option value="2" <?php if($_POST['Enum_vulnera']==2) echo 'selected="selected" ';?>>Evaluación de BBDD</option>
            <option value="3" <?php if($_POST['Enum_vulnera']==3) echo 'selected="selected" ';?>>Fuzzing</option>
            <option value="4" <?php if($_POST['Enum_vulnera']==4) echo 'selected="selected" ';?>>Evaluación de software</option>
            <option value="5" <?php if($_POST['Enum_vulnera']==5) echo 'selected="selected" ';?>>Escaner de vulnerabilidades</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Enum_contrasenas">Herramientas de contraseñas:</label>
        <div class="col-md-4">
          <select id="Enum_contrasenas" name="Enum_contrasenas" class="form-control" onchange="checkAndSubmit()">
            <option value="0" <?php if($_POST['Enum_contrasenas']==0) echo 'selected="selected" ';?>>Seleccionar</option>
            <option value="1" <?php if($_POST['Enum_contrasenas']==1) echo 'selected="selected" ';?>>Herramientas para GPU</option>
            <option value="2" <?php if($_POST['Enum_contrasenas']==2) echo 'selected="selected" ';?>>Ataques sin conexión</option>
            <option value="3" <?php if($_POST['Enum_contrasenas']==3) echo 'selected="selected" ';?>>Ataques con conexión</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Enum_wireless">Herramientas wireless:</label>
        <div class="col-md-4">
          <select id="Enum_wireless" name="Enum_wireless" class="form-control" onchange="checkAndSubmit()">
            <option value="0" <?php if($_POST['Enum_wireless']==0) echo 'selected="selected" ';?>>Seleccionar</option>
            <option value="1" <?php if($_POST['Enum_wireless']==1) echo 'selected="selected" ';?>>Herramientas Bluetooth</option>
            <option value="2" <?php if($_POST['Enum_wireless']==2) echo 'selected="selected" ';?>>Herramientas RFID/NFC</option>
            <option value="3" <?php if($_POST['Enum_wireless']==3) echo 'selected="selected" ';?>>Herramientas wireless</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Enum_exploit">Herramientas para exploit:</label>
        <div class="col-md-4">
          <select id="Enum_exploit" name="Enum_exploit" class="form-control" onchange="checkAndSubmit()">
            <option value="0" <?php if($_POST['Enum_exploit']==0) echo 'selected="selected" ';?>>Seleccionar</option>
            <option value="1" <?php if($_POST['Enum_exploit']==1) echo 'selected="selected" ';?>>Metasploit</option>
            <option value="2" <?php if($_POST['Enum_exploit']==2) echo 'selected="selected" ';?>>Explotación de redes</option>
            <option value="3" <?php if($_POST['Enum_exploit']==3) echo 'selected="selected" ';?>>Ingeniería social</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Enum_SSF">Sniffing/Spoofing/Forensics:</label>
        <div class="col-md-4">
          <select id="Enum_SSF" name="Enum_SSF" class="form-control" onchange="checkAndSubmit()">
            <option value="0" <?php if($_POST['Enum_SSF']==0) echo 'selected="selected" ';?>>Seleccionar</option>
            <option value="1" <?php if($_POST['Enum_SSF']==1) echo 'selected="selected" ';?>>Network sniffer</option>
            <option value="2" <?php if($_POST['Enum_SSF']==2) echo 'selected="selected" ';?>>Network spoofing</option>
            <option value="3" <?php if($_POST['Enum_SSF']==3) echo 'selected="selected" ';?>>Herramientas VoIP</option>
            <option value="4" <?php if($_POST['Enum_SSF']==4) echo 'selected="selected" ';?>>Web sniffer</option>
            <option value="5" <?php if($_POST['Enum_SSF']==5) echo 'selected="selected" ';?>>Herramientas forense</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Enum_access">Maintaining access:</label>
        <div class="col-md-4">
          <select id="Enum_access" name="Enum_access" class="form-control" onchange="checkAndSubmit()">
            <option value="0" <?php if($_POST['Enum_access']==0) echo 'selected="selected" ';?>>Seleccionar</option>
            <option value="1" <?php if($_POST['Enum_access']==1) echo 'selected="selected" ';?>>SO backdoor</option>
            <option value="2" <?php if($_POST['Enum_access']==2) echo 'selected="selected" ';?>>Web backdoor</option>
            <option value="3" <?php if($_POST['Enum_access']==3) echo 'selected="selected" ';?>>Herramientas para túneles</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Enum_inversa">Ingeniería inversa:</label>
        <div class="col-md-4">
          <select id="Enum_inversa" name="Enum_inversa" class="form-control" onchange="checkAndSubmit()">
            <option value="0" <?php if($_POST['Enum_inversa']==0) echo 'selected="selected" ';?>>Seleccionar</option>
            <option value="1" <?php if($_POST['Enum_inversa']==1) echo 'selected="selected" ';?>>Depurador</option>
            <option value="2" <?php if($_POST['Enum_inversa']==2) echo 'selected="selected" ';?>>Desensamblador</option>
            <option value="3" <?php if($_POST['Enum_inversa']==3) echo 'selected="selected" ';?>>Otras herramientas</option>
          </select>
        </div>
      </div>

      <!-- <input class="btn btn-default" type="submit" value="Enviar"> -->

    </fieldset>

  </form>

  <legend>Resultados de la búsqueda</legend>

  <?php

  try {

  //Abrir conexión con la BBDD utilizando PDO
    $con = new PDO('mysql:host=localhost;dbname=Biblioteca de ataques', 'root', 'jjrch8mini');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  /*Para recuperar los datos da las consultas
    echo 'Estás buscando según estos criterios: ' . '<br/>'; */

    $BUSQUEDA_RAPIDA = $_POST['searchinput'];
    //echo "Búsqueda rápida: " . $BUSQUEDA_RAPIDA . '<br/>';

    $ID_RECOPILACION = $_POST['Enum_recopilacion'];
    //echo 'ID de ataque de reconocimiento: ' . $ID_RECONOCIMIENTO . '<br/>'; 

    $ID_VULNERABILIDAD = $_POST['Enum_vulnera'];
    //echo 'ID de ataque de analisis de vulnerabilidades: ' . $ID_VULNERABILIDAD . '<br/>';

    $ID_CONTRASENA = $_POST['Enum_contrasenas'];
    //echo 'ID de ataque de romper contraseñas: ' . $ID_CONTRASENA . '<br/>'; 

    $ID_WIRELESS = $_POST['Enum_wireless'];
    //echo 'ID de ataque de romper contraseñas: ' . $ID_CONTRASENA . '<br/>'; 

    $ID_EXPLOIT = $_POST['Enum_exploit'];
    //echo 'ID de ataque de romper contraseñas: ' . $ID_CONTRASENA . '<br/>'; 

    $ID_SSF = $_POST['Enum_SSF'];
    //echo 'ID de ataque de romper contraseñas: ' . $ID_CONTRASENA . '<br/>'; 

    $ID_ACCESS = $_POST['Enum_access'];
    //echo 'ID de ataque de romper contraseñas: ' . $ID_CONTRASENA . '<br/>'; 

    $ID_INVERSA = $_POST['Enum_inversa'];
    //echo 'ID de ataque de soporte para suplantación: ' . $ID_SUPLANTACION . '<br/>'; 

  //Recuperar datos de la BBDD con prepare().

    //Si el usuario utiliza la búsqueda rápida, el resto de campos se desestiman. 
    if ($BUSQUEDA_RAPIDA != null) {
      $quicksearch = "SELECT * FROM Ataques WHERE Ataques.Descripcion LIKE \"%$BUSQUEDA_RAPIDA%\""; //UNICAMENTE SE BUSCAN COINCIDENCIAS EN LA DESCRIPCION DE LOS ATAQUES.
      //echo $quicksearch;
      $stmt = $con->prepare($quicksearch); 
      $stmt->execute();
    } else {

      //Si se deja todo sin marcar se muestra todo.
      $sentencia = "SELECT * FROM Ataques"; 

      /*Esto solo sirve de guía para construir una sentencia compleja.
      $sentencia_mas_compleja = "SELECT * FROM Ataques INNER JOIN Reco ON Reco.ID_ATAQUE = Ataques.ID_ATAQUE INNER JOIN Analisis_vulnera ON Analisis_vulnera.ID_ATAQUE = Ataques.ID_ATAQUE INNER JOIN Obtener_info ON Obtener_info.ID_ATAQUE = Ataques.ID_ATAQUE WHERE Reco.ID_RECONOCIMIENTO = $ID_RECONOCIMIENTO AND Analisis_vulnera.ID_VULNERABILIDAD = $ID_VULNERABILIDAD AND Obtener_info.ID_TIPO = $ID_TIPO";*/

      if ($ID_RECOPILACION != 0 && $ID_RECOPILACION != null) {
        $sentencia_01 = " INNER JOIN Recopilacion_info ON Recopilacion_info.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_09 = " WHERE Recopilacion_info.ID_RECOPILACION = $ID_RECOPILACION";
      } else {
        $sentencia_01 = null;
        $sentencia_09 = null;
      }
      if ($ID_VULNERABILIDAD != 0 && $ID_VULNERABILIDAD != null) {
        $sentencia_02 = " INNER JOIN Analisis_vulnera ON Analisis_vulnera.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_10 = " AND Analisis_vulnera.ID_VULNERABILIDAD = $ID_VULNERABILIDAD";
      } else {
        $sentencia_02 = null;
        $sentencia_10 = null;
      }
      if ($ID_CONTRASENA != 0 && $ID_CONTRASENA != null) {
        $sentencia_03 = " INNER JOIN Contrasenas ON Contrasenas.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_11 = " AND Contrasenas.ID_CONTRASENA = $ID_CONTRASENA";
      } else {
        $sentencia_03 = null;
        $sentencia_11 = null;
      }
      if ($ID_WIRELESS != 0 && $ID_WIRELESS != null) {
        $sentencia_04 = " INNER JOIN Wireless ON Wireless.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_12 = " AND Wireless.ID_WIRELESS = $ID_WIRELESS";
      } else {
        $sentencia_04 = null;
        $sentencia_12 = null;
      }
      if ($ID_EXPLOIT != 0 && $ID_EXPLOIT != null) {
        $sentencia_05 = " INNER JOIN Exploit ON Exploit.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_13 = " AND Exploit.ID_EXPLOIT = $ID_EXPLOIT";
      } else {
        $sentencia_05 = null;
        $sentencia_13 = null;
      }
      if ($ID_SSF != 0 && $ID_SSF != null) {
        $sentencia_06 = " INNER JOIN Sniff_Spoof_Foren ON Sniff_Spoof_Foren.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_14 = " AND Sniff_Spoof_Foren.ID_SSF = $ID_SSF";
      } else {
        $sentencia_06 = null;
        $sentencia_14 = null;
      }
      if ($ID_ACCESS != 0 && $ID_ACCESS != null) {
        $sentencia_07 = " INNER JOIN Maintaining_access ON Maintaining_access.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_15 = " AND Maintaining_access.ID_ACCESS = $ID_ACCESS";
      } else {
        $sentencia_07 = null;
        $sentencia_15 = null;
      }
      if ($ID_INVERSA != 0 && $ID_INVERSA != null) {
        $sentencia_08 = " INNER JOIN Ingenieria_inversa ON Ingenieria_inversa.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_16 = " AND Ingenieria_inversa.ID_INVERSA = $ID_INVERSA";
      } else {
        $sentencia_08 = null;
        $sentencia_16 = null;
      }
    
      //La sentencia se crea en función de lo que el usuario haya buscado.
      $sentencia = $sentencia . $sentencia_01 . $sentencia_02 . $sentencia_03 . $sentencia_04 . $sentencia_05 . $sentencia_06 . $sentencia_07 . $sentencia_08 . $sentencia_09 . $sentencia_10 . $sentencia_11 . $sentencia_12 . $sentencia_13 . $sentencia_14 . $sentencia_15 . $sentencia_16; 

      //Ejecución de la sentencia.
      $stmt = $con->prepare($sentencia); 
      $stmt->execute();

      //Imprimir resultados en una tabla.
      echo '<div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th id="nombre">Nombre</th>
            <th class="header">Descripción</th>
          </tr>
        </thead>
        <tbody>';

  //Mostrar nombre y descripción de cada ataque.
          $num_filas = 0;
          while( $datos = $stmt->fetch() ){
            echo '<tr> <td class=centrado>' . $datos[1] . '</td> <td class=justificado>' . $datos[2] . '</td> </tr>';
            $num_filas++;
          }

          echo '</tbody></table></div>';
          echo "Se han encontrado " . $num_filas . " coincidencias en la base de datos.";

        }

      }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
      }


# close the connection
      $DBH = null;

      ?>

    </div>  <!-- div container -->

  </body>

  </html>







