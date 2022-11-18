<?php

session_start();
$_app = $_SESSION['app'];
include('baseDatos.php');
$sql = 'select id, contenido from appData;';
$res = $bd->query($sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <title> Grilla <?= $app ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div>
          <div class="container">
              <div class="row">
                  <div class="col-xl-6">
                  <div class="alert alert-dark" role="alert">
                  <strong>bienvenido a la aplicacion<? = $app ?></strong>
                  </div>
                  </div>
              </div>
          </div>
      </div>
 
<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <table class="table table-hove inverse table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>identificador</th>
                            <th>contenido</th>
                            <th>modificar</th>

                        </tr>
                        </thead>
                        <tbody>
                            <?php


                            while($reg = $res->fetch_array(MYSQLI_ASSOC)){
                                $id= $reg['id'];
                                $cont= $reg['contenido'];
                                $modificar = "modificarRegistro.php?id=$id&contenido=$cont";
                            


                            ?>
                            <tr>
                                <td scope="row"><?= $id ?></td>
                                
                                <td>
                                    <?= $cont ?>
                                </td>
                                <td>
                                    <a href="<?= $modificar ?>">Modificar</a>
                                    
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>

  
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>