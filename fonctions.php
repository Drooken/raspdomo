<?php

function etatLampe($num){
	$gpio=array();
	exec("gpio read ".$num,$gpio);
	if ($gpio[0]){
		return "on";
			}
	else{
		return "off";
			}
}

function classe($num){
        $gpio=array();
        exec("gpio read ".$num,$gpio);
        if ($gpio[0]){
                return "active";
                        }
        else{
                return "tuile";
                        }
}


?>
