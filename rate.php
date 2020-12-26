<?php
 require "db.inc.php";
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
 $POSTI = filter_var_array($_POST, FILTER_SANITIZE_NUMBER_INT);

?>