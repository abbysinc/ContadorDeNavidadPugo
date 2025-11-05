<?php
$data = file_get_contents("php://input");
if ($data) {
  file_put_contents("anuncios.json", $data);
  echo "ok";
}
?>
