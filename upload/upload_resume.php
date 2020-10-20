<?php
	$id_file = date("Ymdhisa");
	$rand = rand();
	$file_name_rand = $rand.'-'.$id_file.'';
	$no_files = count($_FILES["resume"]['name']);
	for ($i = 0; $i < $no_files; $i++){
		if ($_FILES["resume"]["error"][$i] > 0){
			echo "Error: " . $_FILES["resume"]["error"][$i] . "<br>";
		} else {
				$date_n_time = date("Y-m-d-h-i-sa");
				$file_name = basename($_FILES["resume"]['name'][$i]);
				$name = $file_name_rand.''.$file_name;
			if (file_exists('../Scanned_Files/' .$_FILES["resume"]["name"][$i])) {
			} else {
				$filename = move_uploaded_file($_FILES["resume"]["tmp_name"][$i], '../resume/'.$name);
				echo $name;
			}
		}
	}

