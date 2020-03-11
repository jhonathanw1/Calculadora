<!DOCTYPE html>

<html >
	<head>
		<title></title>
		<meta charset="utf-8" />
	</head>
	<body>
		<form id="f1" name="f1" method="post" action="Calculadora.php">
			<h1>Calculadora</h1>
			<p>
				<label>
					<input type=”text” name=”camp1″ id=”camp1″ />
					</label>
					<label>
					<select name=”ope” id=”ope”>
					<option value=”+” selected=”selected”>+</option>
					<option value=”-“>-</option>
					<option value=”*”>*</option>
					<option value=”/”>/</option>
					</select>
					</label>
					<label>
					<input type=”text” name=”camp2″ id=”camp2″ />
				</label>
			</p>
			<p>
				Resultado: <?=@$_POST[“camp1”];?> <?=@$_POST[“ope”];?> <?=@$_POST[“camp2″];?> = <?=@$valor;?>
			</p>
			<p>
				<label>
					<input type=”submit” name=”button” id=”button” value=”Calcular” />
				</label>
			</p>
			
		</form>
	</body>
</html>