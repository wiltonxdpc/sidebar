<?php
class empresa{ 
var $nome;
var $db;
function __construct($nome) { 
$this->nome = $nome;
}
function conecta($local, $usuario, $senha) {     
if($this->con=pg_connect("$local","$usuario","$senha"))
{
return true;
}
else
{
return "ruim";
}
}
function cadastra($db, $tabela) { 
pg_select_db($this->con,$db);
	
$query = "INSERT INTO $tabela (nome) VALUES ('$this->nome')"; 
	
pg_query($this->con,$query);
}
}
$cadastro2 = new empresa("wilton");
if($cadastro2->conecta("ec2-23-23-92-204.compute-1.amazonaws.com","movgpzvubxrkru","f4117a6654430998b88fafb8fff17397b647ae20fd38b526e3df636f4edf3d54")){
$cadastro2 ->cadastra("d8g5vkl3hk84ai","Users");
	echo "<script>alert('Atividade Cadastrada');</script>";
}else{
echo "Não conectou ao BD";
exit();
}

?>
