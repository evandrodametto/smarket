<?php
  session_start();
  $cesta = $_SESSION["cesta"];
  $_SESSION["tam"] = count($cesta);
  
  unset ($_SESSION["cesta"]);
unset($_SESSION["tam"]);  
  header("location: historico.php");
 ?>

