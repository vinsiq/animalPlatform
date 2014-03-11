<?php
//header ('Content-type: text/html; charset=UTF-8');
//header("Location: partials/register.html");
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION))
    session_start();

//$nivel_necessario = 2;

// Verifica se não há a variável da sessão que identifica o usuário
//if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
//    // Destrói a sessão por segurança
//    session_destroy();
//    // Redireciona o visitante de volta pro login
//    header("Location: index.html");
//    exit;
//}
?>

<div class="container main-content">
    <div class="centerfy"> 
        <h2>Módulo de excluir animais</h2>
    </div>
    <hr>
    <p>Bem-vindo, <b><?php echo $_SESSION['UsuarioNome']; ?></b>!</p>
</div>