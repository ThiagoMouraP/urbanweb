<?php
function maxId($tabela, $nomeID){
  $maxIX = 0;
  $host        = "host = ec2-52-23-14-156.compute-1.amazonaws.com";
  $port        = "port = 5432";
  $dbname      = "dbname = de04qoln4k3dbd";
  $credentials = "user = qzijxcrgetwdyg password=c57cdc821172e503b8d71aebbb96cb5fc7d78adeb40f694720a128251e687c5b";
  $db = pg_connect( "$host $port $dbname $credentials"  );
  $sql =<<<EOF
     SELECT MAX($nomeID) from $tabela;
EOF;
  $ret = pg_query($db, $sql);
  if(!$ret) {
       echo pg_last_error($db);
   exit;
  }
  while($row = pg_fetch_row($ret)) {
    $maxIX = $row[0];
    break;
  }
  return $maxIX;
}
 ?>
