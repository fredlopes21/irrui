<?php

$imagem = $_FILES["imagem"];
$fname = $POST["codaluno"];

if($imagem != NULL) {
	$nomeFinal = $fname.'.jpg';
	if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
		$tamanhoImg = filesize($nomeFinal);

			unlink($nomeFinal);

		header("location:exibir.php");
	}
}
else {
	echo"Você não realizou o upload de forma satisfatória.";
}

?>
