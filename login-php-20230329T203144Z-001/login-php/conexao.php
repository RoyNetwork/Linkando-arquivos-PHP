<?php
define('HOST', 'db4free.net:3306');
define('USUARIO', 'roy_network');
define('SENHA', 'lossantossanfierro');
define('DB', 'super_choque');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');