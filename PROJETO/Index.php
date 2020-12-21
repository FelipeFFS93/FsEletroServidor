<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Full Stack Eletro</title>
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
    </div>

    <div class="container">
      <div class="jumbotron bg-light">
          <h2 class="mb-4">Seja bem vindo(a)!</h2>
          <p>Aqui nessa loja, <em>programadores tem desconto</em> nos produtos para sua casa!</p>
      </div>
    </div>
    <hr>

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