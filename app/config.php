<?php
// ativa a exibição de erros
error_reporting(E_ALL);

$BaseURL = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . preg_replace('@/+$@', '', trim(dirname($_SERVER['SCRIPT_NAME']), '\\'));

// DATABASE
const DB_HOST = 'localhost';  // server
const DB_USER = 'root';       // user
const DB_PASS = '';           // password
const DB_NAME = 'pap';        // database name

// define layout inicial
$Layout = 'default';

// define rotas públicas (pode ser acessadas sem login)
$PublicRoutes = ['login', 'registration'];

// define request method
$Request = $_SERVER['REQUEST_METHOD'];

// inicia a sessão
session_start();

// carrega os helpers
require 'helpers/functions.php';

// conecta o sistema ao database
require 'db.php';

// carrega o gerenciador de rotas
require 'router.php';
