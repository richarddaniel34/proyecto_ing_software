<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="./assets/css/naves.css">
		<title>Invasores</title>
		<script type="text/javascript" src="./js/funciones.js"></script>
	</head>
	<body>
		<button><a href="principal.php">Regresar</a></button>
		<h1>INVASORES</h1>
		<canvas id="miCanvas" width="600px" height="500px">
			Tu navegador no soporta CANVAS
		</canvas>
		<div class="botonesDiv">
			<button class="botonesMover" onclick="verifica(true,37)">&lt;-</button>
			<button class="botonDisparo" onclick="verifica(true,32)">Fire</button>
			<button class="botonesMover" onclick="verifica(true,39)">-&gt;</button>
		</div>
	</body>
</html>