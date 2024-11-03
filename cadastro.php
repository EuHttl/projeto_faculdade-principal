<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $sexo = $_POST['sexo'];
    $curso = $_POST['curso'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $usuarios = file('usuarios.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach( $usuarios as $usuario ) {
    list($e, $p, $n, $s) = explode(';', $usuario);
        if($e === $email) {
            echo 'Email já cadastrado';
            exit;
        }
    }
  
    file_put_contents('usuarios.txt',"$email;$password;$nome;$sobrenome\n", FILE_APPEND);
    echo "Cadastro realizado com sucesso!";
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="assets/img/integrantes_grupo/formulario.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="css/cadastro.css">
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
                <li><a href="glossario.php">Glossário</a></li>
            </ul>
        </nav>
    </header>
    <section class="form-container">
        <div class="container">
            <form method="POST">
                <h1>Cadastre-se</h1>
                <p>Preencha o formulário abaixo para se cadastrar!</p>

                <div class="input-group-row">
                    <div class="input-group">
                        <input type="text" name="nome" id="nome-box" class="input" required autocomplete="off">
                        <label for="nome-box">Digite seu nome*</label>
                    </div>
    
                    <div class="input-group">
                        <input type="text" name="sobrenome" id="nome-box" class="input" required autocomplete="off">
                        <label for="nome-box">Digite seu sobrenome*</label>
                    </div>
                </div>

                <div class="input-group-row">
                    <div class="input-group">
                        <input type="tel" name="telefone" id="tel-box" class="input" placeholder="(xx)xxxxx-xxxx" maxlength="15" required autocomplete="off">
                        <label for="tel-box">Digite seu telefone*</label>
                    </div>
    
                    <div class="input-group">
                        <input type="date" id="date-box" name="data_nascimento" min="1930-01-01" max="2024-04-14" required autocomplete="off">
                        <label for="tel-box">Data de nascimento*</label>
                    </div>
                </div>

                <div class="input-group-row">
                    <div class="input-group">
                        <label>Sexo*:</label>
                        <br>
                        <div>
                            <input type="radio" name="sexo"  checked value="M"> Masculino
                            <input type="radio" name="sexo" value="F"> Feminino
        
                        </div>
                    </div>
    
                    <div class="input-group">
                        <label for="curso">Curso*</label>
                        <select id="curso" name="curso" class="input" required>
                            <option value="" disabled selected>Selecione seu curso</option>
                            <option value="Analise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
                            <option value="Banco de Dados">Banco de Dados</option>
                            <option value="Ciencias da Computacao">Ciências da Computação</option>
                            <option value="Engenharia da Computacao">Engenharia da Computação</option>
                            <option value="Engenharia de Telecomunicacoes">Engenharia de Telecomunicações</option>
                            <option value="Gestao da Tecnologia da Informacao">Gestão da Tecnologia da Informação</option>
                            <option value="Informatica">Informática</option>
                            <option value="Redes de Computadores">Redes de Computadores</option>
                        </select>
                    </div>
                </div>
    
                <div class="input-group-row">
                    <div class="input-group">
                        <input type="email" name="email" id="email-box" class="input" required >
                        <label for="email-box">Digite seu e-mail*</label>
                    </div>
    
                    <div class="input-group">
                        <input type="password" name="password" id="password-box" class="input" required autocomplete="off">
                        <label for="email-box">Digite sua senha*</label>
                    </div>
                </div>
                
                <div class="btn-container">
                    <input type="submit" value="Cadastrar-se" class="btn">
                </div>
            </form>
            <a href="login.php" class="register-link">Já possui cadastro? Faça login</a>
        </div>
    </section>    
</body>
</html>