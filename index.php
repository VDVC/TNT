<?php //index.php

  include_once "settings.php";
  
  $mysqli = new mysqli($db_cfg['host'],$db_cfg['user'],$db_cfg['pass']);
  if (mysqli_connect_errno()) {
    echo "<p>Could not connect as ";
  } else {
    echo "<p>Success! Connected as ";
  }
  echo "'".$db_cfg['user']."'@'".$db_cfg['host']."'.</p>\n";
  
  $mysqli->close();
?>
