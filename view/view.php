<html>
<head>
	<title>Buku Telepon</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div id="overlay">
		<div id="modal">
			<div id="close"><a href="#">X</a></div>
			<div id="modalContent">

			</div>
		</div>
	</div>
	<div id="container">
		<center>
			<div id="table">
				<?php
					include "view/table.php";
				?>
			</div>
			<div id="add">ADD</div>
		</center>
	</div>
</body>
</html>