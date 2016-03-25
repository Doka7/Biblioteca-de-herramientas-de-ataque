<!DOCTYPE html>

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
      <p>Realice búsquedas y encuentre las herramientas más adecuadas para sus fines.</p>      
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
        <label class="col-md-4 control-label" for="Enum_reco">Herramientas de reconocimiento:</label>
        <div class="col-md-4">
          <select id="Enum_reco" name="Enum_reco" class="form-control" onchange="checkAndSubmit()">
            <option value="1" <?php if($_POST['Enum_reco']==1) echo 'selected="selected" ';?>>Seleccionar</option>
            <option value="2" <?php if($_POST['Enum_reco']==2) echo 'selected="selected" ';?>>Ingeniería inversa</option>
            <option value="3" <?php if($_POST['Enum_reco']==3) echo 'selected="selected" ';?>>Escáner de redes</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Enum_vulnera">Análisis de vulnerabilidades:</label>
        <div class="col-md-4">
          <select id="Enum_vulnera" name="Enum_vulnera" class="form-control" onchange="checkAndSubmit()">
            <option value="1" <?php if($_POST['Enum_vulnera']==1) echo 'selected="selected" ';?>>Seleccionar</option>          
            <option value="2" <?php if($_POST['Enum_vulnera']==2) echo 'selected="selected" ';?>>Escáner de programas</option>
            <option value="3" <?php if($_POST['Enum_vulnera']==3) echo 'selected="selected" ';?>>Configuraciones por defecto</option>
            <option value="4" <?php if($_POST['Enum_vulnera']==4) echo 'selected="selected" ';?>>Exploit</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Enum_contrasenas">Romper contraseñas:</label>
        <div class="col-md-4">
          <select id="Enum_contrasenas" name="Enum_contrasenas" class="form-control" onchange="checkAndSubmit()">
            <option value="1" <?php if($_POST['Enum_info']==1) echo 'selected="selected" ';?>>Seleccionar</option>
            <option value="2" <?php if($_POST['Enum_info']==2) echo 'selected="selected" ';?>>Ataque wireless</option>
            <option value="3" <?php if($_POST['Enum_info']==3) echo 'selected="selected" ';?>>Ataque de fuerza bruta</option>
            <option value="4" <?php if($_POST['Enum_info']==4) echo 'selected="selected" ';?>>Ataque de diccionario</option>
            <option value="5" <?php if($_POST['Enum_info']==5) echo 'selected="selected" ';?>>Rainbow tables</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Enum_suplantacion">Soporte para suplantación:</label>
        <div class="col-md-4">
          <select id="Enum_suplantacion" name="Enum_suplantacion" class="form-control" onchange="checkAndSubmit()">
            <option value="1" <?php if($_POST['Enum_info']==1) echo 'selected="selected" ';?>>Seleccionar</option>         
            <option value="2" <?php if($_POST['Enum_info']==2) echo 'selected="selected" ';?>>Phising</option>
            <option value="3" <?php if($_POST['Enum_info']==3) echo 'selected="selected" ';?>>Spoofing</option>
            <option value="4" <?php if($_POST['Enum_info']==4) echo 'selected="selected" ';?>>Ingeniería social</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Enum_info">Obtención de información:</label>
        <div class="col-md-4">
          <select id="Enum_info" name="Enum_info" class="form-control" onchange="checkAndSubmit()">
            <option value="1" <?php if($_POST['Enum_info']==1) echo 'selected="selected" ';?>>Seleccionar</option>         
            <option value="2" <?php if($_POST['Enum_info']==2) echo 'selected="selected" ';?>>SQLinjection</option>
            <option value="3" <?php if($_POST['Enum_info']==3) echo 'selected="selected" ';?>>MiTM</option>
            <option value="4" <?php if($_POST['Enum_info']==4) echo 'selected="selected" ';?>>Post exploit</option>
            <option value="5" <?php if($_POST['Enum_info']==5) echo 'selected="selected" ';?>>Forense</option>
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
    echo 'Estás buscando según estos criterios: ' . '<br/>';

    $ID_LENGUAJE = $_POST['Lenguaje'];
    echo 'ID del lenguaje: ' . $ID_LENGUAJE . '<br/>';

    $ID_PROTOCOLO = $_POST['Protocolo'];
    echo 'ID del protocolo: ' . $ID_PROTOCOLO . '<br/>'; */

    $BUSQUEDA_RAPIDA = $_POST['searchinput'];
    //echo "Búsqueda rápida: " . $BUSQUEDA_RAPIDA . '<br/>';

    $ID_RECONOCIMIENTO = $_POST['Enum_reco'];
    //echo 'ID de ataque de reconocimiento: ' . $ID_RECONOCIMIENTO . '<br/>'; 

    $ID_VULNERABILIDAD = $_POST['Enum_vulnera'];
    //echo 'ID de ataque de analisis de vulnerabilidades: ' . $ID_VULNERABILIDAD . '<br/>';

    $ID_CONTRASENA = $_POST['Enum_contrasenas'];
    //echo 'ID de ataque de romper contraseñas: ' . $ID_CONTRASENA . '<br/>'; 

    $ID_SUPLANTACION = $_POST['Enum_suplantacion'];
    //echo 'ID de ataque de soporte para suplantación: ' . $ID_SUPLANTACION . '<br/>'; 

    $ID_TIPO = $_POST['Enum_info'];
    //echo 'ID de ataque de obtencion de información: ' . $ID_TIPO . '<br/>'; 


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

      if ($ID_RECONOCIMIENTO != 1 && $ID_RECONOCIMIENTO != null) {
        $sentencia_01 = " INNER JOIN Reco ON Reco.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_06 = " WHERE Reco.ID_RECONOCIMIENTO = $ID_RECONOCIMIENTO";
      } else {
        $sentencia_01 = null;
        $sentencia_06 = null;
      }
      if ($ID_VULNERABILIDAD != 1 && $ID_VULNERABILIDAD != null) {
        $sentencia_02 = " INNER JOIN Analisis_vulnera ON Analisis_vulnera.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_07 = " AND Analisis_vulnera.ID_VULNERABILIDAD = $ID_VULNERABILIDAD";
      } else {
        $sentencia_02 = null;
        $sentencia_07 = null;
      }
      if ($ID_CONTRASENA != 1 && $ID_CONTRASENA != null) {
        $sentencia_03 = " INNER JOIN Contrasenas ON Contrasenas.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_08 = " AND Contrasenas.ID_CONTRASENA = $ID_CONTRASENA";
      } else {
        $sentencia_03 = null;
        $sentencia_08 = null;
      }
      if ($ID_SUPLANTACION != 1 && $ID_SUPLANTACION != null) {
        $sentencia_04 = " INNER JOIN Suplantacion ON Suplantacion.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_09 = " AND Suplantacion.ID_SUPLANTACION = $ID_SUPLANTACION";
      } else {
        $sentencia_04 = null;
        $sentencia_09 = null;
      }
      if ($ID_TIPO != 1 && $ID_TIPO != null) {
        $sentencia_05 = " INNER JOIN Obtener_info ON Obtener_info.ID_ATAQUE = Ataques.ID_ATAQUE";
        $sentencia_10 = " AND Obtener_info.ID_TIPO = $ID_TIPO";
      } else {
        $sentencia_05 = null;
        $sentencia_10 = null;
      }

      //La sentencia se crea en función de lo que el usuario haya buscado.
      $sentencia = $sentencia . $sentencia_01 . $sentencia_02 . $sentencia_03 . $sentencia_04 . $sentencia_05 . $sentencia_06 . $sentencia_07 . $sentencia_08 . $sentencia_09 . $sentencia_10; 

      //Ejecución de la sentencia.
      $stmt = $con->prepare($sentencia); 
      $stmt->execute();
    }

  }catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }

  //Imprimir resultados en una tabla.
  echo '<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th id="nombre">Nombre ataque</th>
        <th class="header">Descripción</th>
      </tr>
    </thead>
    <tbody>';

  //Mostrar nombre y descripción de cada ataque.
      while( $datos = $stmt->fetch() ){
        echo '<tr> <td class=centrado>' . $datos[1] . '</td> <td class=justificado>' . $datos[2] . '</td> </tr>';
      }

      echo '</tbody></table></div>';

# close the connection
      $DBH = null;

      ?>

    </div>  <!-- div container -->

  </body>







