<?php

// habilitar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Maximum execution
ini_set('max_execution_time', '200');
if ($_REQUEST["accion"] == 'send_mail' && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['pdf'])) {
  $accion = 'send_mail';
  $correo = $_REQUEST["correo"];
  $contenidohtml = $_REQUEST["contenidohtml"];
  $asunto = $_REQUEST["asunto"];
  $nombre_cliente = $_REQUEST["nombre_cliente"];


  $url = "https://www.practisis.net/contabilidad/correos_masivos/?url=ajax/Consultas";
 

  // Obtener la información del archivo adjunto
  $nombre_archivo = $_FILES['pdf']['name'];
  $ruta_archivo = $_FILES['pdf']['tmp_name'];

  // Leer el contenido del archivo
  $contenido_archivo = file_get_contents($ruta_archivo);

  // Codificar el contenido del archivo en base64
  $archivo = base64_encode($contenido_archivo);
  $opciones = array(
    "accion" => $accion,
    "correo" => $correo,
    "file" => $archivo,
    "nombre_archivo" => $nombre_archivo,
    "contenidohtml" => $contenidohtml,
    "asunto" => $asunto,
    "nombre_cliente" => $correo,
    "token" =>'F1A17B7D-3E3A3A77',

    
  );
 

  $options = array(
    CURLOPT_URL => $url,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => http_build_query($opciones),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false
  );

  $curl = curl_init();
  curl_setopt_array($curl, $options);
  $result = curl_exec($curl);
  curl_close($curl);
  var_dump($result);
}
else if ($_REQUEST["accion"] == 'registrar_sistema_practisis') {
  //recibir data POST

  $accion = $_REQUEST["accion"];
  $nombre = $_REQUEST["nombre"];
  $apellido = $_REQUEST["apellido"];
  $email = $_REQUEST["email"];
  $repass = $_REQUEST["repass"];
  $ceulular = $_REQUEST["ceulular"];
  $empresa = $_REQUEST["empresa"];
  $conociste = $_REQUEST["conociste"];
  $version = $_REQUEST["version"];

  //enviar datos vias curl post a https://www.practisis.net/registro/bases_sistemas.php
  $opciones = array(
    "accion" => $accion,
    "nombre" => $nombre,
    "apellido" => $apellido,
    "email" => $email,
    "pass" => $repass,
    "repass" => $repass,
    "celular" => $ceulular,
    "empresa" => $empresa,
    "conociste" => $conociste,
    "version" => $version
  );
  $url = 'https://www.practisis.net/registro/bases_sistemas.php';

  $options = array(
    CURLOPT_URL => $url,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => http_build_query($opciones),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false
  );

  $curl = curl_init();
  curl_setopt_array($curl, $options);
  $result = curl_exec($curl);
  curl_close($curl);
  //mostrar error de culr
  if ($result === false) {
    echo 'Curl error: ' . curl_error($curl);
  } else {
    echo json_encode($result);
  }

 
}
