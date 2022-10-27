<?php

    $username = "root";
    $password = "uma_senha_muito_maneira";

    $pdo = new PDO('mysql:host=localhost;dbname=controle_conquistas', $username, $password);

    $pdo->exec("CREATE TABLE jogos(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY, titulo VARCHAR(50), genero VARCHAR(50));");
    $pdo->exec("CREATE TABLE conquistas(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY, titulo VARCHAR(50), descricao VARCHAR(500), id_jogo INTEGER, FOREIGN KEY(id_jogo) REFERENCES jogos(id));");