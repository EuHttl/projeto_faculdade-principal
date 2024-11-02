<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="assets/img/integrantes_grupo/formulario.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>
    <section class="form-container">
        <div class="container">
            <form action="index.php">
                <h1>Entre em contato</h1>
                <p>Preencha o formulário abaixo e entraremos em contato com você</p>
                <div class="inupt-single">
                    <input type="text" name="" id="nome-box" class="input"
                    autocomplete="off" required>
                    <label for="nome-box">Seu nome completo</label>
                </div>

                <div class="inupt-single">
                    <input type="text" name="" id="email-box" class="input"
                    autocomplete="off" required>
                    <label for="email-box">Seu e-mail</label>
                </div>

                <div class="inupt-single">
                    <input type="text" name="" id="tel-box" class="input"
                    autocomplete="off" required>
                    <label for="tel-box">Seu telefone</label>
                </div>
                <div class="inupt-single">
                    <input type="text" name="" id="text" class="input"
                    autocomplete="off" required>
                    <textarea name="text" id="" placeholder="Digite aqui"></textarea>
                </div>
                <div class="btn"><input type="submit" value="Enviar"></div>

            </form>
        </div>
    </section>
</body>
</html>