<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require ('./conexaoPM.php');

//include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
//protegePagina(); // Chama a função que protege a página


$con = new conexaoPM('localhost','root','','prontuariomedico'); // aqui é estanciado a conecção
$con->conectar();                         // aqui chama a function da classe conexao

        ?>
        <body>
        
            <div>
                <nav class="menu">
        <ul>
            <li><a href="pontMedicPrincipal.html">CADASTRO DE MEDICO</a></li>
            <li><a href="">CADATRO DE PACIENTE</a></li>
            <li><a href="">AGENDAMENTO DE PACIENTE</a></li>
        </ul>
                    <ul>
                        <li><a href="atendMedico.html">ATENDIMENTO MEDICO</a></li>                
                    
               
           
                        
            </ul>
       
    </nav>
            </div>  
       
<!--            <div>
                <table>
                <tr>
                    <td align='center'><input type='button' value='CADASTRO DE MEDICO'> <a href="prontMedMedico.html"></a> </td>
              
                <td align='center'> <input type="submit" value="CADASTRO DE PACIENTES" name="CADPAC" /></td>
                 <td align='center'> <input type="submit" value="AGENDAMENTO DE PACIENTE" name="AGEPAC" /></td>
                  <td align='center'> <input type="submit" value="ATENDIMENTO MEDICO" name="ATEMED" /></td>
                </tr>
                </table>
            </div>-->
        </body>