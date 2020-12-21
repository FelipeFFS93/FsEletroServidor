<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "full_stack_eletro";

    $tabela = $_GET['table'];

    // Criando a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificando a conexão
    if (!$conn) {
        die("A conexão ao BD falhou: " . mysqli_connect_error());
    }

    setlocale(LC_MONETARY, 'pt_BR');
    
    $sql = "select * from $tabela";
    $result = $conn->query($sql);

    

    print_r( json_encode( $result->fetch_all(MYSQLI_ASSOC)) );

    mysqli_close($conn);
            
?>