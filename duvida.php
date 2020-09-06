<?php
    //verifica se existe conexão com bd; caso não tenta, cria uma nova
    $conexao = mysqli_connect('localhost','root','123', 'calendariovacinal') //porta, usuário, senha
    or die("Erro na conexão com banco de dados"); //caso não consiga conectar mostra a mensagem de erro mostrada na conexão

    //$select_db = mysqli_select_db('calendariovacinal'); //seleciona o banco de dados

    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
    $nome = $_POST['nome']; 
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $assunto = $_POST['assunto'];

    $string_sql = "INSERT INTO duvidas (nome, email, assunto, mensagem) VALUES ('$nome','$email','$assunto','$mensagem')"; //String com consulta SQL da inserção

    mysqli_query($conexao, $string_sql); //Realiza a consulta

    if(mysqli_affected_rows($conexao) == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
      //echo '<script type="javascript">alert("Mensagem Enviada")</script>' ;
      echo "<p>Mensagem Enviada</p>";
      echo '<a href="duvida.html">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro
        // header("Location : duvida.html");
        // die();
    } else {
        echo "Erro, não foi possível inserir no banco de dados";
    }

    mysqli_close($conexao); //fecha conexão com banco de dados 
?>