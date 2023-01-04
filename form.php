<?php
    if(isset($_POST['submit'])){
       /* 
            print_r($_POST['nome']);
            print_r('<br>');
            print_r($_POST['email']);
            print_r('<br>');
            print_r($_POST['telefone']);
            print_r('<br>');
            print_r($_POST['genero']);
            print_r('<br>');
            print_r($_POST['data_nascimento']);
            print_r('<br>');
            print_r($_POST['cidade']);
            print_r('<br>');
            print_r($_POST['estado']);
            print_r('<br>');
            print_r($_POST['endereco']);
            print_r('<br>');
        */

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conection, 
                            "INSERT INTO users(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco)
                             VALUES ('$nome', '$email', '$telefone', '$genero', '$data_nascimento', '$cidade', '$estado', '$endereco')"
                        );

    }
?>
    
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | Lucas Matias </title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />
</head>
<body>
    <div class="box">
        <form action="form.php" method="POST">
            <fieldset> 

                <legend><b>Formulário de Clientes</b></legend> 
                <br>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required> <!-- O elemento 'required' indica que a entrada do usuário é obrigatória' -->
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div> 
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>

                <p><b>Sexo:</b></p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br><br>

                <p></p>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>

                <p></p>
                <div class="inputBox" class="labelInput">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox" class="labelInput">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox" class="labelInput">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>

                <input type="submit" name="submit" id="submit"> 

            </fieldset>
        </form>
    </div>
</body>
</html>