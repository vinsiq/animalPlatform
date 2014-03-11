<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION))
    session_start();
?>

<div class="container main-content">
    <div class="centerfy"> 
        <h2>Módulo de administração</h2>
    </div>
    <hr>
    <p>Bem-vindo, <b>
            <?php
            echo $_SESSION['UsuarioNome'];
            ?>
        </b>!
    </p>
</div>