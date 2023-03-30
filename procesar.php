<?php
$accion = $_REQUEST["accion"];
$correo = $_REQUEST["correo"];
$contenidohtml = $_REQUEST["contenidohtml"];
$asunto = $_REQUEST["asunto"];
$nombre_cliente = $_REQUEST["nombre_cliente"];
$token = $_REQUEST["token"];
$opciones = array(
  "accion" => $accion,
  "correo" => $correo,
  "ccEmails" =>'desarrollotestinfweb@gmail.com',
  
  "contenidohtml" => $contenidohtml,
  "asunto" => $asunto,
  "nombre_cliente" => 'pruebas',
  "token" => $token
);

$url = "https://www.practisis.net/contabilidad/correos_masivos/?url=ajax/Consultas";
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

echo json_encode($result);


/**
 * if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['pdf'])) {
  $nombre_archivo = $_FILES['pdf']['name'];
  $tipo_archivo = $_FILES['pdf']['type'];
  $tamanio_archivo = $_FILES['pdf']['size'];
  $contenido_archivo = file_get_contents($_FILES['pdf']['tmp_name']);
  chunk_split(base64_encode($contenido_archivo)) 
 */
?>