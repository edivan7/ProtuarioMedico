<html>
    <!--<head>
        <title>Sistems Prontuario Medico</title>
        <link rel="stylesheet" type="text/css" href="/cssPM/CssPM.css">;
     <a href="../cssPM/CssPM.css"></a>;
    </head>-->
    <link href="../cssPM/CssPM.css" rel="stylesheet">
    <style>
        .error {color: #FF0000;}
    </style>

    <?php
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    require_once ("./conexaoPM.php");

  $con = new conexaoPM('localhost', 'root', '', 'prontuariomedico'); // aqui é estanciado a conecção
  $con->conectar(); // aqui chama a function da classe conexao
  ?>

    <body>

        <div class="container">
            <h1>Faça o login no Prontruário Medico Eletronico</h1>
            <fieldset class="field">
                <form class="form1" method="post" action="validar.php">

                    <input class="log" type="text" name="login" placeholder="Usuário">


                    <input class="log" type="password" name="senha" placeholder="Password">

                    <button type="submit" id="login-button">Login</button>
                </form>
            </fieldset>
        </div>


    </body>
</html>