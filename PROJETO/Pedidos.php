<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "full_stack_eletro";

    // Criando a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificando a conexão
    if (!$conn) {
        die("A conexão ao BD falhou: " . mysqli_connect_error());
    }

    if(isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['pedido'])){
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $pedido = $_POST['pedido'];

        $sql = "insert into pedidos (nome, endereco, pedido) values ('$nome', '$endereco', '$pedido')";
        $result = $conn->query($sql);
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contato</title>
    <?php
    echo '<link rel="stylesheet" href="../CSS/Estilo.css">';
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>

<body>
    <div class="container-fluid">
   <!-- Inicio do menu -->
        <?php
            include_once('Menu.html');
        ?>
   <!-- Fim do menu -->

        <header>
            <h2 class="display-5">Pedidos</h2>
    <hr>
        </header>
    </div>

    <div class="container">
        <form method="post" action="">
            <div class="form-group mx-5 texte-center">
                <h4>Nome: </h4>
                <input class="inputNome" type="text" name="nome">
                <h4>Endereço: </h4>
                <input class="inputNome" name="endereco" type="textarea"><br>
                <h4>Pedido: </h4>
                <input class="textoArea" name="pedido" type="textarea"><br>
                <input class="enviar bg-danger mt-3 btn-lg" type="submit" value="Enviar">
            </div>
        </form>
    </div>

    <div class="container">
    <?php
        $sql = "select * from pedidos";
        $result = $conn->query($sql);

    if($result->num_rows > 0){ 
        while($rows = $result->fetch_assoc()){
            echo "Data: ", $rows['data'], "<br>";
            echo "Nome: ", $rows['nome'], "<br>";
            echo "Endereço: ", $rows['endereco'], "<br>";
            echo "Pedido: ", $rows['pedido'], "<br>";
            echo "<hr>";
         }
    }
        else {
            echo "Nenhum comentário ainda!";
    }
    ?>
    </div>

    <div class="container">  
        <footer class="divPagamentos">
            <h4 class="text-danger">
            Formas de Pagamento!
            </h4>
            <img class="imgPagamentos" src="../IMG/pagamentos-bandeiras-01.png" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>