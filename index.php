<html>

<head>
<title>Exemplo PHP</title>
</head>

<body>

ini_set("display_errors", 1);
header('Content-Type: text/html; charset=io-8859-1');


echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "ip do servidor";
$username = "root";
$password = "Senha123";
$database = "itensbanco";

// Criar conexão

$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
	printf("Connect Failed: %s\n", mysqli connect error());
	exit();
}

$valor_rand1 = rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));

$query = "INSERT INTO dados (ProdutoID, Item, Valor) VALUES ('$valor_rand1' , '$valor_rand2', '$valor_rand2')";

if ($link->query($query) === TRUE {
	echo "New record created successfully";
} else {
	echo "Error: " . $link->error;
}

</body>
</html>
