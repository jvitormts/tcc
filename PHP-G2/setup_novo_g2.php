<?php
    echo "<h2>Criação de BD e Tabelas</h2>";

    // conectar ao MySql
    require('conectar.php');


    // Verificar o Banco de Dados etec_tcc
    if ($conexao->select_db("etec_tcc"))
	   { echo "Banco de dados etec_tcc ja existe!";
           $conexao->select_db("etec_tcc") or die ("<br>Falha na seleção do Bando de Dados etec_tcc"); }
    else	   
	   { mysqli_query($conexao,"CREATE DATABASE etec_tcc") or die ("<br>Falha na Criação do BD etec_tcc");
         mysqli_select_db($conexao,"etec_tcc") or die ("<br>Falha na seleção do Bando de Dados etec_tcc");
		 echo "<br>Banco de dados etec_tcc criado com sucesso!"; }

    //Apagar tabelas
	    mysqli_query($conexao,"DROP TABLE g2_anunciantes");
		mysqli_query($conexao,"DROP TABLE g2_veiculos");
        
	// --- Criar a tabela anunciantes
    mysqli_query($conexao,"CREATE TABLE g2_anunciantes (id_cpf varchar(011) NOT NULL,
                                              nome   varchar(080) NOT NULL,
                                              email  varchar(080) NOT NULL,
                                              numcel varchar(020) NOT NULL,
                                              senha  varchar(030) NOT NULL,
                                              UNIQUE KEY (id_cpf, email))
                                              COLLATE=utf8_general_ci
                                              ENGINE=InnoDB")
										      or die ("<br>Falha na criação da tabela g2_anunciantes");
    echo "<br>Tabela g2_anunciantes Criada";

    // --- Criar a tabela veiculos
    mysqli_query($conexao,"CREATE TABLE g2_veiculos (id_placa   varchar(010) NOT NULL,
	                                       id_cpf     varchar(011) NOT NULL,
                                           marca      varchar(040) NOT NULL,
                                           modelo     varchar(040) NOT NULL,
                                           anofab     varchar(004) NOT NULL,
                                           anomod     varchar(004) NOT NULL,
                                           preco      decimal(5,2),
	                                         situacao   varchar(001),
                                           foto       varchar(100),
                                           PRIMARY KEY (id_placa),
                                           FOREIGN KEY (id_cpf) REFERENCES g2_anunciantes (id_cpf))
                                           COLLATE=utf8_general_ci
                                           ENGINE=InnoDB")
					                       or die ("<br>Falha na criação da tabela g1_veiculos");
    echo "<br>Tabela g2_veiculos Criada";

?>







