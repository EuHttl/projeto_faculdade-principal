<?php
session_start();
session_destroy();
if(!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}else{
    echo "Bem vindo $nome";
}
$nome = $_SESSION['nome'];
$s = $_SESSION['sobrenome'];

$exibir_mensagem = false;
if (!isset($_SESSION['mensagem_exibida'])) {
    $_SESSION['mensagem_exibida'] = true;
    $exibir_mensagem = true;
}
?>

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="shortcut icon" href="assets/svg/feed-rss.png" type="image/x-icon">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/feed.css">
        <title>DevConnect</title>
    </head>
    <body>

        <header>
            <nav class="navbar">
                <div id="brand">
                    <img src="assets/img/integrantes_grupo/Logo_sem_fundo.png" alt="DevConnect" class="logo" />
                </div>
                <ul>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a href="logout.php">Desconectar</a></li>
                    <li><a href="glossario.php">Glossário</a></li>
                </ul>
            </nav>
        </header>

        <main class="main">
            
            <div class="newPost">
                <div class="infoUser">
                    <div class="imgUser"><img src="assets/svg/homem.jpeg" alt=""></div>
                    <strong class="name"><?php echo "$nome  $s"?></strong>
                </div>
                <form action="" class="formPost">
                    <textarea name="textarea" placeholder="Digite Aqui"></textarea>
                    <div class="iconAndButton">
                        <div class="icons">
                            <button class="btnFileForm"><img src="assets/svg/img.svg" alt="Adicionar uma imagem"></button>
                            <button class="btnFileForm"><img src="assets/svg/gif.svg" alt="Adicionar um gif"></button>
                            <button class="btnFileForm"><img src="assets/svg/video.svg" alt="Adicionar um video"></button>
                        </div>

                        <button type="submit" class="btnSubmitForm">Publicar</button>
                    </div>
                </form>
            </div>

            <ul class="posts">
                <li class="post">
                    <div class="infoUserPost">
                        <div class="imgUserPost"><img src="assets/svg/garoto (2).png" alt=""></div>
                        <div class="nameAndHour">
                            <strong>Hyttalo Ivann</strong>
                            <p>21h</p>
                        </div>
                    </div>
                    <p>Eu prefiro muito mais HTML do que Python</p>

                    <div class="actionBtnPost">
                        <button type="button" class="filePost like"><img src="assets/svg/heart.svg" alt="Curtir">Curtir</button>
                        <button type="button" class="filePost comment"><img src="assets/svg/comment.svg" alt="Comentario">Comentário</button>
                        <button type="button" class="filePost share"><img src="assets/svg/share.svg" alt="Compartilhar">Compartilhar</button>
                    </div>
                </li>
            </ul>
            <ul class="posts">
                <li class="post">
                    <div class="infoUserPost">
                        <div class="imgUserPost"><img src="assets/svg/velhote.png" alt=""></div>
                        <div class="nameAndHour">
                            <strong>Mateus Tavares</strong>
                            <p>20h</p>
                        </div>
                    </div>
                    <p>Hoje terminei o projeto do professor Paulo Henrique</p>

                    <div class="actionBtnPost">
                        <button type="button" class="filePost like"><img src="assets/svg/heart.svg" alt="Curtir">Curtir</button>
                        <button type="button" class="filePost comment"><img src="assets/svg/comment.svg" alt="Comentario">Comentário</button>
                        <button type="button" class="filePost share"><img src="assets/svg/share.svg" alt="Compartilhar">Compartilhar</button>
                    </div>
                </li>
            </ul>
            <ul class="posts">
                <li class="post">
                    <div class="infoUserPost">
                        <div class="imgUserPost"><img src="assets/svg/garoto (1).png" alt=""></div>
                        <div class="nameAndHour">
                            <strong>Nicollas Torres</strong>
                            <p>18h</p>
                        </div>
                    </div>
                    <p>Rapaziada consegui passar na entrevista da google</p>

                    <div class="actionBtnPost">
                        <button type="button" class="filePost like"><img src="assets/svg/heart.svg" alt="Curtir">Curtir</button>
                        <button type="button" class="filePost comment"><img src="assets/svg/comment.svg" alt="Comentario">Comentário</button>
                        <button type="button" class="filePost share"><img src="assets/svg/share.svg" alt="Compartilhar">Compartilhar</button>
                </li>
            </ul>
            <ul class="posts">
                <li class="post">
                    <div class="infoUserPost">
                        <div class="imgUserPost"><img src="assets/svg/garoto.png" alt=""></div>
                        <div class="nameAndHour">
                            <strong>Vitor Brito</strong>
                            <p>19h</p>
                        </div>
                    </div>
                    <p>Manos vocês viram o pod do guanabara</p>

                    <div class="actionBtnPost">
                        <button type="button" class="filePost like"><img src="assets/svg/heart.svg" alt="Curtir">Curtir</button>
                        <button type="button" class="filePost comment"><img src="assets/svg/comment.svg" alt="Comentario">Comentário</button>
                        <button type="button" class="filePost share"><img src="assets/svg/share.svg" alt="Compartilhar">Compartilhar</button>
                </li>
            </ul>
            <ul class="posts">
                <li class="post">
                    <div class="infoUserPost">
                        <div class="imgUserPost"><img src="assets/svg/homem.jpeg" alt=""></div>
                        <div class="nameAndHour">
                            <strong>Guilherme Giacomello</strong> 
                            <p>17h</p>
                        </div>
                    </div>
                    <p>Gente terminei um bootcamp muito bom sobre c#</p>

                    <div class="actionBtnPost">
                        <button type="button" class="filePost like"><img src="assets/svg/heart.svg" alt="Curtir">Curtir</button>
                        <button type="button" class="filePost comment"><img src="assets/svg/comment.svg" alt="Comentario">Comentário</button>
                        <button type="button" class="filePost share"><img src="assets/svg/share.svg" alt="Compartilhar">Compartilhar</button>
                </li>
            </ul>
        </main>
    </body>
</html>