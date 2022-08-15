<?php
session_start();
require_once('Academia.php');

if (isset($_SESSION['usuario'])) {
    header('Location: /GYM/index.php');
    return;
}