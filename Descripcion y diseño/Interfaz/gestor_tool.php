<!DOCTYPE html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Formulario de ataques">
  <meta name="author" content="Alejandro Docasar Moreno">

  <title>Gestor de herramientas</title>

  <!-- Favicon -->
  <link rel="icon" 
  type="image/png" 
  href="kali.png">

  <!-- CSS -->
  <link rel="stylesheet" href="formulario.css" type="text/css" media="all">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css"> 

</head>

<body>

  <?php
  session_start();
  header("Cache-control: private");
  header("Cache-control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  if(isset($_SESSION['usuario']) ==null) {
    header("Location: http://localhost/registro.php"); /* Redirección del navegador */
  }
  ?>

  <div class="container">

    <div class="page-header">
      <h1>Gestión de herramientas</h1>
      <p>Desde aquí podrá editar, borrar o insertar nuevas herramientas a la base de datos de la aplicación.</p>      
    </div>

    <form id="consulta" class="form-horizontal" method="post" action="#recargar">


      <fieldset>

        <!-- Form Name -->
        <legend>Si desea insertar una nueva herramienta, pinche <a href="formulario_insert.php" target="_blank"> aquí</a> </legend>

        <!-- Quicksearch input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="searchinput">Búsqueda rápida:</label>
          <div class="col-md-4">
            <input id="searchinput" name="searchinput" type="search" placeholder="Ejs: Nmap, Wifi, Python..." class="form-control input-md">
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_SO">Sistema operativo objetivo:</label>
          <div class="col-md-4">
            <select id="Enum_SO" name="Enum_SO" class="form-control" onchange="checkAndSubmit()">
              <option value="0" <?php if($_POST['Enum_SO']==0) echo 'selected="selected" ';?>>Seleccionar</option>          
              <option value="1" <?php if($_POST['Enum_SO']==1) echo 'selected="selected" ';?>>Android</option>
              <option value="2" <?php if($_POST['Enum_SO']==2) echo 'selected="selected" ';?>>iOS</option>
              <option value="3" <?php if($_POST['Enum_SO']==3) echo 'selected="selected" ';?>>OS-X</option>
              <option value="4" <?php if($_POST['Enum_SO']==4) echo 'selected="selected" ';?>>Ubuntu</option>
              <option value="5" <?php if($_POST['Enum_SO']==5) echo 'selected="selected" ';?>>Windows</option>
              <option value="6" <?php if($_POST['Enum_SO']==6) echo 'selected="selected" ';?>>Todos</option>
            </select>
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
              <option value="15" <?php if($_POST['Enum_recopilacion']==15) echo 'selected="selected" ';?>>Todos</option>

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
              <option value="5" <?php if($_POST['Enum_vulnera']==5) echo 'selected="selected" ';?>>Otros escáneres</option>
              <option value="6" <?php if($_POST['Enum_vulnera']==6) echo 'selected="selected" ';?>>Todos</option>
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
              <option value="4" <?php if($_POST['Enum_contrasenas']==4) echo 'selected="selected" ';?>>Phising</option>
              <option value="5" <?php if($_POST['Enum_contrasenas']==5) echo 'selected="selected" ';?>>Todos</option>
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
              <option value="3" <?php if($_POST['Enum_wireless']==3) echo 'selected="selected" ';?>>Herramientas WiFi</option>
              <option value="4" <?php if($_POST['Enum_wireless']==4) echo 'selected="selected" ';?>>Todos</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_exploit">Herramientas para exploit:</label>
          <div class="col-md-4">
            <select id="Enum_exploit" name="Enum_exploit" class="form-control" onchange="checkAndSubmit()">
              <option value="0" <?php if($_POST['Enum_exploit']==0) echo 'selected="selected" ';?>>Seleccionar</option>
              <option value="1" <?php if($_POST['Enum_exploit']==1) echo 'selected="selected" ';?>>Explotación de redes</option>
              <option value="2" <?php if($_POST['Enum_exploit']==2) echo 'selected="selected" ';?>>Ingeniería social</option>
              <option value="3" <?php if($_POST['Enum_exploit']==3) echo 'selected="selected" ';?>>Denegación de servicio</option>
              <option value="4" <?php if($_POST['Enum_exploit']==4) echo 'selected="selected" ';?>>Todos</option>
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
              <option value="6" <?php if($_POST['Enum_SSF']==6) echo 'selected="selected" ';?>>Todos</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_access">Post exploit:</label>
          <div class="col-md-4">
            <select id="Enum_access" name="Enum_access" class="form-control" onchange="checkAndSubmit()">
              <option value="0" <?php if($_POST['Enum_access']==0) echo 'selected="selected" ';?>>Seleccionar</option>
              <option value="1" <?php if($_POST['Enum_access']==1) echo 'selected="selected" ';?>>SO backdoor</option>
              <option value="2" <?php if($_POST['Enum_access']==2) echo 'selected="selected" ';?>>Web backdoor</option>
              <option value="3" <?php if($_POST['Enum_access']==3) echo 'selected="selected" ';?>>Herramientas para túneles</option>
              <option value="4" <?php if($_POST['Enum_access']==4) echo 'selected="selected" ';?>>Todos</option>
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
              <option value="4" <?php if($_POST['Enum_inversa']==4) echo 'selected="selected" ';?>>Todos</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enum_informes">Presentación de informes:</label>
          <div class="col-md-4">
            <select id="Enum_informes" name="Enum_informes" class="form-control" onchange="checkAndSubmit()">
              <option value="0" <?php if($_POST['Enum_informes']==0) echo 'selected="selected" ';?>>Seleccionar</option>
              <option value="1" <?php if($_POST['Enum_informes']==1) echo 'selected="selected" ';?>>Gestión de evidencia</option>
              <option value="2" <?php if($_POST['Enum_informes']==2) echo 'selected="selected" ';?>>Capturador de medios</option>
              <option value="3" <?php if($_POST['Enum_informes']==3) echo 'selected="selected" ';?>>Todos</option>
            </select>
          </div>
        </div>

        <div class="volver">
          <input class="btn btn-default" type="submit" id="enviar" value="Enviar">
        </div><br>

      </fieldset>

    </form>

    <?php

    try {

  //Abrir conexión con la BBDD utilizando PDO
      $con = new PDO('mysql:host=localhost;dbname=Biblioteca de ataques', 'root', 'jjrch8mini');
      $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      /*Para recuperar los datos da las consultas
      echo 'Estás buscando según estos criterios: ' . '<br/>'; */

      $BUSQUEDA_RAPIDA = $_POST['searchinput'];
    //echo "Búsqueda rápida: " . $BUSQUEDA_RAPIDA . '<br/>';

      $ID_SO = $_POST['Enum_SO'];
    //echo 'ID de ataque de reconocimiento: ' . $ID_RECONOCIMIENTO . '<br/>'; 

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

      $ID_INFORME = $_POST['Enum_informes'];
    //echo 'ID de ataque de soporte para suplantación: ' . $ID_SUPLANTACION . '<br/>'; 

  //Recuperar datos de la BBDD con prepare().

    //Si el usuario utiliza la búsqueda rápida, el resto de campos se desestiman. 
      if ($BUSQUEDA_RAPIDA != null) {
      $quicksearch = "SELECT * FROM Ataques WHERE Ataques.Descripcion LIKE \"%$BUSQUEDA_RAPIDA%\""; //UNICAMENTE SE BUSCAN COINCIDENCIAS EN LA DESCRIPCION DE LOS ATAQUES.
      //echo $quicksearch;
      $stmt = $con->prepare($quicksearch); 
      $stmt->execute();
      $number_of_rows = $stmt->rowCount(); 
    } else {

      //Si se deja todo sin marcar se muestra todo.
      $sentencia = "SELECT * FROM Ataques"; 

      //Mostrar fltros seleccionados para la búsqueda al presentar los resultados
      $SO = null;
      $RECOPILACION = null;
      $VULNERABILIDAD = null;
      $CONTRASENA = null;
      $WIRELESS = null;
      $EXPLOIT = null;
      $SSF = null;
      $ACCESS = null;
      $INVERSA = null;
      $INFORME = null;

      //Se comprueba la subcategoría buscada para mostrar su nombre en los resultados de la búsqueda. 

      switch ($ID_SO) {
        case 1:
        $SO = "Android ";
        break;
        case 2:
        $SO = "iOS ";
        break;
        case 3:
        $SO = "OS-X ";
        break;
        case 4:
        $SO = "Ubuntu ";
        break;
        case 5:
        $SO = "Windows ";
        break;
        case 6:
        $SO = "Todos los SO ";
        break;
      }

      switch ($ID_RECOPILACION) {
        case 1:
        $RECOPILACION = "Análisis DNS ";
        break;
        case 2:
        $RECOPILACION = "Análisis de tráfico ";
        break;
        case 3:
        $RECOPILACION = "Análisis de OSINT ";
        break;
        case 4:
        $RECOPILACION = "Análisis de routeo ";
        break;
        case 5:
        $RECOPILACION = "Análisis de SMB ";
        break;
        case 6:
        $RECOPILACION = "Análisis de SMTP ";
        break;
        case 7:
        $RECOPILACION = "Análisis de SNMP ";
        break;
        case 8:
        $RECOPILACION = "Análisis de SSL ";
        break;
        case 9:
        $RECOPILACION = "Análisis de VoIP ";
        break;
        case 10:
        $RECOPILACION = "Análisis de VPN ";
        break;
        case 11:
        $RECOPILACION = "Detección de servicio ";
        break;
        case 12:
        $RECOPILACION = "Detección de SO ";
        break;
        case 13:
        $RECOPILACION = "Identificación de hosts en línea ";
        break;
        case 14:
        $RECOPILACION = "Identificación de IDS ";
        break;
        case 15:
        $RECOPILACION = "Todos los tipos de recopilación de informacion ";
        break;
      }

      switch ($ID_VULNERABILIDAD) {
        case 1:
        $VULNERABILIDAD = "Herramientas Cisco ";
        break;
        case 2:
        $VULNERABILIDAD = "Evaluación de BBDD ";
        break;
        case 3:
        $VULNERABILIDAD = "Fuzzing ";
        break;
        case 4:
        $VULNERABILIDAD = "Evaluación de software ";
        break;
        case 5:
        $VULNERABILIDAD = "Otros escáneres ";
        break;
        case 6:
        $VULNERABILIDAD = "Todos los análisis de vulnerabilidades ";
        break;
      }

      switch ($ID_CONTRASENA) {
        case 1:
        $CONTRASENA = "Herramientas para GPU ";
        break;
        case 2:
        $CONTRASENA = "Ataques sin conexión ";
        break;
        case 3:
        $CONTRASENA = "Ataques con conexión ";
        break;
        case 4:
        $CONTRASENA = "Phising ";
        break;
        case 5:
        $CONTRASENA = "Todas las herramientas de contraseñas ";
        break;
      }

      switch ($ID_WIRELESS) {
        case 1:
        $WIRELESS = "Herramientas Bluetooth ";
        break;
        case 2:
        $WIRELESS = "Herramientas RFID/NFC ";
        break;
        case 3:
        $WIRELESS = "Herramientas WiFi ";
        break;
        case 4:
        $WIRELESS = "Todas las herramientas wireless ";
        break;
      }

      switch ($ID_EXPLOIT) {
        case 1:
        $EXPLOIT = "Explotación de redes ";
        break;
        case 2:
        $EXPLOIT = "Ingeniería social ";
        break;
        case 3:
        $EXPLOIT = "Denegación de servicio ";
        break;
        case 4:
        $EXPLOIT = "Todas las herramientas de exploit ";
        break;
      }
      
      switch ($ID_SSF) {
        case 1:
        $SSF = "Network sniffer ";
        break;
        case 2:
        $SSF = "Network spoofing ";
        break;
        case 3:
        $SSF = "Herramientas VoIP ";
        break;
        case 4:
        $SSF = "Web sniffer ";
        break;
        case 5:
        $SSF = "Herramientas forense ";
        break;
        case 6:
        $SSF = "Todas las herramientas SSF ";
        break;
      }

      switch ($ID_ACCESS) {
        case 1:
        $ACCESS = "SO backdoor ";
        break;
        case 2:
        $ACCESS = "Web backdoor ";
        break;
        case 3:
        $ACCESS = "Herramientas para túneles ";
        break;
        case 4:
        $ACCESS = "Todas las herramientas post exploit ";
        break;
      }

      switch ($ID_INVERSA) {
        case 1:
        $INVERSA = "Depurador ";
        break;
        case 2:
        $INVERSA = "Desensamblador ";
        break;
        case 3:
        $INVERSA = "Otras herramientas de ingeniería inversa ";
        break;
        case 4:
        $INVERSA = "Todas las herramientas de ingeniería inversa ";
        break;
      }

      switch ($ID_INFORME) {
        case 1:
        $INFORME = "Gestión de evidencia ";
        break;
        case 2:
        $INFORME = "Capturador de medios ";
        break;
        case 3:
        $INFORME = "Todas las herramientas de informes ";
        break;
      }

        //Construcción del string que se mostrará en los resultados de la búsqueda, que nos lleva en cada caso a la página de información. 

      $SOfinal = "<a href=" . "informacion.html#info_so>" . $SO . "</a>";
      $RECOPILACIONfinal = "<a href=" . "informacion.html#info_reco>" . $RECOPILACION . "</a>";
      $VULNERABILIDADfinal = "<a href=" . "informacion.html#info_vulnera>" . $VULNERABILIDAD . "</a>";
      $CONTRASENAfinal = "<a href=" . "informacion.html#info_contrasena>" . $CONTRASENA . "</a>";
      $WIRELESSfinal = "<a href=" . "informacion.html#info_wireless>" . $WIRELESS . "</a>";
      $EXPLOITfinal = "<a href=" . "informacion.html#info_exploit>" . $EXPLOIT . "</a>";
      $SSFfinal = "<a href=" . "informacion.html#info_ssf>" . $SSF . "</a>";
      $ACCESSfinal = "<a href=" . "informacion.html#info_postexploit>" . $ACCESS . "</a>";
      $INVERSAfinal = "<a href=" . "informacion.html#info_inversa>" . $INVERSA . "</a>";
      $INFORMEfinal = "<a href=" . "informacion.html#info_informes>" . $INFORME . "</a>";

      /*Esto solo sirve de guía para construir una sentencia compleja.
      $sentencia_mas_compleja = "SELECT * FROM Ataques INNER JOIN Reco ON Reco.ID_ATAQUE = Ataques.ID_ATAQUE INNER JOIN Analisis_vulnera ON Analisis_vulnera.ID_ATAQUE = Ataques.ID_ATAQUE INNER JOIN Obtener_info ON Obtener_info.ID_ATAQUE = Ataques.ID_ATAQUE WHERE Reco.ID_RECONOCIMIENTO = $ID_RECONOCIMIENTO AND Analisis_vulnera.ID_VULNERABILIDAD = $ID_VULNERABILIDAD AND Obtener_info.ID_TIPO = $ID_TIPO";*/

      if ($ID_SO != 0 && $ID_SO != null) {
        $sentencia_01 = " INNER JOIN Sistemas_operativos ON Sistemas_operativos.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_11 = " WHERE Sistemas_operativos.ID_SO = $ID_SO";
      } else {
        $sentencia_01 = null;
        $sentencia_11 = null;
      }

      if ($ID_RECOPILACION != 0 && $ID_RECOPILACION != null) {
        $sentencia_02 = " INNER JOIN Recopilacion_info ON Recopilacion_info.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_12 = " AND Recopilacion_info.ID_RECOPILACION = $ID_RECOPILACION";
      } else {
        $sentencia_02 = null;
        $sentencia_12 = null;
      }
      if ($ID_VULNERABILIDAD != 0 && $ID_VULNERABILIDAD != null) {
        $sentencia_03 = " INNER JOIN Analisis_vulnera ON Analisis_vulnera.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_13 = " AND Analisis_vulnera.ID_VULNERABILIDAD = $ID_VULNERABILIDAD";
      } else {
        $sentencia_03 = null;
        $sentencia_13 = null;
      }
      if ($ID_CONTRASENA != 0 && $ID_CONTRASENA != null) {
        $sentencia_04 = " INNER JOIN Contrasenas ON Contrasenas.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_14 = " AND Contrasenas.ID_CONTRASENA = $ID_CONTRASENA";
      } else {
        $sentencia_04 = null;
        $sentencia_14 = null;
      }
      if ($ID_WIRELESS != 0 && $ID_WIRELESS != null) {
        $sentencia_05 = " INNER JOIN Wireless ON Wireless.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_15 = " AND Wireless.ID_WIRELESS = $ID_WIRELESS";
      } else {
        $sentencia_05 = null;
        $sentencia_15 = null;
      }
      if ($ID_EXPLOIT != 0 && $ID_EXPLOIT != null) {
        $sentencia_06 = " INNER JOIN Exploit ON Exploit.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_16 = " AND Exploit.ID_EXPLOIT = $ID_EXPLOIT";
      } else {
        $sentencia_06 = null;
        $sentencia_16 = null;
      }
      if ($ID_SSF != 0 && $ID_SSF != null) {
        $sentencia_07 = " INNER JOIN Sniff_Spoof_Foren ON Sniff_Spoof_Foren.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_17 = " AND Sniff_Spoof_Foren.ID_SSF = $ID_SSF";
      } else {
        $sentencia_07 = null;
        $sentencia_17 = null;
      }
      if ($ID_ACCESS != 0 && $ID_ACCESS != null) {
        $sentencia_08 = " INNER JOIN Maintaining_access ON Maintaining_access.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_18 = " AND Maintaining_access.ID_ACCESS = $ID_ACCESS";
      } else {
        $sentencia_08 = null;
        $sentencia_18 = null;
      }
      if ($ID_INVERSA != 0 && $ID_INVERSA != null) {
        $sentencia_09 = " INNER JOIN Ingenieria_inversa ON Ingenieria_inversa.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_19 = " AND Ingenieria_inversa.ID_INVERSA = $ID_INVERSA";
      } else {
        $sentencia_09 = null;
        $sentencia_19 = null;
      }
      if ($ID_INFORME != 0 && $ID_INFORME != null) {
        $sentencia_10 = " INNER JOIN Informes ON Informes.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_20 = " AND Informes.ID_INFORME = $ID_INFORME";
      } else {
        $sentencia_10 = null;
        $sentencia_20 = null;
      }

      //La sentencia se crea en función de lo que el usuario haya buscado.
      $sentencia = $sentencia . $sentencia_01 . $sentencia_02 . $sentencia_03 . $sentencia_04 . $sentencia_05 . $sentencia_06 . $sentencia_07 . $sentencia_08 . $sentencia_09 . $sentencia_10 . $sentencia_11 . $sentencia_12 . $sentencia_13 . $sentencia_14 . $sentencia_15 . $sentencia_16 . $sentencia_17 . $sentencia_18 . $sentencia_19 . $sentencia_20; 

      //Ejecución de la sentencia.
      $stmt = $con->prepare($sentencia); 
      $stmt->execute();
      $number_of_rows = $stmt->rowCount(); 
    }

    if ($number_of_rows != 0) {
      if ($number_of_rows == 1) {
        echo '<legend id="recargar">Se ha encontrado ' . $number_of_rows . ' resultado de la búsqueda: ' . '<i>' . $BUSQUEDA_RAPIDA . $SOfinal . $RECOPILACIONfinal . $VULNERABILIDADfinal . $CONTRASENAfinal . $WIRELESSfinal . $EXPLOITfinal . $SSFfinal . $ACCESSfinal . $INVERSAfinal . $INFORMEfinal . '</i>' . '</legend>';      
      } else {
        echo '<legend id="recargar">Se han encontrado ' . $number_of_rows . ' resultados de la búsqueda: ' . '<i>' . $BUSQUEDA_RAPIDA . $SOfinal . $RECOPILACIONfinal . $VULNERABILIDADfinal . $CONTRASENAfinal . $WIRELESSfinal . $EXPLOITfinal . $SSFfinal . $ACCESSfinal . $INVERSAfinal . $INFORMEfinal . '</i>' . '</legend>';
      }

    //Imprimir resultados en una tabla.
      echo '<div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th id="nombre" class="header">Nombre</th>
            <th class="header">Descripción</th>
            <th class="header">Acciones</th>
          </tr>
        </thead>
        <tbody>';

      //Mostrar nombre y descripción de cada herramienta junto con botón para editar/eliminar cada una.
          while( $datos = $stmt->fetch() ){
            echo '<tr> <td class=centrado>' . $datos[1] . '</td> <td class=justificado>' . $datos[2] . '</td> 
            <td>
              <form id="editar" class="form-horizontal" method="post" action="edit_tool.php">
                <div class="volver">
                  <input type="hidden" name="id_tool" value=" ' . $datos[0] . '">
                  <input type="hidden" name="nombre" value=" ' . $datos[1] . '">
                  <input type="hidden" name="descripcion" value=" ' . htmlspecialchars($datos[2]) . '">
                  <button type="submit" class="btn btn-default" aria-label="Left Align" id="editar" name="editar">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar
                  </button>
                </div> 
              </form>
              <form name="eliminar" id="eliminar" class="form-horizontal" method="post" action="delete_tool.php">
                <div class="volver">
                  <input type="hidden" name="id_tool" value=" ' . $datos[0] . '"> 
                  <input type="hidden" name="nombre" value=" ' . $datos[1] . '">
                  <input type="hidden" name="description" value=" ' . htmlspecialchars($datos[2]) . '">
                  <button type="submit" class="btn btn-default" aria-label="Left Align" id="eliminar">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar
                  </button>
                </div>
              </form>
            </td></tr>';
          }

          echo '</tbody></table></div>';  

        } else {
          echo '<legend id="recargar">Se han encontrado ' . $number_of_rows . ' resultados de la búsqueda: ' . '<i>' . $BUSQUEDA_RAPIDA . $SOfinal . $RECOPILACIONfinal . $VULNERABILIDADfinal . $CONTRASENAfinal . $WIRELESSfinal . $EXPLOITfinal . $SSFfinal . $ACCESSfinal . $INVERSAfinal . $INFORMEfinal . '</i>' . '</legend>';
          echo "Al seleccionar más de un filtro se buscan herramientas que contengan TODAS las categorías seleccionadas, lo que puede ocasionar que no se devuelva ningún resultado.";
        }

      }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
      }

# close the connection
      $DBH = null;

      ?>

    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

    <!-- js -->
    <script src="formulario.js"></script>

    <!-- Jquery -->
    <script src="jquery-1.12.3.min.js" type="text/javascript"></script> 

    <script>
      jQuery(document).ready(function() {
        $('.back-to-top').css({"display": "none"});
        var offset = 2000;
        var duration = 300;
        jQuery(window).scroll(function() {
          if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
          } else {
            jQuery('.back-to-top').fadeOut(duration);
          }
        });
        jQuery('.back-to-top').click(function(event) {
          event.preventDefault();
          jQuery('html, body').animate({scrollTop: 0}, duration);
          return false;
        })
      });
    </script>

  </body>







