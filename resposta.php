<?php 
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $nome = $_POST['nome'];
    $email = $_POST["email"];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Enviado</title>
<link rel="stylesheet" href="css/resposta.css">
</head>
<body>
<header>
<nav class="navbar">
    <div id="brand">
        <img src="assets/img/integrantes_grupo/Logo_sem_fundo.png" alt="DevConnect" class="logo" />
    </div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="integrantes.php">Integrantes</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="cadastro.php">Cadastre-se</a></li>
        <li><a href="glossario.php">Glossário</a></li>
    </ul>
</nav>
</header>
<form action="contato.php" method="post" >
<div class='caixa_resposta'>
<?php echo "<h1> Obrigado, $nome!</h1> <br>" ?>

<?php echo "<center><p> <b>Mensagem enviada:</b></p></center>" ?>
<div class = "campo_mensagem">
<?php echo "<center>$mensagem</center>" ?>
</div>
<div class="btn-container">
<input type="submit" value="Enviar uma nova mensagem" class="btn" >
</div>
</form>
</div>
</body>
</html>