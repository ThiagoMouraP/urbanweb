<?php
include("verificarlogin.php");
include("conexao.php");
include("max.php");
$id = maxId("urban.hotspot", "idhotspot")+1;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Urban Explorer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="redirect.js"></script>
  </head>
  <body>
  <div class="jumbotron text-center">

  <h1 onclick="redirectIndex()">Urban Explorer</h1>
  <p>Cadastro de Hotspots</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Cadastro</h3>
      <form action="cadastrohotspots2.php" method="post">
        <p>ID:</p><br>
        <?php
          echo "<input type='text' name='idhotspot' id='idhotspot' value='$id'><br>";
         ?>
        <p>Nome:</p><br>
        <input type="text" name="nome" id="nome" value=""><br>
        <p>Link da imagem:</p><br>
        <input type="text" name="linkimagem" id="linkimagem" value=""><br>
        <p>Latitude:</p><br>
        <input type="text" name="latitude" id="latitude" value=""><br>
        <p>Longitude:</p><br>
        <input type="text" name="longitude" id="longitude" value=""><br>
        <p>Site:</p><br>
        <input type="text" name="site" id="site" value=""><br>
        <br>
        <input type="checkbox" id="arlivre" name="arlivre" value="t">
        <label for="arlivre"> Ar livre</label><br>
        <input type="hidden" value="<?php echo $_GET['id']; ?>" name="cidade" id="cidade">
        <input type="submit" id="Submit" value="Submit">
      </form>
    </div>
</div>

</body>
</html>
