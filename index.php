
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<!--Título-->
		<title>Camera Test</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Apenas um teste"/>
		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div class="area">
			<video autoplay="true" id="webCamera">
			</video>
			<form target="POST">
				<!--<textarea  type="text" id="base_img" name="base_img"></textarea>-->
				<p>Codigo do Aluno: <input type="text" id="base_img" name="base_img"></p>
				<button type="button" onclick="takeSnapShot()">Tirar foto e salvar</button>
			</form>
			<img id="imagemConvertida"/>
			<p id="caminhoImagem" class="caminho-imagem"><a href="" target="_blank"></a></p>
			<!--Scripts-->
			<script src="script.js"></script>
		</div>
	</body>
</html>
