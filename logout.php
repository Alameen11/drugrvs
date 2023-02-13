<?php
session_start();
session_destroy();

header("location:index.php?info=LOGGED OUT SUCCESFULLY");

?>