<?php
 
    echo "<h2>Criacao de Banco de Dados e Tabelas</h2>";

    // --- Conexão com o MySql
    $conexao = mysql_connect("localhost","root","") or die ("<br>Falha na Conexão com o MySql");
			   
	// --- Deletar o Banco de Dados etec_tcc
    $deletar_bd = "DROP DATABASE etec_tcc";
    if (mysql_query($deletar_bd))
	   { echo "<p> Banco de Dados etec_tcc deletado!";}
    else
	   { echo "<p> Banco de Dados etec_tcc ainda nao existe!";}		
	
    // --- Criar o Banco de Dados etec_tcc
    mysql_query("CREATE DATABASE etec_tcc") or die ("<br>Falha na Criação do BD");
    echo "<br>Banco de Dados etec_tcc Criado";

    // --- Selecionar o Banco de Dados etec_tcc
    mysql_select_db("etec_tcc") or die ("<br>Falha na seleção do Bando de Dados etec_tcc");

	// --- Criar a tabela anunciantes
    mysql_query("CREATE TABLE g2_anunciantes (id_cpf varchar(011) NOT NULL,
                                              nome   varchar(080) NOT NULL,
                                              email  varchar(080) NOT NULL,
                                              numcel varchar(020) NOT NULL,
                                              senha  varchar(030) NOT NULL,
                                              UNIQUE KEY (id_cpf))
                                              COLLATE=utf8_general_ci
                                              ENGINE=InnoDB")
										      or die ("<br>Falha na criação da tabela g2_anunciantes");
    echo "<br>Tabela g2_anunciantes Criada";

    // --- Criar a tabela veiculos
    mysql_query("CREATE TABLE g2_veiculos (id_placa   varchar(010) NOT NULL,
	                                       id_cpf     varchar(011) NOT NULL,
                                           marca      varchar(040) NOT NULL,
                                           modelo     varchar(040) NOT NULL,
                                           anofab     varchar(004) NOT NULL,
                                           anomod     varchar(004) NOT NULL,
                                           preco      decimal(5,2),
	                                       situacao   varchar(001),
                                           PRIMARY KEY (id_placa),
                                           FOREIGN KEY (id_cpf) REFERENCES g2_anunciantes (id_cpf))
                                           COLLATE=utf8_general_ci
                                           ENGINE=InnoDB")
					                       or die ("<br>Falha na criação da tabela g1_veiculos");
    echo "<br>Tabela g2_veiculos Criada";
	

	
	

	
?>







