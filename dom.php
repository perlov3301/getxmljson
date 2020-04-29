<?php
  header ("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
  header ("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
  header ("Allow: GET, POST, OPTIONS, PUT, DELETE");
  foreach($_POST as $post_var) {
      echo strtoupper($post_var) . "<br />";
  }
?>
