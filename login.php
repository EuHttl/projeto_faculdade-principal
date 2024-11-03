<?php
session_start();

$erro_de_login = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['senha'] ?? '';

    $usuarios = file('usuarios.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $isValidUser = false;
    foreach($usuarios as $usuario) {
        $dados = explode(';', $usuario);
        if(count($dados) === 4) {
            list($e, $p, $n, $s) = $dados;
            if($e === $email && $p === $password) {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $password;
                $_SESSION['nome'] = $n;
                $_SESSION['sobrenome'] = $s;
                header('Location: feed.php');
                exit;
            }
        }
    }
    $erro_de_login = 'Email ou senha incorretos';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/login.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/img/integrantes_grupo/pagina-de-login.png" type="image/x-icon" />
    <title>Login - DevConnect</title>
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
            <li><a href="cadastro.php">Cadastre-se</a></li>
            <li><a href="glossario.php">Glossário</a></li>
        </ul>
    </nav>
</header>

<?php if($erro_de_login): ?>
    <div class="alert" id="error-message"><?php echo $erro_de_login; ?></div>
<?php endif; ?>

<div id="form-container">
    <div id="form-inner">
        <h3>Faça Login</h3>
        <p>Faça login para se conectar!</p>
        <form id="login-form" method="post">
            <div class="input-group">
                <input type="email" name="email" id="user" class="input" required />
                <label for="email">Digite seu email</label>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="senha" class="input" required />
                <label for="senha">Digite sua senha</label>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <a href="cadastro.php" class="register-link">Cadastre-se</a>
    </div>
</div>
<!-- 
<script>
    setTimeout(() => {
        const errorMessage = document.getElementById('error-message');
        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    }, 5000);
</script> -->
</body>
</html>
