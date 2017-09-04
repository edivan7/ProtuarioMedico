<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//include"conexaoPM.php";
//include 'validar.php';

 $con = new conexaoPM('localhost', 'root', '', 'prontuariomedico'); // aqui é estanciado a conecção
  $con->conectar(); // aqui chama a function da classe conexao
  
$con = mysql_connect("localhost","root","") //porta, usuário, senha
    or die("Erro na conexão com banco de dados"); //caso não consiga conectar mostra a mensagem de erro mostrada na conexão
    
    $select_db = mysql_select_db("prontuariomedico"); //seleciona o banco de dados
        
$NOME_COMPLETO =$_POST['nome']; 
$ENDERECO =$_POST['endereco'];  
$BAIRRO =$_POST['bairro'];  
$CIDADE =$_POST['cidade'];  
$ESTADO =$_POST['estado']; 
$CEP =$_POST['cep']; 
$COMPLEMENTO =$_POST['complemento']; 
$CPF =$_POST['cpf'];  
$RG =$_POST['rg']; 
$DATA_NASCIMENTO =$_POST['nascimento']; 
$NATURALIDADE =$_POST['naturalidade'];  
$NACIONALIDADE =$_POST['nacionalidade'];  
$E­MAIL =$_POST['email'];  
$TELEFONES =$_POST['telefone'];  
$CELULAR =$_POST['celular'];  
$TRABALHO =$_POST['trabalho'];  
$FK_ESP =$_POST['especialidade'];  
$CRM =$_POST['crm']; 
//
//mysql_query($sql,$con);
//
//$sql = "INSERT INTO medico  VALUES ('$NOME_COMPLETO','$ENDERECO','$BAIRRO','$CIDADE','$ESTADO','$CEP','$COMPLEMENTO','$CPF','$RG','$DATA_NASCIMENTO','$NATURALIDADE','$NACIONALIDADE','$E­MAIL','$TELEFONES','$CELULAR','$TRABALHO','$FK_ESP','$CRM','$PK')";
// if(mysql_affected_rows() == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
//        echo "<p>Cadastro feito com sucesso</p>";
//        echo '<a href="telaPrincipal.php">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro
//    } else {
//        echo "Erro, não possível inserir no banco de dados";
//    }
//     
//    mysql_close($con); //fecha conexão com banco de dados 
//
//if($con->query($sql)===TRUE) {
//    echo 'Medico cadastrado com sucesso...';
//}else{
//    echo "erro no cadastro do medico".$sql . "<br>" .$con->error;
//    
//}
//        
//$con->close();

    
    




mysql_query($sql,$con);

$sql = "INSERT INTO medico  VALUES ('$NOME_COMPLETO','$ENDERECO','$BAIRRO','$CIDADE','$ESTADO','$CEP','$COMPLEMENTO','$CPF','$RG','$DATA_NASCIMENTO','$NATURALIDADE','$NACIONALIDADE','$E­MAIL','$TELEFONES','$CELULAR','$TRABALHO','$FK_ESP','$CRM','$PK')";
 if(mysql_affected_rows() == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo "<p>Cadastro feito com sucesso</p>";
        echo '<a href="telaPrincipal.php">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro
    } else {
        echo "Erro, não possível inserir no banco de dados";
    }
     mysql_close($con);