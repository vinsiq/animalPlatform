<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION))
    session_start();

// set a max file size for the html upload form
$max_file_size = 262144; // 2Mb in bytes
?>

<div class="container main-content">
    <div class="centerfy">
        <!-- Formulário de Login -->
        <form action="php/upload.php" enctype="multipart/form-data" method="post">
            <h2 class="centerfy">Cadastro de animal</h2>
            <hr>

            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>">

            <div class="form-group">
                <label for="file">Foto:</label>
                <input id="file" type="file" name="imagem" class="center-block" required="">
            </div> <!-- /form-group -->

            <div class="form-group" >
                <label for="cbTipo">Tipo:</label><br>
                <select id="cbTipo" name="tipo" class="form-control form-control-center" >
                    <option value="C">Cachorro</option>
                    <option value="G">Gato</option>
                </select>
            </div> <!-- /form-group -->

            <div class="form-group">
                <label for="txtRaca">Raça:</label><br>
                <input type="text" id="txtRaca" name="raca" class="form-control form-control-center" placeholder="Raça" required=""/>
            </div> <!-- /form-group -->

            <div class="form-group" >
                <label for="cbSexo">Sexo:</label><br>
                <select id="cbSexo" name="sexo" class="form-control form-control-center">
                    <option value="M">Macho</option>
                    <option value="F">Fêmea</option>
                </select>
            </div> <!-- /form-group -->

            <div class="form-group">
                <label for="txArDescricao">Descrição:</label><br>
                <textarea id="txArDescricao" rows=4 name="descricao" class="form-control form-control-center" placeholder="Descrição" required=""></textarea>
            </div> <!-- /form-group -->

            <div class="form-group">
                <button class="btn btn-primary" type="submit" id="submit" name="submit">Cadastrar</button>
            </div> <!-- /form-group -->
        </form>
    </div>
</div>