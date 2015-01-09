<?php
$handle = opendir(dirname(realpath(__FILE__)).'/uploads/');
        while($file = readdir($handle)){
            if($file !== '.' && $file !== '..'){
                echo '<img src="uploads/'.$file.'" border="0" />';
            }
        }
		?>