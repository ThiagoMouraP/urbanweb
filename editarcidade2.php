
<?php
include("verificarlogin.php");
include("conexao.php");
   $idcidade = $_REQUEST["cidade"];
   $nome = $_REQUEST["nome"];
   $latitude = $_REQUEST["latitude"];
   $longitude = $_REQUEST["longitude"];
   $imagem = $_REQUEST["linkimagem"];
   $estado = $_REQUEST["estado"];
   $pais = $_REQUEST["pais"];
   $sql =<<<EOF
      UPDATE urban.cidade set nome = '$nome', latitude = $latitude, longitude = $longitude, imagem = '$imagem', estado = '$estado' , pais = '$pais'  where idcidade= $idcidade;
EOF;
   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
      exit;
   } else {
      echo "Record updated successfully\n";
      header('Location: lista.php');
   }
?>
