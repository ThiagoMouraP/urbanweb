<?php
include("verificarlogin.php");
include("conexao.php");
 ?>
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $idhotspot = $_REQUEST["idhotspot"];
     $idcidade = $_REQUEST["cidade"];
     $nome = $_REQUEST["nome"];
     $latitude = $_REQUEST["latitude"];
     $longitude = $_REQUEST["longitude"];
     $imagem = $_REQUEST["linkimagem"];
     $site= $_REQUEST["site"];
     $arlivre = $_REQUEST["arlivre"];
     if(!isset($arlivre)||$arlivre==null){
        $arlivre = f;
     }
     else{
        $arlivre = t;
     }
   }

   $sql =<<<EOF
      INSERT INTO urban.hotspot (idhotspot, idcidade ,nome ,latitude ,longitude ,imagem, linksite, "ar-livre")
      VALUES ($idhotspot, $idcidade, '$nome', $latitude, $longitude, '$imagem', '$site', '$arlivre' );
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
       header('Location: listahotspots.php?id='.$idcidade);

   }
   pg_close($db);
?>
