<?php

system("gpio mode ".$_POST['gpio']." OUT");

system("gpio write ".$_POST['gpio']." ".$_POST['etat']."");

?>
