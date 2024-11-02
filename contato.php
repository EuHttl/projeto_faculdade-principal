<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="assets/img/integrantes_grupo/formulario.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="css/contato.css">
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
    <section class="form-container">
        <div class="container">
            <form action="resposta.php" method="POST">
                <h1>Entre em contato conosco</h1>
                <p>Preencha o formulário abaixo para que entre em contato com a gente!</p>
                
                <div class="input-group">
                    <input type="text" id="nome-box" name="nome" class="input" required autocomplete="off">
                    <label for="nome-box">Seu nome*</label>
                </div>
    
                <div class="input-group">
                    <input type="email" id="email-box" name="email" class="input" required autocomplete="off">
                    <label for="email-box">Seu e-mail*</label>
                </div>
    
                <div class="input-group">
                    <input type="tel" maxlength="15" placeholder="(xx)xxxxxxxxx" id="tel-box" name="telefone" class="input" required autocomplete="off">
                    <label for="tel-box">Seu telefone*</label>
                </div>
    
                <div class="input-group">
                    <textarea id="text" class="input" name="mensagem" required placeholder="Digite sua mensagem aqui!"></textarea>
                </div>
                
                <div class="btn-container">
                    <input type="submit" value="Enviar" class="btn">
                </div>
            </form>
        </div>
    </section>    
</body>
</html>